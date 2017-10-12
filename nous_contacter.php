<?php
$page_title = 'Contact';
require_once 'views1/page_top.php';


$erreurType = $PrenomErr = $NomErr = $phoneErr = $emailErr = $commentaireErr = $passw1Err = $passwconfirmErr = "";
$type = $Prenom = $Nom = $phone = $email = $commentaire = $passw1 = $passwconfirm = "";

$error = false;
$choisirType = array("choisir...",
    'Plainte',
    'compliment',
    'Question'

);
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (array_key_exists('type', $_POST)) {

        $type = $_POST['type'];
        if ($type == "choisir...") {
            $erreurType = "Veuillez choisir le type de la plainte SVP.";
            $error = true;
        }
    };
    if (empty($_POST["nom"])) {
        $NomErr = "Veuillez remplir votre nom SVP.";
        $error = true;
    } else {
        $Nom = $_POST["nom"];
    }
    if (empty($_POST["prenom"])) {
        $PrenomErr = "Veuillez remplir votre prenom SVP.";
        $error = true;
    } else {
        $Prenom = $_POST["prenom"];
    }
    if (empty($_POST["tel"])) {
        $phoneErr = "Veuillez remplir votre numero de telephone SVP.";
        $error = true;
    } else {
        $phone = $_POST["tel"];
    }

    if (empty($_POST["email"])) {
        $emailErr = "Veuillez remplir votre Email SVP.";
        $error = true;
    } else {
        if (test_email($_POST["email"]))
            $email = $_POST["email"];
        else {
            $emailErr = "Veuillez remplir votre Email dans un format valide Ex:contact@hotmail.com.";
            $error = true;
        }
    }
    if (empty($_POST["commentaire"])) {

        $commentaireErr = "Il faut mettre un commentaire SVP. ";
        $error = true;
    } else {

        $commentaire = $_POST["commentaire"];


    }

    if ($error) {
        echo nl2br(
            "<p  class='msg_validation' style='color: red'>$erreurType</p>" . "
                <p class='msg_validation' style='color: red' >$NomErr</p>" . "
        " . "<p class='msg_validation' style='color: red'>$PrenomErr</p>" . "\n" . "<p class='msg_validation' style='color: red'>$phoneErr</p>" . "\n" .
            "<p class='msg_validation' style='color: red'>$emailErr</p>" . "\n".
 "<p class='msg_validation' style='color: red'>$commentaireErr</p>" . "\n"
        );
    } else

        echo nl2br("formulaire valide \n
         Type:" . $type . "\n
    first name:" . $Prenom . "\n
    last name:" . $Nom . "\n
    phone: " . $phone . "\n
    email: " . $email . "\n
    commentaire: " . $commentaire . "\n
     ");

}


function test_email($email)
{

    //email valid
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return true;
    } else
        return false;


}


?>


<p><a href="<?= basename($_SERVER["SCRIPT_FILENAME"]) ?>">Relancer le formulaire</a></p>

<div class="form-container">
    <form class="formulaire_employe" method="post">
        <div id="profil-pizza">
            <img class="contacter" src="images/contactez-nous.jpg" alt="">
            <h1><span>Nous contacter</span></h1>
            <p> Si vous avez des questions, des félicitations ou des commentaires concernant nos produits, nos services
                ou notre site Web,
                veuillez nous joindre par courriel en utilisant l'espace ci-dessous. Merci de votre intérêt!: </p>
        </div>
        <div class="form-group ">
            <label for="type"><i style="color: red">*</i>Type :</label>
            <section>


                <select name="type" id="type">

                    <?php foreach ($choisirType as $k) { ?>

                        <option value="<?= $k ?>"
                            <?= $type == $k ? ' selected="selected"' : '' ?>
                        ><?= $k ?></option>


                    <?php } ?>
                </select>
            </section>
        </div>
        <div class="form-group ">
            <!-- Gestion du nom : -->

            <label for="nom"><i style="color: red">*</i>Nom:</label>
            <input type="text" name="nom" id="nom" value="<?= array_key_exists($Nom, $_POST) ? "" : $Nom ?>">

        </div>
        <div class="form-group ">
            <!-- Gestion du Prenom : -->
            <label for="prenom"><i style="color: red">*</i>Prenom:</label>
            <input type="text" name="prenom" id="prenom"
                   value="<?= array_key_exists($Prenom, $_POST) ? "" : $Prenom ?>">
        </div>
        <div class="form-group ">
            <!-- Gestion du telephone : -->
            <label for="tel"><i style="color: red">*</i>N° de tél. principal:</label>
            <input type="text" name="tel" id="tel" placeholder="Format:888-888-8888"
                   value="<?= array_key_exists($phone, $_POST) ? "" : $phone ?>">
        </div>
        <div class="form-group ">
            <!-- Gestion du Email : -->
            <label for="email"><i style="color: red">*</i>Email:</label>
            <input type="text" name="email" id="email" value="<?= array_key_exists($email, $_POST) ? "" : $email ?>">
        </div>
        <div class="form-group ">
            <!-- Gestion du COMMENTAIRE : -->
            <label for="commentaire"><i style="color: red">*</i>Commentaire:</label>
            <textarea rows="5" cols="40" name="commentaire"
                      id="commentaire"><?= array_key_exists($commentaire, $_POST) ? "" : $commentaire ?></textarea>
        </div>

        <div class="form-group envoyer">
            <input type="submit" value="Creer votre compte">
        </div>
    </form>
</div>


<?php
require_once 'views1/page_bottom.php';