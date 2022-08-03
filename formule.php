<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset='utf-8'>
  <meta http-equiv='X-UA-Compatible' content='IE=edge'>
  <title>documment</title>
  <meta name='viewport' content='width=device-width, initial-scale=1'>
  <link rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
  integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn"
  crossorigin="anonymous">
  <link rel="stylesheet"type="text/css" href="document.css">
  <link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">


</head>

     <body>
      <div class="hero">
        <div class="form-box">
         <div class="button-box">
             <div id="btn"></div>
              <button type="button" class="toggle-btn" onclick="login()">Log In</button>
               <button type="button" class="toggle-btn" onclick="Register()">Register</button>  
         </div>
        <img src="image\contact.png" class="logoimg" width="100px" height="100">
        <form method="POST" action="login.php" id="login" class="iput-group">
          <br><br>
          <?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
            <input type="text" class="input-field"     name="uname"     placeholder=" User Name" required>
            <input type="password" class="input-field"      name="password"     placeholder=" Password " required>
            <input type="checkbox" class="check-box"><span>souviens-toi de moi </span>
            <button type="submit" class="submit-btn">Connexion</button>
            
        </form>
        <form method="POST" action="inscrire.php" id="Register" class="iput-group">
          <br>
            <input type="text" class="input-field"    name="A"    placeholder=" Identifiant d'utilisateur" required>
            <input type="email" class="input-field"    name="C"    placeholder=" Email ID" required>
            <input type="password" class="input-field"     name="B"    placeholder=" Entrez Mot de passe " required>
            <input type="checkbox" class="check-box"><span>J'accepte les termes & conditions </span>
            <button type="submit" class="submit-btn">S'inscrire</button>
            
        </form>
        </div>
   </div>
<script>
  var x = document.getElementById("login");
  var y= document.getElementById("Register");
  var z= document.getElementById("btn");

    function Register(){
        x.style.left = "-400px";
        y.style.left = "50px";
        z.style.left = "110px";
    }
    function login(){
        x.style.left = "50px";
        y.style.left = "450px";
        z.style.left = "0";
    }

</script>

     </body>
     <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
     
     
</html>