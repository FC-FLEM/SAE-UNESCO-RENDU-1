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
    <link rel="stylesheet" href="accueil.css" />
    <!-- Title pour le titre de l'onglet -->
    <title>Accueil</title>
    <link rel="icon" type="image/png" sizes="32x32" href="./img/favicon.ico">
    <META NAME="Robots" CONTENT="index, follow">
    <META NAME="Author" CONTENT="FCFLEM">
    <META NAME="Keywords" CONTENT="FCFLEM,Grenade,UNESCO">
</head>

<body>

    <?php
    include("./php/header.inc.php");
    ?>

    <!-- Contenu de la page -->

    <div class="contenu">
        <section class="accueil">
            <div class="accueil-center">
                <h1 id="titre-accueil">Grenade</h1>
                <h1 id="sous-titre-accueil">Patrimoine Mondial de l'UNESCO</h1>
            </div>
            <a class="aarrow" href="#accueil-infos">
                <div class="arrow-down"></div>
            </a>
        </section>
        <section class="accueil-infos" id="accueil-infos">
            <h3>PATRIMOINE CULTUREL</h3>
            <h5>L'Espagne sous emprise musulmane</h5>
            <p> C'est en <b><u>711</u></b> que débute l'invasion de l'Espagne par les musulmans.
                En moins de <b><u>5 ans</u></b>, près de la totalité de la péninsule ibérique est
                sous domination musulmane. Au titre de cette conquête, Grenade devint la capitale du royaume
                de Grenade dirigée par la dynastie musulmane <b><u>nasride.</u></b>
                11 ans après le début de la conquête, en <b><u>1212</u></b>, commence la reconquête
                du pays : <b><u>la Reconquista.</u></b>
            </p>

            <h5>Un patrimoine protégé</h5>
            <p>
                Grenade regroupe de nombreux monuments incontournables et iconiques
                qui font l'histoire de l'Espagne et sont reconnus comme <b><u>patrimoines
                mondiaux de l'UNESCO.</u></b>
                Avec l'Albaicin, l'Alhambra constitue la partie médiévale de la ville, à l'est de
                laquelle on retrouve les magnifiques jardins du Generalife.
            </p>
            <p class="hess">
                <a href="./histoire_architecture.php" >
                    <button>
                        Pour en savoir plus
                    </button>
                </a>
            </p>
        </section>
        <section class="accueil-cards" id="accueil-cards">
            <h3>QUE VISITER À GRENADE ?</h3>
            <div class='card'>
                <div class='image'>
                    <img src="./img/Grenade/street_grenade.jpg" alt="Grenade" width="500px">
                </div>
                <div class="texte">
                    <h4>Nos Parcours</h4>
                    <p>
                        Venez découvrir les différents parcours que nous vous proposons pour visiter la ville de Grenade ! En fonction de vos envies, vous pourrez choisir entre un parcours détente, un parcours famille, fêtard ou encore mélancolique. Adaptez votre visite à vos disponibilités (durée et moment de la journée) !
                    </p>
                    <a href="./parcours.php" >
                        <button class="bouton" type="button">
                            POUR EN SAVOIR PLUS
                        </button>
                    </a>
                </div>
            </div>
            <div class='card'>
                <div class='image'>
                    <img src="./img/Grenade/resto-Granada.jpg" alt="Grenade" width="500px">
                </div>
                <div class="texte">
                    <h4>Nos Restaurants</h4>
                    <p>
                        La période de domination arabo-musulmane du pays est toujours profondément ancrée dans la culture hispanique, des monuments, aux musées et même dans la gastronomie. La ville regorge d'une multitude de bars, auberges, restaurants proposant des produits traditionnels du pays !
                    </p>
                    <a href="./restaurants.php" >
                        <button class="bouton" type="button">
                            POUR EN SAVOIR PLUS
                        </button>
                    </a>
                </div>
            </div>
            <div class='card'>
                <div class='image'>
                    <img src="./img/Grenade/Hotel_Alhambra_Palace1.jpg" alt="Grenade" width="500px">
                </div>
                <div class="texte">
                    <h4>Nos Hôtels</h4>
                    <p>
                        Pour vous reposer après une bonne journée de visite ou déposer vos bagages en lieu sûr, on vous propose de vous installer confortablement à prix raisonnable. Une préférence de proximité avec les bars? les musées? les palais? Un large choix de lieux de séjour est à votre disposition !
                    </p>
                    <a href="./hotels.php" >
                        <button class="bouton" type="button">
                            POUR EN SAVOIR PLUS
                        </button>
                    </a>
                </div>
            </div>
        </section>
    </div>
    <a href="#" class="top">↑</a>

    <!-- Code du bas de page -->
    <?php
    include("./php/footer.inc.php");
    ?>
    <script src="script.js"></script>
</body>

</html>