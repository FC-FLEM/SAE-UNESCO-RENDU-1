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

<html lang="<?php echo $langue_cible; ?>" translate="yes">

<head>
    <!-- charset = encodage des caractères -->
    <meta charset="UTF-8" />
    <!-- viewport pour la mise en page mobile -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- link pour relier la feuille css -->
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="header.css" />
    <link rel="stylesheet" href="spotsphotos.css" />
    <link rel="stylesheet" href="insta.css" />
    <link rel="stylesheet" href="footer.css" />
    <!-- Title pour le titre de l'onglet -->
    <title>Pictures Spots</title>
    <link rel="icon" type="image/png" sizes="32x32" href="./img/favicon.ico">
    <META NAME="Robots" CONTENT="index, follow">
    <META NAME="Author" CONTENT="FCFLEM">
    <META NAME="Keywords" CONTENT="FCFLEM,Grenade,UNESCO">
</head>

<body translate="yes">
    <?php
    include("./php/header_en.inc.php");
    ?>
    <main style="margin-top:100px;">
        <h1 class="translate" translate="yes">Photos spots</h1>

        <h3 class="translate" translate="yes">Viewpoints for Instagram</h3>

        <div class="carrousel">
            <div class="arrow-left" data-sections="first" data-boutons="gauche"></div>

            <div class="images" data-carrousel="first" data-time="7">
                <?php
                include("./php/connexion.php");
                try {
                    $resultat = $cnx->prepare("SELECT lieu, img, likes, message FROM spotsen");
                    $resultat->execute(); // Exécuter la requête pour récupérer les résultats
                    $id = 0;

                    while ($ligne = $resultat->fetch(PDO::FETCH_ASSOC)) {
                        $id++;
                        $lieu = $ligne['lieu'];
                        $image = $ligne['img'];
                        $likes = $ligne['likes'];
                        $message = $ligne['message'];

                        echo '<div id="' . $id . '" class="insta">';
                        echo '<div class="debut">';
                        echo '<div class="userDetails">';
                        echo '<h3 class="translate" translate="yes"><span>' . $lieu . '</span></h3>';
                        echo '</div>';
                        echo '</div>';
                        echo '<div class="imgBox">';
                        echo '<img src="./img/Grenade/' . $image . '" class="cover" translate="yes">';
                        echo '</div>';
                        echo '<div class="buttons">';
                        echo '<img class="icon" src="https://zupimages.net/up/22/29/d1bd.png" translate="yes">';
                        echo '<img class="icon" src="https://zupimages.net/up/22/29/9y56.png" translate="yes">';
                        echo '</div>';
                        echo '<div>';
                        echo '<h4 class="likes">' . $likes . '</h4>';
                        echo '<h4 class="message" class="translate" translate="yes"><b>info_fl</b> ' . $message . '</h4>';
                        echo '</div>';
                        echo '</div>';
                    }
                } catch (PDOException $e) {
                    echo "Erreur lors de l'exécution de la requête : " . $e->getMessage();
                }
                ?>
            </div>

            <div class="arrow-right" data-sections="first" data-boutons="droite"></div>
        </div>

        <?php
        include("./php/footer_en.inc.php");
        ?>
    </main>
    <script src="script.js"></script>
</body>

</html>
