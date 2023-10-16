<?php
include("connexion.php");

$selechotel = $cnx->prepare("SELECT * FROM restos WHERE nomresto=".$_POST['nomresto'].";");
$selechotel->execute();
$champs = $selechotel->fetch(PDO::FETCH_ASSOC);

$selechotel1 = $cnx->prepare("SELECT * FROM restosen WHERE nomresto=".$_POST['nomresto'].";");
$selechotel1->execute();
$champs1 = $selechotel1->fetch(PDO::FETCH_ASSOC);

$selechotel2 = $cnx->prepare("SELECT * FROM restoses WHERE nomresto=".$_POST['nomresto'].";");
$selechotel2->execute();
$champs2 = $selechotel2->fetch(PDO::FETCH_ASSOC);

// Récupération des données du formulaire
$nomresto = $_POST['nomresto'];
$adrresto = isset($_POST['adrresto']) ? $_POST['adrresto'] : $champs['adrresto'];
$image = isset($_POST['img']) ? $_POST['img'] : $champs['img'];
$etoiles = isset($_POST['etoiles']) ? $_POST['etoiles'] : $champs['etoiles'];
$prix = isset($_POST['prix']) ? $_POST['prix']: $champs['prix'];
$tags = isset($_POST['tags']) ? $_POST['tags'] : $champs['tags'];
$tagsen = isset($_POST['tagsen']) ? $_POST['tagsen'] : $champs1['tags'];
$tagses = isset($_POST['tagses']) ? $_POST['tagses'] : $champs2['tags'];
$linkresto = isset($_POST['linkresto']) ? $_POST['linkresto'] : $champs['linkresto'];

// Mise à jour des données dans la base de données
$sql = "UPDATE restos SET adrresto = :adrresto, img = :image, etoiles = :etoiles, prix = :prix, tags = :tags, linkresto = :linkresto WHERE nomresto = :nomresto";
$stmt = $cnx->prepare($sql);
$stmt->bindParam(':adrresto', $adrresto);
$stmt->bindParam(':image', $image);
$stmt->bindParam(':etoiles', $etoiles);
$stmt->bindParam(':prix', $prix);
$stmt->bindParam(':tags', $tags);
$stmt->bindParam(':linkresto', $linkresto);
$stmt->bindParam(':nomresto', $nomresto);

if ($stmt->execute()) {
    echo "Restaurant mis à jour avec succès.";
    header('Location: ../admin.html');
} else {
    echo "Erreur lors de la mise à jour du restaurant.";
    $errorInfo = $stmt->errorInfo();
    echo $errorInfo[2];
}

$sql2 = "UPDATE restosen SET adrresto = :adrresto, img = :image, etoiles = :etoiles, prix = :prix, tags = :tags, linkresto = :linkresto WHERE nomresto = :nomresto";
$stmt2 = $cnx->prepare($sql2);
$stmt2->bindParam(':adrresto', $adrresto);
$stmt2->bindParam(':image', $image);
$stmt2->bindParam(':etoiles', $etoiles);
$stmt2->bindParam(':prix', $prix);
$stmt2->bindParam(':tags', $tagsen);
$stmt2->bindParam(':linkresto', $linkresto);
$stmt2->bindParam(':nomresto', $nomresto);

if ($stmt2->execute()) {
    echo "Restaurant mis à jour avec succès.";
    header('Location: ../admin.html');
} else {
    echo "Erreur lors de la mise à jour du restaurant.";
    $errorInfo = $stmt2->errorInfo();
    echo $errorInfo[2];
}

$sql3 = "UPDATE restoses SET adrresto = :adrresto, img = :image, etoiles = :etoiles, prix = :prix, tags = :tags, linkresto = :linkresto WHERE nomresto = :nomresto";
$stmt3 = $cnx->prepare($sql3);
$stmt3->bindParam(':adrresto', $adrresto);
$stmt3->bindParam(':image', $image);
$stmt3->bindParam(':etoiles', $etoiles);
$stmt3->bindParam(':prix', $prix);
$stmt3->bindParam(':tags', $tagses);
$stmt3->bindParam(':linkresto', $linkresto);
$stmt3->bindParam(':nomresto', $nomresto);

if ($stmt3->execute()) {
    echo "Restaurant mis à jour avec succès.";
    header('Location: ../admin.html');
} else {
    echo "Erreur lors de la mise à jour du restaurant.";
    $errorInfo = $stmt3->errorInfo();
    echo $errorInfo[2];
}
?>
