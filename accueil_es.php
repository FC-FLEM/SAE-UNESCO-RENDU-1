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
    <link rel="stylesheet" href="header.css" />
    <link rel="stylesheet" href="footer.css" />
    <link rel="stylesheet" href="accueil.css" />
    <!-- Title pour le titre de l'onglet -->
    <title>Inicio</title>
    <link rel="icon" type="image/png" sizes="32x32" href="./img/favicon.ico">
    <META NAME="Robots" CONTENT="index, follow">
    <META NAME="Author" CONTENT="FCFLEM">
    <META NAME="Keywords" CONTENT="FCFLEM,Grenade,UNESCO">
</head>

<body>

    <?php
    include("./php/header_es.inc.php");
    ?>

    <!-- Contenu de la page -->

    <div class="contenu">
        <section class="accueil">
            <div class="accueil-center">
                <h1 id="titre-accueil">Granada</h1>
                <h1 id="sous-titre-accueil">Patrimonio mundial de UNESCO</h1>
            </div>
            <a class="aarrow" href="#accueil-infos">
                <div class="arrow-down"></div>
            </a>
        </section>
        <section class="accueil-infos" id="accueil-infos">
            <h3>PATRIMONIO CULTURAL</h3>
            <h5>España bajo dominación musulmana</h5>
            <p>
                En <b><u>711</u></b> comenzó la invasión de la Península Ibérica por los musulmanos.
                En sólo <b><u>5 años</u></b>, casi todo el país estaba bajo dominación árabe-musulmana.
                Como resultado de esta conquista, Granada se convirtió en la capital del reino de Granada, gobernado por la dinastía musulmana <b><u>nazarí.</u></b>
                11 años después del inicio de la conquista, en <b><u>1212</u></b>, comienza la reconquista del país: <b><u>la Reconquista.</u></b>
            </p>

            <h5>Un patrimonio protegido</h5>
            <p>
                Granada conserva numerosos monumentos emblemáticos que forman parte de la historia de España y están reconocidos como <b><u>Patrimonio de la Humanidad por la UNESCO.</u></b>
                Junto con el Albaicín, la Alhambra forma la parte medieval de la ciudad, al este de la cual se encuentran los magníficos jardines del Generalife.
            </p>
            <p class="hess">
                <a href="./histoire_architecture_es.php" >
                    <button>
                        PARA MAS INFORMACION
                    </button>
                </a>
            </p>
        </section>
        <section class="accueil-cards" id="accueil-cards">
            <h3>¿QUÉ VER EN GRANADA?</h3>
            <div class='card'>
                <div class='image'>
                    <img src="./img/Grenade/street_grenade.jpg" alt="Grenade" width="500px">
                </div>
                <div class="texte">
                    <h4>Recorridos</h4>
                    <p>
                        Venga y descubra las diferentes rutas que le ofrecemos para visitar la ciudad de Granada. Dependiendo de lo que quiera hacer, podrá elegir entre un tour relajante, un tour familiar, un tour de fiesta o un tour melancólico. ¡Adapte su visita a su disponibilidad (duración y hora del día)!
                    </p>
                    <a href="./parcours_es.php" >
                        <button class="bouton" type="button">
                            PARA MAS INFORMACION
                        </button>
                    </a>
                </div>
            </div>
            <div class='card'>
                <div class='image'>
                    <img src="./img/Grenade/resto-Granada.jpg" alt="Grenade" width="500px">
                </div>
                <div class="texte">
                    <h4>Restaurantes</h4>
                    <p>
                        El periodo de dominación árabe-musulmana del país sigue profundamente arraigado en la cultura hispana, desde los monumentos a los museos e incluso en la gastronomía. La ciudad está llena de bares, hostales, restaurantes que ofrece productos tradicionales del país.
                    </p>
                    <a href="./restaurants_es.php" >
                        <button class="bouton" type="button">
                            PARA MAS INFORMACION
                        </button>
                    </a>
                </div>
            </div>
            <div class='card'>
                <div class='image'>
                    <img src="./img/Grenade/Hotel_Alhambra_Palace1.jpg" alt="Grenade" width="500px">
                </div>
                <div class="texte">
                    <h4>Hoteles</h4>
                    <p>
                        Si desea descansar después de un buen día de turismo o dejar su equipaje en seguro lugar, le ofrecemos un lugar confortable para quedarse
                        a un precio razonable. ¿Prefiere estar cerca de bares, museos o palacios?
                        Una amplia selección de lugares de estancia está a su disposición!
                    </p>
                    <a href="./hotels_es.php" >
                        <button class="bouton" type="button">
                            PARA MAS INFORMACION
                        </button>
                    </a>
                </div>
            </div>
        </section>
    </div>
    <style>
        .top::before {
            content: "Arriba " !important;
        }
    </style>
    <a href="#" class="top">↑</a>

    <!-- Code du bas de page -->
    <?php
    include("./php/footer_es.inc.php");
    ?>
    <script src="script.js"></script>
</body>

</html>