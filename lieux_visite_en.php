<!DOCTYPE html>
<!-- Doctype pour rester conforme aux standards -->
<!-- lang pour accent pour synthèse vocale -->
<?php
if (!isset($_SESSION)) {
    session_start();
}
if (!isset($_SESSION['langue'])) {
    $_SESSION['langue'] = "";
    $langue_cible = "fr";
} else {
    $langue_cible = $_SESSION['langue'];
}
?>

<html lang="<?php echo $_SESSION['langue']; ?>" translate="yes">

<head>
    <!-- charset = encodage des caractères -->
    <meta charset="UTF-8" />
    <!-- viewport pour la mise en page mobile -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- link pour relier la feuille css -->
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="header.css" />
    <link rel="stylesheet" href="lieuxvisite.css" />
    <link rel="stylesheet" href="footer.css" />
    <!-- Title pour le titre de l'onglet -->
    <title>Places to visit</title>
    <link rel="icon" type="image/png" sizes="32x32" href="./img/favicon.ico">
    <META NAME="Robots" CONTENT="index, follow">
    <META NAME="Author" CONTENT="FCFLEM">
    <META NAME="Keywords" CONTENT="FCFLEM,Grenade,UNESCO">
</head>

<body>

<?php
    include("./php/header_en.inc.php");
    ?>


    <main style="margin-top:100px;">
        <h1>Places to visit</h1>
        <h3>Monuments</h3>
        <div class="carrousel">

            <div class="images" data-carrousel=first data-time=7>

            <?php
            include("./php/connexion.php");
            try {
                $resultat = $cnx->prepare("SELECT * FROM visitesen");
                $resultat->execute(); // Exécuter la requête pour récupérer les résultats
                $id = 0;

                while ($ligne = $resultat->fetch(PDO::FETCH_ASSOC)) {
                    $id++;
                    $lieu = $ligne['lieu'];
                    $image = $ligne['img'];
                    $type = $ligne['type'];
                    $description = $ligne['description'];

                    if ($type == "monument") {
                        echo '<div id="' . $id . '" class="cadre-lieu" style="background-image: url(\'./img/Grenade/' . $image . '\')">';
                        echo '<div class="description-cadre">';
                        echo '<h4>' . $lieu . '</h4>';
                        echo '<p>' . $description . '</p>';
                        echo '</div>';
                        echo '</div>';
                    }
                }
            } catch (PDOException $e) {
                echo "Erreur lors de l'exécution de la requête : " . $e->getMessage();
            }
            ?>
            </div>

            <div class="arrow-container">
                <div class="arrow-left" data-sections=first data-boutons=gauche></div>
                <div class="arrow-right" data-sections=first data-boutons=droite></div>
            </div>
        </div>

        <h3>Activities</h3>
        <div class=carrousel>

            <div class="images" data-carrousel=second data-time=5>

            <?php
            include("./php/connexion.php");
            try {
                $resultat = $cnx->prepare("SELECT * FROM visitesen");
                $resultat->execute(); // Exécuter la requête pour récupérer les résultats
                $id = 0;

                while ($ligne = $resultat->fetch(PDO::FETCH_ASSOC)) {
                    $id++;
                    $lieu = $ligne['lieu'];
                    $image = $ligne['img'];
                    $type = $ligne['type'];
                    $description = $ligne['description'];

                    if ($type == "activite") {
                        echo '<div id="' . $id . '" class="cadre-lieu" style="background-image: url(\'./img/Grenade/' . $image . '\')">';
                        echo '<div class="description-cadre">';
                        echo '<h4>' . $lieu . '</h4>';
                        echo '<p>' . $description . '</p>';
                        echo '</div>';
                        echo '</div>';
                    }
                }
            } catch (PDOException $e) {
                echo "Erreur lors de l'exécution de la requête : " . $e->getMessage();
            }
            ?>
            </div>

            <div class="arrow-container">
                <div class="arrow-left" data-sections=first data-boutons=gauche></div>
                <div class="arrow-right" data-sections=first data-boutons=droite></div>
            </div>
        </div>

        <h3>Night Activities</h3>
        <div class=carrousel>

            <div class="images" data-carrousel=third data-time=5>

            <?php
            include("./php/connexion.php");
            try {
                $resultat = $cnx->prepare("SELECT * FROM visitesen");
                $resultat->execute(); // Exécuter la requête pour récupérer les résultats
                $id = 0;

                while ($ligne = $resultat->fetch(PDO::FETCH_ASSOC)) {
                    $id++;
                    $lieu = $ligne['lieu'];
                    $image = $ligne['img'];
                    $type = $ligne['type'];
                    $description = $ligne['description'];

                    if ($type == "nocturne") {
                        echo '<div id="' . $id . '" class="cadre-lieu" style="background-image: url(\'./img/Grenade/' . $image . '\')">';
                        echo '<div class="description-cadre">';
                        echo '<h4>' . $lieu . '</h4>';
                        echo '<p>' . $description . '</p>';
                        echo '</div>';
                        echo '</div>';
                    }
                }
            } catch (PDOException $e) {
                echo "Erreur lors de l'exécution de la requête : " . $e->getMessage();
            }
            ?>
            </div>

            <div class="arrow-container">
                <div class="arrow-left" data-sections=first data-boutons=gauche></div>
                <div class="arrow-right" data-sections=first data-boutons=droite></div>
            </div>
        </div>
        <a href="#" class="top"> ↑ </a>

        <?php
        include("./php/footer_en.inc.php");
        ?>

    </main>

    <script src="script.js"></script>

</body>

</html>