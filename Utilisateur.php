<?php
   
class Utilisateur {
   
    private $login;
    private $nom;
    private $prenom;
   
    // un constructeur
    public function __construct($login = NULL, $nom = NULL, $prenom = NULL) {
        if (!is_null($login) && !is_null($nom) && !is_null($prenom)) {
            $this->login = $login;
            $this->nom = $nom;
            $this->prenom = $prenom;
        }
    } 
              
}

?>

