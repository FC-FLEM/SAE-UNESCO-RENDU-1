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
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="header.css" />
    <link rel="stylesheet" href="footer.css" />
    <link rel="stylesheet" href="accueil.css" />
    <!-- Title pour le titre de l'onglet -->
    <title>Home</title>
    <link rel="icon" type="image/png" sizes="32x32" href="./img/favicon.ico">
    <META NAME="Robots" CONTENT="index, follow">
    <META NAME="Author" CONTENT="FCFLEM">
    <META NAME="Keywords" CONTENT="FCFLEM,Grenade,UNESCO">
</head>

<body>

    <?php
    include("./php/header_en.inc.php");
    ?>

    <!-- Contenu de la page -->

    <div class="contenu">
        <section class="accueil">
            <div class="accueil-center">
                <h1 id="titre-accueil">Granada</h1>
                <h1 id="sous-titre-accueil">UNESCO World Heritage</h1>
            </div>
            <a class="aarrow" href="#accueil-infos">
                <div class="arrow-down"></div>
            </a>
        </section>
        <section class="accueil-infos" id="accueil-infos">
            <h3>CULTURAL HERITAGE</h3>
            <h5>Spain under Muslim control</h5>
            <p>
                It was in <b><u>711</u></b> that the invasion of Spain by the muslims began.
                In less than <b><u>5 years</u></b>, almost the entire Iberian Peninsula was under Muslim rule. As a
                result of this conquest, Granada became the capital of the kingdom of Granada, ruled by the
                <b><u>Nasrid</u></b>
                Muslim dynasty. nasride.
                11 years after the beginning of the conquest, in <b><u>1212</u></b>, the reconquest of the country
                began: <b><u>the Reconquista.</u></b>

            <h5>A protected heritage</h5>
            <p>
                Granada is home to many iconic and important monuments
                that make up the history of Spain and are recognized as <b><u>UNESCO World Heritage</u></b>
                Together with the Albaicin, the Alhambra constitutes the medieval part of the city, to the east of which we find the
                of which we find the magnificent gardens of the Generalife.</p>
            <p class="hess">
                <a href="./histoire_architecture_en.php" >
                    <button>
                        FOR MORE INFORMATION
                    </button>
                </a>
            </p>
        </section>
        <section class="accueil-cards" id="accueil-cards">
            <h3>WHAT TO SEE IN GRANADA?</h3>
            <div class='card'>
                <div class='image'>
                    <img src="./img/Grenade/street_grenade.jpg" alt="Grenade" width="500px">
                </div>
                <div class="texte">
                    <h4>Trails</h4>
                    <p>
                        Come and discover the different routes we offer you to visit the city of Granada.
                        Depending on what you're looking for, you can choose between a relaxing tour, a family tour, a party tour or a melancholy tour.
                        Adapt your visit to your availability (duration and time of day)!</p>
                    <a href="./parcours_en.php" >
                        <button class="bouton" type="button">
                            FOR MORE INFORMATION
                        </button>
                    </a>
                </div>
            </div>
            <div class='card'>
                <div class='image'>
                    <img src="./img/Grenade/resto-Granada.jpg" alt="Grenade" width="500px">
                </div>
                <div class="texte">
                    <h4>Restaurants</h4>
                    <p>
                        The country's period of Arab-Muslim domination is still deeply rooted in Hispanic culture, from monuments to museums and even cuisine. The city is full of bars, hostels and restaurants offering traditional products of the country. </p>
                    <a href="./restaurants_en.php" >
                        <button class="bouton" type="button">
                            FOR MORE INFORMATION
                        </button>
                    </a>
                </div>
            </div>
            <div class='card'>
                <div class='image'>
                    <img src="./img/Grenade/Hotel_Alhambra_Palace1.jpg" alt="Grenade" width="500px">
                </div>
                <div class="texte">
                    <h4>Hotels</h4>
                    <p>
                        To rest after a good day of visit or having arrived on the spot, we propose you
                        we propose you to install you comfortably
                        at a reasonable price. A preference of proximity with bars? museums? palaces?
                        A wide choice of places to stay is proposed to you!
                    </p>
                    <a href="./hotels_en.php" >
                        <button class="bouton" type="button">
                            FOR MORE INFORMATION
                        </button>
                    </a>
                </div>
            </div>
        </section>
    </div>
    <style>
        .top::before {
            content: "Top " !important;
        }
    </style>
    <a href="#" class="top">↑</a>

    <!-- Code du bas de page -->
    <?php
    include("./php/footer_en.inc.php");
    ?>
    <script src="script.js"></script>
</body>

</html>