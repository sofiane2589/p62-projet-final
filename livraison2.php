<?php
require_once 'db/_data_categories.php';
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
    <?php foreach ($categories as $cat_id => $cat_data) { ?>
        <div class="items">
            <h3><?= $cat_data[H_PROD] ?></h3>
            <div class="half">
                <div class="tab">
                    <img id="<?= $cat_data[ID_PROD] ?>" src="images/<?= $cat_data[CAT_IMG] ?>"
                         alt="photo de ">
                    <input class="input-cepage" id="tab-<?= $cat_data[ID_LAB] ?>" type="checkbox" name="tabs">
                    <label class="lab-cepage" for="tab-<?= $cat_data[ID_LAB] ?>"><?= $cat_data[CAT_NAME] ?></label>
                    <div class="tab-content">
                        <p><?= $cat_data[CAT_DESC] ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>
</main>
</body>
