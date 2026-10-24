<?php
    //Lancer la session
    session_start();
    if(@$_SESSION["validation"] != "yes") {
    header("location:../connexion.php");
       }
          
     ?>
<?php require_once('top.php');?>
<div class="main-panel">
    <div class="content-wrapper">
	<?php
        //validation du formulaire
        if (isset($_POST['send'])){

        //verifier si le fichier existe
        if(!empty($_FILES['photo']) && !empty($_POST['livre']) && !empty($_POST['cat']) && !empty($_POST['auteur']) && !empty($_POST['nbr']) && !empty($_POST['datedi']) && !empty($_FILES['file']) && !empty($_POST['dom'])){

            //variable image avec deux parametre name(img)/name
      $img =  htmlspecialchars($_FILES['photo']['name']);
			$livre =  htmlspecialchars($_POST['livre']);
      $cat =  htmlspecialchars($_POST['cat']);
			$auteur =  htmlspecialchars($_POST['auteur']);
      $nbr =  htmlspecialchars($_POST['nbr']);
			$date =  htmlspecialchars($_POST['datedi']);
			$pdf =  htmlspecialchars($_FILES['file']['name']);
      $domaine =  htmlspecialchars($_POST['dom']);
            //condition avec la fonction (move_uploaded_file) 
            // deux parametre name(img)/tmp_name càd emplacement du fichier avec la variable $img
            if (move_uploaded_file($_FILES['photo']['tmp_name'],"$img")) {
				    if (move_uploaded_file($_FILES['file']['tmp_name'],"$pdf")){

					//On recupere la base de données
					require_once ('../database/bdd.php');
					//La requete pour inserer
					$insertion = $con->prepare("INSERT INTO book (photo,livre,cat,auteur,nbr,dat,files,domaine) VALUES(?,?,?,?,?,?,?,?)");
					$insertion->execute(array($img,$livre,$cat,$auteur,$nbr,$date,$pdf,$domaine));
					echo '<script> window.location="livre.php"</script>';
				}
        
            }
            else{
            //Message 
            // echo"<p>Information invalide</p>";
            }

            }
            else{
            //Message 
            // echo"<p>Votre champs est vide </p>";
        }
    }
?>

        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Ajouter livre</h4>
                    <form class="forms-sample" method="post" enctype="multipart/form-data">
                    
								<div class="form-group">
									<label for="categories" class=" form-control-label">Photo</label>
									<input type="file" name="photo" placeholder="Enter product name" class="form-control" required>
								</div>
								
								<div class="form-group">
									<label for="categories" class=" form-control-label">Nom livre</label>
									<input type="text" name="livre" placeholder="" class="form-control" required >
								</div>
								
								<div class="form-group">
									<label for="categories" class=" form-control-label">Categorie</label>
									<input type="text" name="cat" placeholder="" class="form-control" required >
								</div>
								
								<div class="form-group">
									<label for="categories" class=" form-control-label">Auteur</label>
									<input type="text" name="auteur" placeholder="" class="form-control" require>
								</div>
								
								<div class="form-group">
									<label for="categories" class=" form-control-label">Nombre de Page</label>
									<input type="text" name="nbr" placeholder="" class="form-control" require>
								</div>
								
								<div class="form-group">
									<label for="categories" class=" form-control-label">Date Edition</label>
									<input type="date" name="datedi" placeholder="" class="form-control" required >
								</div>
								
								<div class="form-group">
									<label for="categories" class=" form-control-label">Fichier livre</label>
									<input type="file" name="file" placeholder="" class="form-control" required >
								</div>  

                <div class="form-group">
									<label for="categories" class=" form-control-label">Domaine</label>
									<input type="text" name="dom" placeholder="" class="form-control" require>
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
