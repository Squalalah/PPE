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

				<?php   if ($lol == "offline")
						{ ?>
							<li><a href="login.php" class="btn">Se connecter</a></li>
							<li><a href="register.php" class="btn">S'inscrire</a></li>
				<?php 	} 
						else if ($lol == "online")
						{ ?>
							<li><a href="user.php" class="btn">Mon Compte</a></li>
							<li><a href="disconnect.php" class="btn">Se Déconnecter</a></li>
				<?php   }
						else if ($lol == "connexion")
						{ ?>
							<li><a href="index.php" class="btn">Accueil</a></li>
							<li><a href="register.php" class="btn">S'inscrire</a></li>
				<?php   }
						else if ($lol == "inscription")
						{ ?>
							<li><a href="index.php" class="btn">Accueil</a></li>
							<li><a href="login.php" class="btn">Se connecter</a></li>
				<?php   } ?>
					
		
					</ul>
    			</div>
    			<div class="nav"><p class="title-nav">Services</p>
    				<ul>
						<li><a href="assistance.php" class="btn" style="font-size: 16px;">Demander de l'assistance sur un produit</a></li>
						<li><a href="#" class="btn" style="font-size: 16px;">Se faire conseiller sur un produit</a></li>
					</ul>
    			</div>
    			<?php include("nav-sql.php"); ?>

    		</div>
    	<?php 		if($page == "index") { include("include/article.php"); afficherArticle(); }
					else if($page == "login") { include("include/form-login.php"); afficherFormLogin(); }
					else if($page == "register") { include("include/form-register.php"); afficherFormRegister(); }
					else if($page == "assistance") { include("include/form-assistance.php"); afficherFormAssistance(); }
				?>
		</div>
		<footer>
			<div class="footer">
				<ul>
					<p class="p-footer"><li><a href="#">Contact</a></li></p>
					<p class="p-footer"><li><a href="#">Recrutement</a></li></p>
				</ul>
			</div>
			<div class="footer">
				<p class="p-footer">LOC Entreprise - Tout droits reservés</p>
				<p class="p-footer">Ce site est un travail pédagogique</p>
			</div>
			<div class="footer">
				Element3
			</div>
		</footer>
	</div>
</div>