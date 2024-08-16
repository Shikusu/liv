<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['log']) && $_POST['log']=='User') {
        if (isset($_POST['mdp']) && $_POST['mdp']=='shikusu') {
            $_SESSION['loggedin'] = true;
            header("Location: ../View/dashboard.php");
            exit(); 
        }else{
            header("Location: ../index.php?erreur=Mot de passe incorrect");
            session_destroy();
        }
    }else{
        header("Location: ../index.php?erreur=Identifiant incorrect");
        session_destroy();
    }


}
