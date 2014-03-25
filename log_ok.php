<?php
session_start();
include("connexion.php");
if( !isset($_SESSION["userId"])){
	header("location:login.php");
}

if(isset($_POST["deco"])){
	$_SESSION =array();
	unset($_SESSION);
	session_destroy();
	header("location:login.php");
}

$query ="SELECT * FROM User Where id = ".$_SESSION['userId']."";
$result = mysqli_query($connexion, $query);
$user = mysqli_fetch_array($result);
include("log_ok.html");
?>