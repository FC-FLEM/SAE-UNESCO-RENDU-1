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
    <link rel="stylesheet" href="restaurants-hotels.css" />
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="header.css" />
    <link rel="stylesheet" href="footer.css" />
    <script src="filtre-restaurants-hotels.js"></script>
    <!-- Title pour le titre de l'onglet -->
    <title>Hôtels</title>
    <link rel="icon" type="image/png" sizes="32x32" href="./img/favicon.ico">
</head>

<body>

  <?php
    include("./php/header.inc.php");
    ?>

    <main>
    <h1>Hôtels</h1>
      <div class="filtre">
        <form>
          <label for="price-filter">Filtrer par prix :</label>
          <select id="price-filter">
            <option value="">Tous</option>
            <option value="$ - Faible">$ - Faible</option>
            <option value="$$ - Moyen">$$ - Moyen</option>
            <option value="$$$ - Élevé">$$$ - Elevé</option>
          </select>
          <br>
          <br>
          <hr>
          <br>
          <label for="stars-filter">Filtrer par étoiles :</label>
          <div id="stars-filter">
            <input type="checkbox" id="star-1" value="1">
            <label for="star-1">&#9733;</label>
    
            <input type="checkbox" id="star-2" value="2">
            <label for="star-2">&#9733;</label>
    
            <input type="checkbox" id="star-3" value="3">
            <label for="star-3">&#9733;</label>
    
            <input type="checkbox" id="star-4" value="4">
            <label for="star-4">&#9733;</label>
    
            <input type="checkbox" id="star-5" value="5">
            <label for="star-5">&#9733;</label>
          </div>
        </form>
      </div>
      <div class="cards">
        <?php
        include("./php/connexion.php");
        try {
          $resultat = $cnx->prepare("SELECT * FROM hotels");
          $resultat->execute(); // Exécuter la requête pour récupérer les résultats

          while ($ligne = $resultat->fetch(PDO::FETCH_ASSOC)) {
            $hotelName = $ligne['nomhotel'];
            $hotelAddress = $ligne['adrhotel'];
            $imageUrl = $ligne['img'];
            $stars = $ligne['etoiles'];
            $priceLevel = $ligne['prix'];
            $tags = $ligne['tags'];
            $lien = $ligne['linkhotel'];

            // Convertir les tags en un tableau
            $tagsArray = explode(", ", $tags);
            ?>

            <div class="card-restaurant-hotel">
              <h3 class="card-title"><?php echo $hotelName; ?></h3>
              <p class="card-address"><?php echo $hotelAddress; ?></p>
              <div class="card-image" style="background-image: url('./img/Grenade/<?php echo $imageUrl; ?>');"></div>
              <div class="card-details">
                <div class="card-stars">
                  <?php
                  // Afficher les étoiles
                  for ($i = 0; $i < 5; $i++) {
                    if ($i < $stars) {
                      echo "&#9733;";
                    } else {
                      echo "&#9734;";
                    }
                  }
                  ?>
                </div>
                <div class="card-price">
                  <?php
                  // Afficher le niveau de prix
                  $priceSymbols = str_repeat("$", $priceLevel);
                  echo $priceSymbols . " - ";

                  // Afficher le niveau de prix
                  switch ($priceLevel) {
                    case 1:
                      echo "Faible";
                      break;
                    case 2:
                      echo "Moyen";
                      break;
                    case 3:
                      echo "Élevé";
                      break;
                    default:
                      echo "Inconnu";
                      break;
                  }
                  ?>
                </div>
              </div>
              <div class="card-tags">
                <?php
                // Afficher les tags
                foreach ($tagsArray as $tag) {
                  echo "<div class='tags'>$tag</div>";
                }
                ?>
              </div>
              <?php
                echo "<a class='card-website' href='$lien'>Site Web de l'Hôtel</a>";
              ?>
            </div>
          <?php
          }
        } catch (PDOException $e) {
          echo "Erreur lors de l'exécution de la requête : " . $e->getMessage();
        }
        ?>
      </div>

      </div>

      <a href="#" class="top"> ↑ </a>
      <?php
    include("./php/footer.inc.php");
    ?>

<script src="script.js"></script>

    </main>

  </body>
</html>