<?php

//Родительский класс объявления
class Partners
{
    public $partner_id = '';
    public $partner_title = '';
    public $partner_first_name = '';
    public $partner_last_name = '';
    public $partner_city = '';
    public $partner_certificate = '';
    public $partner_company_name = '';
    public $partner_address = '';
    public $partner_phone = '';
    public $partner_mail = '';
    
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
    
    public function getId() { return $this->partner_id; }
    public function getFirstName() { return $this->partner_first_name; }
    public function getLasttName() { return $this->partner_last_name; }
    public function getCity() { return $this->partner_city; }
    public function getCertificate() { return $this->partner_certificate; }
    public function getCompanyName() { return $this->partner_company_name; }
    public function getAddress() { return $this->partner_address; }
    public function getPhone() { return $this->partner_phone; }
    public function getMail() { return $this->partner_mail; }    

    public function getObjVars() { return get_object_vars($this); }  
}