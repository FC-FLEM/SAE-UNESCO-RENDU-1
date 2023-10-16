<?php
session_start();
?>

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
    <link rel="stylesheet" href="a_propos.css" />
    <link rel="stylesheet" href="header.css" />
    <link rel="stylesheet" href="footer.css" />
    <!-- Title pour le titre de l'onglet -->
    <title>À propos</title>
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
        <h1>A propos</h1>
        <section class="Projet">
            <h2>LE PROJET</h2>
            <div class="descproj">
                <p>Dans le cadre d’un projet en BUT Informatique à L’IUT Gustave-Eiffel, nous avons pour objectif de
                    créer un site dynamique, entièrement interactif, et qui répondra à l’enjeu qu’implique le
                    partenariat effectué avec l’UNESCO ; revaloriser le patrimoine de Grenade, Espagne.
                </p><br>
                <p>
                    Avec sa richesse culturelle et ses couleurs vibrantes, elle représente à merveille la beauté de
                    l’Espagne. L’Alhambra de Grenade est un patrimoine mondial de l’UNESCO très connu.
                </p>
            </div>
        </section>
        <section class="Equipe">
            <h2>NOTRE EQUIPE</h2>
            <div class="team">
                <div class="Helena">
                    <img class="avatar" src="./img/avatar1.png" alt="Avatar Helena">
                    <p class="nom">CHEVALIER Hélèna</p>
                    <p class="desc">ORGANISATRICE PROPULSEUR ET RESPONSABLE DEVELOPPEMENT</p>
                    <div class="Reseaux">
                        <a class="reseau" href="https://www.instagram.com/ff.grenade/" target="_blank"><img src="./img/insta.png" alt="insta"></a>
                        <abbr class="reseau" title="mailto:helena.chevalier@edu.univ-eiffel.fr">
                            <div class="tooltip"><img src="./img/email.png" alt="email"><span class="tooltiptext">helena.chevalier@edu.univ-eiffel.fr</span></div>
                        </abbr>
                        <a class="reseau" href="https://github.com/Artena8" target="_blank"><img src="./img/github.png" alt="github"></a>
                    </div>
                </div>
                <div class="Maryam">
                    <img class="avatar" src="./img/avatar2.png" alt="Avatar Maryam">
                    <p class="nom">CONSANI Maryam</p>
                    <p class="desc">CONCEPTRICE UI/UX DESIGNER ET PRISEURE</p>
                    <div class="Reseaux">
                        <a class="reseau" href="https://www.instagram.com/ff.grenade/" target="_blank"><img src="./img/insta.png" alt="insta"></a>
                        <abbr class="reseau" title="mailto:maryam.consani@edu.univ-eiffel.fr">
                            <div class="tooltip"><img src="./img/email.png" alt="email"><span class="tooltiptext">maryam.consani@edu.univ-eiffel.fr</span></div>
                        </abbr>
                        <a class="reseau" href="https://github.com/Korotsuki" target="_blank"><img src="./img/github.png" alt="github"></a>
                    </div>
                </div>
                <div class="Loelia">
                    <img class="avatar" src="./img/avatar3.png" alt="Avatar Loelia">
                    <p class="nom">COUTELLIER Loélia</p>
                    <p class="desc">COORDINATRICE PERFECTIONNISTE RESPONSABLE STRATEGIQUE ET
                        AUDIOVISUELLE</p>
                    <div class="Reseaux">
                        <a class="reseau" href="https://www.instagram.com/ff.grenade/" target="_blank"><img src="./img/insta.png" alt="insta"></a>
                        <abbr class="reseau" title="mailto:loelia.coutellier@edu.univ-eiffel.fr">
                            <div class="tooltip"><img src="./img/email.png" alt="email"><span class="tooltiptext">loelia.coutellier@edu.univ-eiffel.fr</span></div>
                        </abbr>
                        <a class="reseau" href="https://github.com/widfleer" target="_blank"><img src="./img/github.png" alt="github"></a>
                    </div>
                </div>
                <div class="Emeline">
                    <img class="avatar" src="./img/avatar4.png" alt="Avatar Emeline">
                    <p class="nom">HOUANGKEO Emeline</p>
                    <p class="desc">CHEFFE DE PROJET EXPERTE PROMOTRICE ET SOUTIEN</p>
                    <div class="Reseaux"><a class="reseau" href="https://www.instagram.com/ff.grenade/" target="_blank"><img src="./img/insta.png" alt="insta"></a>
                        <abbr class="reseau" title="mailto:dieu-tien.houangkeo@edu.univ-eiffel.fr">
                            <div class="tooltip"><img src="./img/email.png" alt="email"><span class="tooltiptext">dieu-tien.houangkeo@edu.univ-eiffel.fr</span></div>
                        </abbr>
                        <a class="reseau" href="https://github.com/Hyprra" target="_blank"><img src="./img/github.png" alt="github"></a>
                    </div>
                </div>
                <div class="Kellian">
                    <img class="avatar" src="./img/avatar5.png" alt="Avatar Emeline">
                    <p class="nom">BREDEAU Kellian</p>
                    <p class="desc">PTIT NOUVEAU AUXILIAIRE EXPERT AUXILIAIRE PERFECTIONNISTE</p>
                    <div class="Reseaux"><a class="reseau" href="https://www.instagram.com/ff.grenade/" target="_blank"><img src="./img/insta.png" alt="insta"></a>
                        <abbr class="reseau" title="mailto:dieu-tien.houangkeo@edu.univ-eiffel.fr">
                            <div class="tooltip"><img src="./img/email.png" alt="email"><span class="tooltiptext">kellian.bredeau@edu.univ-eiffel.fr</span></div>
                        </abbr>
                        <a class="reseau" href="https://github.com/Hyprra" target="_blank"><img src="./img/github.png" alt="github"></a>
                    </div>
                </div>
            </div>

        </section>

        <section class="Source">
            <h2>NOS SOURCES</h2>
            <div class="sources">
                <div class="Wikipédia">
                    <img src="./img/wikipedia.png" alt="WIKIPEDIA">
                    <p class="nom">WIKIPEDIA </p>
                    <p>L’encyclopédie libre</p>
                    <a href="https://fr.wikipedia.org/wiki/Wikip%C3%A9dia:Accueil_principal" target="_blank">
                        <button class="bouton" type="button">
                            Y aller
                        </button>
                    </a>
                </div>
                <div class="Unesco">
                    <img src="./img/UNESCO.png" alt="UNESCO">
                    <p class="nom">UNESCO</p>
                    <p>Le partage des savoirs et de la connaissance.</p>
                    <a href="https://www.unesco.org/fr" target="_blank">
                        <button class="bouton" type="button">
                            Y aller
                        </button>
                    </a>
                </div>
                <div class="tripadvisor">
                    <img src="./img/tripadvisor.png" alt="TRIPADVISOR">
                    <p class="nom">TRIPADVISOR</p>
                    <p>Des avis de confiance</p>
                    <a href="https://www.tripadvisor.fr/" target="_blank">
                        <button class="bouton" type="button">
                            Y aller
                        </button>
                    </a>
                </div>
            </div>
        </section>
        <section class="Contact">
            <h2>NOUS CONTACTER</h2>
            <FORM action="./php/mailer.php" method="post">
                <LABEL for="nom">VOTRE NOM</LABEL>
                <br>
                <INPUT type="text" name="nom" id="nom" placeholder="ex: jean-michel" required>
                <br>
                <LABEL for="email">VOTRE ADRESSE E-MAIL</LABEL>
                <br>
                <INPUT type="email" name="email" id="email" placeholder="ex: jean-michel@example.com" required>
                <br>
                <LABEL for="titre">LE TITRE DE VOTRE MESSAGE</LABEL>
                <br>
                <INPUT type="text" name="titre" id="titre" placeholder="ex: hey" required>
                <br>
                <LABEL for="commentaire_produit">VOTRE MESSAGE&emsp;</LABEL> <br>
                <TEXTAREA id="commentaire_produit" name="commentaire_produit" COLS="30" ROWS="5" placeholder="ex:bonjour,..."></TEXTAREA>

                <br>
                <input type="submit" value="Envoyer">

            </FORM>
        </section>
    </div>
    <a href="#" class="top"> ↑ </a>
    <script src="script.js"></script>
    <?php
    include("php/footer.inc.php");
    ?>

</body>

</html>