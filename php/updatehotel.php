<!DOCTYPE html>
<!-- Doctype pour rester comforme aux standards -->
<!-- lang pour accent pour synthèse vocale-->
<html lang="fr">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" data-tag="font" />
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" data-tag="font" />
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&amp;display=swap" data-tag="font" />

<head>
    <!-- charset = encodage des caractères -->
    <meta charset="UTF-8" />
    <!-- viewport pour la mise en page mobile -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- link pour relier la feuille css -->
    <link rel="stylesheet" href="./css/style.css" />
    <link rel="stylesheet" href="./css/modifier_infos_perso.css" />
    <!-- Title pour le titre de l'onglet -->
    <title>Modifications de vos préférences</title>
    <link rel="icon" type="image/png" sizes="32x32" href="./assets/ski.ico">
    <META NAME="Robots" CONTENT="index, follow">
    <META NAME="Author" CONTENT="COUTELLIER HOUANGKEO">
    <META NAME="Keywords" CONTENT="COUTELLIER HOUANGKEO Zarza-Ski">
</head>

<body>

    <section class="modifier" id="modifier">
        <h1>Modifier vos informations</h1>
        <div class="champs">
            <div class="champ">
                <form action="./verif_modif_hotel.php" method="post">
                <label for="nom">Hotel concerné</label><br>
                <select name="nom" id="nom">
                    <?php 
                        include("connexion.inc.php");
                        $requete="SELECT num_client FROM sae_client WHERE nom_groupe='".$_SESSION['nom_groupe']."' AND num_client!=".$_SESSION['id'].";";
                        $resultat = $cnx->query($requete);
                        if ($resultat->rowCount() > 1) {
                            while ($ligne = $resultat->fetch(PDO::FETCH_ASSOC)) {
                                echo "<option value=".$ligne['num_client'].">".$ligne['num_client']."</option>";
                            }
                        }
                        else {
                            echo '<body onLoad="alert(\'Effectif de groupe trop faible !\')">';
                            header('Location: ./choix_compte.php');
                        }
                    ?>
                </select>
            </div>
            <div class="champ">
                <label for="code">Niveau de préférence</label>
                <select name="code" id="code">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                </select>
            </div>
        </div>
        <input type="submit" name="submit" value="Modifier" />
        </form>
    </section>
    </body>
</html>