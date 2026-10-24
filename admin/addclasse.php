<?php
            //Lancer la session
            session_start();
            if(@$_SESSION["validation"] != "yes") {
                header("location:../connexion.php");
            }
          
            ?>
<?php
    require_once('top.php');
	 //validation du formulaire
	 if (isset($_POST['send'])){
        //verifier si user a bien completer tous les champs
        if(!empty($_POST['nom']) && !empty($_POST['num'])){

            //les données utilisateurs
            $nom =  htmlspecialchars($_POST['nom']);
            $num =  htmlspecialchars($_POST['num']);
           
            //On recupere la base de données
            require_once ('../database/bdd.php');
            //La requete pour inserer
            $insertion = $con->prepare("INSERT INTO abonne(nom,num) VALUES(?,?)");
            $insertion->execute(array($nom,$num));
            //rediriger l'utilisateur  vers la page abonne avec le script
            echo '<script> window.location="abonne.php"</script>';
             }
           
        }	

?>
<div class="main-panel">
    <div class="content-wrapper">
            
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Saisie élève</h4>
                    <form class="forms-sample" method="post" action="">
                    
								<div class="form-group">
									<label for="categories" class=" form-control-label">Matri élève</label>
									<input type="text" name="nom" placeholder="" class="form-control" required >
								</div>
                                <div class="form-group">
									<label for="categories" class=" form-control-label">Nom élève</label>
									<input type="text" name="num" placeholder="" class="form-control" required >
								</div>  
                                <div class="form-group">
									<label for="categories" class=" form-control-label">Postnom élève</label>
									<input type="text" name="num" placeholder="" class="form-control" required >
								</div>  
								
								<div class="form-group">
									<label for="categories" class=" form-control-label">Prénom élève</label>
									<input type="text" name="num" placeholder="" class="form-control" required >
								</div>     
                                <div class="form-group">
									<label for="categories" class=" form-control-label">Sexe </label>
									<input type="text" name="num" placeholder="" class="form-control" required >
								</div>  
                                <div class="form-group">
									<label for="categories" class=" form-control-label">Adresse </label>
									<input type="text" name="num" placeholder="" class="form-control" required >
								</div>  
                                <div class="form-group">
									<label for="categories" class=" form-control-label">Télephone </label>
									<input type="text" name="num" placeholder="" class="form-control" required >
								</div>  
                                <div class="form-group">
									<label for="categories" class=" form-control-label">Age</label>
									<input type="text" name="num" placeholder="" class="form-control" required >
								</div>           
                                <div class="form-group">
									<label for="categories" class=" form-control-label">Date de naissance</label>
									<input type="text" name="num" placeholder="" class="form-control" required >
								</div>  
                                <div class="form-group">
									<label for="categories" class=" form-control-label">Id adresse</label>
									<input type="text" name="num" placeholder="" class="form-control" required >
								</div>       
                      <button type="submit" name="send" class="btn btn-success me-2">Valider</button>
                      <button class="btn btn-light">Annuler</button>
                    </form>
                  </div>
                </div>
              </div>
              
            </div>
        </div>
		
<?php
require_once('footer.inc.php');
?>
