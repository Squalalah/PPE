
<?php 

	function afficherArticle()
	{
		require_once 'connexion.class.php';
	
		$ConnexionBaseSIO = new Connexion();
		$IDconnexion = $ConnexionBaseSIO->IDconnexion;

		$article = $IDconnexion->query("select * FROM article ORDER BY id_article LIMIT 2");
?>



<div class="element" style="border-right-style: none;">
    			

    			<?php foreach($article as $donnees): ?>
    			<div class="div-article">
    				<p class="imp"><?php echo $donnees->nom_article; ?></p>
    				<hr />
    				<p><?php echo $donnees->contenu_article;?></p>
    			</div> <br />
    			<?php endforeach; ?>
</div>

	<?php } ?>