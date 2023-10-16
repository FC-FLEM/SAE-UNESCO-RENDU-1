<?php
include("connexion.php");

$selechotel = $cnx->prepare("SELECT * FROM hotels WHERE nomhotel=".$_POST['nomhotel'].";");
$selechotel->execute();
$champs = $selechotel->fetch(PDO::FETCH_ASSOC);

$selechotel1 = $cnx->prepare("SELECT * FROM hotelsen WHERE nomhotel=".$_POST['nomhotel'].";");
$selechotel1->execute();
$champs1 = $selechotel1->fetch(PDO::FETCH_ASSOC);

$selechotel2 = $cnx->prepare("SELECT * FROM hotelses WHERE nomhotel=".$_POST['nomhotel'].";");
$selechotel2->execute();
$champs2 = $selechotel2->fetch(PDO::FETCH_ASSOC);
// Récupération des données du formulaire
$nomhotel = $_POST['nomhotel'];
$adrhotel = isset($_POST['adrhotel']) ? $_POST['adrhotel'] : $champs['adrhotel'];
$image = isset($_POST['img']) ? $_POST['img'] : $champs['img'];
$etoiles = isset($_POST['etoiles']) ? $_POST['etoiles'] : $champs['etoiles'];
$prix = isset($_POST['prix']) ? $_POST['prix']: $champs['prix'];
$tags = isset($_POST['tags']) ? $_POST['tags'] : $champs['tags'];
$tagsen = isset($_POST['tagsen']) ? $_POST['tagsen'] : $champs1['tags'] ;
$tagses = isset($_POST['tagses']) ? $_POST['tagses'] : $champs2['tags'];
$linkhotel = isset($_POST['linkhotel']) ? $_POST['linkhotel'] : $champs['linkhotel'];

// Mise à jour des données dans la base de données
$sql = "UPDATE hotels SET adrhotel = :adrhotel, img = :image, etoiles = :etoiles, prix = :prix, tags = :tags, linkhotel = :linkhotel 
        WHERE nomhotel = :nomhotel";
$stmt = $cnx->prepare($sql);
$stmt->bindParam(':adrhotel', $adrhotel);
$stmt->bindParam(':image', $image);
$stmt->bindParam(':etoiles', $etoiles);
$stmt->bindParam(':prix', $prix);
$stmt->bindParam(':tags', $tags);
$stmt->bindParam(':linkhotel', $linkhotel);
$stmt->bindParam(':nomhotel', $nomhotel);

if ($stmt->execute()) {
    echo "Hôtel mis à jour avec succès.";
    header('Location: ../admin.html');
} else {
    echo "Erreur lors de la mise à jour de l'hôtel.";
    header('Location: ../admin.html');
}

$sql2 = "UPDATE hotelsen SET adrhotel = :adrhotel, img = :image, etoiles = :etoiles, prix = :prix, tags = :tags, linkhotel = :linkhotel 
        WHERE nomhotel = :nomhotel";
$stmt2 = $cnx->prepare($sql2);
$stmt2->bindParam(':adrhotel', $adrhotel);
$stmt2->bindParam(':image', $image);
$stmt2->bindParam(':etoiles', $etoiles);
$stmt2->bindParam(':prix', $prix);
$stmt2->bindParam(':tags', $tagsen);
$stmt2->bindParam(':linkhotel', $linkhotel);
$stmt2->bindParam(':nomhotel', $nomhotel);

if ($stmt2->execute()) {
    echo "Hôtel mis à jour avec succès.";
    header('Location: ../admin.html');
} else {
    echo "Erreur lors de la mise à jour de l'hôtel.";
    header('Location: ../admin.html');
}

$sql3 = "UPDATE hotelses SET adrhotel = :adrhotel, img = :image, etoiles = :etoiles, prix = :prix, tags = :tags, linkhotel = :linkhotel 
        WHERE nomhotel = :nomhotel";
$stmt3 = $cnx->prepare($sql3);
$stmt3->bindParam(':adrhotel', $adrhotel);
$stmt3->bindParam(':image', $image);
$stmt3->bindParam(':etoiles', $etoiles);
$stmt3->bindParam(':prix', $prix);
$stmt3->bindParam(':tags', $tagses);
$stmt3->bindParam(':linkhotel', $linkhotel);
$stmt3->bindParam(':nomhotel', $nomhotel);

if ($stmt3->execute()) {
    echo "Hôtel mis à jour avec succès.";
    header('Location: ../admin.html');
} else {
    echo "Erreur lors de la mise à jour de l'hôtel.";
    header('Location: ../admin.html');
}
?>
