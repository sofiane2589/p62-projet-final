<?php
require_once 'data.php';
//var_dump($catalog);
session_start();
var_dump($_SESSION);
//$_SESSION = array(); // Pour "vider" la session (s'il y a des trucs dedans dont on veut se débarasser)
if (!array_key_exists('cart', $_SESSION)) { // Créer le panier si absent (1ère requète de l'utilisateur)
    $_SESSION['cart'] = array();
}

$cart =& $_SESSION['cart']; // $cart fait référence $_SESSION['cart'] (!!! ce n'est pas une affectation)
var_dump($cart); // donne le contenu du panier

// Réception des POST
var_dump($_POST);
if (array_key_exists('item_id', $_POST) // on a un paramètre 'item_id'
    && array_key_exists($_POST['item_id'], $catalog) // sa valeur est un id de catalogue valide
    && array_key_exists('action', $_POST)) {// on a aussi un paramètre 'action'
    $item_id = $_POST['item_id'];
    $action = $_POST['action'];
// Est-ce que l'item est déjà dans le panier ?  si NON, on le crée
    if (!array_key_exists($item_id, $cart)) {
        $cart[$item_id] = 0;
    }
    switch ($action) {
        case '+':
            $cart[$item_id]++;
            break;
        case '-':
            $cart[$item_id]--;
            // Supprimer la variable du panier si la quantité est négative ou nulle
            if ($cart[$item_id] <= 0) {
                unset($cart[$item_id]);
            }
            break;
    }

}

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>E - EAT</title>
    <meta name="author" content="Tahar & Sofiane">
    <meta name="description" content="Short Description of the page contents for SEO purposes">
    <link rel="stylesheet" href="style/main.css">

    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
    <![endif]-->
