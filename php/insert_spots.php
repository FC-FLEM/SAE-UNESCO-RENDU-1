<?php
include("connexion.php");

$lieu = $_POST['lieu'];
$image = $_POST['img'];
$likes = intval($_POST['likes']);
$message = $_POST['message'];
$messageen = $_POST['messageen'];
$messagees = $_POST['messagees'];

$sql = "INSERT INTO spots (lieu, img, likes, message) VALUES (:lieu, :image, :likes, :message)";
$stmt = $cnx->prepare($sql);
$stmt->bindParam(':lieu', $lieu);
$stmt->bindParam(':image', $image);
$stmt->bindParam(':likes', $likes);
$stmt->bindParam(':message', $message);

if ($stmt->execute()) {
    echo "Spot ajouté avec succès.";
} else {
    echo "Erreur lors de l'ajout du spot ";
    $errorInfo = $stmt->errorInfo();
    echo $errorInfo[2];
}

$sql2 = "INSERT INTO spotsen (lieu, img, likes, message) VALUES (:lieu, :image, :likes, :message)";
$stmt2 = $cnx->prepare($sql2);
$stmt2->bindParam(':lieu', $lieu);
$stmt2->bindParam(':image', $image);
$stmt2->bindParam(':likes', $likes);
$stmt2->bindParam(':message', $messageen);

if ($stmt2->execute()) {
    echo "Spot ajouté avec succès.";
} else {
    echo "Erreur lors de l'ajout du spot ";
    $errorInfo = $stmt2->errorInfo();
    echo $errorInfo[2];
}

$sql3 = "INSERT INTO spotses (lieu, img, likes, message) VALUES (:lieu, :image, :likes, :message)";
$stmt3 = $cnx->prepare($sql3);
$stmt3->bindParam(':lieu', $lieu);
$stmt3->bindParam(':image', $image);
$stmt3->bindParam(':likes', $likes);
$stmt3->bindParam(':message', $messagees);

if ($stmt3->execute()) {
    echo "Spot ajouté avec succès.";
    header('Location: ../admin.html');
    exit;
} else {
    echo "Erreur lors de l'ajout du spot ";
    $errorInfo = $stmt3->errorInfo();
    echo $errorInfo[2];
}
?>
