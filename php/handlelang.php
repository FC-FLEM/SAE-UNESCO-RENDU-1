<?php
session_start();

if (isset ($_POST['langue'])){
    if (isset($_POST['nom_page'])){
    $fileName = basename($_POST['nom_page']);
    $pagename= pathinfo($fileName, PATHINFO_FILENAME); 
    if (strstr($pagename, "_en")||strstr($pagename, "_es")){
        $pagename = substr($pagename, 0, -3);
    }
    if($_POST['langue']=="en"||$_POST['langue']=="es"){
        $pagename = $pagename."_";
    }
    }
    $_SESSION['langue'] = ($_POST['langue']=="fr") ? "" : $_POST['langue'];
    if (isset($_POST['nom_page'])){
        $name = "../".$pagename.$_SESSION['langue'].".php";
        header("Location:$name");
    }
}
?>