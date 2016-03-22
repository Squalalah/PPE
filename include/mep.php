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
    	<?php		if($page == "index") include("article.php");
					else if($page == "login") include("form-login.php");
					else if($page == "register") include("form-register.php");
					else if($page == "assistance") include("form-assistance.php");
				?>
		</div>

		</div>
	</div>