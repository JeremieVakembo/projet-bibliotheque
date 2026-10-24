<?php
            //Lancer la session
            session_start();
            if(@$_SESSION["validation"] != "yes") {
                header("location:../connexion.php");
            }
          
            ?>
<?php
    require_once('top.php');

?>

<div class="main-panel">
    <div class="content-wrapper">
    <?php
            $id = $_GET["id"];
            require_once ('../database/bdd.php');
            $sql = $con->query("SELECT nom,prenom,datenaissance,nationnalite FROM auteur WHERE id = $id");
            $data = $sql->fetch();
        ?>
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Modifier auteur</h4>
                    <form class="forms-sample" method="post" enctype="multipart/form-data">
                    
								<div class="form-group">
									<label for="categories" class=" form-control-label">Nom</label>
									<input type="text" name="nom" placeholder="" class="form-control" value="<?= $data['nom']?>" required >
								</div>
								
								<div class="form-group">
									<label for="categories" class=" form-control-label">Prénom</label>
									<input type="text" name="prenom" placeholder="" class="form-control" value="<?= $data['prenom']?>" required >
								</div>             
                                
								<div class="form-group">
									<label for="categories" class=" form-control-label">Date de naissance</label>
									<input type="date" name="datenais" placeholder="" class="form-control" value="<?= $data['datenaissance']?>" required >
								</div>
								
								<div class="form-group">
									<label for="categories" class=" form-control-label">Nationnalité</label>
									<input type="text" name="nation" placeholder="" class="form-control" value="<?= $data['nationnalite']?>" required >
								</div>         
                      <button type="submit" name="send" class="btn btn-success me-2">Valider</button>
                    </form>
                    <?php

                  //validation du formulaire
                if (isset($_POST['send'])){
                  //verifier si user a bien completer tous les champs
                  if(!empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['datenais']) && !empty($_POST['nation'])){

                      //les données utilisateurs
                      $nom =  htmlspecialchars($_POST['nom']);
                      $prenom =  htmlspecialchars($_POST['prenom']);
                      $datenais= htmlspecialchars($_POST['datenais']);
                      $nation = htmlspecialchars($_POST['nation']); 

                      //On recupere la base de données
                      require_once ('../database/bdd.php');
                      //La requete pour inserer
                      $con->query("UPDATE auteur SET nom = \"$nom\", prenom = \"$prenom\", datenaissance = \"$datenais\", nationnalite = \"$nation\" WHERE id = $id");
                      //rediriger l'utilisateur  vers la page connexion
                      echo '<script> window.location="auteur.php"</script>';
                      }
                    
                  }	
                    ?>
                  </div>
                </div>
              </div>              
            </div>
        </div>
		
<?php
require_once('footer.inc.php');
?>
