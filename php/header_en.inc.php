<header>
    <div class="scroll"></div>
    <div class="FCFLEM">
        <img src="./img/logo_Grenade.png" alt="FCFLEM">
    </div>
    <div class="NAVI">
        <ul class="menu">
            <li class="item nonde"><a href="accueil_en.php">Home</a></li>
            <li class="item deroulant"><a>Visit</a>
                <ul class="sous">
                    <li><a href="./lieux_visite_en.php">Places to
                            visit </a></li>
                    <li><a href="./spots_photos_en.php">Best photo
                            spot</a></li>
                </ul>
            </li>
            <li class="item deroulant"><a>Culture</a>
                <ul class="sous">
                    <li><a href="./espagne_en.php">Spain</a>
                    </li>
                    <li><a href="./histoire_architecture_en.php">History and Architecture</a></li>
                </ul>
            </li>
            <li class="item deroulant"><a>Go out</a>
                <ul class="sous">
                    <li><a href="./restaurants_en.php">Restaurants</a>
                    </li>
                    <li><a href="./parcours_en.php">Course (with
                            Preferences)</a></li>
                    <li><a href="./hotels_en.php">Hotels</a>
                    </li>
                </ul>
            </li>
            <li class="item nonde"><a href="./infos_pratiques_en.php">Practical Information</a></li>
            <li class="item nonde"><a href="./a_propos_en.php">About us</a></li>
            <li class="nonde">
            <form class="langue" action="./php/handlelang.php" method="post">
                <input type="hidden" name="nom_page" value="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
                <label>
                    <input type="radio" name="langue" value="es" onchange="submit()">
                    <img src="https://cdn-icons-png.flaticon.com/512/197/197593.png" alt="es" width="15px" height="15px">
                </label>

                <label>
                    <input type="radio" name="langue" value="en" onchange="submit()">
                    <img src="https://cdn-icons-png.flaticon.com/512/197/197374.png" alt="en" width="15px" height="15px">
                </label>

                <label>
                    <input type="radio" name="langue" value="fr" onchange="submit()">
                    <img src="https://cdn-icons-png.flaticon.com/512/197/197560.png" alt="fr" width="15px" height="15px">
                </label>
            </form>
            </li>
           </ul>
    </div>
</header>

<style>
        .top::before {
            content: "Top " !important;
        }
    </style>