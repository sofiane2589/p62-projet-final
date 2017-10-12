<?php
$page_title = 'Détail produit';
require_once 'views1/page_top.php';

$prod_id = '';
require_once 'db/_data_categories.php';
if (array_key_exists('_id', $_GET) && array_key_exists($_GET['_id'], $produits)) {
    $prod_id = $_GET['_id']; //le numero de catégorie valide
} /*else {
    header('Location:index.php'); //redirection HTTP
    exit(); //mettre fin a lexecusion nn
}*/
$prod = $produits[$prod_id];
?>


<main id="page-items">


    <div id="content"> <!--// affichage HTML du produit-->

        <img id="<?= $prod[ID_PROD] ?>" src="images/<?= $prod[CAT_IMG] ?>" alt="photo de ">
        <h2 class="<?= PROD_NAME ?>"><?= $prod[PROD_NAME] ?></h2>
        <p class="<?= PROD_DESC_C ?>"><?= $prod[PROD_DESC_C] ?></p>
        <p class="<?= PROD_DESC_D ?>"><?= $prod[PROD_DESC_D] ?></p>

    </div>


</main>
<?php
require_once 'views1/page_bottom.php';

