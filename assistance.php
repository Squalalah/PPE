<?php 
	session_start();

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

	<?php 
		if(isset($_SESSION['id'])) include("include/mep.php");
		else header('Location: login.php'); ?>
	</body>

</html>