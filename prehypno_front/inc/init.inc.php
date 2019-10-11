<?php
// Connexion à la BDD :
try {
    $pdo = new PDO(
        'mysql:host=localhost;dbname=anse_hhp',
        'root',
        '',
        array(
            PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING,
            PDO::MYSQL_ATTR_INIT_COMMAND => 'set NAMES utf8',
        )
    );
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}
// SESSION :
session_start();
//------ CHEMIN
define("RACINE_SITE", $_SERVER['DOCUMENT_ROOT'] . '/AnseTest/prehypno_front/');
// $_SERVER['DOCUMENT_ROOT'] --> C:/xampp/htdocs
// Lors de l'enregistrement d'image / photos, nous aurons besoin du chemin physique complet pour enregistrer la photo dans le bon dossier
// echo RACINE_SITE;
define("URL", "http://localhost/AnseTest/prehypno_front/");
//echo URL;
// cette constante servira entre autre à enregistrer l'URL d'une photo / image dans la BDD, on ne conserve jamais la photo elle même, ce serait trop lourd pour la BDD

require_once 'fonction.php';