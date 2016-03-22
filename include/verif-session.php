<?php



	if(!isset($lol))
	{
		if(isset($_SESSION['pseudo']) AND isset($_SESSION['id'])) $lol = "online";
		else $lol = "offline";
	}

?>