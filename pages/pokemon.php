<!DOCTYPE html>
<html lang="es">

<head>
    <?php include '../components/head.php' ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/styles/main.css">
    <link rel="stylesheet" href="../assets/styles/pages/pokemon.css">
    <title>Pokemon</title>
</head>

<body>
    <?php include '../components/header.php' ?>
    <main class="container main-pokemon">
        <div class="header-main-pokemon">
            <span class="number-pokemon">#1</span>
            <div class="container-img-pokemon">
                <img src="https://assets.pokemon.com/assets/cms2/img/pokedex/detail/001.png" alt="pokemon bulbasaur" />
            </div>

            <div class="container-info-pokemon">
                <h1>Bulbasaur</h1>
                <div class="card-types">
                    <span class="grass">Planta</span>
                </div>
                <div class="info-pokemon">
                    <div class="group-info">
                        <p>Altura</p>
                        <span>0.7m</span>
                    </div>
                    <div class="group-info">
                        <p>Peso</p>
                        <span>6.9Kg</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-stats">
            <h1>Estadísticas</h1>
            <div class="stats">
                <div class="stat-group">
                    <span>Hp</span>
                    <div class="progress-bar"></div>
                    <span class="counter-stat">45</span>
                </div>
                <div class="stat-group">
                    <span>Attack</span>
                    <div class="progress-bar"></div>
                    <span class="counter-stat">49</span>
                </div>
                <div class="stat-group">
                    <span>Defense</span>
                    <div class="progress-bar"></div>
                    <span class="counter-stat">49</span>
                </div>
                <div class="stat-group">
                    <span>Special Attack</span>
                    <div class="progress-bar"></div>
                    <span class="counter-stat">65</span>
                </div>
                <div class="stat-group">
                    <span>Special Defense</span>
                    <div class="progress-bar"></div>
                    <span class="counter-stat">65</span>
                </div>
                <div class="stat-group">
                    <span>Speed</span>
                    <div class="progress-bar"></div>
                    <span class="counter-stat">45</span>
                </div>
            </div>
        </div>
    </main>
    <script src="../assets/api/detalle.js"></script>
</body>

</html>