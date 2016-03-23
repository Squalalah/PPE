<?php 
	session_start();

	require_once 'connexion.class.php';
	$ConnexionBaseSIO = new Connexion();
	$IDconnexion = $ConnexionBaseSIO->IDconnexion;
	$page = "index";
	include("include/verif-session.php");
?>

<html lang="fr">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="keywords" lang="fr" content="LOC,entreprise,assistance,conseil,informatique,depannage,logiciel" />
		<meta name="description" content="Service Après Vente Loc Entreprise" />
		<meta name="seulinkpeutvaincreganon" />
		<link rel="stylesheet" type="text/css" href="css/mep.css" media="all">
		<link rel="stylesheet" type="text/css" href="css/article.css" media="all">

		<title>LOC Entreprise</title>

	</head>

	<body>
	<?php include("include/mep.php"); ?>
	</body>

</html>
