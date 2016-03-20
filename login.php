<?php 

	session_start();

	require_once 'connexion.class.php';
	$ConnexionBaseSIO = new Connexion();
	$IDconnexion = $ConnexionBaseSIO->IDconnexion;
	$lol = 0; 

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

<div id="div-mep">
		<div id="div-slogan">
				<a href="index.php"><img src="img/header.jpg" alt="Header logo entreprise loc" /></a>
				<!--<img id="logo" src="img/logo.png" alt="Logo Entreprise Loc" />
				<p> Chaque problème a une solution ! Made by Squalalah </p>-->
				
		</div>
		<div id="conteneur">
    		<div class="element">
    			<div class="nav"><p class="title-nav">Navigation</p>
					<ul>

				<?php   if ($lol == 0)
						{ ?>
							<li><a href="index.php" class="btn">Accueil</a></li>
							<li><a href="register.php" class="btn">S'inscrire</a></li>
				<?php 	} 
						else 
						{ ?>
							<li><a href="#" class="btn">Mon Compte</a></li>
							<li><a href="#" class="btn">Se Déconnecter</a></li>
				<?php   } ?>

					</ul>
    			</div>
    			<div class="nav"><p class="title-nav">Services</p>
    				<ul>
						<li><a href="#" class="btn" style="font-size: 16px;">Demander de l'assistance sur un produit</a></li>
						<li><a href="#" class="btn" style="font-size: 16px;">Se faire conseiller sur un produit</a></li>
					</ul>
    			</div>
    			<?php include("include/nav-sql.php"); ?>

    		</div>

    		<div class="element" style="border-right-style: none;">
    			<div class="div-logreg" style="border-top-style: none;">
    				<p class="imp">Connexion</p>
    				<hr />
    				<form action="#" method="POST">

    					<label for="pseudo">Nom d'utilisateur : </label><input type="text" title="co" name="pseudo" placeholder="Votre pseudonyme" required autofocus /><br />
    					<label for="password">Mot de passe : </label><input type="password" title="co" name="password" placeholder="Votre mot de passe" required />
    					<input type="submit" id="submit" name="submit" value="Valider" />


    					<p>Note : En vous connectant au site, vous acceptez de perdre l'intégralité de vos droits</p>

    				</form>
    			</div>
			</div>
    		</div>
		</div>

		</div>
	</div>	

</body>


</html>