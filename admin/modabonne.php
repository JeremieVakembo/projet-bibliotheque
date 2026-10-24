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
            $sql = $con->query("SELECT nom,num FROM abonne WHERE id = $id");
            $data = $sql->fetch();
        ?>
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Modifier abonné</h4>
                    <form class="forms-sample" method="post" enctype="multipart/form-data">
                    
								<div class="form-group">
									<label for="categories" class=" form-control-label">Nom abonné</label>
									<input type="text" name="nom" placeholder="" value="<?= $data['nom']?>"  class="form-control" required >
								</div>
								
								<div class="form-group">
									<label for="categories" class=" form-control-label">Numéro abonné</label>
									<input type="text" name="num" placeholder="" value="<?= $data['num']?>" class="form-control" required >
								</div>                   
                      <button type="submit" name="send" class="btn btn-success me-2">Valider</button>
                    </form>
                  </div>
                </div>
              </div>
              <?php

            //validation du formulaire
            if (isset($_POST['send'])){
            //verifier si user a bien completer tous les champs
            if(!empty($_POST['nom']) && !empty($_POST['num']) ){

                //les données utilisateurs
                $nom =  htmlspecialchars($_POST['nom']);
                $num =  htmlspecialchars($_POST['num']);

                //On recupere la base de données
                require_once ('../database/bdd.php');
                //La requete pour inserer
                $con->query("UPDATE abonne SET nom = \"$nom\", num = \"$num\" WHERE id = $id");
                //rediriger l'utilisateur  vers la page connexion
                echo '<script> window.location="abonne.php"</script>';
                }
              
            }	
              ?>
            </div>
        </div>
		
<?php
require_once('footer.inc.php');
?>
