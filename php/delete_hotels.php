<?php
include("connexion.php");

// Récupération de l'ID du spot à supprimer
$nomhotel = $_POST['nomhotel'];

// Requête de suppression pour la table hotels
$sql = "DELETE FROM hotels WHERE nomhotel = :nomhotel";
$stmt = $cnx->prepare($sql);
$stmt->bindParam(':nomhotel', $nomhotel);
if ($stmt->execute()) {
    echo "Hôtel supprimé avec succès.";
} else {
    echo "Erreur lors de la suppression de l'hôtel : " . implode(", ", $stmt->errorInfo());
}

// Requête de suppression pour la table hoteles
$sql2 = "DELETE FROM hoteles WHERE nomhotel = :nomhotel";
$stmt2 = $cnx->prepare($sql2);
$stmt2->bindParam(':nomhotel', $nomhotel);
if ($stmt2->execute()) {
    echo "Hôtel en espagnol supprimé avec succès.";
} else {
    echo "Erreur lors de la suppression de l'hôtel en espagnol : " . implode(", ", $stmt2->errorInfo());
}

// Requête de suppression pour la table hotelen
$sql3 = "DELETE FROM hotelen WHERE nomhotel = :nomhotel";
$stmt3 = $cnx->prepare($sql3);
$stmt3->bindParam(':nomhotel', $nomhotel);
if ($stmt3->execute()) {
    echo "Hôtel en anglais supprimé avec succès.";
    header('Location: ../admin.html');
} else {
    echo "Erreur lors de la suppression de l'hôtel en anglais : " . implode(", ", $stmt3->errorInfo());
    header('Location: ../admin.html');
}
?>
