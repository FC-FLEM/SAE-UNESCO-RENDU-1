<?php
include("connexion.php");

// Récupération de l'ID du spot à supprimer
$nomresto = $_POST['nomresto'];

// Requête de suppression pour la table restos
$sql = "DELETE FROM restos WHERE nomresto = :nomresto";
$stmt = $cnx->prepare($sql);
$stmt->bindParam(':nomresto', $nomresto);
if ($stmt->execute()) {
    echo "Restaurant supprimé avec succès.";
} else {
    echo "Erreur lors de la suppression du restaurant : " . implode(", ", $stmt->errorInfo());
}

// Requête de suppression pour la table restoes
$sql2 = "DELETE FROM restoes WHERE nomresto = :nomresto";
$stmt2 = $cnx->prepare($sql2);
$stmt2->bindParam(':nomresto', $nomresto);
if ($stmt2->execute()) {
    echo "Restaurant en espagnol supprimé avec succès.";
} else {
    echo "Erreur lors de la suppression du restaurant en espagnol : " . implode(", ", $stmt2->errorInfo());
}

// Requête de suppression pour la table restoen
$sql3 = "DELETE FROM restoen WHERE nomresto = :nomresto";
$stmt3 = $cnx->prepare($sql3);
$stmt3->bindParam(':nomresto', $nomresto);
if ($stmt3->execute()) {
    echo "Restaurant en anglais supprimé avec succès.";
    header('Location: ../admin.html');
} else {
    echo "Erreur lors de la suppression du restaurant en anglais : " . implode(", ", $stmt3->errorInfo());
    header('Location: ../admin.html');
}
?>
