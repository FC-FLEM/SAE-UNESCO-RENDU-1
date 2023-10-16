<?php
include("connexion.php");

// Récupération de l'ID du spot à supprimer
$lieu = $_POST['lieu'];

// Requête de suppression pour la table spots
$sql = "DELETE FROM spots WHERE lieu = :lieu";
$stmt = $cnx->prepare($sql);
$stmt->bindParam(':lieu', $lieu);
if ($stmt->execute()) {
    echo "Spot supprimé avec succès.";
} else {
    echo "Erreur lors de la suppression du spot : " . implode(", ", $stmt->errorInfo());
}

// Requête de suppression pour la table spotsen
$sql2 = "DELETE FROM spotsen WHERE lieu = :lieu";
$stmt2 = $cnx->prepare($sql2);
$stmt2->bindParam(':lieu', $lieu);
if ($stmt2->execute()) {
    echo "Spot en anglais supprimé avec succès.";
} else {
    echo "Erreur lors de la suppression du spot en anglais : " . implode(", ", $stmt2->errorInfo());
}

// Requête de suppression pour la table spotses
$sql3 = "DELETE FROM spotses WHERE lieu = :lieu";
$stmt3 = $cnx->prepare($sql3);
$stmt3->bindParam(':lieu', $lieu);
if ($stmt3->execute()) {
    echo "Spot en espagnol supprimé avec succès.";
    header('Location: ../admin.html');
} else {
    echo "Erreur lors de la suppression du spot en espagnol : " . implode(", ", $stmt3->errorInfo());
    header('Location: ../admin.html');
}
?>
