<?php
// definir les valeurs


$erreurType=$erreurRue=$erreurApp=$erreurVille=$erreurPostal="";
$type=$rue =$app=$ville=$postal="";

$error = false;
$choisirType = array( "choisir...",
    'Maison',
    'Appart',
    'Commerce',
    'Hotel'
);
if ($_SERVER["REQUEST_METHOD"] == "POST") {


    if (array_key_exists('type', $_POST)) {

        $type = $_POST['type'];
        if ($type=="choisir..."){
            $erreurType="Veuillez choisir le type du batiment SVP.";
            $error=true;
        }
    };
    if (empty($_POST["rue"])) {
        $erreurRue = "Veuillez remplir le nom de votre rue avec le numero de la rue SVP.";
        $error = true;
    } else {
        $rue = $_POST["rue"];
    }
    if (empty($_POST["app"])) {
        $erreurApp = "Veuillez remplir le numero du Bureau/App SVP.";
        $error = true;
    } else {
        $app = $_POST["app"];
    }
    if (empty($_POST["ville"])) {
        $erreurVille = "Veuillez remplir la ville SVP.";
        $error = true;
    } else {
        $ville = $_POST["ville"];
    }
    if (empty($_POST["postal"])) {
        $erreurPostal = "Veuillez remplir le code postal  SVP.";
        $error = true;
    } else {
        $postal = $_POST["postal"];
    }
    if ($error){
        echo nl2br("<p  class='msg_validation' style='color: red'>$erreurType</p>" . "
        " . "<p  class='msg_validation' style='color: red'>$erreurRue</p>" .
            "<p  class='msg_validation' style='color: red'>$erreurApp</p>" .
            "<p  class='msg_validation' style='color: red'>$erreurVille</p>".
            "<p  class='msg_validation' style='color: red'>$erreurPostal</p>"
        );
    }else  echo nl2br("formulaire valide \n
    Type:" . $type . "\n
    Numero et Rue:" . $rue . "\n
     Bureau/App:" . $app . "\n
      Ville:" . $ville . "\n
       Code postal:" . $postal . "\n
     ");
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style/main.css"/>
    <title>Livraison</title>
</head>
<body>
<p><a href="<?= basename($_SERVER["SCRIPT_FILENAME"]) ?>">Relancer le formulaire</a></p>

<div class="form-container">
    <form class="formulaire_employe" method="post">
        <div id="profil-pizza">
            <img src="images/livraison.jpg" alt="">
            <h1><span>Nous devons savoir où vous êtes pour livrer la commande.</span></h1>

        </div>
        <h3>Adresse:</h3>

        <div class="form-group ">
            <label for="type"><i style="color: red">*</i>Type :</label>
            <section>


                <select name="type" id="type">

                    <?php foreach ($choisirType as $k ) { ?>

                        <option value="<?= $k ?>"
                            <?= $type == $k ? ' selected="selected"' : '' ?>
                        ><?= $k ?></option>


                    <?php } ?>
                </select>
            </section>
        </div>

        <div class="form-group ">
            <!-- Gestion de la rue : -->

            <label for="rue"><i style="color: red">*</i>Numero et Rue:</label>
            <input type="text" name="rue" id="rue" value="<?= array_key_exists($rue, $_POST) ? "" : $rue ?>">

        </div>
        <div class="form-group ">
            <!-- Gestion de num app : -->

            <label for="app"><i style="color: red">*</i>Bureau/App:</label>
            <input type="text" name="app" id="app" value="<?= array_key_exists($app, $_POST) ? "" : $app ?>">

        </div>
        <div class="form-group ">
            <!-- Gestion de la ville  : -->

            <label for="ville"><i style="color: red">*</i>Ville:</label>
            <input type="text" name="ville" id="ville" value="<?= array_key_exists($ville, $_POST) ? "" : $ville ?>">

        </div>
        <div class="form-group ">
            <!-- Gestion du code postal  : -->

            <label for="postal"><i style="color: red">*</i>Code postal:</label>
            <input type="text" name="postal" id="postal" value="<?= array_key_exists($postal, $_POST) ? "" : $postal ?>">

        </div>

        <div class="form-group envoyer">
            <input type="submit" value="Continuez pour la livraison ">
        </div>
    </form>
</div>


</body>