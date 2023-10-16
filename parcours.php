<?php
session_start();
?>

<!DOCTYPE html>
<!-- Doctype pour rester comforme aux standards -->
<!-- lang pour accent pour synthèse vocale-->
<html lang="fr">

<head>
    <!-- charset = encodage des caractères -->
    <meta charset="UTF-8" />
    <!-- viewport pour la mise en page mobile -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- link pour relier la feuille css -->
    <link rel="stylesheet" href="parcours.css" />
    <link rel="stylesheet" href="header.css" />
    <link rel="stylesheet" href="footer.css" />
    <link rel="stylesheet" href="style.css" />
    <link rel="icon" type="image/png" sizes="32x32" href="./img/favicon.ico">
    <!-- Title pour le titre de l'onglet -->
    <title>Parcours</title>

</head>

<body>
    <?php
    include("./php/header.inc.php");
    ?>

    <div class="contenu">
        <h1>Parcours dans Grenade</h1>

        <form class="formcarte">
            <fieldset>
                <legend>Votre type de parcours</legend>
                <input type="radio" name="culture" value="Detente" id="detente" checked><label for="detente">Detente</label>
                <input type="radio" name="culture" value="Famille" id="famille"><label for="famille">En Famille</label>
                <input type="radio" name="culture" value="Party" id="fete"><label for="fete">Fête</label>
                <input type="radio" name="culture" value="Melancolie" id="melancolie"><label for="melancolie">Mélancolie</label>
            </fieldset>
            <br>
            <fieldset>
                <legend>Durée du parcours</legend>
                <input type="radio" name="duree" value="1h" id="1h" checked><label for="1h">1 heure</label>
                <input type="radio" name="duree" value="2h" id="2h"><label for="2h">2 heures</label>
                <input type="radio" name="duree" value="4h" id="4h"><label for="4h">4 heures</label>
            </fieldset>
            <br>
            <fieldset>
                <legend>Moment de la journée</legend>
                <input type="radio" name="moment" value="Nuit" id="Nuit" checked><label for="Nuit">Nuit</label>
                <input type="radio" name="moment" value="Jour" id="Jour"><label for="Jour">Jour</label>
            </fieldset>
            <br>
            <input type="submit" class="btncarte" value="Afficher la carte">
        </form>

        <div id="reponsesuser"></div>

        <iframe id="D1J" class="map" src="https://www.google.com/maps/d/u/7/embed?mid=1K7k29M0TyLvyz30D7VFUo5eUBbAU8RM&ehbc=2E312F" height="480"></iframe>
        <iframe id="D1N" class="map" src="https://www.google.com/maps/d/u/7/embed?mid=1M-7bvkkL9EwRtPZJ2Q2RF8-bqlt63kE&ehbc=2E312F" height="480"></iframe>
        <iframe id="D2J" class="map" src="https://www.google.com/maps/d/u/7/embed?mid=1FXEE60oD4xqIQCXTQKKRL55zuDXpuD4&ehbc=2E312F" height="480"></iframe>
        <iframe id="D2N" class="map" src="https://www.google.com/maps/d/u/7/embed?mid=1T3d-Z6uhYfZ-qstIvaTgkMPiMgyiI08&ehbc=2E312F" height="480"></iframe>
        <iframe id="D4J" class="map" src="https://www.google.com/maps/d/u/7/embed?mid=15K1uGNeSiFD2IsXzIrAEBIOzcc3FWVU&ehbc=2E312F" height="480"></iframe>
        <iframe id="D4N" class="map" src="https://www.google.com/maps/d/u/7/embed?mid=19BlpwDyVbpNPRgbhby7HN36x6i7ru38&ehbc=2E312F" height="480"></iframe>

        <iframe id="F1J" class="map" src="https://www.google.com/maps/d/u/7/embed?mid=1ZUp7B0o1xMh4VB4VHE3UHu_4iKjNfOs&ehbc=2E312F" height="480"></iframe>
        <iframe id="F1N" class="map" src="https://www.google.com/maps/d/u/7/embed?mid=1hrAZ6-6gYOdPKaIVkQJXIP6-KAxc2rs&ehbc=2E312F" height="480"></iframe>
        <iframe id="F2J" class="map" src="https://www.google.com/maps/d/u/7/embed?mid=1TWwE_dmNBRpjHorWvKvikiBAQqa5eRw&ehbc=2E312F" height="480"></iframe>
        <iframe id="F2N" class="map" src="https://www.google.com/maps/d/u/7/embed?mid=1Vv4_oieaSFdhd2LMFgZtY_H_DpyEZ9I&ehbc=2E312F" height="480"></iframe>
        <iframe id="F4J" class="map" src="https://www.google.com/maps/d/u/7/embed?mid=1b8AdYYUYlgRt7f6bW7GJEpjT0fi3upU&ehbc=2E312F" height="480"></iframe>
        <iframe id="F4N" class="map" src="https://www.google.com/maps/d/u/7/embed?mid=1WytbzlIZ-nTP062tcjkVoTjnhrpDzd8&ehbc=2E312F" height="480"></iframe>

        <iframe id="P1J" class="map" src="https://www.google.com/maps/d/u/7/embed?mid=160M4zZraMRp3ScxAhcBxRwLa1PYxqX4&ehbc=2E312F" height="480"></iframe>
        <iframe id="P1N" class="map" src="https://www.google.com/maps/d/u/7/embed?mid=1QRq623pn4osVy_rEasyImDadb8P8Npg&ehbc=2E312F" height="480"></iframe>
        <iframe id="P2J" class="map" src="https://www.google.com/maps/d/u/0/embed?mid=184n-XWZXgsvJlei7ywCaZcZEKy43kr8&ehbc=2E312F" height="480"></iframe>
        <iframe id="P2N" class="map" src="https://www.google.com/maps/d/u/7/embed?mid=1Ap64cQTpT4odhh1gnuBshKhYhYnb7_k&ehbc=2E312F" height="480"></iframe>
        <iframe id="P4J" class="map" src="https://www.google.com/maps/d/u/0/embed?mid=1EluSrnY0Uz2hFpCXinIZF-6ax6sIuAo&ehbc=2E312F" height="480"></iframe>
        <iframe id="P4N" class="map" src="https://www.google.com/maps/d/u/0/embed?mid=1eCw5N0wDeS86MehI5UgoNbj4pqeSI-A&ehbc=2E312F" height="480"></iframe>

        <iframe id="M1J" class="map" src="https://www.google.com/maps/d/u/0/embed?mid=1QHFgdJr2mG2Ggci-0J4BLAIDs8vDZIg&ehbc=2E312F" height="480"></iframe>
        <iframe id="M1N" class="map" src="https://www.google.com/maps/d/u/0/embed?mid=1zLz-GIWMb4fA4u0VW49T32gav7gwzVg&ehbc=2E312F" height="480"></iframe>
        <iframe id="M2J" class="map" src="https://www.google.com/maps/d/u/0/embed?mid=1IHqPqncFmqOls97y2DHlqGPGHEbBL9A&ehbc=2E312F" height="480"></iframe>
        <iframe id="M2N" class="map" src="https://www.google.com/maps/d/u/0/embed?mid=1uTw0AzODqPmMaSTqYkJf7353ryHE-mw&ehbc=2E312F" height="480"></iframe>
        <iframe id="M4J" class="map" src="https://www.google.com/maps/d/u/0/embed?mid=1FgroqZdGnw037pspolq6eqSw1LdCMqk&ehbc=2E312F" height="480"></iframe>
        <iframe id="M4N" class="map" src="https://www.google.com/maps/d/u/0/embed?mid=1O4Q93b80XUzsqgevwNQ5OzOGLZBqFw8&ehbc=2E312F" height="480"></iframe>
        
        <div class="gap"></div>
        <?php
        include("./php/footer.inc.php");
        ?>
    </div>


    <script src="script.js"></script>
    <script>
        //fonction pour récupérer les réponses du form
        function reponsesUser() {
            const form = document.querySelector('.formcarte');
            const reponses = {};
            reponses.culture = form.querySelector('input[name="culture"]:checked').value;
            reponses.duree = form.querySelector('input[name="duree"]:checked').value;
            reponses.moment = form.querySelector('input[name="moment"]:checked').value;
            return reponses;
        }

        //les variables
        var form = document.querySelector('.formcarte');
        var boutonAfficherCarte = form.querySelector('.btncarte');
        var conteneurReponses = document.querySelector('#reponsesuser');

        //si submit est cliqué
        boutonAfficherCarte.addEventListener('click', function(event) {
            event.preventDefault(); // pour pas que la page se refresh / que action de form soit éxec
            var elementsActifs = document.querySelectorAll('.mapactive');
            elementsActifs.forEach(function(element) {
                element.classList.remove('mapactive');
            });
            var reponses = reponsesUser();
            var cartetrouvee = "";

            //affiche pour la vérif
            //conteneurReponses.innerHTML = ''; //TEST VERIF SUR PAGE HTML
            for (var cle in reponses) {
                //var element = document.createElement('p'); //TEST VERIF SUR PAGE HTML
                //element.textContent = reponses[cle].slice(0,1); //TEST VERIF SUR PAGE HTML
                cartetrouvee += reponses[cle].slice(0, 1);
                //conteneurReponses.appendChild(element); //TEST VERIF SUR PAGE HTML
            };
            //element.textContent = cartetrouvee; //TEST VERIF SUR PAGE HTML
            //conteneurReponses.appendChild(element); //TEST VERIF SUR PAGE HTML

            var carteactive = document.getElementById(cartetrouvee);
            carteactive.classList.add("mapactive");
        });
    </script>
</body>

</html>