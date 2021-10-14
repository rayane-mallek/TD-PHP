<?php
$ROOT_FOLDER = "/home/ann2/mallekr/public_html/PHP";
require_once "{$ROOT_FOLDER}/lib/File.php";

require_once File::build_path(array("model","Model.php"));
   
  
class ModelVoiture {
   
    private $marque;
    private $couleur;
    private $immatriculation;
   
    // un getter      
    public function getMarque() {
        return $this->marque;
    }

    public function getCouleur() {
        return $this->couleur;
    }

    public function getImmatriculation() {
        return $this->immatriculation;
    }
   
    // un setter 
    public function setMarque($m) {
        $this->marque = $m;
    }

    public function setCouleur($c) {
        $this->couleur = $c;
    }

    public function setImmatriculation($i){
        if (strlen($i) <= 8) {
            $this->immatriculation = $i;
        }
        
    }
   
    // un constructeur
    public function __construct($i = NULL, $m = NULL, $c = NULL) {
        if (!is_null($m) && !is_null($c) && !is_null($i)) {
        // Si aucun de $m, $c et $i sont nuls,
        // c'est forcement qu'on les a fournis
        // donc on retombe sur le constructeur à 3 arguments
        $this->marque = $m;
        $this->couleur = $c;
        $this->immatriculation = $i;
        }
    }
                 
    // une methode d'affichage.
    /*public function afficher() {
      echo "Marque : $this->marque,
      Couleur : $this->couleur,
      Immatriculation : $this->immatriculation.";
    }*/

    public static function getAllVoitures() {
        $rep = Model::getPDO()->query("SELECT * FROM voiture");
        $rep->setFetchMode(PDO::FETCH_CLASS, 'ModelVoiture');
        $tab_voit = $rep->fetchAll();

        return $tab_voit;
    }

    public static function getVoitureByImmat($immat) {
        $sql = "SELECT * from voiture WHERE immatriculation=:nom_tag";
        // Préparation de la requête
        $req_prep = Model::getPDO()->prepare($sql);
    
        $values = array(
            "nom_tag" => $immat,
            //nomdutag => valeur, ...
        );
        // On donne les valeurs et on exécute la requête	 
        $req_prep->execute($values);
    
        // On récupère les résultats comme précédemment
        $req_prep->setFetchMode(PDO::FETCH_CLASS, 'ModelVoiture');
        $tab_voit = $req_prep->fetchAll();
        // Attention, si il n'y a pas de résultats, on renvoie false
        if (empty($tab_voit))
            return false;
        return $tab_voit[0];
    }

    public function save() {
        $sql = "INSERT INTO voiture VALUES (:immat, :marque, :couleur)";
        $values = array(
            "immat" => $this->immatriculation,
            "marque" => $this->marque,
            "couleur" => $this->couleur
        );
        $req_prep = Model::getPDO()->prepare($sql);
        $req_prep->execute($values);
    }
}

?>

