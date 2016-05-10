<?php

//Родительский класс объявления
class Header
{
    public $header_id = '';
    public $header_logo_img = '';
    public $header_address = '';
    public $header_phone1 = '';
    public $header_phone2 = '';
    public $header_social = '';
    public $header_banner_img = '';
    public $header_banner_link = '';

    
    public function __construct($post)
    {
        if(isset($post['header_id'])) $this->header_id=$post['header_id'];
        if(isset($_FILES["header_logo_img"]["name"])) $this->header_logo_img = $_FILES["header_logo_img"]["name"];
        if(isset($_FILES["header_banner_img"]["name"])) $this->header_banner_img = $_FILES["header_banner_img"]["name"];
        foreach ($post as $key=>$val)
        {
            if($key == 'submit_header') continue;
            $this->$key = strip_tags($val);
        }
    }
    
    public function save()
    {
        global $mysqli;
        
        $vars = get_object_vars($this);
        $mysqli->query('REPLACE INTO ?_header (?#) VALUES(?a)', array_keys($vars), array_values($vars));
        
        header("Location: http://" . $_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF']);
        exit();
    }
    
    public function getId() { return $this->header_id; }
    public function getObjVars() { return get_object_vars($this); }  
}