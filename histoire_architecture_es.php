<!DOCTYPE html>
<!-- Doctype pour rester comforme aux standards -->
<!-- lang pour accent pour synthèse vocale-->
<html lang="es">

<head>
    <!-- charset = encodage des caractères -->
    <meta charset="UTF-8" />
    <!-- viewport pour la mise en page mobile -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- link pour relier la feuille css -->
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="header.css" />
    <link rel="stylesheet" href="footer.css" />
    <!-- Title pour le titre de l'onglet -->
    <title>Historia y arquitectura</title>
    <link rel="icon" type="image/png" sizes="32x32" href="./img/favicon.ico">
    <style>
        .top::before {
            content: "Arriba " !important;
        }
    </style>
</head>

<body>
    <?php
    include("./php/header_es.inc.php");
    ?>

    <div class="contenu">
        <h1>Historia y arquitectura</h1>
        <div class="titre2gauche">
            <h2>HISTORIA DE GRANADA</h2>
        </div>
        <h3>HISTORIA</h3>
        <div class='card'>
            <div class='image'>
                <img src="./img/Grenade/Ancien_Granada.jpg"
                    alt="Peinture : La rendición de Granada, de Francisco Pradilla y Ortiz, 1882" width="500px">
            </div>
            <div class="texte">
                <h4>Un poco de historia de Andalucía</h4>
                <p>
                    En <b>711</b> comenzó la invasión de la Península Ibérica por los musulmanos. En sólo 5 años, casi todo el país estaba bajo dominación árabe-musulmana. 
                    Pero en <b>722</b> comenzó la respuesta cristiana a esta invasión: <b>la Reconquista</b>. No fue hasta <b>1492</b>, en Granada, cuando el emir nazarí de Granada capituló, poniendo fin a una dominación musulmana de casi <b>7 siglos</b>.
                </p>
            </div>
        </div>
        <h3>LA ARQUITECTURA</h3>
        <div class='card'>
            <div class='image'>
                <img src="./img/Grenade/Cour des Lions.jpg" alt="La Cours des Lions" width="500px">
            </div>
            <div class="texte">
                <h4>Los vestigios de un largo dominio musulmán</h4>
                <p>
                    A pesar de la fin de <b>la presencia política musulmana 
                    </b>dentro de la Península, la cultura árabe-musulmana sigue profundamente implantada en el país.
                    <b>¡Desde los monumentos hasta el arte, pasando por la gastronomía</b>, este periodo de la historia ha marcado fuertemente <b>España</b> de Norte a Sur y de Este a Oeste!
                </p>
            </div>
        </div>
        <div class="titre2droite">
            <h2>MONUMENTOS PATRIMONIALES</h2>
        </div>
        <h3>ALHAMBRA</h3>
        <div class='card'>
            <div class='image'>
                <img src="./img/Grenade/Alhambra_red_sunset.jpg" alt="L'Alhambra" width="500px">
            </div>
            <div class="texte">
                <div class="content"> 
                    <p>
                        Entre los lugares más famosos de Granada se encuentra la <b>Alhambra</b>, una antigua ciudad medieval de la <b>época nazarí</b>. Construido en <b>1238</b>, era una de las mayores residencias de la época medieval.
                        <br>
                    </p>
                    <a href="./alhambra_es.php" >
                        <button class="bouton" type="button">
                            PARA MÁS INFORMACIÓN
                        </button>
                    </a>
                </div>
            </div>
        </div>
        <h3>EL ALBAICÍN</h3>
        <div class='card'>
            <div class='image'>
                <img src="./img/Grenade/L'albaicin.jpg" alt="L'Albaicin" width="500px">
            </div>
            <div class="texte">
                <div class="content">
                    <p>
                        Construido del tiempo de dominio musulmán sobre el país, <b>el Albaicín</b> es un barrio situado en la colina de la <b>Sabika</b> frente a la <b>Alhambra</b>.
                        El distrito está trazado como un <b>laberinto</b> de calles estrechas y pequeñas plazas, rodeadas de <b>casas blancas</b>. No ha cambiado mucho desde el periodo nazarí.
                        <br>
                    </p>
                    <a href="./albaicin_es.php" >
                        <button class="bouton" type="button">
                            PARA MÁS INFORMACIÓN
                        </button>
                    </a>
                </div>
            </div>
        </div>
        <h3>GENERALIFE</h3>
        <div class='card'>
            <div class='image'>
                <img src="./img/Grenade/Generalife.jpg" alt="Le Generalife" width="500px">
            </div>
            <div class="texte">
                <div class="content">
                    <p>
                        De la época medieval, el <b>Generalife</b> era un palacio utilizado como lugar de descanso por los <b>reyes nazaríes</b> de Granada.
                        Rodeado de huertos y jardines, cuenta con una sucesión de salas, balcones, jardines y <b>estanques de agua</b> que brotan de las montañas de <b>Sierra Nevada</b>. Todavía hoy se conserva en un estado espléndido. espléndido estado.
                        <br>
                    </p>
                    <a href="./generalife_es.php" >
                        <button class="bouton" type="button">
                            PARA MÁS INFORMACIÓN
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <a href="#" class="top"> ↑ </a>

    <?php
    include("./php/footer_es.inc.php");
    ?>

    <script src="script.js"></script>
</body>

</html>