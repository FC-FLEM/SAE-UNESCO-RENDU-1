<?php
if (!isset($_SESSION)) {
    session_start();
}

$user = isset($_SESSION['id']) ? $_SESSION['id'] : (isset($_POST['id']) ? $_POST['id'] : 'maryam.consani'); // Utilise l'ID de session s'il est enregistré, sinon utilise la valeur par défaut ou celle du formulaire
$pass = isset($_SESSION['mdp']) ? $_SESSION['mdp'] : (isset($_POST['mdp']) ? $_POST['mdp'] : 'ryrybdd'); // Utilise le mot de passe de session s'il est enregistré, sinon utilise la valeur par défaut ou celle du formulaire

$referer = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : ''; // HTTP REFERER pour trouver d'où on vient
$isAdminPage = strpos($referer, 'connexion.html') !== false; // SI ON VIENT DE CONNEXION ALORS ON VA À ADMIN SINON NON

try {
    $cnx = new PDO('pgsql:host=sqletud.u-pem.fr;dbname=helena.chevalier_db', $user, $pass);
    $requete = 'SET search_path TO unesco';
    $result = $cnx->exec($requete);

    if ($isAdminPage) {
        $_SESSION['id'] = $user; // Enregistre l'ID dans la session
        $_SESSION['mdp'] = $pass; // Enregistre le mot de passe dans la session
        header('Location: ../admin.html');
        exit;
    }
} catch (PDOException $e) {
    header('Location: ../connexion.html?error=1');
    exit;
}
?>
