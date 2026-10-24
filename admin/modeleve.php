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
            $sql = $con->query("SELECT nom,post,sexe,classe,opt FROM eleve WHERE id = $id");
            $data = $sql->fetch();
        ?>
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Modifier élève</h4>
                    <form class="forms-sample" method="post" enctype="multipart/form-data">
                    
								<div class="form-group">
									<label for="categories" class=" form-control-label">Nom élève</label>
									<input type="text" name="nom" placeholder="" value="<?= $data['nom']?>" class="form-control" required >
								</div>
								
								<div class="form-group">
									<label for="categories" class=" form-control-label">Postnom élève</label>
									<input type="text" name="post" placeholder="" value="<?= $data['post']?>" class="form-control" required >
								</div>
								
								<div class="form-group">
									<label for="categories" class=" form-control-label">Sexe</label>
									<input type="text" name="sexe" placeholder="" value="<?= $data['sexe']?>" class="form-control" require>
								</div>
								
								<div class="form-group">
									<label for="categories" class=" form-control-label">Classe</label>
									<input type="text" name="classe" placeholder="" value="<?= $data['classe']?>" class="form-control" require>
								</div>
								
								<div class="form-group">
									<label for="categories" class=" form-control-label">Option</label>
									<input type="text" name="opt" placeholder="" value="<?= $data['opt']?>" class="form-control" required >
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
                  if(!empty($_POST['nom']) && !empty($_POST['post']) && !empty($_POST['sexe']) && !empty($_POST['classe']) && !empty($_POST['opt'])){

                      //les données utilisateurs
                      $nom =  htmlspecialchars($_POST['nom']);
                      $post =  htmlspecialchars($_POST['post']);
                      $sexe = htmlspecialchars($_POST['sexe']);
                      $classe = htmlspecialchars($_POST['classe']);
                      $opt = htmlspecialchars($_POST['opt']); 

                      //On recupere la base de données
                      require_once ('../database/bdd.php');
                      //La requete pour inserer
                      $con->query("UPDATE eleve SET nom = \"$nom\", post = \"$post\", sexe = \"$sexe\", classe = \"$classe\", opt = \"$opt\" WHERE id = $id");
                      echo '<script> window.location="eleve.php"</script>';
                      
                      }
                    
                  }	
                    ?>
            </div>
        </div>
		
<?php
require_once('footer.inc.php');
?>
