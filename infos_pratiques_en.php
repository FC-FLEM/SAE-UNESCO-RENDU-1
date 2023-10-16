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
    <title>Practical Information</title>
    <link rel="icon" type="image/png" sizes="32x32" href="./img/favicon.ico">
    <META NAME="Robots" CONTENT="index, follow">
    <META NAME="Author" CONTENT="FCFLEM">
    <META NAME="Keywords" CONTENT="FCFLEM,Grenade,UNESCO">
</head>

<body>

<?php
    include("./php/header_en.inc.php");
    ?>

    <div class="contenu">
        <h1>Practical Information</h1>
        <h3>Weather</h3>
        <div class="infospratiques" id="infospratiques">
            <div class="doubledivision">
                <div class="meteo_trafic">
                    <a class="weatherwidget-io" href="https://forecast7.com/en/37d18n3d60/granada/" data-label_1="GRANADA" data-label_2="WEATHER" data-font="Ubuntu" data-theme="original" data-basecolor="#505050" data-accent="rgba(255, 255, 255, 0.05)" data-textcolor="#000" data-highcolor="#ea5c0d" data-suncolor="#f7af3e">GRANADA WEATHER</a>
                </div>
            </div>
        </div>
        <h3>Rates</h3>
        <table class="container">
            <tr>
                <th></th>
                <th>Regular Rate</th>
                <th>Reduced Rate</th>
                <th>Parking</th>
            </tr>
            <tr>
                <td>Alhambra</td>
                <td>€14</td>
                <td>€8</td>
                <td>None</td>
            </tr>
            <tr>
                <td>Flamenco</td>
                <td>€26</td>
                <td>€26</td>
                <td>€10</td>
            </tr>
            <tr>
                <td>July Flight</td>
                <td>€321</td>
                <td>€300</td>
                <td>€20/day</td>
            </tr>
            <tr>
                <td>September Flight</td>
                <td>€154</td>
                <td>€134</td>
                <td>€15/day</td>
            </tr>
        </table>
    </div>


    </div>
    <a href="#" class="top"> ↑ </a>
    <?php
    include("./php/footer_en.inc.php");
    ?>
    <script src="script.js"></script>
</body>

</html>