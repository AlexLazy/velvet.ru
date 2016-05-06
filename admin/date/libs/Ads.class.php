<?php

//Родительский класс объявления
class Ads
{
    public $post_id;
    public $post_date;
    public $post_title;
    public $post_text;
    public $post_img;
    
    public function __construct($post)
    {
        if(isset($post['post_id'])) $this->post_id=$post['post_id'];
        if(isset($_FILES["post_img"]["name"])) $this->post_img = $_FILES["post_img"]["name"];
        foreach ($post as $key=>$val)
        {
            if($key == 'submit') continue;
            $this->$key = strip_tags($val);
        }
        $this->post_date = time();
    }
    
    public function save()
    {
        global $mysqli;
        
        $vars = get_object_vars($this);
        $mysqli->query('REPLACE INTO ?_posts (?#) VALUES(?a)', array_keys($vars), array_values($vars));
        
        header("Location: http://" . $_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF']);
        exit();
    }
    
    public function getId()
    {
        return $this->post_id;
    }
    public function getDate()
    {
        return $this->post_date;
    }
    public function getText()
    {
        return $this->post_text;
    }
    public function getImg()
    {
        return $this->post_img_src;
    }
    public function getObjVars()
    {
        return get_object_vars($this);
    }  
}