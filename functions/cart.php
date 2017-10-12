<?php
define ('CART_NAME', 'cart');
define ('CART_OP', 'cart_op');
define ('CART_OP_ADD', 'cart_op_add');
define ('CART_OP_REMOVE', 'cart_op_remove');
define ('CART_OP_EMPTY', 'cart_op_empty');
define ('ITEM_ID', 'item_id');

function get_cart_total($cart) {
    global $produits;
    $result = 0;
    foreach ($cart as $item_id => $item_qty) {
        $result += $produits[$item_id][ PRIX_ITEM ] * $item_qty;
    }
    return $result;
}

if ( session_status() === PHP_SESSION_NONE ) { // Regarde si la session a été démarré ou pas
    session_start();
}

// Est-ce que j'ai une variable de session nommée CART_NAME ?
// Non ? On la créée (initialisation avec tableau vide)
if ( ! array_key_exists(CART_NAME, $_SESSION)) {
    $_SESSION[CART_NAME] = array();
}
// Ici $_SESSION[CART_NAME] existe TOUJOURS
$cart =& $_SESSION[CART_NAME]; // $cart est une référence (alias) sur $_SESSION[CART_NAME]

//var_dump($_SESSION); // Voir les données post
//var_dump($_POST); // Voir les données post

if (array_key_exists(CART_OP, $_POST) && in_array($_POST[CART_OP], array(CART_OP_ADD, CART_OP_REMOVE, CART_OP_EMPTY))) {
    $item_id = null;
    require_once 'db/_data_categories.php';
    if (array_key_exists(ITEM_ID, $_POST) && array_key_exists($_POST[ITEM_ID], $produits)) {
        $item_id = $_POST[ITEM_ID];
    }
    switch ($_POST[CART_OP]) {
        case CART_OP_ADD :
            if ( ! is_null($item_id)) {
                if ( ! array_key_exists($item_id, $cart)) {
                    $cart[$item_id] = 0;
                }
                $cart[$item_id]++;
            }
            break;
        case CART_OP_REMOVE :
            if ( ! is_null($item_id)) {
                if (array_key_exists($item_id, $cart)) {
                    unset($cart[$item_id]);
                }
            }
            break;
        case CART_OP_EMPTY :
            $cart = array();
            break;
        default: // (action inconnue : Mieux vaut ne rien faire ici)
    }

}
