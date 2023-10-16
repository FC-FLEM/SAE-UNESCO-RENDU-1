<!DOCTYPE html>
<!-- Doctype pour rester comforme aux standards -->
<!-- lang pour accent pour synthèse vocale-->
<html lang="en">

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
    <title>Spain</title>
    <link rel="icon" type="image/png" sizes="32x32" href="./img/favicon.ico">
    <META NAME="Robots" CONTENT="index, follow">
    <META NAME="Author" CONTENT="FCFLEM">
    <META NAME="Keywords" CONTENT="FCFLEM,Grenade,UNESCO">
</head>

<body>

    <?php
    include("./php/header_en.inc.php");
    ?>

    <div class="contenu">
        <div class="mainimg">
            <h1>Spain</h1>
            <blockquote>
                <p>"I would sooner be a foreigner in Spain than in most countries. How easy it is to make friends in
                    Spain !"</p>
            </blockquote>
            <p><em>-<u>George Orwell</u></em></p>
        </div>

        <h3>Spain</h3>
        <div class="Palacios">
            <div class='card'>
                <div class='image'>
                    <img src="https://m.media-amazon.com/images/I/41RSnrYaaaL._AC_UF1000,1000_QL80_.jpg" alt="" width="500px">
                </div>
                <div class="texte">
                    <div class="content">
                        <p>Spain, located in south-western Europe, is a country rich in history, culture and diversity. With a population of around 47 million, Spain is a dynamic and welcoming country offering a wide variety of landscapes, from majestic mountains to magnificent Mediterranean beaches. </p>
                        <p>The country is famous for its exceptional cultural heritage, with emblematic cities such as the lively capital Madrid, Barcelona with its unique modernist architecture, Seville and its spellbinding flamenco, and Granada with its famous Alhambra palace. Spain is also known for its delicious cuisine, quality wine and colorful festivals.</p>
                    </div>
                </div>
            </div>

        </div>

        <h3>Andalusia</h3>
        <div class="Palacios">
            <div class='card'>
                <div class='image'>
                    <img src="https://m.media-amazon.com/images/I/41RSnrYaaaL._AC_UF1000,1000_QL80_.jpg" alt="" width="500px">
                </div>
                <div class="texte">
                    <div class="content">
                        <p>Andalusia, in southern Spain, is a fascinating region that embodies the essence of Spanish culture. With its unique blend of Arab, Roman and European influences, Andalusia offers a captivating experience for visitors. </p>
                        <p>This sunny region is famous for its magnificent beaches on the Costa del Sol, its historic and lively cities such as Seville, Cordoba and Malaga, and its picturesque landscapes, such as the Sierra Nevada mountains and Doñana National Park. Andalusia is also renowned for its flamenco, a traditional art form that expresses the passion and joie de vivre of the Andalusian people. </p>
                        <p>Among Andalusia's iconic sites, Granada's Alhambra is undoubtedly the jewel in the crown, with its exquisite Moorish architecture and lush gardens, a UNESCO World Heritage Site. Andalusia is a must-see destination for those wishing to discover Spain in all its splendor.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="buttn">
            <a href="./histoire_architecture_en.php"><button>Go to the history and architecture page</button></a>
        </div>

        <h2>
            Spain in figures
        </h2>
        <div class="chiffre">
            <div class="chiffon">
                <h4>LANGUAGES</h4>
                <p>4 languages are spoken in Spain</p>
                <ul>
                    <li>Castilian</li>
                    <li>Catalan</li>
                    <li>Galician</li>
                    <li>Basque</li>
                </ul>
            </div>
            <div class="chiffon">
                <h4>UNESCO</h4>
                <p>49 properties in Spain are on UNESCO's World Heritage List Including Alhambra, Generalife and Albaicin, Granada</p>
            </div>
            <div class="chiffon">
                <h4>RESIDENT</h4>
                <p>Spain has a population of around 47 million.</p>
            </div>
            <div class="chiffon">
                <h4>AUTONOMOUS MUNICIPALITIES</h4>
                <p>Spain has 17 autonomous communities and 2 autonomous cities (Ceuta and Melilla). These include Andalusia, with Seville as its capital.</p>
                <iframe src="https://www.google.com/maps/d/u/7/embed?mid=1J2zJeeNlRA5twJS-EaINPjsI_mMfsek&ehbc=2E312F" width="640" height="480"></iframe>
            </div>
        </div>

        <h2>A few words of vocabulary</h2>
        <div class="vocab">
            <div class="lan">
                <h5>Greetings :</h5>
                <ul>
                    <li>Buenos días - Good morning</li>
                    <li>Buenas tardes - Good afternoon / Good evening</li>
                    <li>Buenas noches - Good evening / Good night</li>
                </ul>
            </div>
            <div class="lan">
                <h5>Indications :</h5>
                <ul>
                    <li>¿Dónde está...? - Where is... ?</li>
                    <li>¿Cómo llego a...? - How do I get to... ?</li>
                    <li>A la derecha - Right / A la izquierda - Left</li>
                    <li>Recto - Front</li>
                    <li>Parada de autobús - Bus stop</li>
                    <li>Estación de tren - Train station</li>
                    <li>Baño - Toilet</li>
                </ul>
            </div>
            <div class="lan">
                <h5>Others :</h5>
                <ul>
                    <li>¡Hola! - Hello !</li>
                    <li>¿Cómo estás? - How are you doing?</li>
                    <li>Por favor - Please</li>
                    <li>Gracias - Thank you</li>
                    <li>De nada - You're welcome</li>
                    <li>¿Habla usted inglés? - Do you speak English ?</li>
                    <li>Disculpe - Excuse me</li>
                </ul>
            </div>


        </div>

    </div>
    <a href="#" class="top"> ↑ </a>
    <!-- Code du bas de page -->
    <?php
    include("./php/footer_en.inc.php");
    ?>
    <script src="script.js"></script>
</body>

</html>