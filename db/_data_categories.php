<?php
/**
 * Fichier de déclaration des données de categories de la Pépinière Dominique
 */

/**
 * Déclaration des clefs des champs des items de catégorie
 */
define('CAT_NAME', 'cat_name'); // Nom de catégorie (string)
define('CAT_IMG', 'cat_img'); // Fichier image de catégorie (string)
define('CAT_DESC', 'cat_desc'); // Description de catégorie (string - HTML)
define('ID_PROD','id_prod'); //id de chauqe prooduit
define('ID_LAB','id_lab'); //id du label de chauqe prooduit
define('H_PROD','h_prod'); //id du label de chauqe prooduit


$categories = array(
    '8' => array(
        H_PROD => 'Nos entrees',
        CAT_NAME => 'Terine avocat crabe',
        CAT_IMG => 'images-entrees/terrineavocatcrabe.jpg',
        ID_PROD => 'terrine',
        ID_LAB => 'one',
        CAT_DESC => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur, architecto.',
    ),
    '9' => array(
        H_PROD => '',
        CAT_NAME => 'Terine avocat crabe',
        CAT_IMG => 'images-entrees/soupecoriandre.jpeg',
        ID_PROD => 'soupe',
        ID_LAB => 'two',
        CAT_DESC => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur, architecto.',
    ),
    '10' => array(
        H_PROD => '',
        CAT_NAME => 'Poirier',
        CAT_IMG => 'images-entrees/MiniQuiche.jpg',
        ID_PROD => '',
        ID_LAB => 'three',
        CAT_DESC => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur, architecto.',
    ),
    '13' => array(
        H_PROD => '',
        CAT_NAME => 'Cigart au fromage blanc',
        ID_PROD => 'cigart',
        ID_LAB => 'for',
        CAT_IMG => 'images-entrees/cigart.jpg',
        CAT_DESC => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur, architecto.',
    ),
    '15' => array(
        H_PROD => '',
        CAT_NAME => 'Salde césar',
        ID_PROD => 'cesar',
        ID_LAB => 'five',
        CAT_IMG => 'images-entrees/caesarsalad.png',
        CAT_DESC => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur, architecto.',
    ),
    '18' => array(
        H_PROD => 'Nos plats',
        CAT_NAME => 'Vermicelles aux fruits de mer',
        ID_PROD => 'vermicelles',
        ID_LAB => 'six',
        CAT_IMG => 'images-plats/vermicellesauxfruitsdemer.jpg',
        CAT_DESC => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur, architecto.',
    ),
    '19' => array(
        H_PROD => '',
        ID_PROD => 'tarte',
        ID_LAB => 'seven',
        CAT_NAME => 'Tartiflette au gruyere',
        CAT_IMG => 'images-plats/tartiflettegruyere.jpg',
        CAT_DESC => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur, architecto.',
    ),
    '21' => array(
        H_PROD => '',
        ID_PROD => 'poutine',
        ID_LAB => 'eight',
        CAT_NAME => 'Poutine',
        CAT_IMG => 'images-plats/poutine.jpg',
        CAT_DESC => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur, architecto.',
    ),
    '28' => array(
        H_PROD => '',
        ID_PROD => '',
        ID_LAB => 'nine',
        CAT_NAME => 'Macaronie au blé complet et légumes',
        CAT_IMG => 'images-plats/macarnieaublecompletetauxlegumes.jpg',
        CAT_DESC => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur, architecto.',
    ),
    '36' => array(
        H_PROD => '',
        ID_PROD => 'couscous',
        ID_LAB => 'ten',
        CAT_NAME => 'Couscous au boeuf',
        CAT_IMG => 'images-plats/couscousdeboeufalabourguignonne.jpeg',
        CAT_DESC => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur, architecto.',
    ),
    '27' => array(
        H_PROD => 'Nos dessert',
        ID_PROD => '',
        ID_LAB => 'eleven',
        CAT_NAME => 'Mousse banane',
        CAT_IMG => 'images-desert/moussebanane.jpg',
        CAT_DESC => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur, architecto.',
    ),
    '20' => array(
        H_PROD => '',
        ID_PROD => '',
        ID_LAB => 'twelve',
        CAT_NAME => 'Cake pomme',
        CAT_IMG => 'images-desert/cakepommes.jpg',
        CAT_DESC => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur, architecto.',
    ),
    '6' => array(
        H_PROD => '',
        ID_PROD => 'cheesecake',
        ID_LAB => 'therteen',
        CAT_NAME => 'Cheesecake cerise',
        CAT_IMG => 'images-desert/cheesecake.jpg',
        CAT_DESC => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur, architecto.',
    ),
    '66' => array(
        H_PROD => 'Nos boissons',
        ID_PROD => 'soda',
        ID_LAB => 'forteen',
        CAT_NAME => 'Soda',
        CAT_IMG => 'images-boissons/150617sodaglassstock.jpg',
        CAT_DESC => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur, architecto.',
    ),
    '86' => array(
        H_PROD => '',
        ID_PROD => 'soda',
        ID_LAB => 'fifteen',
        CAT_NAME => 'Kombucha-Rise',
        CAT_IMG => 'images-boissons/riseKombucha.jpg',
        CAT_DESC => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur, architecto.',
    ),
);
