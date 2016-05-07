<?php

//Хранилище объявлений
class AdsStore
{
    private static $instance=NULL;
    private $posts=[];
    private $masters = [];
    private $partners = [];
    
    public static function instance()
    {
        if(self::$instance === NULL) self::$instance = new AdsStore();
        return self::$instance;
    }
    
    private function addAds(Ads $post)
    {
        if(!($this instanceof AdsStore)) die('AdsStore');
        $this->posts[$post->getId()] = $post;
    }
    
    private function addMasters(Masters $post)
    {
        if(!($this instanceof AdsStore)) die('AdsStore');
        $this->masters[$post->getId()] = $post;
    }
    
    private function addPartners(Partners $post)
    {
        if(!($this instanceof AdsStore)) die('AdsStore');
        $this->partners[$post->getId()] = $post;
    }
    
    private function deleteAds($id)
    {
        global $mysqli;
        
        if ($id != null)
        {
            $mysqli->query("DELETE FROM ?_posts WHERE post_id=?d", $id);
            return TRUE;
        }
    }
    
    private function deleteMasters($id)
    {
        global $mysqli;
        
        if ($id != null)
        {
            $mysqli->query("DELETE FROM ?_masters WHERE id=?d", $id);
            return TRUE;
        }
    }
    
    private function deletePartners($id)
    {
        global $mysqli;
        
        if ($id != null)
        {
            $mysqli->query("DELETE FROM ?_partners WHERE id=?d", $id);
            return TRUE;
        }
    }
    
    function errorHandler(Ads $ad, $error = null)
    {
        global $smarty;
        
        foreach ($ad->getObjVars() as $key => $value)//Зелёный цвет заполненным полям
        {
            $smarty->assign($key, $value);
            if(strlen($value)) $smarty->assign('input_'.$key, 'has-success');
        }
        
        foreach ($error as $value)//Вывод сообщения полям из массива ошибок
        {
            $smarty->assign('error_'.$value, 'show');
            $smarty->assign('input_'.$value, 'has-error');
        }
    }

    public function getAllAdsFromDB()
    {
        global $mysqli;
        
        $all = $mysqli->select("SELECT * FROM ?_posts");
        $masters = $mysqli->select("SELECT * FROM ?_masters");
        $partners = $mysqli->select("SELECT * FROM ?_partners");
        
        foreach ($all as $value)
        {
            $post = new Ads($value);
            self::addAds($post);
        }
        
        foreach ($masters as $value)
        {
            $post = new Masters($value);
            self::addMasters($post);
        }
        
        foreach ($partners as $value)
        {
            $post = new Partners($value);
            self::addPartners($post);
        }
        
        if (filter_input(INPUT_GET, 'delete_ads', FILTER_VALIDATE_INT) >= 0)
        {
            self::deleteAds($_GET['delete_ads']);
        }
        
        if (filter_input(INPUT_GET, 'delete_masters', FILTER_VALIDATE_INT) >= 0)
        {
            self::deleteMasters($_GET['delete_masters']);
        }
        
        if (filter_input(INPUT_GET, 'delete_partners', FILTER_VALIDATE_INT) >= 0)
        {
            self::deletePartners($_GET['delete_partners']);
        }
        return self::$instance;
    }

    public function prepareForOut()
    {
        global $smarty;
        
        if (filter_input(INPUT_GET, 'ads', FILTER_VALIDATE_INT) > 0 || filter_input(INPUT_GET, 'edit_ads', FILTER_VALIDATE_INT) > 0)//Во время просмотра/редактирования
        {
            if ((isset($_GET['ads'])) || (isset($_GET['edit_ads']) && empty($this->posts[$_GET['edit_ads']])))
            {
                echo "Объявление отсутствует <a href='index.php'>назад</a>";
                exit;
            }
            else
            {
                (isset($_GET['ads'])) ? $fillAds = $this->ads[$_GET['ads']] : $fillAds = $this->posts[$_GET['edit_ads']];
                foreach ($fillAds->getObjVars() as $key => $value)//Заполнение полей формы
                {
                    $smarty->assign($key, $value);
                }
            }
        }
        
        if (filter_input(INPUT_GET, 'masters', FILTER_VALIDATE_INT) > 0 || filter_input(INPUT_GET, 'edit_masters', FILTER_VALIDATE_INT) > 0)//Во время просмотра/редактирования
        {
            if ((isset($_GET['masters'])) || (isset($_GET['edit_masters']) && empty($this->masters[$_GET['edit_masters']])))
            {
                echo "Объявление отсутствует <a href='index.php'>назад</a>";
                exit;
            }
            else
            {
                (isset($_GET['masters'])) ? $fillAds = $this->ads[$_GET['ads']] : $fillAds = $this->masters[$_GET['edit_masters']];
                foreach ($fillAds->getObjVars() as $key => $value)//Заполнение полей формы
                {
                    $smarty->assign($key, $value);
                }
            }
        }
        
        if (filter_input(INPUT_GET, 'partners', FILTER_VALIDATE_INT) > 0 || filter_input(INPUT_GET, 'edit_partners', FILTER_VALIDATE_INT) > 0)//Во время просмотра/редактирования
        {
            if ((isset($_GET['partners'])) || (isset($_GET['edit_partners']) && empty($this->partners[$_GET['edit_partners']])))
            {
                echo "Объявление отсутствует <a href='index.php'>назад</a>";
                exit;
            }
            else
            {
                (isset($_GET['partners'])) ? $fillAds = $this->ads[$_GET['ads']] : $fillAds = $this->partners[$_GET['edit_partners']];
                foreach ($fillAds->getObjVars() as $key => $value)//Заполнение полей формы
                {
                    $smarty->assign($key, $value);
                }
            }
        }
        
        if(isset($this->posts))
        {
            foreach ($this->posts as $post)
            {
                $post = get_object_vars($post);
                $post_title[]= $post;
            }
            $smarty->assign('posts_title', $post_title);
        }
        
        if(isset($this->masters))
        {
            foreach ($this->masters as $post)
            {
                $post = get_object_vars($post);
                $post_master[]= $post;
            }
            $smarty->assign('posts_master', $post_master);
        }
        
        if(isset($this->partners))
        {
            foreach ($this->partners as $post)
            {
                $post = get_object_vars($post);
                $post_partner[]= $post;
            }
            $smarty->assign('posts_partner', $post_partner);
        }
        
        return self::$instance;    
    }
    
    public function runAdminPost()
    {
        global $smarty;

        self::getAllAdsFromDB();
        self::prepareForOut();
        
        
        $smarty->display('admin_header.tpl');
        
        if (isset($_GET['new_post'])|| isset($_GET['edit_ads'])) {
            $smarty->display('admin_post.tpl');
        } elseif (isset($_GET['new_master']) || isset($_GET['edit_masters'])) {
            $smarty->display('admin_masters.tpl');
        } elseif (isset($_GET['new_partner'])|| isset($_GET['edit_partners'])) {
            $smarty->display('admin_partners.tpl');
        } else {
            $smarty->display('admin_main.tpl');
        }
        
        $smarty->display('admin_footer.tpl');
    }
}