<?php 

$voiture1 = array(
    "marque" => "Renault",
    "couleur" => "bleu",
    "immatriculation" => "YYY"
);

$voiture2 = array(
    "marque" => "Toyota",
    "couleur" => "rouge",
    "immatriculation" => "ZZZ"
);

$voitures = array($voiture1, $voiture2);

var_dump($voitures);

if (empty($voitures)) {
    echo "Il n'y a pas de voiture";
} else {
    foreach($voitures as $voiture) {
        echo "<p>Voiture $voiture[immatriculation] de marque $voiture[marque] (couleur $voiture[couleur])</p>";
}
}

?>

