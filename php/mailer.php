<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require './PHPMailer/src/Exception.php';
require './PHPMailer/src/PHPMailer.php';
require './PHPMailer/src/SMTP.php';

function envoi_mail($from_name, $from_email, $subject, $message)
{
    $mail = new PHPMailer(true);

    try {
        //Server settings
        $mail->isSMTP();
        $mail->SMTPDebug = 0;
        $mail->SMTPSecure = 'ssl';
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'projetgrenadeunesco@gmail.com';
        $mail->Password = 'nenmbgusbqlnaafl';
        $mail->Port = 465;

        //Recipients
        $mail->setFrom($from_email, $from_name);
        $mail->addAddress('projetgrenadeunesco@gmail.com', 'FCFLEM');

        //Content
        $mail->isHTML(true);
        $mail->Subject = $subject;
        $mail->Body = $message . "\r\nFrom " . $from_email;

        $mail->send();
        return true;
    } catch (Exception $e) {
        return false;
    }
}

if (isset($_POST['nom']) && isset($_POST['email']) && isset($_POST['titre']) && isset($_POST['commentaire_produit'])) {
    $nom = $_POST['nom'];
    $email = $_POST['email'];
    $titre = $_POST['titre'];
    $commentaire = $_POST['commentaire_produit'];
    
    if (envoi_mail($nom, $email, $titre, $commentaire)) {
        echo 'OK';
        header('Location: ../a_propos.php');
        exit();
    } else {
        echo "Une erreur s'est produite";
    }
} else {
    echo "non";
}
