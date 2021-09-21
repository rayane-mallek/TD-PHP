<?php
   
class Trajet {
   
    private $id;
    private $depart;
    private $arrivee;
    private $date;
    private $nbplaces;
    private $prix;
    private $conducteur_login;

   
    // un constructeur
    public function __construct($data = NULL) {
        if (!is_null($data)) {
            foreach($data as $nom_attribut => $valeur) {
                $this->nom_attribut = $valeur;
            }
        }
    } 

    public function get($nom_attribut) {
        return $objet->$nom_attribut;
    }

    public function set($nom_attribut, $valeur) {
        $objet->$nom_attribut = $valeur;
    }
              
}

?>

