<?php
include("connexion.php");

// Récupération des données du formulaire
$nomhotel = $_POST['nomhotel'];
$adrhotel = $_POST['adrhotel'];
$image = $_POST['img'];
$etoiles = $_POST['etoiles'];
$prix = $_POST['prix'];
$tags = $_POST['tags'];
$tagsen = $_POST['tagsen'];
$tagses = $_POST['tagses'];
$linkhotel = $_POST['linkhotel'];

// Insertion des données dans la base de données
$sql = "INSERT INTO hotels (nomhotel, adrhotel, img, etoiles, prix, tags, linkhotel) 
        VALUES (:nomhotel, :adrhotel, :image, :etoiles, :prix, :tags, :linkhotel)";
$stmt = $cnx->prepare($sql);
$stmt->bindParam(':nomhotel', $nomhotel);
$stmt->bindParam(':adrhotel', $adrhotel);
$stmt->bindParam(':image', $image);
$stmt->bindParam(':etoiles', $etoiles);
$stmt->bindParam(':prix', $prix);
$stmt->bindParam(':tags', $tags);
$stmt->bindParam(':linkhotel', $linkhotel);

if ($stmt->execute()) {
    echo "Hôtel ajouté avec succès.";
} else {
    echo "Erreur lors de l'ajout de l'hôtel.";
    header('Location: ../admin.html');
}

$sql2 = "INSERT INTO hotelsen (nomhotel, adrhotel, img, etoiles, prix, tags, linkhotel) 
        VALUES (:nomhotel, :adrhotel, :image, :etoiles, :prix, :tags, :linkhotel)";
$stmt2 = $cnx->prepare($sql2);
$stmt2->bindParam(':nomhotel', $nomhotel);
$stmt2->bindParam(':adrhotel', $adrhotel);
$stmt2->bindParam(':image', $image);
$stmt2->bindParam(':etoiles', $etoiles);
$stmt2->bindParam(':prix', $prix);
$stmt2->bindParam(':tags', $tagsen);
$stmt2->bindParam(':linkhotel', $linkhotel);

if ($stmt2->execute()) {
    echo "Hôtel ajouté avec succès.";
} else {
    echo "Erreur lors de l'ajout de l'hôtel.";
    header('Location: ../admin.html');
}

$sql3 = "INSERT INTO hotelses (nomhotel, adrhotel, img, etoiles, prix, tags, linkhotel) 
        VALUES (:nomhotel, :adrhotel, :image, :etoiles, :prix, :tags, :linkhotel)";
$stmt3 = $cnx->prepare($sql3);
$stmt3->bindParam(':nomhotel', $nomhotel);
$stmt3->bindParam(':adrhotel', $adrhotel);
$stmt3->bindParam(':image', $image);
$stmt3->bindParam(':etoiles', $etoiles);
$stmt3->bindParam(':prix', $prix);
$stmt3->bindParam(':tags', $tagses);
$stmt3->bindParam(':linkhotel', $linkhotel);

if ($stmt3->execute()) {
    echo "Hôtel ajouté avec succès.";
    header('Location: ../admin.html');
} else {
    echo "Erreur lors de l'ajout de l'hôtel.";
    header('Location: ../admin.html');
}
?>
