<?php
if(!isset($_POST['pikachu'])) {
    exit('Erreur : nom du Pokémon manquant.');
}

$name = $_POST['pikachu']; // Récupère le nom du Pokémon envoyé par le formulaire dans la balise  
$fichier = fopen("pokedex.txt", "a+"); // Ouvre le fichier pokedex.txt en mode ajout

fwrite($fichier, "$name\n"); // Écrit le nom du Pokémon dans le fichier

fclose($fichier); // Ferme le fichier
echo "Le Pokémon $name a été ajouté au Pokédex !";
?>
<a href="/">Retour à l'accueil</a>
