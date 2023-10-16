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
    <title>información práctica</title>
    <link rel="icon" type="image/png" sizes="32x32" href="./img/favicon.ico">
    <META NAME="Robots" CONTENT="index, follow">
    <META NAME="Author" CONTENT="FCFLEM">
    <META NAME="Keywords" CONTENT="FCFLEM,Grenade,UNESCO">
</head>

<body>

<?php
    include("./php/header_es.inc.php");
    ?>

    <div class="contenu">
        <h1>Información Práctica</h1>
        <h3>Clima</h3>
        <div class="infospratiques" id="infospratiques">
            <div class="doubledivision">
                <div class="meteo_trafic">
                    <a class="weatherwidget-io" href="https://forecast7.com/es/37d18n3d60/granada/" data-label_1="GRANADA" data-label_2="CLIMA" data-font="Ubuntu" data-theme="original" data-basecolor="#505050" data-accent="rgba(255, 255, 255, 0.05)" data-textcolor="#000" data-highcolor="#ea5c0d" data-suncolor="#f7af3e">CLIMA DE GRANADA</a>
                </div>
            </div>
        </div>
        <h3>Tarifas</h3>
        <table class="container">
            <tr>
                <th></th>
                <th>Tarifa Normal</th>
                <th>Tarifa Reducida</th>
                <th>Aparcamiento</th>
            </tr>
            <tr>
                <td>Alhambra</td>
                <td>14€</td>
                <td>8€</td>
                <td>Ninguno</td>
            </tr>
            <tr>
                <td>Flamenco</td>
                <td>26€</td>
                <td>26€</td>
                <td>10€</td>
            </tr>
            <tr>
                <td>Vuelo en julio</td>
                <td>321€</td>
                <td>300€</td>
                <td>20€/día</td>
            </tr>
            <tr>
                <td>Vuelo en septiembre</td>
                <td>154€</td>
                <td>134€</td>
                <td>15€/día</td>
            </tr>
        </table>
    </div>

    </div>
    <a href="#" class="top"> ↑ </a>
    <?php
    include("./php/footer_es.inc.php");
    ?>
    <script src="script.js"></script>
</body>

</html>