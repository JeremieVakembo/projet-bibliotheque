<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Administrateur</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="assets/vendors/font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" href="assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  </head>
  <body>
  
    <div class="container-scroller">      
      <!-- partial:partials/_navbar.html -->
      <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
          <!-- <a class="navbar-brand brand-logo" href="index.php"><img src="assets/images/logo1.png" alt="logo"/></a>
          <a class="navbar-brand brand-logo-mini" href="index.php"><img src="../assets/images/logo1.png" alt="logo" /></a> -->
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-stretch">
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-menu"></span>
          </button>
          <div class="search-field d-none d-xl-block">
            <form class="d-flex align-items-center h-100" action="#">
              <div class="input-group">
                <div class="input-group-prepend bg-transparent">
                  <i class="input-group-text border-0 mdi mdi-magnify"></i>
                </div>
                <input type="text" class="form-control bg-transparent border-0" placeholder="Rechercher...">
              </div>
            </form>
          </div>
          <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item  dropdown d-none d-md-block">
              <a class="nav-link dropdown-toggle" id="reportDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">Etats en sortis</a>
              <div class="dropdown-menu navbar-dropdown" aria-labelledby="reportDropdown">
                <a class="dropdown-item" href="Etatcatalogue.php">
                  <i class="mdi mdi-file-pdf me-2"></i>Catalogue des livres</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="Etatlivre.php">
                  <i class="mdi mdi-file-pdf me-2"></i>Liste des livre par domaine</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="Etatconsultation.php">
                  <i class="mdi mdi-file-pdf me-2"></i>Situation  des consultations</a>
              </div>
            </li>
            
            
            <li class="nav-item nav-profile dropdown">
              <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                <div class="nav-profile-img">
                  <img src="images/avatar.png" alt="image">
                </div>
                <div class="nav-profile-text">
                  <p class="mb-1 text-black">Admin</p>
                </div>
              </a>
              <div class="dropdown-menu navbar-dropdown dropdown-menu-end p-0 border-0 font-size-sm" aria-labelledby="profileDropdown" data-x-placement="bottom-end">
                <div class="p-3 text-center bg-primary">
                  <img class="img-avatar img-avatar48 img-avatar-thumb" src="images/avatar.png" alt="">
                </div>
                <div class="p-2">
                  <h5 class="dropdown-header text-uppercase ps-2 text-dark">User Option</h5>
                    
                  <a class="dropdown-item py-1 d-flex align-items-center justify-content-between" href="#">
                    <span>
                      <?php
                    if(@$_SESSION["validation"] != "yes") {
                        // header("location:connexion.php");
                    }
                    else{    
                    //Afficher le message
                    echo $_SESSION["mail"];
                    }
                    ?>
                    </span>
                    <span class="p-0">
                      <i class="mdi mdi-account-outline ms-1"></i>
                    </span>
                  </a>
                 
                  <div role="separator" class="dropdown-divider"></div>
                  <h5 class="dropdown-header text-uppercase  ps-2 text-dark mt-2">Action</h5>
                  <!-- <a class="dropdown-item py-1 d-flex align-items-center justify-content-between" href="#">
                    <span>Bloque compte</span>
                    <i class="mdi mdi-lock ms-1"></i>
                  </a> -->
                  <a class="dropdown-item py-1 d-flex align-items-center justify-content-between" href="deconnexion.php">
                    <span>Deconnexion</span>
                    <i class="mdi mdi-logout ms-1"></i>
                  </a>
                </div>
              </div>
            </li>
            
            
          </ul>
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
          </button>
        </div>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item nav-category">Menu</li>
            <li class="nav-item">
              <a class="nav-link" href="home.php">
                <span class="icon-bg"><i class="mdi mdi-cube menu-icon"></i></span>
                <span class="menu-title">Tableau de Board</span>
              </a>
            </li>
        
            <li class="nav-item">
              <a class="nav-link" href="eleve.php">
                <span class="icon-bg"><i class="mdi mdi-account-multiple"></i></span>
                <span class="menu-title">Eleves</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="livre.php">
                <span class="icon-bg"><i class="mdi mdi-book-open-page-variant"></i></span>
                <span class="menu-title">Livres</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="catalogue.php">
                <span class="icon-bg"><i class="mdi mdi-book-open-page-variant"></i></span>
                <span class="menu-title">Catalogues</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="consultation.php">
                <span class="icon-bg"><i class="mdi mdi-eye"></i></span>
                <span class="menu-title">Consultations</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="abonne.php">
                <span class="icon-bg"><i class="mdi mdi-account-multiple-outline"></i></span>
                <span class="menu-title">Abonnés</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="auteur.php">
                <span class="icon-bg"><i class="mdi mdi-account-multiple"></i></span>
                <span class="menu-title">Auteurs</span>
              </a>
            </li>
            <!-- <li class="nav-item">
              <a class="nav-link" href="classe.php">
                <span class="icon-bg"><i class="mdi mdi-account-multiple"></i></span>
                <span class="menu-title">Classe</span>
              </a>
            </li> -->
            <!-- <li class="nav-item">
              <a class="nav-link" href="contact.php">
                <span class="icon-bg"><i class="mdi mdi-account-card-details"></i></span>
                <span class="menu-title">Contact</span>
              </a>
            </li>
             -->
            <li class="nav-item sidebar-user-actions">
              <div class="sidebar-user-menu">
                <a href="deconnexion.php" class="nav-link"><i class="mdi mdi-logout menu-icon"></i>
                  <span class="menu-title">Déconnexion</span></a>
              </div>
            </li>
          </ul>
        </nav>