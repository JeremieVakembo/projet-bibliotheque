<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="style/style.css">
    <title>Bibliotheque</title>
</head>
<body>
        <!-- header -->
        <?php
        require_once("header.php");
        ?>

        <div class="container">
            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                </div>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="img/book2.jpg" style="height: 60vh;" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="img/book3.jpg" style="height: 60vh;" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                      <h4 class="lead">Bienvenue dans notre bibliotheque en ligne !</h4>
                      <h3>Découvrez notre vaste collection de livres électroniques</h3>
                    </div>
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
        </div>


        <div class="container">
            <h2 class="text-center mt-3">BIBLIOSCHOOL</h2>
          </div>   
        <div class="container mt-5">
                   <div class="row">
                       <div class="col col-12 col-md-6 col-lg-3  mt-3">
                           <img src="img/Maths.jpg" style="width:200px; height:280px;"   class="img-fluid" alt="...">
                           <p class="h6 mt-3 lead">Maths</p>
                   </div>
                       <div class="col col-12 col-md-6 col-lg-3  mt-3">
                           <img src="img/Cahier.jpeg" style="width:200px; height:280px;" class="img-fluid" alt="...">
                           <p class="h6 mt-3 lead">Cahier de français</p>
                   </div>
                       <div class="col col-12 col-md-6 col-lg-3  mt-3">
                           <img src="img/Etude.jpg" style="width:200px; height:280px;"  class="img-fluid" alt="...">
                           <p class="h6 mt-3 lead">Etude de la langue</p>
                       </div>

                   <div class="col col-12 col-md-6 col-lg-3  mt-3">
                           <img src="img/science.png" style="width:200px; height:280px;"  class="img-fluid" alt="...">
                           <p class="h6 mt-3 lead">Sciences</p>
                   </div>
           </div>
       </div>


       <div class="container mt-5">
        <h3 class="text-center">Nouveautés Scolaires</h3>
        <p class="lead text-center">L'essentiel pour aider vos élèves à reussir</p>
      </div>
      
      <div class="container mt-5">
        <div class="row">
            <div class="col col-12 col-md-6 col-lg-4  mt-3">
                <p class="mb-5" style="font-weight:bold;">CLUB LITTÉRAIRE MENSUEL</p>
                <img src="img/Pile Of Books.webp" style="width:195px; height:195px;"   class="img-fluid" alt="...">
                <p class="h6 mt-3" style="font-weight:bold;">Passez nous voir</p>
                <p class="h6">Décrivez ici votre activité. C'est l'endroit <br>
                idéal pour donner des informations sur <br>
                les activités, les dates et les lieux où <br>
                elles auront lieu. Ajoutez des photos ou <br>
                vidéos pour intéresser votre public.
                </p>
        </div>
            <div class="col col-12 col-md-6 col-lg-4  mt-3">
                <p class="mb-5" style="font-weight:bold;">SÉANCES DE LECTURES</p>
                <img src="img/Storytelling.webp" style="width:195px; height:195px;" class="img-fluid" alt="...">
                <p class="h6 mt-3" style="font-weight:bold;">À ne pas manquer</p>
                <p class="h6">Décrivez ici votre activité. C'est l'endroit <br>
                idéal pour donner des informations sur <br>
                les activités, les dates et les lieux où <br>
                elles auront lieu. Ajoutez des photos ou <br>
                vidéos pour intéresser votre public.
            </p>
        </div>
            <div class="col col-12 col-md-6 col-lg-4  mt-3">
                <p class="mb-5" style="font-weight:bold;">ENTRETIENS AVEC LES AUTEURS</p>
                <img src="img/Typing on a Typewriter.webp" style="width:195px; height:195px;"  class="img-fluid" alt="...">
                <p class="h6 mt-3" style="font-weight:bold;">Rejoignez-nous</p>
                <p class="h6">Décrivez ici votre activité. C'est l'endroit <br>
                    idéal pour donner des informations sur <br>
                    les activités, les dates et les lieux où <br>
                    elles auront lieu. Ajoutez des photos ou <br>
                    vidéos pour intéresser votre public.</p>
            </div>
        </div>
    </div>


        <div class="container mt-5">
            <div class="row">
                <div class="col-sm-6 mt-3">
                    <h4 class=" mt-5 text-center">HORAIRES D'OUVERTURE</h4>
                    <p class="h6 text-center">Passez nous voir</p>
                    <p class="h6 text-center">Du lundi au jeudi : de 10h à 20h</p>
                    <p class="h6 text-center">du vendredi au samedi : de 10h à 18h</p>
            </div>
                <div class="col-sm-6 mt-3">
                    <img src="img/book4.jpg" style="width:460px; height:340px;" class="img-fluid" alt="...">
            </div>
        </div>
    </div>

    
    <!-- <div class="container mt-5 mb-5">
        <h1 class="display-5 text-center">NOUS CONTACTER</h1>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nom</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Saisissez votre nom">
          </div>
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">E-mail</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Saisissez votre e-mail">
          </div>
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Objet</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Saisissez l'objet">
          </div>
          <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Message</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"  placeholder="Rédigez votre message ici..."></textarea>
          </div>
          <div class="col-12 mb-3">
            <button type="submit" class="btn btn-dark w-100">Envoyer</button>
            </div>
      </div> -->

        <!-- footer -->
        <?php
        require_once("src/footer.php");
        ?>
<script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>