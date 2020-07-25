<?php

$page = (isset($_GET["page"])) ? $_GET["page"] : "";

$pageTitle = "";

switch ($page) {
    case "":
        $pageTitle = "Accueil";
        break;

    case "404":
    default:
        $pageTitle = "Erreur";
}

$_SESSION["pageTitle"] = $pageTitle;

include "./includes/pages/head.php";
include "./includes/pages/header.php";

switch ($page) {
    case "":
    case "accueil":
        include "./includes/pages/accueil.php";
        break;

    case "404":
    default:
        include "./includes/pages/404.php";
        break;
}

include("./includes/pages/footer.php");
include("./includes/pages/end.php");