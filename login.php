<?php 

	session_start();

	require_once 'connexion.class.php';
	$ConnexionBaseSIO = new Connexion();
	$IDconnexion = $ConnexionBaseSIO->IDconnexion;
	$lol = "connexion"; 

	?>


<html lang="fr">

<head>

	<meta charset="UTF-8" />
	<meta name="keywords" lang="fr" content="LOC,entreprise,assistance,conseil,informatique,depannage,logiciel" />
	<meta name="description" content="Service Après Vente Loc Entreprise" />

	<link rel="stylesheet" type="text/css" href="css/mep.css" media="all">
	<link rel="stylesheet" type="text/css" href="css/login.css" media="all">

</head>


<body>

<?php include("mep.php"); ?>	

</body>


</html>