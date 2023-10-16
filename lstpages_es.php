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
    <link rel="stylesheet" href="styleliste.css" />
    <link rel="stylesheet" href="header.css" />
    <link rel="stylesheet" href="footer.css" />
    <link rel="stylesheet" href="style.css" />
    <link rel="icon" type="image/png" sizes="32x32" href="./img/favicon.ico">
    <!-- Title pour le titre de l'onglet -->
    <title>Lista de páginas</title>
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
        <h1>Mapa del sitio</h1>
        <ul>
            <li><a href="./accueil_es.php">Página principal</a></li>
            <li>Cultura general
                <ul>
                    <li><a href="./espagne_es.php">España</a>
                        <ul>
                            <li><a href="./histoire_architecture_es.php">Historia y arquitectura</a>
                                <ul>
                                    <li><a href="./alhambra_es.php">El Alhambra</a></li>
                                    <li><a href="./albaicin_es.php">Albaicin</a></li>
                                    <li><a href="./generalife_es.php">Generalife</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li>¡A visitar!
                <ul>
                    <li><a href="./lieux_visite_es.php">Lugares que visitar</a></li>
                    <li><a href="./spots_photos_es.php">Hora del selfie</a></li>
                </ul>
            </li>
            <li>Salir
                <ul>
                    <li><a href="./restaurants_es.php">Restaurantes</a></li>
                    <li><a href="./parcours_es.php">Recorridos (con Preferencias)</a></li>
                    <li><a href="./hotels_es.php">Hoteles</a></li>
                </ul>
            </li>
            <li><a href="./infos_pratiques_es.php">Información práctica</a></li>
            <li><a href="./a_propos_es.php">Quiénes somos</a></li>
        </ul>
    </div>

    <?php
    include("./php/footer_es.inc.php");
    ?>

    <script src="script.js"></script>
</body>

</html>