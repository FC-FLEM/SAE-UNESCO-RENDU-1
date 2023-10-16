<?php
include("connexion.php");

// Récupération de l'ID du spot à supprimer
$lieu = $_POST['lieu'];

// Requête de suppression pour la table visites
$sql = "DELETE FROM visites WHERE lieu = :lieu";
$stmt = $cnx->prepare($sql);
$stmt->bindParam(':lieu', $lieu);
if ($stmt->execute()) {
    echo "Visite supprimée avec succès.";
} else {
    echo "Erreur lors de la suppression de la visite : " . implode(", ", $stmt->errorInfo());
}

// Requête de suppression pour la table visitesen
$sql2 = "DELETE FROM visitesen WHERE lieu = :lieu";
$stmt2 = $cnx->prepare($sql2);
$stmt2->bindParam(':lieu', $lieu);
if ($stmt2->execute()) {
    echo "Visite en anglais supprimée avec succès.";
} else {
    echo "Erreur lors de la suppression de la visite en anglais : " . implode(", ", $stmt2->errorInfo());
}

// Requête de suppression pour la table visiteses
$sql3 = "DELETE FROM visiteses WHERE lieu = :lieu";
$stmt3 = $cnx->prepare($sql3);
$stmt3->bindParam(':lieu', $lieu);
if ($stmt3->execute()) {
    echo "Visite en espagnol supprimée avec succès.";
    header('Location: ../admin.html');
} else {
    echo "Erreur lors de la suppression de la visite en espagnol : " . implode(", ", $stmt3->errorInfo());
    header('Location: ../admin.html');
}
?>
