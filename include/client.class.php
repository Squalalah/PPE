
<?php
class Client {


	private $_numclient;
	private $_nom;
	private $_prenom;
	private $_mail;
	private $_adresse;
	private $_cp;
	private $_pseudo;

  	public function __construct($num, $nom, $prenom, $mail, $adresse, $cp, $pseudo) // Constructeur demandant 2 paramètres
  	{
   		this->_numclient = $num;
   		this->_nom = $nom;
   		this->_prenom = $prenom;
   		this->_mail = $mail;
   		this->_adresse = $adresse;
   		this->_cp = $cp;
   		this->_pseudo = $pseudo;
  	}

  	public function __set($property,$value) {
  		if('_numclient') === $property && ctype_digit($value)) $this->_numclient = $value;
		if('_nom') === $property && ctype_digit($value)) $this->_nom = $value;
		if('_prenom') === $property && ctype_digit($value)) $this->_prenom = $value;
		if('_mail') === $property && ctype_digit($value)) $this->_mail = $value;
		if('_adresse') === $property && ctype_digit($value)) $this->_adresse = $value;
		if('_cp') === $property && ctype_digit($value)) $this->_cp = $value;
		if('_pseudo') === $property && ctype_digit($value)) $this->_pseudo = $value;
}

?>