</head>
<body>
<main id="page-items">
    <div class="items">
        <h3>Nos entrees</h3>
        <div class="half">
            <div class="tab">
                <img id="terrine" src="images/images-entrees/terrineavocatcrabe.jpg" alt="photo de">
                <input class="input-cepage" id="tab-one" type="checkbox" name="tabs">
                <label class="lab-cepage" for="tab-one">Terine avocat crabe</label>
                <div class="tab-content">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur, architecto.
                    </p>
                </div>
            </div>
        </div>
        <div class="half">
            <div class="tab">
                <img id="soupe" src="images/images-entrees/soupecoriandre.jpeg" alt="photo de">
                <input class="input-cepage" id="tab-two" type="checkbox" name="tabs">
                <label class="lab-cepage" for="tab-two">Soupe coriandre</label>
                <div class="tab-content">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur, architecto.
                    </p>
                </div>
            </div>
        </div>
        <div class="half">
            <div class="tab">
                <img src="images/images-entrees/MiniQuiche.jpg" alt="photo de">
                <input class="input-cepage" id="tab-three" type="checkbox" name="tabs">
                <label class="lab-cepage" for="tab-three">Mini quiche épinard</label>
                <div class="tab-content">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur, architecto.
                    </p>
                </div>
            </div>
        </div>
        <div class="half">
            <div class="tab">
                <img id="cigart" src="images/images-entrees/cigart.jpg" alt="photo de">
                <input class="input-cepage" id="tab-for" type="checkbox" name="tabs">
                <label class="lab-cepage" for="tab-for">Cigart au fromage blanc</label>
                <div class="tab-content">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur, architecto.
                    </p>
                </div>
            </div>
        </div>
        <div class="half">
            <div class="tab">
                <img id="cesar" src="images/images-entrees/caesarsalad.png" alt="photo de">
                <input class="input-cepage" id="tab-five" type="checkbox" name="tabs">
                <label class="lab-cepage" for="tab-five">Salde césar</label>
                <div class="tab-content">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur, architecto.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="items">
        <h3>Nos plats</h3>
        <div class="half">
            <div class="tab">
                <img id="vermicelles" src="images/images-plats/vermicellesauxfruitsdemer.jpg" alt="photo de">
                <input class="input-cepage" id="tab-six" type="checkbox" name="tabs">
                <label class="lab-cepage" for="tab-six">Vermicelles aux fruits de mer</label>
                <div class="tab-content">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur, architecto.
                    </p>
                </div>
            </div>
        </div>
        <div class="half">
            <div class="tab">
                <img id="tarte" src="images/images-plats/tartiflettegruyere.jpg" alt="photo de">
                <input class="input-cepage" id="tab-seven" type="checkbox" name="tabs">
                <label class="lab-cepage" for="tab-seven">Tartiflette au gruyere</label>
                <div class="tab-content">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur, architecto.
                    </p>
                </div>
            </div>
        </div>
        <div class="half">
            <div class="tab">
                <img id="poutine" src="images/images-plats/poutine.jpg" alt="photo de">
                <input class="input-cepage" id="tab-eight" type="checkbox" name="tabs">
                <label class="lab-cepage" for="tab-eight">Poutine</label>
                <div class="tab-content">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur, architecto.
                    </p>
                </div>
            </div>
        </div>
        <div class="half">
            <div class="tab">
                <img src="images/images-plats/macarnieaublecompletetauxlegumes.jpg" alt="photo de">
                <input class="input-cepage" id="tab-nine" type="checkbox" name="tabs">
                <label class="lab-cepage" for="tab-nine">Macaronie au blé complet et légumes</label>
                <div class="tab-content">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur, architecto.
                    </p>
                </div>
            </div>
        </div>
        <div class="half">
            <div class="tab">
                <img id="couscous" src="images/images-plats/couscousdeboeufalabourguignonne.jpeg" alt="photo de">
                <input class="input-cepage" id="tab-ten" type="checkbox" name="tabs">
                <label class="lab-cepage" for="tab-ten">Couscous au boeuf</label>
                <div class="tab-content">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur, architecto.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="items">
        <h3>Nos dessert</h3>
        <div class="half">
            <div class="tab">
                <img src="images/images-desert/moussebanane.jpg" alt="photo de">
                <input class="input-cepage" id="tab-eleven" type="checkbox" name="tabs">
                <label class="lab-cepage" for="tab-eleven">Mousse banane</label>
                <div class="tab-content">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur, architecto.
                    </p>
                </div>
            </div>
        </div>
        <div class="half">
            <div class="tab">
                <img src="images/images-desert/cakepommes.jpg" alt="photo de">
                <input class="input-cepage" id="tab-twelve" type="checkbox" name="tabs">
                <label class="lab-cepage" for="tab-twelve">Cake pomme</label>
                <div class="tab-content">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur, architecto.
                    </p>
                </div>
            </div>
        </div>
        <div class="half">
            <div class="tab">
                <img id="cheesecake" src="images/images-desert/cheesecake.jpg" alt="photo de">
                <input class="input-cepage" id="tab-therteen" type="checkbox" name="tabs">
                <label class="lab-cepage" for="tab-therteen">Cheesecake cerise</label>
                <div class="tab-content">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur, architecto.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="items">
        <h3>Nos boissons</h3>
        <div class="half">
            <div class="tab">
                <img id="soda" src="images/images-boissons/150617sodaglassstock.jpg" alt="photo de">
                <input class="input-cepage" id="tab-forteen" type="checkbox" name="tabs">
                <label class="lab-cepage" for="tab-forteen">Soda</label>
                <div class="tab-content">
                    <p><label class="coke" for="coke">Coke</label>
                        <input class="coke" id="coke" type="checkbox" name="coke"></p>
                    <p><label class="sprit" for="sprit">Sprit</label>
                        <input class="sprit" id="sprit" type="checkbox" name="sprit"></p>
                    <p><label class="coked" for="coked">Coke diet</label>
                        <input class="coked" id="coked" type="checkbox" name="coked"></p>
                    <p><label class="spritd" for="spritd">Sprit diet</label>
                        <input class="spritd" id="spritd" type="checkbox" name="spritd"></p>
                </div>
            </div>
        </div>
        <div class="half">
            <div class="tab">
                <img src="images/images-boissons/riseKombucha.jpg" alt="photo de">
                <input class="input-cepage" id="tab-fifteen" type="checkbox" name="tabs">
                <label class="lab-cepage" for="tab-fifteen">Kombucha-Rise</label>
                <div class="tab-content">
                    <p><label class="k-cit" for="k-cit">Citronnelle</label>
                        <input class="k-cit" id="k-cit" type="checkbox" name="k-cit"></p>
                    <p><label class="k-m-ch" for="k-m-ch">Menthe et Chlorophyle</label>
                        <input class="k-m-ch" id="k-m-ch" type="checkbox" name="k-m-ch"></p>
                    <p><label class="k-b-e" for="k-b-e">Bluet et Erable</label>
                        <input class="k-b-e" id="k-b-e" type="checkbox" name="k-b-e"></p>
                    <p><label class="k-gin" for="k-gin">Gingembre</label>
                        <input class="k-gin" id="k-gin" type="checkbox" name="k-gin"></p>
                </div>
            </div>
        </div>
    </div>
</main>
</body>
