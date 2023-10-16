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
    <link rel="stylesheet" href="styleespagne.css" />
    <link rel="stylesheet" href="header.css" />
    <link rel="stylesheet" href="footer.css" />
    <!-- Title pour le titre de l'onglet -->
    <title>España</title>
    <link rel="icon" type="image/png" sizes="32x32" href="./img/favicon.ico">
    <META NAME="Robots" CONTENT="index, follow">
    <META NAME="Author" CONTENT="FCFLEM">
    <META NAME="Keywords" CONTENT="FCFLEM,Grenade,UNESCO">
</head>

<body>

    <?php
    include("./php/header_es.inc.php");
    ?>

    <div class="contenu">
        <div class="mainimg">
            <h1>España</h1>
            <blockquote>
                <p>"I would sooner be a foreigner in Spain than in most countries. How easy it is to make friends in
                    Spain !"</p>
            </blockquote>
            <p><em>-<u>George Orwell</u></em></p>
        </div>

        <h3>España</h3>
        <div class="Palacios">
            <div class='card'>
                <div class='image'>
                    <img src="https://m.media-amazon.com/images/I/41RSnrYaaaL._AC_UF1000,1000_QL80_.jpg" alt="" width="500px">
                </div>
                <div class="texte">
                    <div class="content">
                        <p>España, situada en el suroeste de Europa, es un país rico en historia, cultura y diversidad. Con una población de unos 47 millones de habitantes, España es un país dinámico y acogedor que ofrece una gran variedad de paisajes, desde majestuosas montañas hasta magníficas playas mediterráneas.</p>
                        <p>El país es famoso por su excepcional patrimonio cultural, con ciudades emblemáticas como la animada capital, Madrid, Barcelona, con su singular arquitectura modernista, Sevilla, con su fascinante flamenco, y Granada, con su famoso palacio de la Alhambra. España también es famosa por su deliciosa cocina, sus vinos de calidad y sus coloridos festivales.</p>
                    </div>
                </div>
            </div>

        </div>

        <h3>Andalucía</h3>
        <div class="Palacios">
            <div class='card'>
                <div class='image'>
                    <img src="https://m.media-amazon.com/images/I/41RSnrYaaaL._AC_UF1000,1000_QL80_.jpg" alt="" width="500px">
                </div>
                <div class="texte">
                    <div class="content">
                        <p>Andalucía, en el sur de España, es una región fascinante que encarna la esencia de la cultura española. Con su mezcla única de influencias árabes, romanas y europeas, Andalucía ofrece una experiencia cautivadora a los visitantes. </p>
                        <p>Esta soleada región es famosa por sus preciosas playas de la Costa del Sol, sus históricas y vibrantes ciudades como Sevilla, Córdoba y Málaga, y sus pintorescos paisajes, como Sierra Nevada y el Parque Nacional de Doñana. Andalucía también es famosa por su flamenco, un arte tradicional que expresa la pasión y la alegría de vivir del pueblo andaluz.</p>
                        <p>Entre los lugares emblemáticos de Andalucía, la Alhambra de Granada es sin duda la joya de la corona, con su exquisita arquitectura árabe y sus exuberantes jardines, declarados Patrimonio de la Humanidad por la UNESCO. Andalucía es un destino obligado para quienes deseen descubrir España en todo su esplendor.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="buttn">
            <a href="./histoire_architecture_es.php"><button>Ir a la página de historia y arquitectura</button></a>
        </div>

        <h2>
            España en cifras
        </h2>
        <div class="chiffre">
            <div class="chiffon">
                <h4>IDIOMAS</h4>
                <p>En España se hablan 4 lenguas</p>
                <ul>
                    <li>Castellano</li>
                    <li>Catalán</li>
                    <li>Gallego</li>
                    <li>Vasco</li>
                </ul>
            </div>
            <div class="chiffon">
                <h4>UNESCO</h4>
                <p>49 bienes de España figuran en la Lista del Patrimonio Mundial de la UNESCO incluidos la Alhambra, el Generalife y el Albaicín de Granada</p>
            </div>
            <div class="chiffon">
                <h4>RESIDENTE</h4>
                <p>España tiene unos 47 millones de habitantes.</p>
            </div>
            <div class="chiffon">
                <h4>MUNICIPIOS AUTÓNOMOS</h4>
                <p>España tiene 17 Comunidades Autónomas y 2 ciudades autónomas (Ceuta y Melilla). Entre ellas se encuentra Andalucía, cuya capital es Sevilla.</p>
                <iframe src="https://www.google.com/maps/d/u/7/embed?mid=1J2zJeeNlRA5twJS-EaINPjsI_mMfsek&ehbc=2E312F" width="640" height="480"></iframe>
            </div>
        </div>
    </div>
    <a href="#" class="top"> ↑ </a>
    <!-- Code du bas de page -->
    <?php
    include("./php/footer_es.inc.php");
    ?>
    <script src="script.js"></script>
</body>

</html>