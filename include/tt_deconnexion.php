



<?php
	
	function afficherDeconnexion()
	{
		session_destroy();
		header('Location: index.php');
	} 
?>