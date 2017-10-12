<?php

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Resaurant en ligne | E-eat | <?=$page_title?> </title>
    <meta name="author" content="Tahar Sofiane">
    <meta name="title" content="Resaurant en ligne | E-eat">
    <meta name="description" content="E-eat, vous accueil dans son resaurant en linge.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="style/normalize.css">
    <link rel="stylesheet" href="style/main.css">
    <link rel="icon" href="images/images2/fav.png"/>
    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
    <![endif]-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>




</head>
<body>
<div id="wrapper">
    <header>
        <div class="nav-header">
            <div class="menu-btn"> <!-- on cree le menu hamburger qui sera caché sur version desktop et tablette -->
                <span></span>  <!-- 1ere ligne du burger-->
                <span></span>  <!-- 2eme ligne du burger-->
                <span></span>  <!-- 3eme ligne du burger-->
            </div>
            <div id="logo">
                <img id="pic-logo" src="images/images2/logo-first.png" alt="pic du logo"/>
            </div>
            <div class="responsive-menu">
                <ul>
                    <li><a href="index.php">Acceuil</a></li>
                    <li><a href="connexion.php">Connexion</a></li>
                    <li><a href="creer_compte.php">Créez un compte</a></li>
                    <li><a href="livraison.php">Livraison</a></li>
                    <li><a href="nous_contacter.php">Nous contater</a></li>
                    <li><a href="#">English</a></li>
                </ul>
            </div>
        </div>

    </header>

