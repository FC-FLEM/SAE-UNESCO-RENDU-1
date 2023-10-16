<?php
include("connexion.php");

// Récupération des données du formulaire
$lieu = $_POST['lieu'];
$type = $_POST['type'];
$image = $_POST['img'];
$description = $_POST['description'];
$descriptionen = $_POST['descriptionen'];
$descriptiones = $_POST['descriptiones'];

// Insertion des données dans la base de données
$sql = "INSERT INTO visites (lieu, type, img, description) VALUES (:lieu, :type, :image, :description)";
$stmt = $cnx->prepare($sql);
$stmt->bindParam(':lieu', $lieu);
$stmt->bindParam(':type', $type);
$stmt->bindParam(':image', $image);
$stmt->bindParam(':description', $description);

if ($stmt->execute()) {
    echo "Visite ajoutée avec succès.";
} else {
    echo "Erreur lors de l'ajout de la visite.";
    $errorInfo = $stmt->errorInfo();
    echo $errorInfo[2];
}

$sql2 = "INSERT INTO visitesen (lieu, type, img, description) VALUES (:lieu, :type, :image, :description)";
$stmt2 = $cnx->prepare($sql2);
$stmt2->bindParam(':lieu', $lieu);
$stmt2->bindParam(':type', $type);
$stmt2->bindParam(':image', $image);
$stmt2->bindParam(':description', $descriptionen);

if ($stmt2->execute()) {
    echo "Visite ajoutée avec succès.";
} else {
    echo "Erreur lors de l'ajout de la visite.";
    $errorInfo = $stmt2->errorInfo();
    echo $errorInfo[2];
}

$sql3 = "INSERT INTO visiteses (lieu, type, img, description) VALUES (:lieu, :type, :image, :description)";
$stmt3 = $cnx->prepare($sql3);
$stmt3->bindParam(':lieu', $lieu);
$stmt3->bindParam(':type', $type);
$stmt3->bindParam(':image', $image);
$stmt3->bindParam(':description', $descriptiones);

if ($stmt3->execute()) {
    echo "Visite ajoutée avec succès.";
    header('Location: ../admin.html');
} else {
    echo "Erreur lors de l'ajout de la visite.";
    $errorInfo = $stmt3->errorInfo();
    echo $errorInfo[2];
}
?>
