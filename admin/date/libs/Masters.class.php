<?php

//Родительский класс объявления
class Masters
{
    public $master_id = '';
    public $date = '';
    public $master_title = '';
    public $master_fio = '';
    public $master_city = '';
    public $master_phone = '';
    public $master_certificate = '';

    
    public function __construct($post)
    {
        if(isset($post['master_id'])) $this->master_id=$post['master_id'];
        foreach ($post as $key=>$val)
        {
            if($key == 'submit_master') continue;
            $this->$key = strip_tags($val);
        }
        $this->date = date("Y-m-d H:i:s");
    }
    
    public function save()
    {
        global $mysqli;
        
        $vars = get_object_vars($this);
        $mysqli->query('REPLACE INTO ?_masters (?#) VALUES(?a)', array_keys($vars), array_values($vars));
        
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