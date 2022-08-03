
<?php session_start();?>

<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords"
        content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Ample lite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Ample admin lite dashboard bootstrap 5 dashboard template">
    <meta name="description"
        content="Ample Admin Lite is powerful and clean admin dashboard template, inpired from Bootstrap Framework">
    <meta name="robots" content="noindex,nofollow">
    <title>Animaux Shop</title>
    <link href="style.min.css" rel="stylesheet">
    <link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/flickity@2.0.11/dist/flickity.min.css">
    <link rel="canonical" href="https://www.wrappixel.com/templates/ample-admin-lite/" />
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="plugins/images/favicon.png">
    <!-- Custom CSS -->
    <link href="plugins/bower_components/chartist/dist/chartist.min.css" rel="stylesheet">
    <link rel="stylesheet" href="plugins/bower_components/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.css">
    <!-- Custom CSS -->
   
    <link rel="stylesheet" href="script.js">


</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->

    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin5">
       
            <nav class="navbar fixed-top navbar-expand-lg  navbar-light" style="background-color: #07540b;">
                <img href="article.html" src="image/logg.png" width="250" height="50" class="d-inline-block
                      align-top" alt="image">
            
                <a class="navbar-brand" href="index.html"></a>
                <br>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                  aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
            
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav mx-auto">
                    <li class="nav-item ">
              <a class="nav-link text-white" href="index.html"style="font-size: 17px;"><i class='fas fa-paw'></i> Home<span
                          class="sr-only">(current)</span></a>
                    </li>
            
                    <li class="nav-item">
                      <a class="nav-link  text-white"style="font-size: 17px;" href="dashboard.html">Magasin<span class="sr-only"></span></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link text-white" style="font-size: 17px;"href="article.html">Blog<span class="sr-only"></span></a>
                    </li>
                    <li class="nav-item ">
                      <a class="nav-link text-white"style="font-size: 17px;" href="https://www.chienvieetsante.com/wp-content/uploads/2019/10/Dossier-classement-croquettes.pdf">Marques<span class="sr-only"></span></a>
                    </li>
                   <li class="nav-item ">
                      <a class="nav-link text-white"style="font-size: 17px;" href="contact.php">Contact</a>
                    </li>
                    
                    
                </div>
                <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button"
            data-toggle="dropdown" aria-expanded="false" class="profile-pic" href="#" >
            <img src="plugins/images/user3.png" alt="user-img"  height="20" width="34" class="img-circle" style="margin-right:10px;"
      ><span  class="text-white font-medium"><?php echo$_SESSION["user_name"];?> </span></a>
                        
                       
     
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
         
           
            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal"style="color:black;">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Déconnecter
                </a>
                </li>


            
                
                  </ul>
               
              </nav>
   
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <br>
  
        <aside class="left-sidebar" data-sidebarbg="skin6"    style="background-color:#ffffff;">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->

                <br><br>
                <nav class="sidebar-nav">
                    <ul id="sidebarnav"style="background-color:#ffffff;">
                        <!-- User Profile-->
                        <li class="sidebar-item pt-2">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="dashboard.html"
                                aria-expanded="false" >
                                <i class='fas fa-paw' style="color: #0c0c0c;"></i>
                                <span class="hide-menu" style="color: #0c0c0c;">Catégorie</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="chiens.html"
                                aria-expanded="false">
                                <i class='fas fa-dog'style="color: #0b0b0b;"></i>
                                <span class="hide-menu" style="color: #0b0b0b;" >Chiens</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="chat.html"
                                aria-expanded="false">
                                <i class='fas fa-cat'style="color: #0b0b0b;"></i>
                                <span class="hide-menu" style="color: #0b0b0b;">Chats</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="oiseaux.html"
                                aria-expanded="false">
                                <i class='fas fa-dove'style="color: #0b0b0b;"></i> 
                                <span class="hide-menu" style="color: #0b0b0b;">Oiseaux</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="poisson.html"
                                aria-expanded="false">
                                <i class='fas fa-fish'style="color: #0b0b0b;"></i>
                                <span class="hide-menu" style="color: #0b0b0b;">Poissons</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                          <a class="sidebar-link waves-effect waves-dark sidebar-link" href="formule.php"
                              aria-expanded="false">
                              <i class='fas fa-cart-plus' style="color: #0b0b0b;"></i>
                              <span class="hide-menu" style="color: #0b0b0b;">Panier</span>
                          </a>
                      </li>
                    </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
<center><h4 style="margin-top:25px;">  <i class='fas fa-cart-plus' style="color: #0b0b0b;"></i> Mon Paiement</h4></center>

