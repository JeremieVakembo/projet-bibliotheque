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
                    <h4 class="card-title">Catalogue</h4>
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>Livre</th>
                          <th>Categorie</th>
                          <th>Domaine</th> 
                        </tr>
                      </thead>
                      <?php
                            //recupere la base de données
                            require_once ('../database/bdd.php');
                            $sql = $con-> query("SELECT * FROM book");
                                while($data= $sql->fetch()){
                                    ?>
                      <tbody>
                          <td><?= $data["livre"]?></td>
                          <td><?= $data["cat"]?></td>
                          <td><?= $data["domaine"]?></td>
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