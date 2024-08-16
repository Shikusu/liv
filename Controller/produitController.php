<?php
include '../Model/produitModel.php';

if(isset($_POST['ajouter'])){
    $cat=$_POST['designation'];
    $prod=new Produit();
    $prod->add_Categorie($cat);
    header('location: ../View/produit.php');
}

if(isset($_GET['edit'])){
    $id=$_GET['code'];
    $prod=new Produit();
    $res=$prod->get_Categorie($id);
    header('location: ../View/produit.php?id='.$id.'&cat='.$res['Categorie'].'&to_change=yes');
}

if(isset($_POST['modifier'])){
    $id_cat=$_POST['id'];
    $cat=$_POST['designation'];
    $prod=new Produit();
    $prod->edit_Categorie($id_cat, $cat);
    header('location: ../View/produit.php');
}

if (isset($_GET['delete'])) {
    $id=$_GET['code'];
    $prod=new Produit();
    $prod->del_Categorie($id);
    header('location: ../View/produit.php');
}