<div class="container-fluid" style="margin-top:5px;">
        <div class="row">
            <aside class="col-lg-9">
                <div class="card">
                    <div class="table-responsive" style="background-color:#ffffff;">
                    <form>
                        <table class="table table-borderless table-shopping-cart">
                            <thead class="text-muted">
                                <tr class="small text-uppercase">
                                    <th scope="col">Product</th>
                                    <th scope="col" width="120">Quantity</th>
                                    <th scope="col" width="120">Price</th>
                                    <th scope="col" class="text-right d-none d-md-block" width="200"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <figure class="itemside align-items-center">
                                            <div class="aside"><img src="image\a1.jpg" height="80" width="80" class="img-sm"></div>
                                            <figcaption class="info"> <a href="#" class="title text-dark" data-abc="true">Croquettes vasino</a>
                                                <p class="text-muted small">5kg <br> chats</p>
                                            </figcaption>
                                        </figure>
                                    </td>
                                    <td> <select class="form-control">
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                        </select> </td>
                                    <td>
                                        <div class="price-wrap"> <var class="price">$5.00</var> <small class="text-muted"> $9.20 each </small> </div>
                                    </td>
                                    <td class="text-right d-none d-md-block"> <a data-original-title="Save to Wishlist" title="" href="" class="btn btn-light" data-toggle="tooltip" data-abc="true"> <i class="fa fa-heart"></i></a> <a href="" class="btn btn-light" data-abc="true"> Remove</a> </td>
                                </tr>
                                <tr>
                                    <td>
                                        <figure class="itemside align-items-center">
                                            <div class="aside"><img src="image\food3.jpg" height="80" width="80" class="img-sm"></div>
                                            <figcaption class="info"> <a href="#" class="title text-dark" data-abc="true"> Croquettes Royal Canin</a>
                                                <p class="text-muted small">15kg<br> Chiens </p>
                                            </figcaption>
                                        </figure>
                                    </td>
                                    <td> <select class="form-control">
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                        </select> </td>
                                    <td>
                                        <div class="price-wrap"> <var class="price">$39.00</var> <small class="text-muted"> $12 each </small> </div>
                                    </td>
                                    <td class="text-right d-none d-md-block"> <a data-original-title="Save to Wishlist" title="" href="" class="btn btn-light" data-toggle="tooltip" data-abc="true"> <i class="fa fa-heart"></i></a> <a href="" class="btn btn-light btn-round" data-abc="true"> Remove</a> </td>
                                </tr>
                                <tr>
                                    <td>
                                        <figure class="itemside align-items-center">
                                            <div class="aside"><img src="image\o1.jpg" height="80" width="80" class="img-sm"></div>
                                            <figcaption class="info"> <a href="#" class="title text-dark" data-abc="true">Aliments Prestige</a>
                                                <p class="small text-muted">5kg <br> Oiseaux</p>
                                            </figcaption>
                                        </figure>
                                    </td>
                                    <td> <select class="form-control">
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                        </select> </td>
                                    <td>
                                        <div class="price-wrap"> <var class="price">$9</var> <small class="text-muted"> $6 each</small> </div>
                                    </td>
                                    <td class="text-right d-none d-md-block"> <a data-original-title="Save to Wishlist" title="" href="" class="btn btn-light" data-toggle="tooltip" data-abc="true"> <i class="fa fa-heart"></i></a> <a href="" class="btn btn-light btn-round" data-abc="true"> Remove</a> </td>
                                </tr>
                                
                                <tr>
                                    <td>
                                   
                                    </td>
                                    <td>  <h4 >Totale :</h4><td>
                                        <div class="price-wrap"> <var class="price">$53.9</var> <small class="text-muted"> $6 each</small> </div>
                                    </td>
                                   
                                   
                                    <td class="text-right d-none d-md-block"> <input href="" class="btn btn-light btn-round"  type="reset" value="Vider" ><input href="" class="btn btn-light btn-round"  type="button" value="Somme" onclick="food()"  ></td>
                                    <br>
                                  
                               
                                </tr>
                                
                            </tbody>
                            
                        </table>
                                 
                               <center>
                                <td> <input href=""  class="btn btn-light btn-round"  type="button" value="Envoyer" onclick="food()"  > </td>
</center>

</form>
                    </div>
                </div>
            </aside>
           
        </div>
    </div>

    </div>

                  
            
          
                    <?php $servername = "localhost";
$username = "root";
$password = "";
$dbname = "test_db";
$qte = 0;
$qt = 0;
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);?>
    <!-- ============================================================== -->


               
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Three charts -->
                <!-- ============================================================== -->
               
                        
                </div>
                <!-- ============================================================== -->
                <!-- PRODUCTS YEARLY SALES -->
                <!-- ============================================================== -->
               
        </div>
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Prêt à partir ?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Sélectionnez « Déconnexion » ci-dessous si vous êtes prêt à mettre fin à votre session en cours.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Annuler</button>

          <form action="logout.php" method="POST"> 
          
            <button type="submit" name="logout_btn" class="btn btn-primary">Se déconnecter</button>

          </form>


        </div>
      </div>
    </div>
  </div> 
  <div class="f-body">
    <footer class="footer">
      <div class="container1">
        <div class="row1">
          <div class="footer-col">
            
            <ul>
                <img href="index.html" src="image/logg.png" width="250" height="50" alt="image">
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

    <!-- ============================================================== -->
    <script src="plugins/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/app-style-switcher.js"></script>
    <script src="plugins/bower_components/jquery-sparkline/jquery.sparkline.min.js"></script>
    <!--Wave Effects -->
    <script src="js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="js/custom.js"></script>
    <!--This page JavaScript -->
    <!--chartis chart-->
    <script src="plugins/bower_components/chartist/dist/chartist.min.js"></script>
    <script src="plugins/bower_components/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF"
    crossorigin="anonymous"></script>
    
</body>

</html>