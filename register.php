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
				<?php 	} 
						else 
						{ ?>
							<li><a href="#" class="btn">Mon Compte</a></li>
							<li><a href="#" class="btn">Se Déconnecter</a></li>
				<?php   } ?>

					</ul>
    			</div>
    			<div class="nav"><p class="title-nav">Propositions</p>
    				<ul>
						<li><a href="#" class="btn" style="font-size: 16px;">Demander de l'assistance sur un produit</a></li>
						<li><a href="#" class="btn" style="font-size: 16px;">Se faire conseiller sur un produit</a></li>
					</ul>
    			</div>
    			<?php include("include/nav-sql.php"); ?>

    		</div>

    		<div class="element" style="border-right-style: none;">
    			<div class="div-logreg" style="border-top-style: none;">
    				<p class="imp">Inscription</p>
    				<hr />
    				<form action="#" method="POST">

    					<label for="ins-pseudo">Nom d'utilisateur : </label><input type="text" title="ins" name="ins-pseudo" placeholder="Pseudonyme choisi" required autofocus /><br />
    					<label for="ins-password">Mot de passe : </label><input type="text" title="ins" name="ins-password" placeholder="Mot de passe choisi" required /><br />
    					<label for="insc-password">Confirmer mot de passe : </label><input type="text" title="ins" name="insc-password" required /><br />
    					<label for="ins-mail">Adresse Mail : </label><input type="email" title="ins" name="ins-mail" required /><br />
    					<!--<label for="code">Code Produit : </label><input type="text" name="code" placeholder="Code produit donné lors de l'achat du produit" required /><br /> -->
    					
    					<label for="code1">Code produit :</label>
    					<input class="code" type="text" name="code1" placeholder="XXXX" maxlength="4" minlength="4">
    					<input class="code" type="text" name="code2" placeholder="XXXX" maxlength="4" minlength="4">
    					<input class="code" type="text" name="code3" placeholder="XXXX" maxlength="4" minlength="4">
    					<input class="code" type="text" name="code4" placeholder="XXXX" maxlength="4" minlength="4">
    					<p>En vous inscrivant, vous allez lu et approuvé nos <a href="#">Conditions Générales d'Utilisation</a>.</p><br />
    					<input type="submit" id="submit" name="ins-submit" value="Valider" />

    				</form>
    			</div>
			</div>
    		</div>
		</div>

		</div>
	</div>	

</body>


</html>