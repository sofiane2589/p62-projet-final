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
define('ID_PROD', 'id_prod'); //id de chauqe prooduit
define('ID_LAB', 'id_lab'); //id du label de chauqe prooduit
define('H_PROD', 'h_prod'); //id du label de chauqe prooduit

define('PROD_NAME', 'prod_name'); // Nom de produit (string)
define('PROD_DESC_C', 'prod_desc_c'); // Description courte du produit (string)
define('PROD_DESC_D', 'prod_desc_d'); // Description détaillée du produit (string - HTML)

define('PRIX_ITEM', 'prix_item');

$produits = array(
    '8' => array(
        PRIX_ITEM =>'9$',
        H_PROD => 'Nos entrees',
        CAT_NAME => 'Terine avocat crabe',
        CAT_IMG => 'images-entrees/terrineavocatcrabe.jpg',
        ID_PROD => 'terrine',
        ID_LAB => 'one',
        CAT_DESC => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur, architecto.',
        PROD_NAME => 'Terine avocat crabe - lorm ipsum',
        PROD_DESC_C => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur, architecto.',
        PROD_DESC_D => '<h3 style="text-align: justify";>
		La recette</h3>
	<p style="text-align: justify;">
		Terine avocat crabe (<em>Malus sp.</em> Collet) est verte pâle couverte de rayures rouges. Elle a un diamètre de 6 à 8 centimètres et son goût est comparable à la pomme McIntosh. La pomme Collet est aussi bonne mangée fraîche qu’utilisée en cuisson. Le fruit se conserve jusqu’à 10 semaines. Il vaut mieux cueillir ses fruits tard que tôt puisque le froid augmente son goût sucré. La pomme peut supporter un gel de 3-6&nbsp;°C (38-43&nbsp;°F).</p>
	<h3 style="text-align: justify;">
		Le mot du chef</h3>
	<p style="text-align: justify;">
		Terine avocat crabe se retrouve souvent en première position sur la liste de préférences des collectionneurs, cela est dû, entre autres, à sa très bonne résistance aux maladies. Tous s’entendent sur sa résistance à la tavelure, certains lui reconnaissent cependant une légère sensibilité à la brûlure bactérienne. L’arbre a aussi tendance à être précoce; dans les conditions optimales, il peut commencer à donner des fruits dès sa troisième année.</p>
    
    <h3 style="text-align: justify;">
    Calories</h3>
	<p style="text-align: justify;">lorem ipsum</p>
	<p style="text-align: justify;">lorem ipsum</p>
	<p style="text-align: justify;">lorem ipsum</p>
	<p style="text-align: justify;">lorem ipsum</p>
    ',
    ),
    '9' => array(
        PRIX_ITEM =>'8$',
        H_PROD => '',
        CAT_NAME => 'Soupe coriandre',
        CAT_IMG => 'images-entrees/soupecoriandre.jpeg',
        ID_PROD => 'soupe',
        ID_LAB => 'two',
        CAT_DESC => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur, architecto.',
        PROD_NAME => 'Soupe coriandre - lorm ipsum',
        PROD_DESC_C => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur, architecto.',
        PROD_DESC_D => '<h3 style="text-align: justify";>
		La recette</h3>
	<p style="text-align: justify;">
		Soupe coriandre (<em>Malus sp.</em> Collet) est verte pâle couverte de rayures rouges. Elle a un diamètre de 6 à 8 centimètres et son goût est comparable à la pomme McIntosh. La pomme Collet est aussi bonne mangée fraîche qu’utilisée en cuisson. Le fruit se conserve jusqu’à 10 semaines. Il vaut mieux cueillir ses fruits tard que tôt puisque le froid augmente son goût sucré. La pomme peut supporter un gel de 3-6&nbsp;°C (38-43&nbsp;°F).</p>
	<h3 style="text-align: justify;">
		Le mot du chef</h3>
	<p style="text-align: justify;">
		Soupe coriandre se retrouve souvent en première position sur la liste de préférences des collectionneurs, cela est dû, entre autres, à sa très bonne résistance aux maladies. Tous s’entendent sur sa résistance à la tavelure, certains lui reconnaissent cependant une légère sensibilité à la brûlure bactérienne. L’arbre a aussi tendance à être précoce; dans les conditions optimales, il peut commencer à donner des fruits dès sa troisième année.</p>
    
    Calories</h3>
	<p style="text-align: justify;">lorem ipsum</p>
	<p style="text-align: justify;">lorem ipsum</p>
	<p style="text-align: justify;">lorem ipsum</p>
	<p style="text-align: justify;">lorem ipsum</p>
    ',
    ),
    '10' => array(
        PRIX_ITEM =>'10$',
        H_PROD => '',
        CAT_NAME => 'Mini Quiche',
        CAT_IMG => 'images-entrees/MiniQuiche.jpg',
        ID_PROD => 'miniqui',
        ID_LAB => 'three',
        CAT_DESC => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur, architecto.',
        PROD_NAME => 'Mini Quiche - lorm ipsum',
        PROD_DESC_C => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur, architecto.',
        PROD_DESC_D => '<h3 style="text-align: justify";>
		La recette</h3>
	<p style="text-align: justify;">
		Mini Quiche (<em>Malus sp.</em> Collet) est verte pâle couverte de rayures rouges. Elle a un diamètre de 6 à 8 centimètres et son goût est comparable à la pomme McIntosh. La pomme Collet est aussi bonne mangée fraîche qu’utilisée en cuisson. Le fruit se conserve jusqu’à 10 semaines. Il vaut mieux cueillir ses fruits tard que tôt puisque le froid augmente son goût sucré. La pomme peut supporter un gel de 3-6&nbsp;°C (38-43&nbsp;°F).</p>
	<h3 style="text-align: justify;">
		Le mot du chef</h3>
	<p style="text-align: justify;">
		Mini Quiche se retrouve souvent en première position sur la liste de préférences des collectionneurs, cela est dû, entre autres, à sa très bonne résistance aux maladies. Tous s’entendent sur sa résistance à la tavelure, certains lui reconnaissent cependant une légère sensibilité à la brûlure bactérienne. L’arbre a aussi tendance à être précoce; dans les conditions optimales, il peut commencer à donner des fruits dès sa troisième année.</p>
    
    <h3 style="text-align: justify;">
    Calories</h3>
	<p style="text-align: justify;">lorem ipsum</p>
	<p style="text-align: justify;">lorem ipsum</p>
	<p style="text-align: justify;">lorem ipsum</p>
	<p style="text-align: justify;">lorem ipsum</p>
    ',
    ),
    '13' => array(
        PRIX_ITEM =>'7$',
        H_PROD => '',
        CAT_NAME => 'Cigart au fromage blanc',
        ID_PROD => 'cigart',
        ID_LAB => 'for',
        CAT_IMG => 'images-entrees/cigart.jpg',
        CAT_DESC => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur, architecto.',
        PROD_NAME => 'Cigart au fromage blanc - lorm ipsum',
        PROD_DESC_C => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur, architecto.',
        PROD_DESC_D => '<h3 style="text-align: justify";>
		La recette</h3>
	<p style="text-align: justify;">
		Cigart au fromage blanc (<em>Malus sp.</em> Collet) est verte pâle couverte de rayures rouges. Elle a un diamètre de 6 à 8 centimètres et son goût est comparable à la pomme McIntosh. La pomme Collet est aussi bonne mangée fraîche qu’utilisée en cuisson. Le fruit se conserve jusqu’à 10 semaines. Il vaut mieux cueillir ses fruits tard que tôt puisque le froid augmente son goût sucré. La pomme peut supporter un gel de 3-6&nbsp;°C (38-43&nbsp;°F).</p>
	<h3 style="text-align: justify;">
		Le mot du chef</h3>
	<p style="text-align: justify;">
		Cigart au fromage blanc se retrouve souvent en première position sur la liste de préférences des collectionneurs, cela est dû, entre autres, à sa très bonne résistance aux maladies. Tous s’entendent sur sa résistance à la tavelure, certains lui reconnaissent cependant une légère sensibilité à la brûlure bactérienne. L’arbre a aussi tendance à être précoce; dans les conditions optimales, il peut commencer à donner des fruits dès sa troisième année.</p>
    
    <h3 style="text-align: justify;">
    Calories</h3>
	<p style="text-align: justify;">lorem ipsum</p>
	<p style="text-align: justify;">lorem ipsum</p>
	<p style="text-align: justify;">lorem ipsum</p>
	<p style="text-align: justify;">lorem ipsum</p>
    ',
    ),
    '15' => array(
        PRIX_ITEM =>'10$',
        H_PROD => '',
        CAT_NAME => 'Salde césar',
        ID_PROD => 'cesar',
        ID_LAB => 'five',
        CAT_IMG => 'images-entrees/caesarsalad.png',
        CAT_DESC => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur, architecto.',
        PROD_NAME => 'Salde césar - lorm ipsum',
        PROD_DESC_C => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur, architecto.',
        PROD_DESC_D => '<h3 style="text-align: justify";>
		La recette</h3>
	<p style="text-align: justify;">
		Salde césar(<em>Malus sp.</em> Collet) est verte pâle couverte de rayures rouges. Elle a un diamètre de 6 à 8 centimètres et son goût est comparable à la pomme McIntosh. La pomme Collet est aussi bonne mangée fraîche qu’utilisée en cuisson. Le fruit se conserve jusqu’à 10 semaines. Il vaut mieux cueillir ses fruits tard que tôt puisque le froid augmente son goût sucré. La pomme peut supporter un gel de 3-6&nbsp;°C (38-43&nbsp;°F).</p>
	<h3 style="text-align: justify;">
		Le mot du chef</h3>
	<p style="text-align: justify;">
		Salde césar se retrouve souvent en première position sur la liste de préférences des collectionneurs, cela est dû, entre autres, à sa très bonne résistance aux maladies. Tous s’entendent sur sa résistance à la tavelure, certains lui reconnaissent cependant une légère sensibilité à la brûlure bactérienne. L’arbre a aussi tendance à être précoce; dans les conditions optimales, il peut commencer à donner des fruits dès sa troisième année.</p>
    
    <h3 style="text-align: justify;">
    Calories</h3>
	<p style="text-align: justify;">lorem ipsum</p>
	<p style="text-align: justify;">lorem ipsum</p>
	<p style="text-align: justify;">lorem ipsum</p>
	<p style="text-align: justify;">lorem ipsum</p>
    ',
    ),
    '18' => array(
        PRIX_ITEM =>'10$',
        H_PROD => 'Nos plats',
        CAT_NAME => 'Vermicelles aux fruits de mer',
        ID_PROD => 'vermicelles',
        ID_LAB => 'six',
        CAT_IMG => 'images-plats/vermicellesauxfruitsdemer.jpg',
        CAT_DESC => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur, architecto.',
        PROD_NAME => 'Vermicelles aux fruits de mer - lorm ipsum',
        PROD_DESC_C => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur, architecto.',
        PROD_DESC_D => '<h3 style="text-align: justify";>
		La recette</h3>
	<p style="text-align: justify;">
		Vermicelles aux fruits de mer (<em>Malus sp.</em> Collet) est verte pâle couverte de rayures rouges. Elle a un diamètre de 6 à 8 centimètres et son goût est comparable à la pomme McIntosh. La pomme Collet est aussi bonne mangée fraîche qu’utilisée en cuisson. Le fruit se conserve jusqu’à 10 semaines. Il vaut mieux cueillir ses fruits tard que tôt puisque le froid augmente son goût sucré. La pomme peut supporter un gel de 3-6&nbsp;°C (38-43&nbsp;°F).</p>
	<h3 style="text-align: justify;">
		Le mot du chef</h3>
	<p style="text-align: justify;">
		Vermicelles aux fruits de mer se retrouve souvent en première position sur la liste de préférences des collectionneurs, cela est dû, entre autres, à sa très bonne résistance aux maladies. Tous s’entendent sur sa résistance à la tavelure, certains lui reconnaissent cependant une légère sensibilité à la brûlure bactérienne. L’arbre a aussi tendance à être précoce; dans les conditions optimales, il peut commencer à donner des fruits dès sa troisième année.</p>
    
    <h3 style="text-align: justify;">
    Calories</h3>
	<p style="text-align: justify;">lorem ipsum</p>
	<p style="text-align: justify;">lorem ipsum</p>
	<p style="text-align: justify;">lorem ipsum</p>
	<p style="text-align: justify;">lorem ipsum</p>
    ',
    ),
    '19' => array(
        PRIX_ITEM =>'11$',
        H_PROD => '',
        ID_PROD => 'tarte',
        ID_LAB => 'seven',
        CAT_NAME => 'Tartiflette au gruyere',
        CAT_IMG => 'images-plats/tartiflettegruyere.jpg',
        CAT_DESC => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur, architecto.',
        PROD_NAME => 'Tartiflette au gruyere - lorm ipsum',
        PROD_DESC_C => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur, architecto.',
        PROD_DESC_D => '<h3 style="text-align: justify";>
		La recette</h3>
	<p style="text-align: justify;">
		Tartiflette au gruyere (<em>Malus sp.</em> Collet) est verte pâle couverte de rayures rouges. Elle a un diamètre de 6 à 8 centimètres et son goût est comparable à la pomme McIntosh. La pomme Collet est aussi bonne mangée fraîche qu’utilisée en cuisson. Le fruit se conserve jusqu’à 10 semaines. Il vaut mieux cueillir ses fruits tard que tôt puisque le froid augmente son goût sucré. La pomme peut supporter un gel de 3-6&nbsp;°C (38-43&nbsp;°F).</p>
	<h3 style="text-align: justify;">
		Le mot du chef</h3>
	<p style="text-align: justify;">
		Tartiflette au gruyerese retrouve souvent en première position sur la liste de préférences des collectionneurs, cela est dû, entre autres, à sa très bonne résistance aux maladies. Tous s’entendent sur sa résistance à la tavelure, certains lui reconnaissent cependant une légère sensibilité à la brûlure bactérienne. L’arbre a aussi tendance à être précoce; dans les conditions optimales, il peut commencer à donner des fruits dès sa troisième année.</p>
    
    <h3 style="text-align: justify;">
    Calories</h3>
	<p style="text-align: justify;">lorem ipsum</p>
	<p style="text-align: justify;">lorem ipsum</p>
	<p style="text-align: justify;">lorem ipsum</p>
	<p style="text-align: justify;">lorem ipsum</p>
    ',
    ),
    '21' => array(
        PRIX_ITEM =>'12$',
        H_PROD => '',
        ID_PROD => 'poutine',
        ID_LAB => 'eight',
        CAT_NAME => 'Poutine',
        CAT_IMG => 'images-plats/poutine.jpg',
        CAT_DESC => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur, architecto.',
        PROD_NAME => 'Poutine - lorm ipsum',
        PROD_DESC_C => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur, architecto.',
        PROD_DESC_D => '<h3 style="text-align: justify";>
		La recette</h3>
	<p style="text-align: justify;">
		Poutine (<em>Malus sp.</em> Collet) est verte pâle couverte de rayures rouges. Elle a un diamètre de 6 à 8 centimètres et son goût est comparable à la pomme McIntosh. La pomme Collet est aussi bonne mangée fraîche qu’utilisée en cuisson. Le fruit se conserve jusqu’à 10 semaines. Il vaut mieux cueillir ses fruits tard que tôt puisque le froid augmente son goût sucré. La pomme peut supporter un gel de 3-6&nbsp;°C (38-43&nbsp;°F).</p>
	<h3 style="text-align: justify;">
		Le mot du chef</h3>
	<p style="text-align: justify;">
		Poutine se retrouve souvent en première position sur la liste de préférences des collectionneurs, cela est dû, entre autres, à sa très bonne résistance aux maladies. Tous s’entendent sur sa résistance à la tavelure, certains lui reconnaissent cependant une légère sensibilité à la brûlure bactérienne. L’arbre a aussi tendance à être précoce; dans les conditions optimales, il peut commencer à donner des fruits dès sa troisième année.</p>
    
    <h3 style="text-align: justify;">
    Calories</h3>
	<p style="text-align: justify;">lorem ipsum</p>
	<p style="text-align: justify;">lorem ipsum</p>
	<p style="text-align: justify;">lorem ipsum</p>
	<p style="text-align: justify;">lorem ipsum</p>
    ',
    ),
    '28' => array(
        PRIX_ITEM =>'13$',
        H_PROD => '',
        ID_PROD => '',
        ID_LAB => 'nine',
        CAT_NAME => 'Macaronie au blé complet et légumes',
        CAT_IMG => 'images-plats/macarnieaublecompletetauxlegumes.jpg',
        CAT_DESC => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur, architecto.',
        PROD_NAME => 'Macaronie au blé complet et légumes - lorm ipsum',
        PROD_DESC_C => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur, architecto.',
        PROD_DESC_D => '<h3 style="text-align: justify";>
		La recette</h3>
	<p style="text-align: justify;">
		Macaronie au blé complet et légumes (<em>Malus sp.</em> Collet) est verte pâle couverte de rayures rouges. Elle a un diamètre de 6 à 8 centimètres et son goût est comparable à la pomme McIntosh. La pomme Collet est aussi bonne mangée fraîche qu’utilisée en cuisson. Le fruit se conserve jusqu’à 10 semaines. Il vaut mieux cueillir ses fruits tard que tôt puisque le froid augmente son goût sucré. La pomme peut supporter un gel de 3-6&nbsp;°C (38-43&nbsp;°F).</p>
	<h3 style="text-align: justify;">
		Le mot du chef</h3>
	<p style="text-align: justify;">
		Macaronie au blé complet et légumes se retrouve souvent en première position sur la liste de préférences des collectionneurs, cela est dû, entre autres, à sa très bonne résistance aux maladies. Tous s’entendent sur sa résistance à la tavelure, certains lui reconnaissent cependant une légère sensibilité à la brûlure bactérienne. L’arbre a aussi tendance à être précoce; dans les conditions optimales, il peut commencer à donner des fruits dès sa troisième année.</p>
    
    <h3 style="text-align: justify;">
    Calories</h3>
	<p style="text-align: justify;">lorem ipsum</p>
	<p style="text-align: justify;">lorem ipsum</p>
	<p style="text-align: justify;">lorem ipsum</p>
	<p style="text-align: justify;">lorem ipsum</p>
    ',
    ),
    '36' => array(
        PRIX_ITEM =>'10$',
        H_PROD => '',
        ID_PROD => 'couscous',
        ID_LAB => 'ten',
        CAT_NAME => 'Couscous au boeuf',
        CAT_IMG => 'images-plats/couscousdeboeufalabourguignonne.jpeg',
        CAT_DESC => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur, architecto.',
        PROD_NAME => 'Couscous au boeuf - lorm ipsum',
        PROD_DESC_C => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur, architecto.',
        PROD_DESC_D => '<h3 style="text-align: justify";>
		La recette</h3>
	<p style="text-align: justify;">
		Couscous au boeuf (<em>Malus sp.</em> Collet) est verte pâle couverte de rayures rouges. Elle a un diamètre de 6 à 8 centimètres et son goût est comparable à la pomme McIntosh. La pomme Collet est aussi bonne mangée fraîche qu’utilisée en cuisson. Le fruit se conserve jusqu’à 10 semaines. Il vaut mieux cueillir ses fruits tard que tôt puisque le froid augmente son goût sucré. La pomme peut supporter un gel de 3-6&nbsp;°C (38-43&nbsp;°F).</p>
	<h3 style="text-align: justify;">
		Le mot du chef</h3>
	<p style="text-align: justify;">
		Couscous au boeuf se retrouve souvent en première position sur la liste de préférences des collectionneurs, cela est dû, entre autres, à sa très bonne résistance aux maladies. Tous s’entendent sur sa résistance à la tavelure, certains lui reconnaissent cependant une légère sensibilité à la brûlure bactérienne. L’arbre a aussi tendance à être précoce; dans les conditions optimales, il peut commencer à donner des fruits dès sa troisième année.</p>
    
    <h3 style="text-align: justify;">
    Calories</h3>
	<p style="text-align: justify;">lorem ipsum</p>
	<p style="text-align: justify;">lorem ipsum</p>
	<p style="text-align: justify;">lorem ipsum</p>
	<p style="text-align: justify;">lorem ipsum</p>
    ',
    ),
    '27' => array(
        PRIX_ITEM =>'7$',
        H_PROD => 'Nos dessert',
        ID_PROD => 'mousse',
        ID_LAB => 'eleven',
        CAT_NAME => 'Mousse banane',
        CAT_IMG => 'images-desert/moussebanane.jpg',
        CAT_DESC => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur, architecto.',
        PROD_NAME => 'Mousse banane - lorm ipsum',
        PROD_DESC_C => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur, architecto.',
        PROD_DESC_D => '<h3 style="text-align: justify";>
		La recette</h3>
	<p style="text-align: justify;">
		Mousse banane (<em>Malus sp.</em> Collet) est verte pâle couverte de rayures rouges. Elle a un diamètre de 6 à 8 centimètres et son goût est comparable à la pomme McIntosh. La pomme Collet est aussi bonne mangée fraîche qu’utilisée en cuisson. Le fruit se conserve jusqu’à 10 semaines. Il vaut mieux cueillir ses fruits tard que tôt puisque le froid augmente son goût sucré. La pomme peut supporter un gel de 3-6&nbsp;°C (38-43&nbsp;°F).</p>
	<h3 style="text-align: justify;">
		Le mot du chef</h3>
	<p style="text-align: justify;">
		Mousse banane se retrouve souvent en première position sur la liste de préférences des collectionneurs, cela est dû, entre autres, à sa très bonne résistance aux maladies. Tous s’entendent sur sa résistance à la tavelure, certains lui reconnaissent cependant une légère sensibilité à la brûlure bactérienne. L’arbre a aussi tendance à être précoce; dans les conditions optimales, il peut commencer à donner des fruits dès sa troisième année.</p>
    
    <h3 style="text-align: justify;">
    Calories</h3>
	<p style="text-align: justify;">lorem ipsum</p>
	<p style="text-align: justify;">lorem ipsum</p>
	<p style="text-align: justify;">lorem ipsum</p>
	<p style="text-align: justify;">lorem ipsum</p>
    ',
    ),
    '20' => array(
        PRIX_ITEM =>'10$',
        H_PROD => '',
        ID_PROD => 'cake',
        ID_LAB => 'twelve',
        CAT_NAME => 'Cake pomme',
        CAT_IMG => 'images-desert/cakepommes.jpg',
        CAT_DESC => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur, architecto.',
        PROD_NAME => 'Cake pomme - lorm ipsum',
        PROD_DESC_C => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur, architecto.',
        PROD_DESC_D => '<h3 style="text-align: justify";>
		La recette</h3>
	<p style="text-align: justify;">
		Cake pomme (<em>Malus sp.</em> Collet) est verte pâle couverte de rayures rouges. Elle a un diamètre de 6 à 8 centimètres et son goût est comparable à la pomme McIntosh. La pomme Collet est aussi bonne mangée fraîche qu’utilisée en cuisson. Le fruit se conserve jusqu’à 10 semaines. Il vaut mieux cueillir ses fruits tard que tôt puisque le froid augmente son goût sucré. La pomme peut supporter un gel de 3-6&nbsp;°C (38-43&nbsp;°F).</p>
	<h3 style="text-align: justify;">
		Le mot du chef</h3>
	<p style="text-align: justify;">
		Cake pomme se retrouve souvent en première position sur la liste de préférences des collectionneurs, cela est dû, entre autres, à sa très bonne résistance aux maladies. Tous s’entendent sur sa résistance à la tavelure, certains lui reconnaissent cependant une légère sensibilité à la brûlure bactérienne. L’arbre a aussi tendance à être précoce; dans les conditions optimales, il peut commencer à donner des fruits dès sa troisième année.</p>
    
    <h3 style="text-align: justify;">
    Calories</h3>
	<p style="text-align: justify;">lorem ipsum</p>
	<p style="text-align: justify;">lorem ipsum</p>
	<p style="text-align: justify;">lorem ipsum</p>
	<p style="text-align: justify;">lorem ipsum</p>
    ',
    ),
    '6' => array(
        PRIX_ITEM =>'6$',
        H_PROD => '',
        ID_PROD => 'cheesecake',
        ID_LAB => 'therteen',
        CAT_NAME => 'Cheesecake cerise',
        CAT_IMG => 'images-desert/cheesecake.jpg',
        CAT_DESC => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur, architecto.',
        PROD_NAME => 'Cheesecake cerise - lorm ipsum',
        PROD_DESC_C => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur, architecto.',
        PROD_DESC_D => '<h3 style="text-align: justify";>
		La recette</h3>
	<p style="text-align: justify;">
		Cheesecake cerise (<em>Malus sp.</em> Collet) est verte pâle couverte de rayures rouges. Elle a un diamètre de 6 à 8 centimètres et son goût est comparable à la pomme McIntosh. La pomme Collet est aussi bonne mangée fraîche qu’utilisée en cuisson. Le fruit se conserve jusqu’à 10 semaines. Il vaut mieux cueillir ses fruits tard que tôt puisque le froid augmente son goût sucré. La pomme peut supporter un gel de 3-6&nbsp;°C (38-43&nbsp;°F).</p>
	<h3 style="text-align: justify;">
		Le mot du chef</h3>
	<p style="text-align: justify;">
		Cheesecake cerise se retrouve souvent en première position sur la liste de préférences des collectionneurs, cela est dû, entre autres, à sa très bonne résistance aux maladies. Tous s’entendent sur sa résistance à la tavelure, certains lui reconnaissent cependant une légère sensibilité à la brûlure bactérienne. L’arbre a aussi tendance à être précoce; dans les conditions optimales, il peut commencer à donner des fruits dès sa troisième année.</p>
   
    <h3 style="text-align: justify;">
    Calories</h3>
	<p style="text-align: justify;">lorem ipsum</p>
	<p style="text-align: justify;">lorem ipsum</p>
	<p style="text-align: justify;">lorem ipsum</p>
	<p style="text-align: justify;">lorem ipsum</p>
    ',
    ),
    '66' => array(
        PRIX_ITEM =>'4$',
        H_PROD => 'Nos boissons',
        ID_PROD => 'soda',
        ID_LAB => 'forteen',
        CAT_NAME => 'Soda',
        CAT_IMG => 'images-boissons/150617sodaglassstock.jpg',
        CAT_DESC => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur, architecto.',
        PROD_NAME => 'Soda - lorm ipsum',
        PROD_DESC_C => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur, architecto.',
        PROD_DESC_D => '
    <h3 style="text-align: justify;">
    Calories</h3>
	<p style="text-align: justify;">lorem ipsum</p>
	<p style="text-align: justify;">lorem ipsum</p>
	<p style="text-align: justify;">lorem ipsum</p>
	<p style="text-align: justify;">lorem ipsum</p>
    ',
    ),
    '86' => array(
        PRIX_ITEM =>'7$',
        H_PROD => '',
        ID_PROD => 'komboucha',
        ID_LAB => 'fifteen',
        CAT_NAME => 'Kombucha-Rise',
        CAT_IMG => 'images-boissons/riseKombucha.jpg',
        CAT_DESC => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur, architecto.',
        PROD_NAME => 'Kombucha-Rise - lorm ipsum',
        PROD_DESC_C => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur, architecto.',
        PROD_DESC_D => '<h3 style="text-align: justify";>
		La recette</h3>
	<p style="text-align: justify;">
		Kombucha-Rise(<em>Malus sp.</em> Collet) est verte pâle couverte de rayures rouges. Elle a un diamètre de 6 à 8 centimètres et son goût est comparable à la pomme McIntosh. La pomme Collet est aussi bonne mangée fraîche qu’utilisée en cuisson. Le fruit se conserve jusqu’à 10 semaines. Il vaut mieux cueillir ses fruits tard que tôt puisque le froid augmente son goût sucré. La pomme peut supporter un gel de 3-6&nbsp;°C (38-43&nbsp;°F).</p>
	<h3 style="text-align: justify;">
		
    <h3 style="text-align: justify;">
    Calories</h3>
	<p style="text-align: justify;">lorem ipsum</p>
	<p style="text-align: justify;">lorem ipsum</p>
	<p style="text-align: justify;">lorem ipsum</p>
	<p style="text-align: justify;">lorem ipsum</p>
    ',
    ),
);
