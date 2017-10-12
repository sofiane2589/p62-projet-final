<?php

$total = get_cart_total($cart);
?>
    <div class="panel-group">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="panel-title">
                <a data-toggle="collapse" href="#collapse1"><span class="badge"><?= count($cart) ?></span>&nbsp;article(s)</a>
            </h4>
        </div>
        <div id="collapse1" class="panel-collapse collapse">
            <ul class="list-group">
                <?php foreach ($cart as $cat_id => $qty) {
                    if (array_key_exists($cat_id, $produits)) {
                        ?>
                        <li class="list-group-item well-sm">
                            <a href="#" class=""><?= $produits[$cat_id][CAT_NAME] ?><span class="badge"><?= $cart[$cat_id] ?></span></a>
                            <form method="post" class="form-inline">
                                <input type="hidden" name="item_id" value="<?= $cat_id ?>" />
                                <div class="form-group">
                                    <span class="btn-group">
                                        <button type="submit" class="btn btn-info btn-xs" name="<?= CART_OP ?>" value="<?= CART_OP_ADD ?>">
                                            <span class="glyphicon glyphicon-plus"></span>
                                        </button>
                                        <button type="submit" class="btn btn-info btn-xs" name="<?= CART_OP ?>" value="<?= CART_OP_REMOVE?>">
                                            <span class="glyphicon glyphicon-remove"></span>
                                        </button>
                                    </span>
                                </div>
                            </form>
                        </li>
                        <?php
                    }
                }
                ?>
            </ul>
            <div class="panel-footer">
                Total: <?= $total ?> $
                <form method="post" class="">
                    <button type="submit" class="btn btn-info btn-xs" name="<?= CART_OP ?>" value="<?= CART_OP_EMPTY ?>">Vider</button>

                </form>
            </div>
        </div>
    </div>
</div>
