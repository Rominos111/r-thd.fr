<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <!-- Website -->
        <meta charset="utf-8" />
        <title><?php
                if (isset($_SESSION["pageTitle"]) && $_SESSION["pageTitle"] != "") {
                    echo $_SESSION["pageTitle"];
                }
                else {
                    echo "placeholder";
                }
            ?></title>
        <meta name="description" content="Ma page perso yes" />
        <meta name="author" content="Romain" />
        <base href="www.r-thd.fr" target="_blank">
        <meta name="keywords" content="Romain THEODET, Romain, THEODET" />

        <!-- Mobile -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes, shrink-to-fit=no" />
        <meta name="handheldFriendly" content="false" />

        <!-- Icons -->
        <link rel="shortcut icon" href="/resources/icons/favicon.ico" type="image/x-icon">
        <link rel="apple-touch-icon" sizes="180x180" href="/resources/icons/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/resources/icons/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/resources/icons/favicon-16x16.png">
        <link rel="manifest" href="/resources/icons/site.webmanifest">

        <!-- Facebook OpenGraph -->
        <meta property="og:title" content="Romain le dev">
        <meta property="og:type" content="website">
        <meta property="og:description" content="Site perso de Romain le plus beau">
        <meta property="og:image" content="/resources/icons/favicon.ico">
        <meta property="og:url" content="www.r-thd.fr">
        <meta property="og:locale" content="fr_FR">
        <meta property="og:site_name" content="Romain">

        <!-- Twitter -->
        <meta name="twitter:card" content="summary">
        <meta name="twitter:creator" content="@Rominos111">
        <meta name="twitter:title" content="Romain le dev">
        <meta name="twitter:description" content="Site perso de Romain le plus beau">

        <!-- IE -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

        <!--[if lt IE 9]>
        <script>
            document.createElement("header");
            document.createElement("footer");
            document.createElement("section");
            document.createElement("aside");
            document.createElement("nav");
            document.createElement("article");
            document.createElement("hgroup");
            document.createElement("time");
        </script>
        <![endif]-->
<?php // https://blog.alexdevero.com/what-to-put-inside-head-of-html/ ?>

        <!-- Resources -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    </head>

    <body>
