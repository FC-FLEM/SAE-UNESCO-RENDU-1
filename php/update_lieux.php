<?php
include("connexion.php");

$selechotel = $cnx->prepare("SELECT * FROM visites WHERE lieu=:lieu");
$selechotel->bindParam(':lieu', $_POST['lieu']);
$selechotel->execute();
$champs = $selechotel->fetch(PDO::FETCH_ASSOC);

$selechotel1 = $cnx->prepare("SELECT * FROM visitesen WHERE lieu=:lieu");
$selechotel1->bindParam(':lieu', $_POST['lieu']);
$selechotel1->execute();
$champs1 = $selechotel1->fetch(PDO::FETCH_ASSOC);

$selechotel2 = $cnx->prepare("SELECT * FROM visiteses WHERE lieu=:lieu");
$selechotel2->bindParam(':lieu', $_POST['lieu']);
$selechotel2->execute();
$champs2 = $selechotel2->fetch(PDO::FETCH_ASSOC);

// Récupération des données du formulaire
$lieu = $_POST['lieu'];
$type = isset($_POST['type']) ? $_POST['type'] : $champs['type'];
$image = isset($_POST['img']) ? $_POST['img'] : $champs['img'];
$description = isset($_POST['description']) ? $_POST['description'] : $champs['description'];
$descriptionen = isset($_POST['descriptionen']) ? $_POST['descriptionen'] : $champs1['description'];
$descriptiones = isset($_POST['descriptiones']) ? $_POST['descriptiones'] : $champs2['description'];

// Mise à jour des données dans la base de données
$sql = "UPDATE visites SET type = :type, img = :image, description = :description WHERE lieu = :lieu";
$stmt = $cnx->prepare($sql);
$stmt->bindParam(':type', $type);
$stmt->bindParam(':image', $image);
$stmt->bindParam(':description', $description);
$stmt->bindParam(':lieu', $lieu);

if ($stmt->execute()) {
    echo "Visite mise à jour avec succès.";
    header('Location: ../admin.html');
} else {
    echo "Erreur lors de la mise à jour de la visite.";
    $errorInfo = $stmt->errorInfo();
    echo $errorInfo[2];
}

$sql2 = "UPDATE visitesen SET type = :type, img = :image, description = :description WHERE lieu = :lieu";
$stmt2 = $cnx->prepare($sql2);
$stmt2->bindParam(':type', $type);
$stmt2->bindParam(':image', $image);
$stmt2->bindParam(':description', $descriptionen);
$stmt2->bindParam(':lieu', $lieu);

if ($stmt2->execute()) {
    echo "Visite mise à jour avec succès.";
    header('Location: ../admin.html');
} else {
    echo "Erreur lors de la mise à jour de la visite.";
    $errorInfo = $stmt2->errorInfo();
    echo $errorInfo[2];
}

$sql3 = "UPDATE visiteses SET type = :type, img = :image, description = :description WHERE lieu = :lieu";
$stmt3 = $cnx->prepare($sql3);
$stmt3->bindParam(':type', $type);
$stmt3->bindParam(':image', $image);
$stmt3->bindParam(':description', $descriptiones);
$stmt3->bindParam(':lieu', $lieu);

if ($stmt3->execute()) {
    echo "Visite mise à jour avec succès.";
    header('Location: ../admin.html');
} else {
    echo "Erreur lors de la mise à jour de la visite.";
    $errorInfo = $stmt3->errorInfo();
    echo $errorInfo[2];
}
?>
