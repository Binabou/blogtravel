<?php

session_start();

$login=$_POST['login'];
$password=$_POST['password'];

//Je récupere en POST les information du formulaire formulaire.php
include ('../../PDO cours/connect.php');

$requete="SELECT id FROM user ";
$query=$pdo->prepare;
$query->execute();

$res=$query->fetch(PDO::FETCH_ASSOC);

$id_ok=$res['id'];
$password_ok=$res['password'];

if ($login==$login_ok AND $password==$password_ok){
	$_session['jeton']="ok";
	header('Location:../login.php');
}



//Mis a jour de la date 
$requete= "UPDATE user SET conncetion='' where id=1";

?>