<?php

// define('LBROOT',getcwd()); // LegoBox Root ... the server root
// include("core/controller/Database.php");

if(!isset($_SESSION["user_id"])) {
$user = $_POST['username'];
$email = $_POST['email'];
$pass = $_POST['contrasena'];

$base = new Database();
$con = $base->connect();
 $sql = "select * from usuario where (email= \"".$email."\" or username= \"".$user."\") and contrasena= \"".$pass."\" and idtipouser=1";
//print $sql;
$query = $con->query($sql);
$found = false;
$userid = null;
while($r = $query->fetch_array()){
	$found = true ;
	$userid = $r['idusuario'];
}

if($found==true) {
//	session_start();
//	print $userid;
	$_SESSION['user_id']=$user ;
//	setcookie('userid',$userid);
//	print $_SESSION['userid'];
	print "Cargando ... $userid";
	print "<script>window.location='index.php?view=home';</script>";
}else {
	print "<script>window.location='index.php?view=login';</script>";
}

}else{
	print "<script>window.location='index.php?view=home';</script>";
	
}
?>