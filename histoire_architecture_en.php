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
    <!-- Title pour le titre de l'onglet -->
    <title>History and Architecture</title>
    <link rel="icon" type="image/png" sizes="32x32" href="./img/favicon.ico">
</head>

<body>

    <?php
    include("./php/header_en.inc.php");
    ?>

    <div class="contenu">
        <h1>History and Architecture</h1>
        <div class="titre2gauche">
            <h2>HISTORY OF GRENADA</h2>
        </div>
        <h3>HISTORY</h3>
        <div class='card'>
            <div class='image'>
                <img src="./img/Grenade/Ancien_Granada.jpg" alt="Peinture : La rendición de Granada, de Francisco Pradilla y Ortiz, 1882" width="500px">
            </div>
            <div class="texte">
                <h4>A little history of Andalusia</h4>
                <p>
                    In <b>711</b> the invasion of the Iberian Peninsula by the muslims began. In only 5 years,
                    almost the entire country is under Arab-Muslim domination. But in <b>722</b> begins the Christian
                    response to this invasion: <b>the Reconquista</b>. It is only in <b>1492</b>, in Granada, that the
                    emir Nasrid of Granada capitulates, putting an end to a Muslim domination of nearly <b>7
                        century</b>.
                </p>
            </div>
        </div>
        <h3>THE ARCHITECTURE</h3>
        <div class='card'>
            <div class='image'>
                <img src="./img/Grenade/Cour des Lions.jpg" alt="La Cours des Lions" width="500px">
            </div>
            <div class="texte">
                <h4>The remains of a long Muslim domination</h4>
                <p>
                    Despite the end of <b>the Muslim political presence</b>
                    within the peninsula, the Arab-Muslim culture is still
                    deeply rooted in the country
                    <b>From monuments to art to gastronomy</b>, this period of history has strongly marked <b>Spain </b>
                    from North to South and from East to West!
                </p>
            </div>
        </div>
        <div class="titre2droite">
            <h2>HERITAGE MONUMENTS</h2>
        </div>
        <h3>THE ALHAMBRA</h3>
        <div class='card'>
            <div class='image'>
                <img src="./img/Grenade/Alhambra_red_sunset.jpg" alt="L'Alhambra" width="500px">
            </div>
            <div class="texte">
                <div class="content">
                    <p>
                        Among the most famous places in Granada is the <b>Alhambra</b>, an ancient medieval city from
                        the
                        <b>Nasrid domination</b>. Built in <b>1238</b>, it was one of the largest residences of the
                        medieval period.
                        <br>
                    </p>
                    <a href="./alhambra_en.php" >
                        <button class="bouton" type="button">
                            FIND OUT More
                        </button>
                    </a>
                </div>
            </div>
        </div>
        <h3>THE ALBAICIN</h3>
        <div class='card'>
            <div class='image'>
                <img src="./img/Grenade/L'albaicin.jpg" alt="L'Albaicin" width="500px">
            </div>
            <div class="texte">
                <div class="content">
                    <p>
                        Built at the time of Muslim rule over the country, <b>the Albaicin</b> is a
                        district located on the hill of the <b>Sabika</b> in front of <b>the Alhambra</b>.
                        It is a district arranged in the image of a <b>labyrinth</b> narrow streets and small
                        places, surrounded by <b>white houses</b>. DSince the Nasrid period, it has changed very little.
                        <br>
                    </p>
                    <a href="./albaicin_en.php" >
                        <button class="bouton" type="button">
                            FIND OUT MORE
                        </button>
                    </a>
                </div>
            </div>
        </div>
        <h3>THE GENERALIFE</h3>
        <div class='card'>
            <div class='image'>
                <img src="./img/Grenade/Generalife.jpg" alt="Le Generalife" width="500px">
            </div>
            <div class="texte">
                <div class="content">
                    <p>
                        From the medieval period, the <b>Generalife</b> was a palace serving as a resting place for the
                        <b>Nasrid kings</b> of Granada.
                        Surrounded by orchards and gardens, it has a succession of rooms, balconies, gardens and
                        <b>water basins</b> originating in the mountains of the <b>Sierra Nevada</b>. Even today, it is
                        in a
                        splendid condition.
                        <br>
                    </p>
                    <a href="./generalife_en.php" >
                        <button class="bouton" type="button">
                            FIND OUT MORE
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <style>
        .top::before {
            content: "Top " !important;
        }
    </style>
    <a href="#" class="top">↑</a>

    <?php
    include("./php/footer_en.inc.php");
    ?>

    <script src="script.js"></script>
</body>

</html>