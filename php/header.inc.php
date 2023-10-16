<?php
if(!isset($_SESSION['langue'])){
    $_SESSION['langue']="";
}
?>

<header>
    <div class="scroll"></div>
    <div class="FCFLEM">
        <img src="./img/logo_Grenade.png" alt="FCFLEM">
    </div>
    <div class="NAVI">
        <ul class="menu">
            <li class="item nonde"><a href="accueil.php">Accueil</a></li>
            <li class="item deroulant"><a>A Visiter</a>
                <ul class="sous">
                    <li><a href="./lieux_visite.php"><span>Lieux à
                                visiter</span> </a></li>
                    <li><a href="./spots_photos.php">Meilleurs
                            spots de photos</a></li>
                </ul>
            </li>
            <li class="item deroulant"><a>Culture</a>
                <ul class="sous">
                    <li><a href="./espagne.php">L'Espagne</a>
                    </li>
                    <li><a href="./histoire_architecture.php">Histoire et Architecture</a></li>
                </ul>
            </li>
            <li class="item deroulant"><a>Sortir</a>
                <ul class="sous">
                    <li><a href="./restaurants.php">Restaurants</a>
                    </li>
                    <li><a href="./parcours.php">Parcours
                            (avec Préférences)</a></li>
                    <li><a href="./hotels.php">Hôtels</a>
                    </li>
                </ul>
            </li>
            <li class="item nonde"><a href="./infos_pratiques.php">Informations Pratiques</a></li>
            <li class="item nonde"><a href="./a_propos.php">A Propos</a></li>
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