<header>
    <div class="scroll"></div>
    <div class="FCFLEM">
        <img src="./img/logo_Grenade.png" alt="FCFLEM">
    </div>
    <div class="NAVI">
        <ul class="menu">
            <li class="item nonde"><a href="accueil_es.php">Página principal</a></li>
            <li class="item deroulant"><a>¡A visitar!</a>
                <ul class="sous">
                    <li><a href="./lieux_visite_es.php">Lugares que visitar</a></li>
                    <li><a href="./spots_photos_es.php">Hora del selfie</a></li>
                </ul>
            </li>
            <li class="item deroulant"><a>Cultura</a>
                <ul class="sous">
                    <li><a href="./espagne_es.php">España</a>
                    </li>
                    <li><a href="./histoire_architecture_es.php">Historia y arquitectura</a></li>
                </ul>
            </li>
            <li class="item deroulant"><a>Salir</a>
                <ul class="sous">
                    <li><a href="./restaurants_es.php">Restaurantes</a>
                    </li>
                    <li><a href="./parcours_es.php">Recorridos (con Preferencias)</a></li>
                    <li><a href="./hotels_es.php">Hoteles</a>
                    </li>
                </ul>
            </li>
            <li class="item nonde"><a href="./infos_pratiques_es.php">Información práctica</a></li>
            <li class="item nonde"><a href="./a_propos_es.php">Quiénes somos</a></li>
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
            content: "Arriba " !important;
        }
    </style>