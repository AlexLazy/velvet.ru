<?php

class Positions
{
    public $masters_position = [];
    public $partners_position = [];
    public $posts_position = [];
    
    public function getDataFromDB()
    {
        global $mysqli;

        $this->masters_position = $mysqli->select('select master_id from ?_masters order by master_id');
        $this->partners_position = $mysqli->select('select partner_id from ?_partners order by partner_id');
        $this->posts_position = $mysqli->select('select post_id from ?_posts order by post_id');
    }
    
    public function converToSmarty() {
        global $smarty;
        
        foreach ($this->getObjVars() as $key => $value)//Заполнение полей формы
        {
            $smarty->assign($key, $value);
        }
    }
    
    public function editPosition() {
        global $mysqli;
        if (isset($_GET['up'])) {
            $id2 = $_GET[id] - $_GET['up'];
        } else if (isset($_GET['down'])){
            $id2 = $_GET[id] + $_GET['down'];
        }
        if(isset($_GET['partners_position']) && (isset($_GET['up']) || isset($_GET['down'])) && isset($_GET['id'])) {
            $mysqli->query("UPDATE ?_partners SET partner_id = 99999999 WHERE partner_id = " . $_GET['id']);
            $mysqli->query("UPDATE ?_partners SET partner_id = " . $_GET['id'] . " WHERE partner_id = " . $id2);
            $mysqli->query("UPDATE ?_partners SET partner_id = " . $id2 . " WHERE partner_id = 99999999;");
            echo "<script>location.href = '?partners_position'</script>";
        }
        if(isset($_GET['masters_position']) && (isset($_GET['up']) || isset($_GET['down'])) && isset($_GET['id'])) {
            $mysqli->query("UPDATE ?_masters SET master_id = 99999999 WHERE master_id = " . $_GET['id']);
            $mysqli->query("UPDATE ?_masters SET master_id = " . $_GET['id'] . " WHERE master_id = " . $id2);
            $mysqli->query("UPDATE ?_masters SET master_id = " . $id2 . " WHERE master_id = 99999999;");
            echo "<script>location.href = '?masters_position'</script>";
        }
        if(isset($_GET['posts_position']) && (isset($_GET['up']) || isset($_GET['down'])) && isset($_GET['id'])) {
            $mysqli->query("UPDATE ?_posts SET post_id = 99999999 WHERE post_id = " . $_GET['id']);
            $mysqli->query("UPDATE ?_posts SET post_id = " . $_GET['id'] . " WHERE post_id = " . $id2);
            $mysqli->query("UPDATE ?_posts SET post_id = " . $id2 . " WHERE post_id = 99999999;");
            echo "<script>location.href = '?posts_position'</script>";
        }
    }
    
    public function getMastersPosition() { return $this->masters_position; }
    public function getPartnersPosition() { return $this->partners_position; }
    public function getPostssPosition() { return $this->posts_position; }
    public function getObjVars() { return get_object_vars($this); }
}