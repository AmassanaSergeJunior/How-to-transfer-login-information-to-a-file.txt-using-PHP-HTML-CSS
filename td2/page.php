<?php
if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $date = $_POST['date'];
    $sex = $_POST['sex'];
    $matricule = $_POST['matricule'];
    $filiere = $_POST['filiere'];

    $donnees = "Nom : $nom\nPrénom : $prenom\ndate : $date\nsexe : $sex\nMatricule : $matricule\nFiliere : $filiere\n ";

    // Enregistre les données dans un fichier texte
    file_put_contents('donnees.txt', $donnees, FILE_APPEND);

    // Affiche un message de succès
    echo "Les données ont été enregistrées avec succès dans le fichier texte.";

}






?>