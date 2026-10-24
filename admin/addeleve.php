<?php
      //Lancer la session
      session_start();
      if(@$_SESSION["validation"] != "yes") {
      header("location:../connexion.php");
      }
      require_once('top.php');            
?>
<?php
	        //validation du formulaire
	        if (isset($_POST['send'])){
          //verifier si user a bien completer tous les champs
          if(!empty($_POST['nom']) && !empty($_POST['post']) && !empty($_POST['sexe']) && !empty($_POST['classe']) && !empty($_POST['opt'])){

            //les données utilisateurs
            $nom =  htmlspecialchars($_POST['nom']);
            $post =  htmlspecialchars($_POST['post']);
			      $sexe =  htmlspecialchars($_POST['sexe']);
            $classe =  htmlspecialchars($_POST['classe']);
			      $opt =  htmlspecialchars($_POST['opt']);
            
            //On recupere la base de données
            require_once ('../database/bdd.php');
            //La requete pour inserer
            $insertion = $con->prepare("INSERT INTO eleve(nom,post,sexe,classe,opt) VALUES(?,?,?,?,?)");
            $insertion->execute(array($nom,$post,$sexe,$classe,$opt));
            //rediriger l'utilisateur  vers la page eleve
            echo '<script> window.location="eleve.php"</script>';
              
             }
           
        }	

  ?>

<div class="main-panel">
    <div class="content-wrapper">
            
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Ajouter élève</h4>
                    <form class="forms-sample" method="post" enctype="multipart/form-data">
                    
								<div class="form-group">
									<label for="categories" class=" form-control-label">Nom élève</label>
									<input type="text" name="nom" placeholder="" class="form-control" required >
								</div>
								
								<div class="form-group">
									<label for="categories" class=" form-control-label">Postnom élève</label>
									<input type="text" name="post" placeholder="" class="form-control" required >
								</div>
								
								<div class="form-group">
									<label for="categories" class=" form-control-label">Sexe</label>
									<input type="text" name="sexe" placeholder="" class="form-control" require>
								</div>
								
								<div class="form-group">
									<label for="categories" class=" form-control-label">Classe</label>
									<input type="text" name="classe" placeholder="" class="form-control" require>
								</div>
								
								<div class="form-group">
									<label for="categories" class=" form-control-label">Option</label>
									<input type="text" name="opt" placeholder="" class="form-control" required >
								</div>
								                   
                      <button type="submit" name="send" class="btn btn-success me-2">Valider</button>
                      <button type="reset" name="" class="btn btn-light">Annuler</button>
                    </form>
                  </div>
                </div>
              </div>
              
            </div>
        </div>
		
<?php
require_once('footer.inc.php');
?>
