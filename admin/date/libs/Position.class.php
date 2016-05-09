<?php

class Positions
{
    public $masters_position;
    public $partners_pisition;
    public $post_position;
    
    public function __construct($post)
    {
        if(isset($post['post_id'])) $this->post_id=$post['post_id'];
        if(isset($_FILES["post_img"]["name"])) $this->post_img = $_FILES["post_img"]["name"];
        foreach ($post as $key=>$val)
        {
            if($key == 'submit_post') continue;
            $this->$key = strip_tags($val);
        }
        $this->date = date("Y-m-d H:i:s");
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
    public function getObjVars()
    {
        return get_object_vars($this);
    }  
}