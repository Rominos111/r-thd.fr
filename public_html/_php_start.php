<?php

var_dump($_SESSION["pageTitle"]);

// Début de l'écriture
ob_start();

// Début de session
session_start();

// Affichage des message de debug
ini_set("display_errors", 1);
ini_set("display_startup_errors", 1);
error_reporting(E_ALL);

// Ajout de /includes au path
set_include_path(get_include_path() . PATH_SEPARATOR . $_SERVER["DOCUMENT_ROOT"] . "/../includes");

// Gestion des méthodes PATCH et DELETE
switch ($_SERVER["REQUEST_METHOD"]) {
    case "PATCH":
        parse_str(file_get_contents('php://input'), $_PATCH);
        break;

    case "DELETE":
        parse_str(file_get_contents('php://input'), $_DELETE);
        break;

    default:
        break;
}

require "php/head.php";
require "php/header.php";
