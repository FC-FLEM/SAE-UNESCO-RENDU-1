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
    <link rel="stylesheet" href="connexion.css" />
    <!-- Title pour le titre de l'onglet -->
    <title>Page Admin</title>
    <link rel="icon" type="image/png" sizes="32x32" href="./img/favicon.ico">
    
</head>

<body>
    <div class="contenu">
        <a href="./admin.html" target="_blank">
            <button class="bouton" type="button">
                Revenir page admin
            </button>
        </a>
        <h1>Page des restaurants</h1>

    <div class='card'>
        <div class="texte">
            <form action="./php/insert_restaurants.php" method="POST" enctype="multipart/form-data">
                <label for="nomresto">Nom du restaurant :</label>
                <input type="text" id="nomresto" name="nomresto" required maxlength="150"><br><br>
    
                <label for="adrresto">Adresse du restaurant :</label>
                <input type="text" id="adrresto" name="adrresto" required maxlength="255"><br><br>
    
                <label for="image">Image :</label>
                <input type="text" id="img" name="img" required maxlength="100" value="img"><br><br>
    
                <label for="etoiles">Étoiles :</label>
                <input type="number" id="etoiles" name="etoiles" min="1" max="5" value="1"required><br><br>
    
                <label for="prix">Prix :</label>
                <input type="number" id="prix" name="prix" min="1" max="3" value="1" required><br><br>
    
                <label for="tags">Tags :</label>
                <input type="text" id="tags" name="tags" maxlength="255"><br><br>

                <label for="tagsen">Tags  (anglais):</label>
                <input type="text" id="tagsen" name="tagsen" maxlength="255"><br><br>

                <label for="tagses">Tags (espagnol):</label>
                <input type="text" id="tagses" name="tagses" maxlength="255"><br><br>
    
                <label for="linkresto">Lien du restaurant :</label>
                <input type="text" id="linkresto" name="linkresto" required maxlength="255"><br><br>
    
                <input type="submit" value="Ajouter">
            </form>
        </div>
    </div>

    <div class='card'>
        <div class="texte">
            <form action="./php/update_restaurants.php" method="POST" enctype="multipart/form-data">
                <label for="nomresto">Nom du restaurant :</label>
                <input type="text" id="nomresto" name="nomresto" required maxlength="150"><br><br>
    
                <label for="adrresto">Adresse du restaurant :</label>
                <input type="text" id="adrresto" name="adrresto" required maxlength="255"><br><br>
    
                <label for="image">Image :</label>
                <input type="text" id="img" name="img" required maxlength="100"><br><br>
    
                <label for="etoiles">Étoiles :</label>
                <input type="number" id="etoiles" name="etoiles" min="1" max="5" required><br><br>
    
                <label for="prix">Prix :</label>
                <input type="number" id="prix" name="prix" min="1" max="3" required><br><br>
    
                <label for="tags">Tags :</label>
                <input type="text" id="tags" name="tags" maxlength="255"><br><br>
    
                <label for="tagsen">Tags (anglais):</label>
                <input type="text" id="tagsen" name="tagsen" maxlength="255"><br><br>
    
                <label for="tagses">Tags (espagnol):</label>
                <input type="text" id="tagses" name="tagses" maxlength="255"><br><br>
    
                <label for="linkresto">Lien du restaurant :</label>
                <input type="text" id="linkresto" name="linkresto" required maxlength="255"><br><br>
    
                <input type="submit" value="Mettre à jour">
            </form>
        </div>
    </div>
    
    <div class='card'>
        <div class="texte">
            <form action="./php/delete_restaurants.php" method="POST">
                <label for="nomresto">Nom du restaurant (en français) :</label>
                <input type="text" id="nomresto" name="nomresto" required maxlength="255"><br><br>
                <input type="submit" value="Supprimer">
            </form>              
        </div>
    </div>

    </div>
    <script src="script.js"></script>
</body>

</html>