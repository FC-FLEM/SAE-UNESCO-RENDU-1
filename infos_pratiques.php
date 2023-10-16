<!DOCTYPE html>
<!-- Doctype pour rester comforme aux standards -->
<!-- lang pour accent pour synthèse vocale-->
<html lang="fr">

<head>
    <!-- charset = encodage des caractères -->
    <meta charset="UTF-8" />
    <!-- viewport pour la mise en page mobile -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- link pour relier la feuille css -->
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="styleinfos.css" />
    <link rel="stylesheet" href="header.css" />
    <link rel="stylesheet" href="footer.css" />
    <!-- Title pour le titre de l'onglet -->
    <title>Infos pratiques</title>
    <link rel="icon" type="image/png" sizes="32x32" href="./img/favicon.ico">
    <META NAME="Robots" CONTENT="index, follow">
    <META NAME="Author" CONTENT="FCFLEM">
    <META NAME="Keywords" CONTENT="FCFLEM,Grenade,UNESCO">
</head>

<body>

<?php
    include("./php/header.inc.php");
    ?>

    <div class="contenu">
        <h1>Infos pratiques</h1>
        <h3>Météo</h3>
        <div class="infospratiques" id="infospratiques">
            <div class="doubledivision">
                <div class="meteo_trafic">
                    <a class="weatherwidget-io" href="https://forecast7.com/fr/37d18n3d60/granada/" data-label_1="GRENADE" data-label_2="MÉTÉO" data-font="Ubuntu" data-theme="original" data-basecolor="#505050" data-accent="rgba(255, 255, 255, 0.05)" data-textcolor="#000" data-highcolor="#ea5c0d" data-suncolor="#f7af3e">GRENADE MÉTÉO</a>
                </div>
            </div>
        </div>
        <h3>Tarifs</h3>
        <table class="container">
            <tr>
                <th></th>
                <th>Tarif normal</th>
                <th>Tarif réduit</th>
                <th>Parking</th>
            </tr>
            <tr>
                <td>Alhambra</td>
                <td>14€</td>
                <td>8€</td>
                <td>Aucun</td>
            </tr>
            <tr>
                <td>Flamenco</td>
                <td>26€</td>
                <td>26€</td>
                <td>10€</td>
            </tr>
            <tr>
                <td>Vol en juillet</td>
                <td>321€</td>
                <td>300€</td>
                <td>20€/jour</td>
            </tr>
            <tr>
                <td>Vol en septembre</td>
                <td>154€</td>
                <td>134€</td>
                <td>15€/jour</td>
            </tr>
        </table>

    </div>
    <a href="#" class="top"> ↑ </a>
    <?php
    include("./php/footer.inc.php");
    ?>
    <script src="script.js"></script>
</body>

</html>