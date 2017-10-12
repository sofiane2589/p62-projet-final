<?php
$page_title = 'Créer un compte';
require_once 'views1/page_top.php';
// definir les valeurs wdw
$PrenomErr = $NomErr = $phoneErr = $emailErr = $commentaireErr =$passw1Err=$passwconfirmErr= "";
$Prenom = $Nom = $phone = $email = $commentaire =$passw1=$passwconfirm= "";

$error = false;
//on est dans le post
if ($_SERVER["REQUEST_METHOD"] == "POST") {
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
if (empty($_POST["pass"])) {
    $passw1Err = "Veuillez chosir un mot de passe  SVP.";
    $error = true;
} else {
    $passw1 = $_POST["pass"];
}
    if (empty($_POST["passconfirm"])) {
        $passwconfirmErr = "Veuillez confirmer le mot de passe  SVP.";
        $error = true;
    } else if( $_POST["passconfirm"]!= $passw1){
        $passwconfirmErr="les mots de passe sont pas identique!!!!";
        $error=true;
        }
       else   $passwconfirm = $_POST["passconfirm"];




    if ($error) {
        echo nl2br("<p class='msg_validation' style='color: red'>$NomErr</p>" . "
        " . "<p class='msg_validation' style='color: red'>$PrenomErr</p>" . "\n" ."<p class='msg_validation' style='color: red'>$phoneErr</p>" . "\n" .
            "<p class='msg_validation' style='color: red'>$emailErr</p>" . "\n"
            ."<p class='msg_validation' style='color: red'>$passw1Err</p>" . "\n" ."<p class='msg_validation' style='color: red'>$passwconfirmErr</p>"
        );
    } else

        echo nl2br("formulaire valide \n
    first name:" . $Prenom . "\n
    last name:" . $Nom . "\n
    phone: " . $phone . "\n
    email: " . $email . "\n
   mot de passe: " . "mot passe identique" . "\n
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
        <img src="images/guest-profile-icon.png" alt="">
        <h1><span>Créer un profil de pizza</span></h1>
        <p> Remplissez le formulaire ci-dessous pour créer un Profil Pizza et profitez de tous
            ces super avantages: </p>
    </div>
    <div class="form-group ">
        <!-- Gestion du nom : -->

        <label for="nom"><i style="color: red">*</i>Nom:</label>
        <input type="text" name="nom" id="nom" value="<?= array_key_exists($Nom, $_POST) ? "" : $Nom ?>">

    </div>
    <div class="form-group ">
        <!-- Gestion du Prenom : -->
        <label for="prenom"><i style="color: red">*</i>Prenom:</label>
        <input type="text" name="prenom" id="prenom" value="<?= array_key_exists($Prenom, $_POST) ? "" : $Prenom ?>">
    </div>
    <div class="form-group ">
        <!-- Gestion du telephone : -->
        <label for="tel"><i style="color: red">*</i>N° de tél. principal:</label>
        <input type="text" name="tel" id="tel" placeholder="Format:888-888-8888" value="<?= array_key_exists($phone, $_POST) ? "" : $phone ?>">
    </div>
    <div class="form-group ">
        <!-- Gestion du Email : -->
        <label for="email"><i style="color: red">*</i>Email:</label>
        <input type="text" name="email" id="email" value="<?= array_key_exists($email, $_POST) ? "" : $email ?>">
    </div>
    <div class="form-group ">
        <!-- Gestion du mot passe : -->
        <label for="pass"><i style="color: red">*</i>Password:</label>
        <input type="password" name="pass" id="pass" value="<?= array_key_exists($passw1, $_POST) ? "" : $passw1 ?>">
    </div>
    <div class="form-group ">
        <!-- Gestion du mot passe confirme: -->
        <label for="passconfirm"><i style="color: red">*</i>Confirmer Password:</label>
        <input type="password" name="passconfirm" id="passconfirm" value="<?= array_key_exists($passwconfirm, $_POST) ? "" : $passwconfirm ?>">
    </div>
    <div class="form-group envoyer">
        <input  type="submit" value="Creer votre compte" >
    </div>
</form>
</div>

<?php
require_once 'views1/page_bottom.php';
