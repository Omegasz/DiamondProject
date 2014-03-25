<?php
session_start();
include("connexion.php");
if(isset($_POST["email"])){
	$email =$_POST ["email"];
	$password = $_POST["password"];
	$query = "SELECT * FROM User WHERE email = '".$email."' AND password = '".$password."' ; ";
	$result = mysqli_query($connexion, $query);
	if(mysqli_num_rows($result) != 0){
		$user = mysqli_fetch_array($result);
		$_SESSION["userId"] = $user['id'];
	}else{
		function myFunction()
		{
			alert("Mauvais mot de passe et/ou login.");
		}
	}
}
include('index.html');
?>