<?php
session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: ../index.php");
    exit();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/css/bootstrap/bootstrap.css">
    <link rel="stylesheet" href="../public/css/header.css">
    <link rel="stylesheet" href="../public/css/dashboard.css">
    <link rel="icon" href="../public/images/icons/logo.ico" type="image/x-icon">
    <title>LI Express</title>

</head>
<body>
<?php
$current_page = basename($_SERVER['SCRIPT_NAME']);
?>
<div class="container-fluid d-flex vh-100">
<div class="row header">
<div class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark" style="width: 280px;">
    <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
        <div class="px-2 ms-xl-4s text-black d-flex align-items-center justify-content-around">
            <img src="../public/images/logo.png" alt="Login image" class="logo"/>
            <span class=" fw-bold text-white mb-0">LI Express</span>
        </div>
    </a>
    <hr>
    <ul class="nav nav-pills flex-column mb-auto">
      <li class="nav-item">
        <a href="dashboard.php" class="major nav-link <?php echo $current_page == 'dashboard.php' ? 'active' : ''; ?>" aria-current="page">
        <img src="../public/images/icons/speedometer2.svg"  alt="dash">
          Tableau de Bord
        </a>
      </li>
      <li class="mb-1">
        <button class="major align-items-center collapsed style-button" data-bs-toggle="collapse" data-bs-target="#livraison" aria-expanded="true">
        <img src="../public/images/icons/truck.svg"  alt="livraison">
          Livraisons
        </button>
        <div class="collapse <?php echo ($current_page == 'en_cours.php' || $current_page == 'historique.php') ? 'show' : ''; ?>" id="livraison">
          <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small ">
            <li><a href="en_cours.php" class=" nav-link <?php echo $current_page == 'en_cours.php' ? 'active' : ''; ?>">
            <img src="../public/images/icons/arrow-repeat.svg"  alt="livraison en cours">
              En cours
            </a></li>
            <li><a href="historique.php" class="nav-link <?php echo $current_page == 'historique.php' ? 'active' : ''; ?>">
            <img src="../public/images/icons/archive.svg"  alt="historique">
              Historique
            </a></li>
          </ul>
        </div>
      </li>
      <li>
        <a href="expediteur.php" class="major nav-link <?php echo $current_page == 'expediteur.php' ? 'active' : ''; ?>">
        <img src="../public/images/icons/send.svg"  alt="expediteur">
          Expediteurs
        </a>
      </li>
      <li>
        <a href="livreur.php" class="major nav-link <?php echo $current_page == 'livreur.php' ? 'active' : ''; ?>">
          <img src="../public/images/icons/truck-flatbed.svg"  alt="livreur">
          Livreurs
        </a>
      </li>
      <li>
        <a href="produit.php" class="major nav-link <?php echo $current_page == 'produit.php' ? 'active' : ''; ?>">
        <img src="../public/images/icons/dropbox.svg"  alt="paquets">
          Catégories
        </a>
      </li>
    </ul>
    <hr>
    <div class="dropdown">
      <a href="#" class="d-flex align-items-center text-white text-center text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
        <strong>Administrateur</strong>
      </a>
      <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownadmin">
        <li><a class="dropdown-item" href="../Controller/logout.php">Se deconnecter</a></li>
      </ul>
    </div>
  </div>
  </div>

