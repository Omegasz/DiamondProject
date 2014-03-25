<?php
session_start();
include("connexion.php");

if(isset($_POST["deco"])){
	$_SESSION =array();
	unset($_SESSION);
	session_destroy();
	header("location:index.php");
}

?>