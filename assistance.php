<?php 
	session_start();

	require_once 'connexion.class.php';
	$ConnexionBaseSIO = new Connexion();
	$IDconnexion = $ConnexionBaseSIO->IDconnexion;
	$lol = 0;
	$page = "assistance";
?>

<html lang="fr">
	
	<head>
		<meta charset="UTF-8" />
		<meta name="keywords" lang="fr" content="LOC,entreprise,assistance,conseil,informatique,depannage,logiciel" />
		<meta name="description" content="Service Après Vente Loc Entreprise" />
		<meta name="seulinkpeutvaincreganon" />
		<link rel="stylesheet" type="text/css" href="css/mep.css" media="all">
		<link rel="stylesheet" type="text/css" href="css/assistance.css" media="all">

		<title>LOC Entreprise</title>

	</head>

	<body>
	<?php include("include/mep.php"); ?>
	</body>

</html>