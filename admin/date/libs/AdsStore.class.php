<?php

//Хранилище объявлений
class AdsStore
{
    private static $instance=NULL;
    private $posts=[];
    
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
    
    private function delete($id)
    {
        global $mysqli;
        
        if ($id != null)
        {
            unset($this->ads[$id]);
            $mysqli->query("DELETE FROM ?_posts WHERE post_id=?d", $id);
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
        
        foreach ($all as $value)
        {
            $post = new Ads($value);
            self::addAds($post);
        }
        
        if (filter_input(INPUT_GET, 'delete', FILTER_VALIDATE_INT) >= 0)
        {
            self::delete($_GET['delete']);
        }
        return self::$instance;
    }

    public function prepareForOut()
    {
        global $smarty;
        
        if (filter_input(INPUT_GET, 'ads', FILTER_VALIDATE_INT) > 0 || filter_input(INPUT_GET, 'edit', FILTER_VALIDATE_INT) > 0)//Во время просмотра/редактирования
        {
            if ((isset($_GET['ads']) && empty($this->ads[$_GET['ads']])) || (isset($_GET['edit']) && empty($this->posts[$_GET['edit']])))
            {
                echo "Объявление отсутствует <a href='index.php'>назад</a>";
                exit;
            }
            else
            {
                (isset($_GET['ads'])) ? $fillAds = $this->ads[$_GET['ads']] : $fillAds = $this->posts[$_GET['edit']];
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
        
        return self::$instance;    
    }
    
    public function runAdminPost()
    {
        global $smarty;

        self::getAllAdsFromDB();
        self::prepareForOut();
        
        $smarty->display('admin_header.tpl');
        $smarty->display('admin_post.tpl');
        $smarty->display('admin_footer.tpl');
    }
}