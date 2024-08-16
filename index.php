<?php 
session_start();
if (isset($_SESSION['loggedin'])) {
    header("Location: ../View/dashboard.php");
    exit();
}
// $val=getdate();
// $date="$val[year]-$val[mon]-$val[mday] $val[hours]:$val[minutes]:$val[seconds]";
// print_r($date);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./public/css/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="public/css/index.css">
    <link rel="icon" href="./public/images/icons/logo.ico" type="image/x-icon">
    <title>LI Express</title>
    
</head>
<body class="bg-secondary">
  <div class="container-fluid">
    <div class="row">
        <div class="col-sm-6 px-0 d-none d-sm-block">
            <img src="./public/images/delivery.jpg"
            alt="Login image" class="w-100 vh-100" style="object-fit: cover; object-position: left;">
        </div>
        
        <div class="col-sm-6 bg-secondary pt-5 d-flex justify-content-center">
            <div>
                <a class="text-decoration-none" href="index.php"> <div class="px-5 ms-xl-4s text-black d-flex align-items-center">
                    <img src="./public/images/logo.png" alt="Login image" class="logo"/>
                    <span class="h1 fw-bold mb-0">LI Express💯</span>
                </div>
                </a>
            
                <div class="d-flex align-items-center px-5 ms-xl-4 mt-5 pt-5 pt-xl-0 mt-xl-n5">
                    <form method="post" style="width: 25rem;" action="../Controller/login.php" >
                        <h3 class="mb-1 pb-1 text-black fw-bold" style="letter-spacing: 1px;">Connexion:</h3>
                        <?php if (isset($_GET['erreur'])) {
                    echo'<div class=" mb-2 bg-danger text-white text-xl-center rounded py-2">'.$_GET['erreur'].'</div>';
                } ?>
                        <div data-mdb-input-init class="form-outline mb-4">
                            <input autocomplete="off" required name="log" type="text" placeholder="Nom d'utilisateur" id="form2Example18" class="form-control form-control-lg" />
                        </div>
                        <div data-mdb-input-init class="form-outline mb-4">
                            <input autocomplete="off" required name="mdp" type="password" placeholder="Mot de passe" id="form2Example28" class="form-control form-control-lg" />
                        </div>
                        <div class="pt-1 mb-4">
                            <button class="btn btn-info btn-lg btn-block" type="submit">Se connecter</button>
                        </div>
                    </form>
                </div>
        </div>
        </div>
    </div>
  </div>

</body>
</html>