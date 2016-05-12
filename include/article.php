
<?php 

	function afficherArticle()
	{
		require_once 'connexion.class.php';
	
		$ConnexionBaseSIO = new Connexion();
		$IDconnexion = $ConnexionBaseSIO->IDconnexion;

		$article = $IDconnexion->query("select * FROM article ORDER BY numarticle LIMIT 2");
?>



<div class="element" style="border-right-style: none;">
    			

    			<?php foreach($article as $donnees): ?>
    			<div class="div-article">
    				<p class="imp"><?php echo $donnees->TITRE; ?></p>
    				<hr />
    				<p><?php echo $donnees->CONTENU;?></p>
    			</div> <br />
    			<?php endforeach; ?>
</div>

	<?php } ?>