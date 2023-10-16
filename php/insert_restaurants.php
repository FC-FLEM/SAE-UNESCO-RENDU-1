<?php
include("connexion.php");

// Récupération des données du formulaire
$nomresto = $_POST['nomresto'];
$adrresto = $_POST['adrresto'];
$image = $_POST['img'];
$etoiles = $_POST['etoiles'];
$prix = $_POST['prix'];
$tags = $_POST['tags'];
$tagsen = $_POST['tagsen'];
$tagses = $_POST['tagses'];
$linkresto = $_POST['linkresto'];

// Insertion des données dans la base de données
$sql = "INSERT INTO restos (nomresto, adrresto, img, etoiles, prix, tags, linkresto) 
        VALUES (:nomresto, :adrresto, :image, :etoiles, :prix, :tags, :linkresto)";
$stmt = $cnx->prepare($sql);
$stmt->bindParam(':nomresto', $nomresto);
$stmt->bindParam(':adrresto', $adrresto);
$stmt->bindParam(':image', $image);
$stmt->bindParam(':etoiles', $etoiles);
$stmt->bindParam(':prix', $prix);
$stmt->bindParam(':tags', $tags);
$stmt->bindParam(':linkresto', $linkresto);

if ($stmt->execute()) {
    echo "Restaurant ajouté avec succès.";
} else {
    echo "Erreur lors de l'ajout du restaurant.";
}

$sql2 = "INSERT INTO restosen (nomresto, adrresto, img, etoiles, prix, tags, linkresto) 
        VALUES (:nomresto, :adrresto, :image, :etoiles, :prix, :tags, :linkresto)";
$stmt2 = $cnx->prepare($sql2);
$stmt2->bindParam(':nomresto', $nomresto);
$stmt2->bindParam(':adrresto', $adrresto);
$stmt2->bindParam(':image', $image);
$stmt2->bindParam(':etoiles', $etoiles);
$stmt2->bindParam(':prix', $prix);
$stmt2->bindParam(':tags', $tagsen);
$stmt2->bindParam(':linkresto', $linkresto);

if ($stmt2->execute()) {
    echo "Restaurant ajouté avec succès.";
} else {
    echo "Erreur lors de l'ajout du restaurant.";
}

$sql3 = "INSERT INTO restoses (nomresto, adrresto, img, etoiles, prix, tags, linkresto) 
        VALUES (:nomresto, :adrresto, :image, :etoiles, :prix, :tags, :linkresto)";
$stmt3 = $cnx->prepare($sql3);
$stmt3->bindParam(':nomresto', $nomresto);
$stmt3->bindParam(':adrresto', $adrresto);
$stmt3->bindParam(':image', $image);
$stmt3->bindParam(':etoiles', $etoiles);
$stmt3->bindParam(':prix', $prix);
$stmt3->bindParam(':tags', $tagses);
$stmt3->bindParam(':linkresto', $linkresto);

if ($stmt3->execute()) {
    echo "Restaurant ajouté avec succès.";
    header('Location: ../admin.html');
} else {
    echo "Erreur lors de l'ajout du restaurant.";
    header('Location: ../admin.html');
}
?>
