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
						<li><a href="index.php" class="btn">Accueil</a></li>

				<?php   if (!isset($_SESSION['id']))
						{ ?>
							<li><a href="login.php" class="btn">Se connecter</a></li>
							<li><a href="register.php" class="btn">S'inscrire</a></li>
				<?php 	} 
						else
						{ ?>
							<li><a href="compte.php" class="btn">Mon compte</a></li>
							<li><a href="disconnect.php" class="btn">Se déconnecter</a></li>
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
					else if($page == "contact") { include("include/form-contact.php"); afficherFormContact(); }
					else if ($page == "compte") { include("include/gerer_compte.php"); afficherGererCompte(); }
				?>
		</div>
		<footer>
			<div class="footer">
				<ul>
					<p><li><a href="contact.php">Contact</a></li></p>
					<p><li><a href="#">Recrutement</a></li></p>
				</ul>
			</div>
			<div class="footer">
				<p class="p-footer">LOC Entreprise - Tout droits reservés</p>
				<p class="p-footer">Ce site est un travail pédagogique</p>
			</div>
			<div class="footer">
				<p class="p-footer">Developpé par Anthony Montreuil</p>
				<p class="p-footer">Projet PPE 2.2 - Chevrollier BTS SIO</p>
			</div>
		</footer>
	</div>
</div>