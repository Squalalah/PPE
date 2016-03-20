<?php 

	session_start();

	require_once 'connexion.class.php';
	$ConnexionBaseSIO = new Connexion();
	$IDconnexion = $ConnexionBaseSIO->IDconnexion;


	for ($i = 0; $i < 5;$i++)
	{
		$code = array(rand(1000,9999),rand(1000,9999),rand(1000,9999),rand(1000,9999));
		echo $code[0] . "-" . $code[1] . "-" . $code[2] . "-" . $code[3] . "<br />";
	}
