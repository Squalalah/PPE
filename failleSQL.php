<?php 

	session_start();

	require_once 'connexion.class.php';
	$ConnexionBaseSIO = new Connexion();
	$IDconnexion = $ConnexionBaseSIO->IDconnexion;
	$lol = 0; 


	if(isset($_POST['pseudo']) AND isset($_POST['password']))
	{ // On verifie si les variables pseudo et password existent (si le formulaire a été envoyé)
		//Si OUI
		$pseudo = $_POST['pseudo'];
		$password = $_POST['password'];


		//echo $us;
		//echo $ps;
		//echo "<br />";
		//echo 'select * FROM client WHERE pseudo = ".$us." AND password = ".$ps."';
		

		$requete = $IDconnexion->prepare("select * FROM client WHERE pseudo = :pseudo AND password = :password ");
		$requete->bindValue('pseudo', $pseudo, PDO::PARAM_STR);
		$requete->bindValue('password', $password, PDO::PARAM_STR);
		$requete->execute();

		$sql = $requete->rowCount();
		if($sql == 1) echo "connexion reussit !";
		else echo "Erreur dans la connexion !";
	}
	
?>


<html>


<body>


<form method="POST" action="#">
	<input type="text" name="pseudo" />
	<input type="password" name="password" />
	<input type="submit" value="submit" name="submit" />
</form>

</body>

</html>

