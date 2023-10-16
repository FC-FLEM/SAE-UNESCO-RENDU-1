<?php
include("connexion.php");

$selechotel = $cnx->prepare("SELECT * FROM spots WHERE lieu=:lieu");
$selechotel->bindParam(':lieu', $_POST['lieu']);
$selechotel->execute();
$champs = $selechotel->fetch(PDO::FETCH_ASSOC);

$selechotel1 = $cnx->prepare("SELECT * FROM spotsen WHERE lieu=:lieu");
$selechotel1->bindParam(':lieu', $_POST['lieu']);
$selechotel1->execute();
$champs1 = $selechotel1->fetch(PDO::FETCH_ASSOC);

$selechotel2 = $cnx->prepare("SELECT * FROM spotses WHERE lieu=:lieu");
$selechotel2->bindParam(':lieu', $_POST['lieu']);
$selechotel2->execute();
$champs2 = $selechotel2->fetch(PDO::FETCH_ASSOC);

$lieu = $_POST['lieu'];
echo isset($_POST['likes']);
$likes = isset($_POST['likes']) ? ($_POST['likes']) : $champs['likes'];
$image = isset($_POST['img']) ? $_POST['img'] : $champs['img'];
$description = isset($_POST['description']) ? $_POST['description'] : $champs['description'];
$descriptionen = isset($_POST['descriptionen']) ? $_POST['descriptionen'] : $champs1['description'];
$descriptiones = isset($_POST['descriptiones']) ? $_POST['descriptiones'] : $champs2['description'];

$sql = "UPDATE spots SET img = :image, likes = :likes, message = :message WHERE lieu = :lieu";
$stmt = $cnx->prepare($sql);
$stmt->bindParam(':image', $image);
$stmt->bindParam(':likes', $likes);
$stmt->bindParam(':message', $message);
$stmt->bindParam(':lieu', $lieu);

if ($stmt->execute()) {
    echo "Spot mis à jour avec succès.";
} else {
    echo "Erreur lors de la mise à jour du spot.";
    $errorInfo = $stmt->errorInfo();
    echo $errorInfo[2];
}

$sql2 = "UPDATE spotsen SET img = :image, likes = :likes, message = :message WHERE lieu = :lieu";
$stmt2 = $cnx->prepare($sql2);
$stmt2->bindParam(':image', $image);
$stmt2->bindParam(':likes', $likes);
$stmt2->bindParam(':message', $messageen);
$stmt2->bindParam(':lieu', $lieu);

if ($stmt2->execute()) {
    echo "Spot mis à jour avec succès.";
} else {
    echo "Erreur lors de la mise à jour du spot.";
    $errorInfo = $stmt2->errorInfo();
    echo $errorInfo[2];
}

$sql3 = "UPDATE spotses SET img = :image, likes = :likes, message = :message WHERE lieu = :lieu";
$stmt3 = $cnx->prepare($sql3);
$stmt3->bindParam(':image', $image);
$stmt3->bindParam(':likes', $likes);
$stmt3->bindParam(':message', $messagees);
$stmt3->bindParam(':lieu', $lieu);

if ($stmt3->execute()) {
    echo "Spot mis à jour avec succès.";
    header('Location: ../admin.html');
    exit;
} else {
    echo "Erreur lors de la mise à jour du spot.";
    $errorInfo = $stmt3->errorInfo();
    echo $errorInfo[2];
}
?>
