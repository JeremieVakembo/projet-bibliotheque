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
 <?php $dt = date('l j F Y');?>
          <div class="content-wrapper">
          <div class="d-xl-flex justify-content-between align-items-start">
              <h2 class="text-dark font-weight-bold mb-2"> Partie administrateur</h2>
              <div class="d-sm-flex justify-content-xl-between align-items-center mb-2">
                <div class="btn-group bg-white p-3" role="group" aria-label="Basic example">
                  <button type="button" class="btn btn-link text-dark py-0 border-right" style="text-decoration: none;"><?php echo $dt;?></button>
                </div>
                <div class="dropdown ms-0 ml-md-4 mt-2 mt-lg-0">
                  <!-- <button class="btn bg-white dropdown-toggle p-3 d-flex align-items-center" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button> -->
                  <!-- <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton1">
                    <h6 class="dropdown-header">Settings</h6>
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Separated link</a>
                  </div> -->
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="d-sm-flex justify-content-between align-items-center transaparent-tab-border {">
                  <ul class="nav nav-tabs tab-transparent" role="tablist"> 
                    <li class="nav-item">
                      <a class="nav-link active" id="business-tab" data-bs-toggle="tab" href="#business-1" role="tab" aria-selected="false">Tableau de bord</a>
                    </li>
                    <!-- <li class="nav-item">
                      <a class="nav-link" id="home-tab" data-bs-toggle="tab" href="#" role="tab" aria-selected="true">Users</a>
                    </li> -->
                  </ul>
                  <div class="d-md-block d-none">
                    <a href="#" class="text-light p-1"><i class="mdi mdi-view-dashboard"></i></a>
                    <a href="#" class="text-light p-1"><i class="mdi mdi-dots-vertical"></i></a>
                  </div>
                </div>
                <div class="tab-content tab-transparent-content">
                  <div class="tab-pane fade show active" id="business-1" role="tabpanel" aria-labelledby="business-tab">
                    <div class="row">
                    <div class="col-xl-3 col-lg-6 col-sm-6 grid-margin stretch-card">
                        <div class="card">
                          <div class="card-body text-center">
                          <?php
                            //On recupere la base de données
                            require_once ('../database/bdd.php');
                            $sql = $con-> query("SELECT COUNT(*) AS totaleleve FROM eleve");
                            $data= $sql->fetch(PDO::FETCH_ASSOC);
                            ?>
                            <h5 class="mb-2 text-dark font-weight-normal">Eleves</h5>
                            <h2 class="mb-4 text-dark font-weight-bold"><?= $data["totaleleve"] ?></h2>
                            <div class="dashboard-progress dashboard-progress-2 d-flex align-items-center justify-content-center item-parent"><a href="eleve.php"><i class="mdi mdi-account-multiple icon-md absolute-center text-dark"></i></a></div>
                            <p class="mt-4 mb-0">Pourcentage élèves</p>
                            <h3 class="mb-0 font-weight-bold mt-2 text-dark">85%</h3>
                          </div>
                        </div>
                      </div>

                      <div class="col-xl-3 col-lg-6 col-sm-6 grid-margin stretch-card">
                        <div class="card">
                          <div class="card-body text-center">
                          <?php
                            //On recupere la base de données
                            require_once ('../database/bdd.php');
                            $sql = $con-> query("SELECT COUNT(*) AS totalbook FROM book");
                            $row= $sql->fetch(PDO::FETCH_ASSOC);
                            ?>
                            <h5 class="mb-2 text-dark font-weight-normal">Livres</h5>
                            <h2 class="mb-4 text-dark font-weight-bold"><?= $row["totalbook"] ?></h2>
                            <div class="dashboard-progress dashboard-progress-1 d-flex align-items-center justify-content-center item-parent"><a href="livre.php"><i class="mdi mdi-book-open-page-variant icon-md absolute-center text-dark"></i></a></div>
                            <p class="mt-4 mb-0">Pourcentage livres</p>
                            <h3 class="mb-0 font-weight-bold mt-2 text-dark">70%</h3>
                          </div>
                        </div>
                      </div>
                     
                      <div class="col-xl-3  col-lg-6 col-sm-6 grid-margin stretch-card">
                        <div class="card">
                          <div class="card-body text-center">
                          <?php
                            //On recupere la base de données
                            require_once ('../database/bdd.php');
                            $sql = $con-> query("SELECT COUNT(*) AS totalconsultation FROM consultation");
                            $data= $sql->fetch(PDO::FETCH_ASSOC);
                            ?>
                            <h5 class="mb-2 text-dark font-weight-normal">Consultation</h5>
                            <h2 class="mb-4 text-dark font-weight-bold"><?= $data["totalconsultation"] ?></h2>
                            <div class="dashboard-progress dashboard-progress-3 d-flex align-items-center justify-content-center item-parent"><a href="consultation.php"><i class="mdi mdi-eye icon-md absolute-center text-dark"></i></a></div>
                            <p class="mt-4 mb-0">statistique consultations</p>
                            <h3 class="mb-0 font-weight-bold mt-2 text-dark">55%</h3>
                          </div>
                        </div>
                      </div>
                      
                      <div class="col-xl-3 col-lg-6 col-sm-6 grid-margin stretch-card">
                        <div class="card">
                          <div class="card-body text-center">
                          <?php
                            //On recupere la base de données
                            require_once ('../database/bdd.php');
                            $sql = $con-> query("SELECT COUNT(*) AS totalabonne FROM abonne");
                            $data= $sql->fetch(PDO::FETCH_ASSOC);
                            ?>
                            <h5 class="mb-2 text-dark font-weight-normal">Abonnes</h5>
                            <h2 class="mb-4 text-dark font-weight-bold"><?= $data["totalabonne"] ?></h2>
                            <div class="dashboard-progress dashboard-progress-4 d-flex align-items-center justify-content-center item-parent"><a href="abonne.php"><i class="mdi mdi-account-multiple-outline icon-md absolute-center text-dark"></i></a></div>
                            <p class="mt-4 mb-0">Pourcentage abonnés</p>
                            <h3 class="mb-0 font-weight-bold mt-2 text-dark">35%</h3>
                          </div>
                        </div>
                      </div>
                    </div>
              <div class="row">
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Consultation récentes</h4>
                    </p>
                    <table class="table">
                      <thead>
                        <tr>
                          <th>Numéro consultation</th>
                          <th>Date consultation</th>
                          <th>Heure debut</th>
                          <th>Heure fin</th>
                          <th>Identifiant utilisateur</th>
                          <th>Identifiant livre</th>
                        </tr>
                      </thead>
                    <?php
                            //On recupere la base de données
                            require_once ('../database/bdd.php');
                            $sql = $con->prepare("SELECT * FROM consultation ORDER BY NumCons DESC LIMIT 5");
                            $sql->execute();
                           while($data= $sql->fetch(PDO::FETCH_ASSOC)){ 
                            ?>
                      <tbody>
                        <tr>
                          <td><?= $data["NumCons"]?></td>
                          <td><?= $data["DateCons"]?></td>
                          <td><?= $data["HeureDebut"]?></td>
                          <td><?= $data["HeureFin"]?></td>
                          <td><?= $data["iduser"]?></td>
                          <td><?= $data["idlivre"]?></td>
                        </tr>
                      </tbody>
                      <?php
                      }
                      ?>
                    </table>
                  </div>
                </div>
              </div>
              <!-- Debut statistique de consultation -->
              <div class="col-lg-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">statistique consultation</h4>
                    </p>
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th> Livre </th>
                          <th> Progressive barre </th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td> Français </td>
                          <td>
                            <div class="progress">
                              <div class="progress-bar bg-primary" role="progressbar" style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td> Maths </td>
                          <td>
                            <div class="progress">
                              <div class="progress-bar bg-danger" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td> Les champions en français </td>
                          <td>
                            <div class="progress">
                              <div class="progress-bar bg-warning" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td> Chimie organique </td>
                          <td>
                            <div class="progress">
                              <div class="progress-bar bg-success" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td> Biologie genetique </td>
                          <td>
                            <div class="progress">
                              <div class="progress-bar bg-dark" role="progressbar" style="width: 72%" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td> Etude de la langue </td>
                          <td>
                            <div class="progress">
                              <div class="progress-bar bg-warning" role="progressbar" style="width: 45%" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td> Via nova </td>
                          <td>
                            <div class="progress">
                              <div class="progress-bar bg-link" role="progressbar" style="width: 59%" aria-valuenow="59" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              <!-- Debut utilisateur -->
              <div class="col-lg-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">utilisateurs</h4>
                    </p>
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>Nom</th>
                          <th>Email</th>
                          <th>Statuts</th>
                        </tr>
                      </thead>
                      <?php
                            
                            //On recupere la base de données
                            require_once ('../database/bdd.php');
                            $sql = $con-> query("SELECT * FROM users");
                                while($data= $sql->fetch()){
                                    ?>
                      <tbody>
                        <tr>
                          <td><?= $data['nom']?></td>
                          <td><?= $data['email']?></td>
                          <td>
                            <?php 
                            if ($data['statuts']==1)
                            {
                                echo '<p><a href="statuts.php?id='.$data['id'].'&statuts=0" class="btn btn-success">Active</a></p>';
                            }
                            else{
                              echo '<p><a href="statuts.php?id='.$data['id'].'&statuts=1" class="btn btn-danger">Desactive</a></p>';
                            }
                            ?>
                            </td>
                        </tr>
                      </tbody>
                      <?php
                    }
                    ?>
                    </table>
                  </div>
                </div>
              </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
         
<?php
require_once('footer.inc.php');
?>