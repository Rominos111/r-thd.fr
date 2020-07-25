<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <!-- meta http-equiv="X-UA-Compatible" content="IE=edge" /-->
        <title><?php
                if (isset($_SESSION["pageTitle"]) && $_SESSION["pageTitle"] != "") {
                    echo $_SESSION["pageTitle"];
                }
                else {
                    echo "placeholder";
                }
            ?></title>
        <meta name="description" content="Ma page perso yes" />
        <meta name="author" content="Romain">
        <link rel="shortcut icon" href="/public_html/resources/icons/favicon.ico" type="image/x-icon">
        <link rel="apple-touch-icon" sizes="180x180" href="/public_html/resources/icons/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/public_html/resources/icons/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/public_html/resources/icons/favicon-16x16.png">
        <link rel="manifest" href="/public_html/resources/icons/site.webmanifest">
    </head>

    <body>
