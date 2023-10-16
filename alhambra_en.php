<!DOCTYPE html>
<!-- Doctype pour rester comforme aux standards -->
<!-- lang pour accent pour synthèse vocale-->
<html lang="en">

<head>
    <!-- charset = encodage des caractères -->
    <meta charset="UTF-8" />
    <!-- viewport pour la mise en page mobile -->
    <link rel="icon" type="image/png" sizes="32x32" href="./img/favicon.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- link pour relier la feuille css -->
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="stylealhambra.css" />
    <link rel="stylesheet" href="header.css" />
    <link rel="stylesheet" href="footer.css" />
    <!-- Title pour le titre de l'onglet -->
    <title>Alhambra</title>
    <style>
        .top::before {
            content: "Top " !important;
        }
    </style>
</head>

<body>

<?php
    include("./php/header_en.inc.php");
    ?>

    <div class="contenu">
        <div class="mainimg">
            <h1>Alhambra</h1>
            <p>Alhambra (from Arabic Al-Hamrâ - الحَمْراء)</p>
            <blockquote>
                <p>"L'Alhambra ! L'Alhambra, palais que les génies Ont doré comme un rêve et rempli d'harmonies,
                    Forteresse aux créneaux festonnés et croulants"</p>
            </blockquote>
            <p><em>-<u>Orient. XXXI</u>, Victor Hugo</em></p>
            <button>Book</button>
        </div>
        <h3>Map of the Alhambra</h3>
        <div style="width: 100%">
            <p><iframe src="https://www.google.com/maps/d/u/0/embed?mid=1zdVCst7VC9obz_TzW6PlAe-6o4FEvDc&ehbc=2E312F" width="640" height="480"></iframe></p>
        </div>


        <h3>History of the Alhambra</h3>
        <div class="Histoire">
            <img class="histoire" src="./img/Grenade/Night_view_Alhambra.jpg" float="left">
            <p>
                The Alhambra takes place on the Sabika hill during the <b>IXth</b> century. He is a former prime
                minister named Samuel ibn Nagrella who rebuilt the abandoned buildings on this hill and installed his
                palace there. and installed his palace there.
            </p>
            <p>In the <b>XIIth</b> century, These buildings are used as a refuge during fights in Alcazaba del Albaicín.
            </p>
            <p>In <b>1238</b>, the founder of the Nasrid dynasty, Al-Ahmar, settled in the old Alcazaba of the Albaicín.
                He decided to rebuild the ruins of the hill, thus building the current Alhambra. It was a palace, a
                citadel
                and a fortress, but above all, a residence of the Nasrid high officials. Granada became the capital of
                the Nasrid kingdom, growing over time to make room for new neighborhoods until the end of the fifteenth
                century.
            </p>
            <p>After <b>1492</b>, the Alhambra became a Royal House.
            </p>
            <p>Emperor Charles V decides, in <b>1526</b>, to build his eponymous palace, as well as other
                buildings having for style the Roman Renaissance.
            </p>
            <p>In the <b>XIXth</b> century, the company is very interested in the gardens of the Alhambra. Following the
                revolution
                of 1868, the Alhambra is detached from the Crown and becomes the domain of the State, being declared in
                1870 "national monument". <br>Currently, the custody of the Alhambra is entrusted to the Autonomous
                Community
                Andalusia of the functions and services of the State in the field of culture.</p>
            <br>
        </div>

        <h3>Arts & Architectures</h3>
        <div class="ART">
            <img class="arte" src="./img/Grenade/Arquitectura_Alhambra.jpg" float="left">
            <p>It was in the 14th century that the Alhambra was embellished with decorations with multiple Muslim
                symbols, notably by Yusuf I. The justice of Granada was administered in the Puerta de la Ley Islamica,
                which makes the Alhambra more than just a defensive or decorative building. Its defensive architecture
                makes the Alhambra a fortress (ramparts, fortified gates, guard towers) with an "oriental" aesthetic
                that was used by the Emirs who resided in the Generalife, located in the Alhamlbra. <br>It is noticeable
                that the last buildings have many round arches and domed roofs, to let in as much light as possible, an
                important theme in Muslim architecture.</p>
            <p>Granada corresponds to the historical model of a city-hill, surrounded by mountains and watered by the
                rivers Darro and Genil.
                Surrounded by mountains, Arab writers have compared Granada to a crown, on the front of which stands the
                <i>"diadem of the Alhambra".</i>
            </p>
        </div>

        <br>
        <br>
        <br>

        <h2>Monuments within the Alhambra</h2>

        <h3>The Nasrid Palace</h3>
        <div class="Nasrides">
            <div class="palaisNas">
                <div class='cardcol'>
                    <div class='imagecol'>
                        <img src="./img/Grenade/Mexuar_ext.JPG" alt="Avatar" style="width:100%">
                    </div>
                    <div class="textecol">
                        <div class="content">
                            <h4><b>Mexuar</b></h4>
                            <p>The Mexuar is located in the northern part of the Alhambra and is accessible through a large patio called the Patio de los Arrayanes. </p>
                            <p>At one time it served as the entrance wing of the official palace of the sultan and the state: the Comares Palace. After the Reconquista, the main hall was transformed into a Christian chapel. </p>
                            <p>In addition, the Mexuar was used as an audience hall and as a meeting place for government business. Muslim sovereigns used it to hold audiences and discuss the affairs of the kingdom with their advisors.</p>
                        </div>
                    </div>
                </div>
                <div class='cardcol'>
                    <div class='imagecol'>
                        <img src="./img/Grenade/Comares.jpg" alt="Patio de los leones" style="width:100%">
                    </div>
                    <div class="textecol">
                        <div class="content">
                            <h4><b>Comares Palace</b></h4>
                            <p>The Palace or Hall of Comares, former residence of the monarch, is the main palace of the Alhambra.</p>
                            <p>The Comares Palace is known for its exceptional architecture and luxurious decorations, which reflect the wealth and power of the Nasrid dynasty.</p>
                            <p>The palace also includes a large audience hall called the Hall of Ambassadors, which is adorned with marble columns and ceramic mosaics and is located within the Comares Tower offering a magnificent view of the Darro River valley.</p>
                        </div>
                    </div>
                </div>
                <div class='cardcol'>
                    <div class='imagecol'>
                        <img id="leones" src="./img/Grenade/Cour des Lions.jpg" alt="Patio de los leones" style="width:50%">
                    </div>
                    <div class="textecol">
                        <div class="content">
                            <h4><b>Lion's Palace</b></h4>
                            <p>It is one of the most emblematic buildings of the Alhambra, known for its central fountain in the shape of a lion, from which it takes its name.</p>
                            <p>The Palace of the Lions consists of several rooms, each decorated with geometric patterns and colorful frescoes. It is a building also known for its lush gardens and beautiful fountains.</p>
                        </div>
                    </div>
                </div>
            </div>

            <h3>The Palaces</h3>
            <div class="Palacios">
                <div class='card'>
                    <div class='image'>
                        <img src="./img/Grenade/Alcazaba.jpg" alt="L'Alcabaza" width="500px">
                    </div>
                    <div class="texte">
                        <div class="content">
                            <h4>Alcabaza</h4>
                            <p>The Alcazaba is considered the oldest part of the Alhambra. Indeed, it is at the beginning of the IXth century, that constructions are reported on the hill of the Sabika. It is, thereafter, in this precise place, that the majestic Alhambra takes place.
                                Originally, it was a fortress designed with the sole purpose of protecting the city of Granada from enemy invasions.

                            </p>
                            <p>The building is divided into two parts: the upper part and the lower part. The upper part or citadel was used as a residence for the Moorish sovereigns and their court while the lower part served as a military quarter. </p>
                            <p>The Alcazaba has been restored several times over the centuries, especially by the Christians, and has been used as a state prison at different times, including during the Franco occupation.</p>
                        </div>
                    </div>
                </div>
                <div class='card'>
                    <div class='image'>
                        <img src="./img/Grenade/Palais_Charles.jpg" alt="L'Alcabaza" width="500px">
                    </div>
                    <div class="texte">
                        <div class="content">
                            <h4>Palace of Charles V</h4>
                            <p>The Palace of Carlos V is a palace built on the orders of the Emperor Charles V, who made the Alhambra his summer residence.
                                The construction of his palace began in the sixteenth century, but was never completed and therefore remained uninhabited.
                            </p>
                            <p>This square palace is located near the Nasrid Palaces and cuts across the gardens connecting the entrance to the Alhambra and the Alcazaba. It is the most important work of the Renaissance in Spain with its central circular patio unique in style.</p>
                            <p>In the past, the building was connected to the Alcazaba of the Alhambra. It can be noticed by its fully decorated south and west sides compared to its north and east.</p>
                        </div>
                    </div>
                </div>
                <div class='card'>
                    <div class='image'>
                        <img src="./img/Grenade/Banos.jpg" alt="L'Alcabaza" width="500px">
                    </div>
                    <div class="texte">
                        <div class="content">
                            <h4>The Baths</h4>
                            <p>The Alhambra Baths are divided into two types: the men's bath and the women's bath. Each of them is composed of several rooms, including a hot or steam room: "Caldarium", a cold room: "Frigidarium" and a main room: "Tepidarium". The baths were also equipped with fountains and basins for hot and cold water.</p>
                            <p>The decoration of the Baths of the Alhambra is rich and sophisticated, with many ornamental details such as mosaics, geometric patterns, arabesques and inscriptions in Arabic. The baths were also equipped with oil lamps and large glass mirrors to diffuse natural light.</p>
                        </div>
                    </div>
                </div>
                <div class='card'>
                    <div class='image'>
                        <img src="./img/Grenade/Alcazaba.jpg" alt="L'Alcabaza" width="500px">
                    </div>
                    <div class="texte">
                        <div class="content">
                            <h4>Generalife</h4>
                            <p>The Generalife is a verdant palace located on the shores of the Sun Hill in Granada. From here you can see the whole city as well as the valleys of the rivers Genil and Darro.
                                It was used as a place of relaxation for the kings of Granada when they wanted to escape from the official life in the palace.
                                In addition, the Generalife offers a succession of rooms, pools, balconies, gardens, and relaxation rooms.

                            </p>
                            <button><a href="./generalife.php">Go to the Generalife page</a></button>
                        </div>
                    </div>
                </div>

                <h3>The Courtyards & Gardens</h3>
                <div class="Nasrides">
                    <div class="palaisNas">
                        <div class='cardcol'>
                            <div class='imagecol'>
                                <img src="./img/Grenade/Partal.jpg" alt="L'Alcabaza" width="500px">
                            </div>
                            <div class="textecol">
                                <div class="content">
                                    <h4><b>Garden of the Partal</b></h4>
                                    <p>Its name refers to a portico, since it connects a myriad of buildings of the Alhambra (It is surrounded by important buildings of the Alhambra, such as the Palace of Comares and the Palace of the Lions).
                                        The Jardin de Partal is known for its fountains and pools, designed to cool the air and create a pleasant atmosphere for visitors. There is a lot of vegetation in the garden: all kinds of plants and trees such as olive trees, cypresses and orange trees.
                                        The garden overlooks the Torre de la Dama, a building known for housing merchants and magnates of the time who came to relax and greet the royalty.

                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class='cardcol'>
                            <div class='imagecol'>
                                <img src="./img/Grenade/myrte.png" alt="L'Alcabaza" width="500px">
                            </div>
                            <div class="textecol">
                                <div class="content">
                                    <h4><b>Myrtle Court</b></h4>
                                    <p>The current name of this place is the Courtyard of the Myrtles because of the presence of myrtle bushes around the central pond and the bright green color that contrasts with the white marble floor of the patio.
                                        It is a long courtyard that surrounds the Alberca pond. At that time, the rooms on the sides were used as a residence for women. In addition, in the north gallery, we can read a famous poem by Ibn Zamrak in honor of Muhammad V after the conquest of Algeciras in 1368.

                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class='cardcol'>
                            <div class='imagecol'>
                                <img id="leones" src="./img/Grenade/Cour des Lions.jpg" alt="Patio de los leones" style="width:50%">
                            </div>
                            <div class="textecol">
                                <div class="content">
                                    <h4><b>Lions Court</b></h4>
                                    <p>The courtyard of the Lions is probably the most famous place of the Alhambra. The fountain in the middle of the patio gave its name to the whole.
                                        Indeed, it is composed of twelve lions jets of water and rests on a large dodecagonal basin in white marble. This fountain is considered one of the most important examples of Muslim sculpture.
                                        The Gallery of the Court of Lions is a covered space supported by a hundred white marble columns. Since 1984, it has been a UNESCO World Heritage Site.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>



                    <h3>Interested ?</h3>
                    <div class="acces">
                        <button>Book</button>
                        <p>Don't hesitate to book your ticket for the Alhmabra! <br>
                            <b>Warning </b>: <u>It is not possible to buy tickets on site</u><br>
                            The most beautiful part of the Alhambra is the Nasrid Palace with a limited capacity of 300 visitors
                            per
                            hour.
                            Always check if your ticket includes the Nasrid Palace!
                        </p>

                        <div class="tableau">
                            <h4>Alhambra Tour Ticket Prices (all inclusive)</h4>
                            <table>
                                <thead>
                                    <tr>
                                        <th>Individuals</th>
                                        <th>Rates</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr>
                                        <td>&nbsp;Adults (+15 years)</td>
                                        <td>&nbsp;15,11$</td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;Children (12-15 years)</td>
                                        <td>&nbsp;8,63$</td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;Children (-12 years)</td>
                                        <td>&nbsp;Free</td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;Person with a specific card<br>(Youth Euro Card/Card of the Junta de
                                            Andalucía
                                            sixty-five)</td>
                                        <td>&nbsp;9,71$</td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;Disabled (+33%)</td>
                                        <td>&nbsp;8,63$</td>
                                    </tr>
                                <tbody>
                            </table>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
    <a href="#" class="top"> ↑ </a>

    <?php
    include("./php/footer_en.inc.php");
    ?>
    <script src="script.js"></script>

</body>

</html>