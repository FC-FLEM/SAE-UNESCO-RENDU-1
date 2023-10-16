<?php
session_start();
?>

<!DOCTYPE html>
<!-- Doctype pour rester comforme aux standards -->
<!-- lang pour accent pour synthèse vocale-->
<html lang="es">

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
    <title>Quiénes somos</title>
    <link rel="icon" type="image/png" sizes="32x32" href="./img/favicon.ico">
    <META NAME="Robots" CONTENT="index, follow">
    <META NAME="Author" CONTENT="FCFLEM">
    <META NAME="Keywords" CONTENT="FCFLEM,Grenade,UNESCO">
    <style>
        .top::before {
            content: "Arriba " !important;
        }
    </style>
</head>

<body>
    <?php
    include("./php/header_es.inc.php");
    ?>
    <div class="contenu">
        <h1>Quiénes somos</h1>
        <section class="Projet">
            <h2>EL PROYECTO</h2>
            <div class="descproj">
                <p>En el contexto de un proyecto de Informática en el IUT Gustave-Eiffel, tenemos la misión de crear un sitio web dinámico, totalmente interactivo, que responda al reto que supone el en colaboración con la UNESCO, para revalorizar el patrimonio de Granada (España).
                </p><br>
                <p>
                    Con su riqueza cultural y sus vivos colores, representa la belleza de España. La Alhambra de Granada es un conocido lugar declarado Patrimonio de la Humanidad por la UNESCO.
                </p>
            </div>
        </section>
        <section class="Equipe">
            <h2>NUESTRO EQUIPO</h2>
            <div class="team">
                <div class="Helena">
                    <img class="avatar" src="./img/avatar1.png" alt="Avatar Helena">
                    <p class="nom">CHEVALIER Hélèna</p>
                    <p class="desc">ORGANIZADOR PROPULSOR Y DIRECTOR DE PROGRAMACIÓN</p>
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
                    <p class="desc">CONSULTORA INFORMÁTICA UI/UX Y DISEÑADOR</p>
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
                    <p class="desc">COORDINADOR PERFECCIONISTA Y RESPONSABLE AUDIOVISUAL</p>
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
                    <p class="desc">JEFE DE PROYECTO EXPERTO PROMOTOR Y APOYO</p>
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
                    <p class="desc">PEQUEÑO NUEVO AUXILIAR EXPERTO AUXILIAR PERFECCIONISTA</p>
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
            <h2>NUESTRAS FUENTES</h2>
            <div class="sources">
                <div class="Wikipédia">
                    <img src="./img/wikipedia.png" alt="WIKIPEDIA">
                    <p class="nom">WIKIPEDIA </p>
                    <p>La enciclopedia libre</p>
                    <a href="https://fr.wikipedia.org/wiki/Wikip%C3%A9dia:Accueil_principal" target="_blank">
                        <button class="bouton" type="button">
                            Ir
                        </button>
                    </a>
                </div>
                <div class="Unesco">
                    <img src="./img/UNESCO.png" alt="UNESCO">
                    <p class="nom">UNESCO</p>
                    <p>Compartir conocimientos y experiencia.</p>
                    <a href="https://www.unesco.org/fr" target="_blank">
                        <button class="bouton" type="button">
                            Ir
                        </button>
                    </a>
                </div>
                <div class="tripadvisor">
                    <img src="./img/tripadvisor.png" alt="TRIPADVISOR">
                    <p class="nom">TRIPADVISOR</p>
                    <p>Opiniones fiables</p>
                    <a href="https://www.tripadvisor.fr/" target="_blank">
                        <button class="bouton" type="button">
                            Ir
                        </button>
                    </a>
                </div>
            </div>
        </section>

        <section class="Contact">
            <h2>CONTACTO</h2>
            <FORM action="mailto:projetgrenadeunesco@gmail.com" method="post">
                <LABEL for="nom">SU NOMBRE</LABEL>
                <br>
                <INPUT type="text" id="nom" placeholder="ex: juan-michel" required>
                <br>
                <LABEL for="email">SU DIRECCIÓN DE CORREO ELECTRÓNICO</LABEL>
                <br>
                <INPUT type="email" id="email" placeholder="ex: juan-michel@example.com" required>
                <br>
                <LABEL for="titre">EL TITULO DE SU MENSAJE</LABEL>
                <br>
                <INPUT type="text" name="titre" id="titre" placeholder="ex: hey" required>
                <br>
                <LABEL for="commentaire_produit">SU MENSAJE&emsp;</LABEL> <br>
                <TEXTAREA id="commentaire_produit" name="commentaire_produit" COLS="30" ROWS="5" placeholder="ex:Hola,..."></TEXTAREA>

                <br>
                <INPUT type="submit" value="Envoyer">

            </FORM>
        </section>
    </div>
    
    <a href="#" class="top"> ↑ </a>

    <?php
    include("./php/footer_es.inc.php");
    ?>
    <script src="script.js"></script>
</body>

</html>