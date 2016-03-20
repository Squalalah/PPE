<?php
require_once 'MyPDO.class.php';

class Connexion{

    private $PARAM_hote='localhost'; // le nom du serveur de BDD
    private $PARAM_utilisateur='root'; // nom d'utilisateur pour se connecter à la BDD
    private $PARAM_mot_passe=''; // mot de passe de l'utilisateur pour se connecter à la BDD
    private $PARAM_nom_bd='bdd_loc'; //nom de ma base de données
	
    private $IDconnexion;
	
    public function __construct() {
    	try {
    		
    		$this->IDconnexion = new MyPDO('mysql:host='.$this->PARAM_hote.';dbname='.
			$this->PARAM_nom_bd, $this->PARAM_utilisateur, $this->PARAM_mot_passe);
    		//echo '<script>alert ("ok connex");</script>)';echo $this->PARAM_nom_bd;
    	}
    	catch (PDOException $e)
    	{
    		echo 'hote: '.$this->PARAM_hote.' '.$_SERVER['DOCUMENT_ROOT'].'<br />';
    		echo 'Erreur : '.$e->getMessage().'<br />';
    		echo 'N° : '.$e->getCode();
    		$this->IDconnexion=false;
    		//echo '<script>alert ("pbs acces bdd");</script>)';
    	}
    }
    public function __get($propriete) {
    	switch ($propriete) {
    		case 'IDconnexion' :
    			{
    				return $this->IDconnexion;
    				break;
    			}
    	}
    }
}?>
