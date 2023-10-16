<?php
session_start();
?>
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
    <link rel="stylesheet" href="a_propos.css" />
    <link rel="stylesheet" href="header.css" />
    <link rel="stylesheet" href="footer.css" />
    <!-- Title pour le titre de l'onglet -->
    <title>About us</title>
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
        <h1>About us</h1>
        <section class="Projet">
            <h2>THE PROJECT</h2>
            <div class="descproj">
                <p>Within the framework of a project in Computer Science at the IUT Gustave-Eiffel, we have for
                    objective to create a dynamic, fully interactive website, which will answer the challenge of the
                    partnership with partnership with UNESCO; to revalorize the heritage of Granada, Spain.
                </p><br>
                <p>
                    With its cultural richness and vibrant colors, it represents the beauty
                    of Spain. The Alhambra of Granada is a well known UNESCO World Heritage Site.
                </p>
            </div>
        </section>
        <section class="Equipe">
            <h2>OUR TEAM</h2>
            <div class="team">
                <div class="Helena">
                    <img class="avatar" src="./img/avatar1.png" alt="Avatar Helena">
                    <p class="nom">CHEVALIER Hélèna</p>
                    <p class="desc">ORGANIZER, SHAPER AND DEVELOPMENT MANAGER</p>
                    <div class="Reseaux">
                        <a class="reseau" href="https://www.instagram.com/ff.grenade/" target="_blank"><img
                                src="./img/insta.png" alt="insta"></a>
                        <abbr class="reseau" title="mailto:helena.chevalier@edu.univ-eiffel.fr">
                            <div class="tooltip"><img src="./img/email.png" alt="email"><span
                                    class="tooltiptext">helena.chevalier@edu.univ-eiffel.fr</span></div>
                        </abbr>
                        <a class="reseau" href="https://github.com/Artena8" target="_blank"><img src="./img/github.png"
                                alt="github"></a>
                    </div>
                </div>
                <div class="Maryam">
                    <img class="avatar" src="./img/avatar2.png" alt="Avatar Maryam">
                    <p class="nom">CONSANI Maryam</p>
                    <p class="desc">UI/UX DESIGNER, PLANT AND MONITOR EVALUATOR</p>
                    <div class="Reseaux">
                        <a class="reseau" href="https://www.instagram.com/ff.grenade/" target="_blank"><img
                                src="./img/insta.png" alt="insta"></a>
                        <abbr class="reseau" title="mailto:maryam.consani@edu.univ-eiffel.fr">
                            <div class="tooltip"><img src="./img/email.png" alt="email"><span
                                    class="tooltiptext">maryam.consani@edu.univ-eiffel.fr</span></div>
                        </abbr>
                        <a class="reseau" href="https://github.com/Korotsuki" target="_blank"><img
                                src="./img/github.png" alt="github"></a>
                    </div>
                </div>

                <div class="Loelia">
                    <img class="avatar" src="./img/avatar3.png" alt="Avatar Loelia">
                    <p class="nom">COUTELLIER Loélia</p>
                    <p class="desc">COORDINATOR, COMPLETE FINISHER,
                        AUDIOVISUAL MANAGER</p>
                    <div class="Reseaux">
                        <a class="reseau" href="https://www.instagram.com/ff.grenade/" target="_blank"><img
                                src="./img/insta.png" alt="insta"></a>
                        <abbr class="reseau" title="mailto:loelia.coutellier@edu.univ-eiffel.fr">
                            <div class="tooltip"><img src="./img/email.png" alt="email"><span
                                    class="tooltiptext">loelia.coutellier@edu.univ-eiffel.fr</span></div>
                        </abbr>
                        <a class="reseau" href="https://github.com/widfleer" target="_blank"><img src="./img/github.png"
                                alt="github"></a>
                    </div>
                </div>
                <div class="Emeline">
                    <img class="avatar" src="./img/avatar4.png" alt="Avatar Emeline">
                    <p class="nom">HOUANGKEO Emeline</p>
                    <p class="desc">PROJECT MANAGER, SPECIALIST, RESSOURCE INVESTIGATOR AND TEAM WORKER</p>
                    <div class="Reseaux"><a class="reseau" href="https://www.instagram.com/ff.grenade/"
                            target="_blank"><img src="./img/insta.png" alt="insta"></a>
                        <abbr class="reseau" title="mailto:dieu-tien.houangkeo@edu.univ-eiffel.fr">
                            <div class="tooltip"><img src="./img/email.png" alt="email"><span
                                    class="tooltiptext">dieu-tien.houangkeo@edu.univ-eiffel.fr</span></div>
                        </abbr>
                        <a class="reseau" href="https://github.com/Hyprra" target="_blank"><img src="./img/github.png"
                                alt="github"></a>
                    </div>
                </div>
                <div class="Kellian">
                    <img class="avatar" src="./img/avatar5.png" alt="Avatar Emeline">
                    <p class="nom">BREDEAU Kellian</p>
                    <p class="desc">INTERN AUXILIARY EXPERT AUXILIARY PERFECTIONIST</p>
                    <div class="Reseaux"><a class="reseau" href="https://www.instagram.com/ff.grenade/"
                            target="_blank"><img src="./img/insta.png" alt="insta"></a>
                        <abbr class="reseau" title="mailto:dieu-tien.houangkeo@edu.univ-eiffel.fr">
                            <div class="tooltip"><img src="./img/email.png" alt="email"><span
                                    class="tooltiptext">kellian.bredeau@edu.univ-eiffel.fr</span></div>
                        </abbr>
                        <a class="reseau" href="https://github.com/Hyprra" target="_blank"><img
                                src="./img/github.png" alt="github"></a>
                    </div>
                 </div>
            </div>

        </section>

        <section class="Source">
            <h2>OUR SOURCES</h2>
            <div class="sources">
                <div class="Wikipédia">
                    <img src="./img/wikipedia.png" alt="WIKIPEDIA">
                    <p class="nom">WIKIPEDIA </p>
                    <p>The free encyclopedia</p>
                    <a href="https://fr.wikipedia.org/wiki/Wikip%C3%A9dia:Accueil_principal" target="_blank">
                        <button class="bouton" type="button">
                            Go to
                        </button>
                    </a>
                </div>
                <div class="Unesco">
                    <img src="./img/UNESCO.png" alt="UNESCO">
                    <p class="nom">UNESCO</p>
                    <p>The sharing of knowledge.</p>
                    <a href="https://www.unesco.org/fr" target="_blank">
                        <button class="bouton" type="button">
                            Go to
                        </button>
                    </a>
                </div>
                <div class="tripadvisor">
                    <img src="./img/tripadvisor.png" alt="TRIPADVISOR">
                    <p class="nom">TRIPADVISOR</p>
                    <p>Trusted reviews</p>
                    <a href="https://www.tripadvisor.fr/" target="_blank">
                        <button class="bouton" type="button">
                            Go to
                        </button>
                    </a>
                </div>
            </div>
        </section>

        <section class="Contact">
            <h2>CONTACT US</h2>
            <FORM action="mailto:projetgrenadeunesco@gmail.com" method="post">
                <LABEL for="nom">YOUR NAME</LABEL>
                <br>
                <INPUT type="text" id="nom" placeholder="ex: jean-michel" required>
                <br>
                <LABEL for="email">YOUR E-MAIL ADDRESS</LABEL>
                <br>
                <INPUT type="email" id="email" placeholder="ex: jean-michel@example.com" required>
                <br>
                <LABEL for="titre">THE TITLE OF YOUR MESSAGE</LABEL>
                <br>
                <INPUT type="text" name="titre" id="titre" placeholder="ex: hey" required>
                <br>
                <LABEL for="commentaire_produit">YOUR MESSAGE&emsp;</LABEL> <br>
                <TEXTAREA id="commentaire_produit" name="commentaire_produit" COLS="30" ROWS="5"
                    placeholder="ex:hello,..."></TEXTAREA>

                <br>
                <INPUT type="submit" value="Send">

            </FORM>
        </section>
    </div>

    <a href="#" class="top">↑</a>

    <?php
    include("./php/footer_en.inc.php");
    ?>
    <script src="script.js"></script>
</body>

</html>