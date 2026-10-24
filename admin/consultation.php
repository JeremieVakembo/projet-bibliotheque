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
            <div class="row">
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Consultation</h4>
                    <!-- <p class="card-description"><a href="addcons.php" class="btn btn-block btn btn-success btn-lg font-weight-medium auth-form-btn btn-flat m-b-30 m-t-30">Ajouter une Consultation <i class="mdi mdi-plus-circle-outline"></i></a>
                     </p> -->
                     <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>Numéro consultation</th>
                          <th>Identifiant élève</th>
                          <th>Identifiant livre</th>
                          <th>Date consultation</th>
                          <th>Heure début</th>
                          <th>Heure fin</th>
                          <!-- <th>Action</th> -->
                        </tr>
                      </thead>              
                    <?php
                      // $iduser = $_GET["id"];
                      //On recupere la base de données
                      require_once ('../database/bdd.php');
                      $sql = $con->query("SELECT * FROM consultation  ");
                      
                        while($row= $sql->fetch()){
                    ?>
                      <tbody>
                          <td><?= $row["NumCons"]?></td>
                          <td><?= $row["iduser"]?></td>
                          <td><?= $row["idlivre"]?></td>
                          <td><?= $row["DateCons"]?></td>
                          <td><?= $row["HeureDebut"]?></td>
                          <td><?= $row["HeureFin"]?></td>
                          <!-- <td>
                            <button type="button" class="btn btn-success"><a href="modcons.php" style="text-decoration: none;color:white;">Modifier</a></button>
                            <button type="button" class="btn btn-danger"><a href="suppcons.php" style="text-decoration: none;color:white;">Supprimer</a></button>
                          </td> -->
			        </tbody>
                  <?php
                    }
                    ?>
                    </table><br>
                    <!-- <button type="button" class="btn btn-info btn-icon-text"><a href=""></a> Print <i class="mdi mdi-printer btn-icon-append"></i>
                    </button> -->
                  </div>
                </div>
              </div>   
            </div>
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:../../partials/_footer.html -->
<?php
require_once('footer.inc.php');
?>