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
    <link rel="stylesheet" href="styleliste.css" />
    <link rel="stylesheet" href="header.css" />
    <link rel="stylesheet" href="footer.css" />
    <link rel="stylesheet" href="style.css" />
    <link rel="icon" type="image/png" sizes="32x32" href="./img/favicon.ico">
    <!-- Title pour le titre de l'onglet -->
    <title>Liste pages</title>
</head>

<body>

    <?php
    include("./php/header.inc.php");
    ?>

    <div class="contenu">
        <h1>Plan du site</h1>
        <ul>
            <li><a href="./accueil.php">Page d'accueil</a></li>
            <li>Culture Générale
                <ul>
                    <li><a href="./espagne.php">L'Espagne</a>
                        <ul>
                            <li><a href="./histoire_architecture.php">Histoire et Architecture</a>
                                <ul>
                                    <li><a href="./alhambra.php">L'Alhambra</a></li>
                                    <li><a href="./albaicin.php">Albaicin</a></li>
                                    <li><a href="./generalife.php">Generalife</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li>Visiter
                <ul>
                    <li><a href="./lieux_visite.php">Lieux à visiter</a></li>
                    <li><a href="./spots_photos.php">Meilleurs spots de photos</a></li>
                </ul>
            </li>
            <li>Sortir
                <ul>
                    <li><a href="./restaurants.php">Restaurants</a></li>
                    <li><a href="./parcours.php">Parcours (avec Préférences)</a></li>
                    <li><a href="./hotels.php">Hôtels</a></li>
                </ul>
            </li>
            <li><a href="./infos_pratiques.php">Informations pratiques (météo, tarifs,..)</a></li>
            <li><a href="./a_propos.php">A propos (+ nous contacter)</a></li>
        </ul>
    </div>

    <?php
    include("php/footer.inc.php");
    ?>

    <script src="script.js"></script>
</body>

</html>