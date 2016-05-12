<?php 

    require_once 'connexion.class.php';
    $ConnexionBaseSIO = new Connexion();
    $IDconnexion = $ConnexionBaseSIO->IDconnexion;
    $lol = 0; 

    $recherches = $IDconnexion->query("select LIBELLEPROD FROM produit ORDER BY OCCURPROD DESC LIMIT 10");
    $marque = $IDconnexion->query("select * FROM marque ORDER BY LIBELLEMARQUE");
    
    ?>

                <div class="nav"><p class="title-nav">Les meilleurs recherches</p>
    				<ul>
    			<?php foreach($recherches as $donnees): ?>
							<li><a href="#" class="btn" style="font-size: 16px;"><?php echo $donnees->LIBELLEPROD; ?></a></li>
				<?php endforeach; ?>
					</ul>
    			</div>
                
    			<div class="nav"><p class="title-nav">Nos Partenaires</p>
    				<ul>
    			<?php foreach($marque as $donnees): ?>
							<li><a href="<?php echo $donnees->URLMARQUE; ?>" class="btn" style="font-size: 16px;">
                            <?php echo $donnees->LIBELLEMARQUE; ?></a></li>
				<?php endforeach; ?>
					</ul>
    			</div>