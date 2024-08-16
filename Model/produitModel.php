<?php
include 'connexion.php';

class Produit{

    private $con;

    function __construct(){
        $this->con=$GLOBALS['conn'];
    }

    public function get_categories($first, $list_row){
        $sql="SELECT * FROM categorie LIMIT $first, $list_row";
        $res=$this->con->query($sql);

        return $res;
    }

    public function get_categorie($id_cat){
        $sql="SELECT * FROM categorie where ID_CATEGORIE=$id_cat";
        $res=$this->con->query($sql);

        return $res->fetch_assoc();
    }
    public function enum_Categorie(){
        $sql="SELECT COUNT(*) FROM categorie";
        $res=$this->con->query($sql);
        return $res->fetch_column();
    }

    public function add_Categorie($cat){
        $sql = "INSERT INTO categorie (categorie) VALUES ('$cat')";
        $this->con->query($sql);

    }
    
    public function edit_Categorie($id_cat, $cat){
        $sql = "UPDATE `categorie` SET `Categorie` ='$cat' WHERE `categorie`.`ID_CATEGORIE` = '$id_cat'";
        $this->con->query($sql);

    }
    public function del_Categorie($id_cat){
        $sql="DELETE FROM `categorie` WHERE `ID_CATEGORIE` = '$id_cat'";
        $this->con->query($sql);

    }


}