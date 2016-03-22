<?php

	if($lol != "connexion" AND $lol != "inscription")
	{
		if(isset($_SESSION['pseudo']) AND isset($_SESSION['id'])) $lol = "online";
		else $lol = "offline;"
	}

?>