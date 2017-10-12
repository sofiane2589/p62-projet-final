<?php
$page_title = 'Accueil';
require_once 'views1/page_top.php';
require_once 'db/_data_categories.php';
require_once ('functions/cart.php'); // Gestion du panier

?>
<?php require('views/cart.php'); // Affichage ?>
<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="script/cart.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<!--[if lt IE 9]>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
<![endif]-->
<main id="page-items">

    <?php foreach ($produits as $cat_id => $cat_data) { ?>
        <div class="items">
            <h3><?= $cat_data[H_PROD] ?></h3>
            <div class="half">

                <div class="tab">
                    <a href="detail.php?_id=<?= $cat_id ?>"><img id="<?= $cat_data[ID_PROD] ?>" src="images/<?= $cat_data[CAT_IMG] ?>" alt="photo de "></a>
                    <input class="input-cepage" id="tab-<?= $cat_data[ID_LAB] ?>" type="checkbox" name="tabs">
                    <label class="lab-cepage" for="tab-<?= $cat_data[ID_LAB] ?>"><?= $cat_data[CAT_NAME] ?></label>

                    <div class="tab-content">
                        <p><?= $cat_data[CAT_DESC] ?> <span style="color:black ;">Prix:<?= $cat_data[PRIX_ITEM] ?></span>
                        </p>
                        <div>

                            <form method="post">
                                <input type="hidden" name="item_id" value="<?= $cat_id ?>" />
                                <button type="submit" class="btn btn-info btn-xs" name="<?= CART_OP ?>" value="<?= CART_OP_ADD ?>">
                                    Ajouter a votre commande   <span class="glyphicon glyphicon-shopping-cart"></span>
                                </button>
                            </form>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    <?php } ?>
</main>

