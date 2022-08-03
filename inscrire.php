 <!---- register---->
<?php

$conn=mysqli_connect('localhost','root','','test_db');
$codd=$_POST['A'];
$code=$_POST['C'];
$nomm=$_POST['B'];
$req="INSERT INTO inscrire (user,email,passe)values('$codd','$code','$nomm')";
$res=mysqli_query($conn,$req);


header("Location: login.php");

?>