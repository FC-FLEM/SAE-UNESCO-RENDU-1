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
    <link rel="stylesheet" href="header.css" />
    <link rel="stylesheet" href="footer.css" />
    <!-- Title pour le titre de l'onglet -->
    <title>Histoire et Architecture</title>
    <link rel="icon" type="image/png" sizes="32x32" href="./img/favicon.ico">
</head>

<body>

    <?php
    include("./php/header.inc.php");
    ?>

    <div class="contenu">
        <h1>Histoire et Architecture</h1>
        <div class="titre2gauche">
            <h2>HISTOIRE DE GRENADE</h2>
        </div>
        <h3>L'HISTOIRE</h3>
        <div class='card'>
            <div class='image'>
                <img src="./img/Grenade/Ancien_Granada.jpg" alt="Peinture : La rendición de Granada, de Francisco Pradilla y Ortiz, 1882" width="500px">
            </div>
            <div class="texte">
                <h4>Un peu d'histoire de l'Andalousie</h4>
                <p>
                    C'est en <b>711</b> que commence l'invasion de la péninsule ibérique par les musulmans. En
                    seulement 5 ans, la quasi-totalité du pays est sous domination arabo-musulmane. Mais en <b>722</b> débute la réplique
                    chrétienne face à cette invasion : <b>la Reconquista</b>. C'est seulement en <b>1492</b>, à Grenade, que l'émir
                    nasride de Grenade capitule, mettant fin à une domination musulmane de près de <b>7 siècles</b>.
                </p>
            </div>
        </div>
        <h3>L'ARCHITECTURE</h3>
        <div class='card'>
            <div class='image'>
                <img src="./img/Grenade/Cour des Lions.jpg" alt="La Cours des Lions" width="500px">
            </div>
            <div class="texte">
                <h4>Les vestiges d'une longue domination musulmane</h4>
                <p>
                    Malgré la fin de <b>la présence politique musulmane
                    </b> au sein de la Péninsule, la culture arabo-musulmane est toujours
                    profondément ancrée dans le pays.
                    <b>Des monuments, à l'art en passant par la gastronomie</b>, cette période de l'histoire a fortement
                    marqué <b>l'Espagne</b> du
                    Nord au Sud et de l'Est vers l'Ouest !
                </p>
            </div>
        </div>
        <div class="titre2droite">
            <h2>MONUMENTS DU PATRIMOINE</h2>
        </div>
        <h3>L'ALHAMBRA</h3>
        <div class='card'>
            <div class='image'>
                <img src="./img/Grenade/Alhambra_red_sunset.jpg" alt="L'Alhambra" width="500px">
            </div>
            <div class="texte">
                <div class="content">
                    <p>
                        Parmi les lieux les plus cultes de Grenade on retrouve <b>l'Alhambra</b>, une ancienne cité
                        médiévale de l'époque de
                        <b>domination nasride</b>. Construite en <b>1238</b>, ce fut l'une des plus grandes résidences
                        de l'époque médiévale.
                        <br>
                    </p>
                    <a href="./alhambra.php" >
                        <button class="bouton" type="button">
                            POUR EN SAVOIR PLUS
                        </button>
                    </a>
                </div>
            </div>
        </div>
        <h3>L'ALBAICIN</h3>
        <div class='card'>
            <div class='image'>
                <img src="./img/Grenade/L'albaicin.jpg" alt="L'Albaicin" width="500px">
            </div>
            <div class="texte">
                <div class="content">
                    <p>
                        Bâti du temps de contrôle musulman sur le pays, <b>l'Albaicin</b> est un quartier se
                        situant sur la colline de la <b>Sabika</b> en face de <b>l'Alhambra</b>.
                        C'est un quartier agencé à l'image d'un <b>labyrinthe</b> d'étroites ruelles et de petites
                        places, entouré de <b>maisons blanches</b>. Depuis l'époque nasride, il a
                        très peu changé.
                        <br>
                    </p>
                    <a href="./albaicin.php" >
                        <button class="bouton" type="button">
                            POUR EN SAVOIR PLUS
                        </button>
                    </a>
                </div>
            </div>
        </div>
        <h3>LE GENERALIFE</h3>
        <div class='card'>
            <div class='image'>
                <img src="./img/Grenade/Generalife.jpg" alt="Le Generalife" width="500px">
            </div>
            <div class="texte">
                <div class="content">
                    <p>
                        De l'époque médiévale, le <b>Generalife</b> était un palais servant de lieu de repos pour les
                        <b>rois nasrides</b> de Grenade.
                        Entouré de vergers et de jardins, il possède une succession de salles, balcons, jardins et de
                        <b>bassins d'eau</b> prenant
                        source dans les montagnes de la <b>Sierra Nevada</b>. Encore aujourd'hui, il est dans un
                        splendide état.
                        <br>
                    </p>
                    <a href="./generalife.php" >
                        <button class="bouton" type="button">
                            POUR EN SAVOIR PLUS
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <a href="#" class="top"> ↑ </a>

    <?php
    include("./php/footer.inc.php");
    ?>

    <script src="script.js"></script>
</body>

</html>