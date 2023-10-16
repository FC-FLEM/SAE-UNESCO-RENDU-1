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
        <h1>Page des spots photos</h1>
        <div class='card'>
            <div class="texte">
                <form action="./php/insert_spots.php" method="POST" enctype="multipart/form-data">
                    <label for="lieu">Lieu:</label>
                    <input type="text" id="lieu" name="lieu" required maxlength="100" value="Lieu"><br><br>
                    
                    <label for="image">Image:</label>
                    <input type="text" id="img" name="img" required maxlength="100" value="img"><br><br>
                    
                    <label for="likes">Likes:</label>
                    <input type="number" id="likes" name="likes" min="0" max="2147483645" value="0" required pattern="[0-9]+"><br><br>
                    
                    <label for="message">Message:</label>
                    <textarea id="message" name="message" required maxlength="255" rows="3"></textarea><br><br>

                    <label for="messageen">Message en anglais:</label>
                    <textarea id="messageen" name="messageen" required maxlength="255" rows="3"></textarea><br><br>

                    <label for="messagees">Message en espagnol:</label>
                    <textarea id="messagees" name="messagees" required maxlength="255" rows="3"></textarea><br><br>
                    
                    <input type="submit" value="Ajouter">
                  </form>
            </div>
        </div>

        <div class='card'>
            <div class="texte">
                <form action="./php/update_spots.php" method="POST" enctype="multipart/form-data">
                    <label for="lieu">Lieu :</label>
                    <input type="text" id="lieu" name="lieu" required maxlength="255"><br><br>
        
                    <label for="image">Image:</label>
                    <input type="text" id="img" name="img" required maxlength="100"><br><br>
        
                    <label for="likes">Likes:</label>
                    <input type="number" id="likes" name="likes" min="0" max="2147483645" required pattern="[0-9]+"><br><br>
        
                    <label for="message">Message:</label>
                    <textarea id="message" name="message" required maxlength="255" rows="3"></textarea><br><br>
        
                    <label for="messageen">Message en anglais:</label>
                    <textarea id="messageen" name="messageen" required maxlength="255" rows="3"></textarea><br><br>
        
                    <label for="messagees">Message en espagnol:</label>
                    <textarea id="messagees" name="messagees" required maxlength="255" rows="3"></textarea><br><br>
        
                    <input type="submit" value="Mettre à jour">
                </form>
            </div>
        </div>

    <div class='card'>
        <div class="texte">
            <form action="./php/delete_spots.php" method="POST">
                <label for="lieu">Lieu du spot (en français) :</label>
                <input type="text" id="lieu" name="lieu" required maxlength="100"><br><br>
                <input type="submit" value="Supprimer">
              </form>              
        </div>
    </div>

    </div>
    <script src="script.js"></script>
</body>

</html>