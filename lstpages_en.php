<!DOCTYPE html>
<!-- Doctype pour rester comforme aux standards -->
<!-- lang pour accent pour synthèse vocale-->
<html lang="en">

<head>
    <!-- charset = encodage des caractères -->
    <meta charset="UTF-8" />
    <!-- viewport pour la mise en page mobile -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- link pour relier la feuille css -->
    <link rel="stylesheet" href="footer.css" />
    <link rel="stylesheet" href="styleliste.css" />
    <link rel="stylesheet" href="header.css" />
    <link rel="stylesheet" href="style.css" />
    <link rel="icon" type="image/png" sizes="32x32" href="./img/favicon.ico">
    <!-- Title pour le titre de l'onglet -->
    <title>List pages</title>
</head>

<body>

    <?php
    include("./php/header_en.inc.php");
    ?>

    <div class="contenu">
        <h1>Site Map</h1>
        <ul>
            <li><a href="./accueil_en.php">Home page</a></li>
            <li>General Culture
                <ul>
                    <li><a href="./espagne_en.php">Spain</a>
                        <ul>
                            <li><a href="./histoire_architecture_en.php">History and Architecture</a>
                                <ul>
                                    <li><a href="./alhambra_en.php">The Alhambra</a></li>
                                    <li><a href="./albaicin_en.php">Albaicin</a></li>
                                    <li><a href="./generalife_en.php">Generalife</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li>Visit
                <ul>
                    <li><a href="./lieux_visite_en.php">Places to visit</a></li>
                    <li><a href="./spots_photos_en.php">Best photo spots</a></li>
                </ul>
            </li>
            <li>Go out
                <ul>
                    <li><a href="./restaurants_en.php">Restaurants</a></li>
                    <li><a href="./parcours_en.php">Course (with Preferences)</a></li>
                    <li><a href="./hotels_en.php">Hotels</a></li>
                </ul>
            </li>
            <li><a href="./infos_pratiques_en.php">Practical information (weather, rates,..)</a></li>
            <li><a href="./a_propos_en.php">About us (+ contact us)</a></li>
        </ul>
    </div>
    
    <?php
    include("./php/footer_en.inc.php");
    ?>

    <script src="script.js"></script>
</body>

</html>