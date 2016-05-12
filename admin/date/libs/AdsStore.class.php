<?php

//Хранилище объявлений
class AdsStore
{
    private static $instance=NULL;
    private $posts= array();
    private $masters = array();
    private $partners = array();
    private $header='';
    
    public static function instance()
    {
        if(self::$instance === NULL) self::$instance = new AdsStore();
        return self::$instance;
    }
    
    private function addAds(Ads $post)
    {
        if(!($this instanceof AdsStore)) die();
        $this->posts[$post->getId()] = $post;
    }
    
    private function addMasters(Masters $post)
    {
        if(!($this instanceof AdsStore)) die();
        $this->masters[$post->getId()] = $post;
    }
    
    private function addPartners(Partners $post)
    {
        if(!($this instanceof AdsStore)) die();
        $this->partners[$post->getId()] = $post;
    }

    private function addHeader(Header $post)
    {
        if(!($this instanceof AdsStore)) die();
        $this->header[$post->getId()] = $post;
    }
    
    private function deleteAds($id)
    {
        global $mysqli;
        
        if ($id != null)
        {
            unset($this->posts[$id]);
            $mysqli->query("DELETE FROM ?_posts WHERE post_id=?d", $id);
            return TRUE;
        }
    }
    
    private function deleteMasters($id)
    {
        global $mysqli;
        
        if ($id != null)
        {
            unset($this->masters[$id]);
            $mysqli->query("DELETE FROM ?_masters WHERE master_id=?d", $id);
            return TRUE;
        }
    }
    
    private function deletePartners($id)
    {
        global $mysqli;
        
        if ($id != null)
        {
            unset($this->partners[$id]);
            $mysqli->query("DELETE FROM ?_partners WHERE partner_id=?d", $id);
            return TRUE;
        }
    }

    public function getAllAdsFromDB()
    {
        global $mysqli;
        
        $all = $mysqli->select("SELECT * FROM ?_posts order by post_id");
        $masters = $mysqli->select("SELECT * FROM ?_masters order by master_id");
        $partners = $mysqli->select("SELECT * FROM ?_partners order by partner_id");
        $header = $mysqli->select("SELECT * FROM ?_header");
        
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

        foreach ($header as $value)
        {
            $post = new Header($value);
            self::addHeader($post);
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
        
        if (filter_input(INPUT_GET, 'edit_ads', FILTER_VALIDATE_INT) > 0)//Во время просмотра/редактирования
        {
            if (isset($_GET['edit_ads']) && empty($this->posts[$_GET['edit_ads']]))
            {
                echo "Объявление отсутствует <a href='index.php'>назад</a>";
                exit;
            }
            else
            {
                $fillAds = $this->posts[$_GET['edit_ads']];
                foreach ($fillAds->getObjVars() as $key => $value)//Заполнение полей формы
                {
                    $smarty->assign($key, $value);
                }
            }
        }
        
        if (filter_input(INPUT_GET, 'edit_masters', FILTER_VALIDATE_INT) > 0)//Во время просмотра/редактирования
        {
            if (isset($_GET['edit_masters']) && empty($this->masters[$_GET['edit_masters']]))
            {
                echo "Объявление отсутствует <a href='index.php'>назад</a>";
                exit;
            }
            else
            {
                $fillAds = $this->masters[$_GET['edit_masters']];
                foreach ($fillAds->getObjVars() as $key => $value)//Заполнение полей формы
                {
                    $smarty->assign($key, $value);
                }
            }
        }
        
        if (filter_input(INPUT_GET, 'edit_partners', FILTER_VALIDATE_INT) > 0)//Во время просмотра/редактирования
        {
            if (isset($_GET['edit_partners']) && empty($this->partners[$_GET['edit_partners']]))
            {
                echo "Объявление отсутствует <a href='index.php'>назад</a>";
                exit;
            }
            else
            {
                $fillAds = $this->partners[$_GET['edit_partners']];
                foreach ($fillAds->getObjVars() as $key => $value)//Заполнение полей формы
                {
                    $smarty->assign($key, $value);
                }
            }
        }

        if (isset($_GET['edit_header']))
        {
            $fillAds = $this->header[1];
            foreach ($fillAds->getObjVars() as $key => $value)//Заполнение полей формы
            {
                $smarty->assign($key, $value);
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
                $list_master[$post['master_city']][] = $post;
            }
            foreach ($this->partners as $post)
            {
                $post = get_object_vars($post);
                $list_master[$post['partner_city']][] = $post;
            }
            $smarty->assign('posts_master', $post_master);
            ksort($list_master);
            foreach ($list_master as $k => $v) {
                foreach ($v as $k1 => $v1) {
                    foreach ($v1 as $key => $value) {
                        if ($key == 'partner_fio') {
                            $tmp_list_master[$k][$k1]['fio'] = $value;
                        } elseif ($key == 'master_fio'){
                            $tmp_list_master[$k][$k1]['fio'] = $value;
                        } else {
                            $tmp_list_master[$k][$k1][$key] = $value;
                        }
                    }
                }
            }
            foreach ($tmp_list_master as &$v1) {
                usort($v1, function($a, $b){
                    return strcmp($a["fio"], $b["fio"]);
                });
            }
            $smarty->assign('list_master', $tmp_list_master);
        }
        
        if(isset($this->partners))
        {
            foreach ($this->partners as $post)
            {
                $post = get_object_vars($post);
                $post_partner[]= $post;
                $list_partner[$post['partner_city']][] = $post;
            }
            $smarty->assign('posts_partner', $post_partner);
            ksort($list_partner);
            foreach ($list_partner as &$v1) {
                usort($v1, function($a, $b){
                    return strcmp($a["partner_fio"], $b["partner_fio"]);
                });
            }
            $smarty->assign('list_partner', $list_partner);
        }
        if(isset($this->header))
        {
            foreach ($this->header as $post)
            {
                $post = get_object_vars($post);
                $post_header[]= $post;
            }
            $smarty->assign('posts_header', $post_header);
        }
        
        return self::$instance;    
    }
    
    public function runAdminPost()
    {
        global $smarty;

        self::getAllAdsFromDB();
        self::prepareForOut();
        $positions = new Positions();
        $positions->getDataFromDB();
        $positions->converToSmarty();
        
        
        $smarty->display('admin_header.tpl');
        
        if (isset($_GET['edit_header'])) {
            $smarty->display('admin_head.tpl');
        } elseif (isset($_GET['new_post'])|| isset($_GET['edit_ads'])) {
            $smarty->display('admin_post.tpl');
        } elseif (isset($_GET['new_master']) || isset($_GET['edit_masters'])) {
            $smarty->display('admin_masters.tpl');
        } elseif (isset($_GET['new_partner'])|| isset($_GET['edit_partners'])) {
            $smarty->display('admin_partners.tpl');
        } elseif (isset($_GET['partners_position']) || isset($_GET['masters_position']) || isset($_GET['posts_position']))  {
            $smarty->display('admin_positions.tpl');
            $positions->editPosition();
        } else {
            $smarty->display('admin_main.tpl');
        }
        
        $smarty->display('admin_footer.tpl');
    }
}