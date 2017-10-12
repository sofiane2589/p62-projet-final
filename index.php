<?php
$page_title = 'Accueil';
require_once 'views1/page_top.php';
?>
    <main class="clear row ">
        <div id="div-flex">
            <div id="slogon">
                <img id="image-amis" src="images/images2/imageheader.jpg" alt="manger entre amis"/>
                <h3>Un bon repas pour toi, partout</h3>
            </div>
            <div id="nous-connaitre">
                <h3>Nous, C'est ...</h3>
                <p>Pour nous, il ne s'agit pas seulement de vous apporter de la bonne nourriture, il s'agit d'établir
                    une
                    connexion, en imaginant des menus qui arriveront frais et pleins de saveur. </p>
                <button id="connaitre">Nous connaitre plus</button>
            </div>
        </div>
        <div id="nous-rejoindre">
            <img id="image-rejoindre" src="images/images2/Food-Delivery.jpg" alt="rejoindre l'équipe"/>
            <div>
                <h3>Fais partie de la maison</h3>
                <p>Il y a toujours de la place à notre table. Tirez un siège...</p>
                <button id="rejoindre">Rejoinds nous</button>
            </div>
        </div>
        <div id="application">
            <h3>L'Appli</h3>
            <p>votre repas en quelques clics, téléchargez notre application</p>
            <img id="pic-tab-tel" src="images/images2/tabl-pc-tel.png" alt="pic tabl tel pc"/>
            <img id="pic-ios" src="images/images2/AppStore.svg.png" alt="pic Ios"/>
            <img id="pic-android" src="images/images2/gogleplay.png" alt="pic android"/>
        </div>
    </main>
<?php
require_once 'views1/page_bottom.php';

