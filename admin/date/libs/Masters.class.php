<?php

//Родительский класс объявления
class Masters
{
    public $master_id = '';
    public $master_fio = '';
    public $master_city = '';
    public $master_phone = '';
    public $master_certificate = '';

    
    public function __construct($post)
    {
        if(isset($post['post_id'])) $this->post_id=$post['post_id'];
        foreach ($post as $key=>$val)
        {
            if($key == 'submit') continue;
            $this->$key = strip_tags($val);
        }
    }
    
    public function save()
    {
        global $mysqli;
        
        $vars = get_object_vars($this);
        $mysqli->query('REPLACE INTO ?_posts (?#) VALUES(?a)', array_keys($vars), array_values($vars));
        
        header("Location: http://" . $_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF']);
        exit();
    }
    
    public function getId() { return $this->master_id; }
    public function getFIO() { return $this->master_fio; }
    public function getCity() { return $this->master_city; }
    public function getPhone() { return $this->master_phone; }
    public function getCertificate() { return $this->master_certificate; }
    
    public function getObjVars() { return get_object_vars($this); }  
}