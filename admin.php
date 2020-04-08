<?php
session_start();
// TODO: Vérifier que le boolean d'admin du user loggé est à 1 sinon return
if (!$_SESSION['user']['admin']) {
    return (-1);
}

/*function admin($name, $synop, $actors, $reals, $genres, $note)
{*/
$DB_NAME = "dbs296631"; //database_name
$DB_DSN = "mysql:host=db5000303644.hosting-data.io;dbname=" . $DB_NAME; //database_datasourcename
$DB_USER = "dbu526586"; //database_user
$DB_PASSWORD = "u:Z2H^7n"; //database_mot_de_passe

try {
    $bdd = new PDO($DB_DSN, $DB_USER, $DB_PASSWORD);
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Configure un attribut PDO
    $query = $bdd->prepare("INSERT INTO movies (name, synop, actors, reals, genres, note) VALUES (:name, :synop, :actors, :reals, :genres, :note)"); // inserer des valeurs dans la base
    $query->execute(array(':name' => $_POST['name'], ':synop' => $_POST['synop'], ':actors' => $_POST['actors'], ':reals' => $_POST['reals'], ':genres' => $genres, 'note' => $note)); // Exécute une requête préparée
    echo 'Create success !';
    return (0);
} catch (PDOException $e) {
}
//}
