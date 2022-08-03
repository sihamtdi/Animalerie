<!DOCTYPE html>
<html lang="en">
<title>documment</title>

<head>
  <meta charset='utf-8'>
  <meta http-equiv='X-UA-Compatible' content='IE=edge'>

  <meta name='viewport' content='width=device-width, initial-scale=1'>
  <link rel="stylesheet" type="text/css" href="document.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/5.4.5/css/swiper.css">
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
    crossorigin="anonymous"></script>


</head>

<body>
  <br>

  <nav class="navbar fixed-top navbar-expand-lg  navbar-light" style="background-color: #07540b;">
    <img  href="index.html"  src="image/logg.png" width="250" height="50" class="d-inline-block align-top" alt="image">

    <a class="navbar-brand" href="#"></a>
    <br>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mx-auto">
        <li class="nav-item active">
      <a class="nav-link text-white" href="index.html"style="font-size: 17px;"><i class='fas fa-paw'></i>Home<span class="sr-only">(current)</span></a>
        </li>
       
        <li class="nav-item active">
          <a class="nav-link text-white" href="dashboard.html"style="font-size: 17px;">Magasin<span class="sr-only"></span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link text-white"style="font-size: 17px;" href="https://www.chienvieetsante.com/wp-content/uploads/2019/10/Dossier-classement-croquettes.pdf">Marques<span class="sr-only"></span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link text-white"style="font-size: 17px;" href="article.html">Blog<span class="sr-only"></span></a>
        </li>
        

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button"
            data-toggle="dropdown" aria-expanded="false">
            Infos
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="https://www.ipsos.com/sites/default/files/ct/news/documents/2018-03/santevet_-_observatoire_animaux_compagnie_2018.pdf">Types Animaux de compagnie</a>
            <a class="dropdown-item" href="https://www.laconfederation.fr/wp-content/uploads/2020/10/guide-de-la-belle-adoption-web.pdf">Comment Adopter Des Animaux ?</a>


        </li>

        <li class="nav-item ">
          <a class="nav-link text-white" style="font-size: 17px;"href="contact.php">Contact</a>
        </li>

      </ul>

    </div>

  </nav>

 

  <!--------<source src="image/vd1.mp4" type="video/mp4"></video>-->

  <div class="bodyacontact" >
    <br><br><br>
<div class="container-fluid px-5 my-5">
  <div class="row justify-content-center">
    <div class="col-xl-10">
      <div class="card border-0 rounded-3 shadow-lg overflow-hidden">
        <div class="card-body p-0">
          <div class="row g-0">
            <div class="col-sm-6 d-none d-sm-block bg-image"></div>
            <div class="col-sm-6 p-4">
              <div class="text-center">
                <div class="h3 fw-light">Contact Nous</div>
                <p class="mb-4 text-muted">Animaux Shop</p>
              </div>

              <!-- * * * * * * * * * * * * * *
          // * * SB Forms Contact Form * *
          // * * * * * * * * * * * * * * *

          // This form is pre-integrated with SB Forms.
          // To make this form functional, sign up at
          // https://startbootstrap.com/solution/contact-forms
          // to get an API token!
          -->

              <form id="contactForm" data-sb-form-api-token="API_TOKEN">

                <!-- Name Input -->
                <div class="form-floating mb-3">
                  <input class="form-control" id="name" type="text" placeholder="Name" data-sb-validations="required">
                  <label for="name"></label>
                  <div class="invalid-feedback" data-sb-feedback="name:required" >Name is required.</div>
                </div>

                <!-- Email Input -->
                <div class="form-floating mb-3">
                  <input class="form-control" id="emailAddress" type="email" placeholder="Email Address" data-sb-validations="required,email" />
                  <label for="emailAddress"></label>
                  <div class="invalid-feedback" data-sb-feedback="emailAddress:required">Email Address is required.</div>
                  <div class="invalid-feedback" data-sb-feedback="emailAddress:email">Email Address Email is not valid.</div>
                </div>

                <!-- Message Input -->
                <div class="form-floating mb-3">
                  <textarea class="form-control" id="message" type="text" placeholder="Message" style="height: 10rem;" data-sb-validations="required"></textarea>
                  <label for="message"></label>
                  <div class="invalid-feedback" data-sb-feedback="message:required">Message is required.</div>
                </div>

                <!-- Submit success message -->
                <div class="d-none" id="submitSuccessMessage">
                  <div class="text-center mb-3">
                    <div class="fw-bolder">Form submission successful!</div>
                    <p>To activate this form, sign up at</p>
                    <a href="https://mail.google.com/mail/u/0/#inbox">https://mail.google.com/mail/u/0/#inbox</a>
                  </div>
                </div>

                <!-- Submit error message -->
                <div class="d-none" id="submitErrorMessage">
                  <div class="text-center text-danger mb-3">Error sending message!</div>
                </div>

                <!-- Submit button -->
                <div class="d-grid">
                  <button class="button1" id="submitButton" type="submit">Envoyer</button>
                </div>
              </form>
              <!-- End of contact form -->

            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</div>
<br><br><br><br><br><br><br><br><br><br><br><br>
<!-- CDN Link to SB Forms Scripts -->

  </div>


  <div class="f-body">
    <footer class="footer">
      <div class="container1">
        <div class="row1">
          <div class="footer-col">
            <h4>ANIMALERIE</h4>
            <ul>
              <li><a href="#">Produits</a></li>
              <li><a href="#">Promotion</a></li>
              <li><a href="#">Achats</a></li>
              <li><a href="#">Contact</a></li>
            </ul>
          </div>
          <div class="footer-col">
            <h4>NOUS SERVICES</h4>
            <ul>
             
              <li><a href="#">Adresse</a></li>
              <li><a href="#">Conseils</a></li>
              <li><a href="#">Commands</a></li>
              <li><a href="#">payment options</a></li>
            </ul>
          </div>
          <div class="footer-col">
            <h4>ACHAT EN LIGNE</h4>
            <ul>
              <li><a href="#">Service d'Achat</a></li>
              <li><a href="#">Offre</a></li>
              <li><a href="#">Secteur d'activité</a></li>
              <li><a href="#">About us</a></li>
            </ul>
          </div>
          <div class="footer-col">
            <h4>SUIVEZ-NOUS</h4>
            <div class="social-links">
              <a href="#"><i class="fab fa-facebook-f"></i></a>
              <a href="#"><i class="fab fa-twitter"></i></a>
              <a href="#"><i class="fab fa-instagram"></i></a>
              <a href="#"><i class="fab fa-linkedin-in"></i></a>
            </div>
          </div>
        </div>
        <br><br>
      </div><center><h6>© 2022 Animalerie en ligne Siham Alilou -Vendre des animaux et leurs fournitures. Tous droits réservés</h6> </center>
     
    </footer>


  </div>

  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF"
    crossorigin="anonymous"></script>
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>

</html>