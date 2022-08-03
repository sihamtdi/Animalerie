<?php 
session_start(); 
include "db_conn.php";

if (isset($_POST['uname']) && isset($_POST['password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$uname = validate($_POST['uname']);
	$pass = validate($_POST['password']);

	if (empty($uname)) {
		header("Location: formule.php?error=User Name is required");
	    exit();
	}else if(empty($pass)){
        header("Location: formule.php?error=Password is required");
	    exit();
	}else{
		$sql = "SELECT * FROM users WHERE user_name='$uname' AND password='$pass'";

		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['user_name'] === $uname && $row['password'] === $pass) {
            	$_SESSION['user_name'] = $row['user_name'];
            	$_SESSION['name'] = $row['name'];
            	$_SESSION['id'] = $row['id'];
            	header("Location: panier.php");
		        exit();
            }else{
				header("Location: formule.php?error=Incorect User name or password");
		        exit();
			}
		}else{
			header("Location: formule.php?error=Incorect User name or password");
	        exit();
		}
	}
	
}else{
	header("Location: formule.php");
	exit();
}
?>
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