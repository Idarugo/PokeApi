<!DOCTYPE html>
<html lang="es">

<head>
    <?php include './components/head.php' ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/styles/main.css">
    <title>Pokedex</title>
</head>

<body>
    <?php include './components/header.php' ?>
    <div class="container-filter container">
        <div class="icon-filter">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="icon">
                <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 6h9.75M10.5 6a1.5 1.5 0 11-3 0m3 0a1.5 1.5 0 10-3 0M3.75 6H7.5m3 12h9.75m-9.75 0a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m-3.75 0H7.5m9-6h3.75m-3.75 0a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m-9.75 0h9.75" />
            </svg>
            <span>Filtrar</span>
        </div>
    </div>
    <main class="card-list-pokemon container">
    </main>

    <div class="container-filters">
        <div class="filter-by-type">
            <span>Tipo</span>

            <div class="group-type">
                <input type="checkbox" name="grass" id="grass" />
                <label for="grass">Planta</label>
            </div>
            <div class="group-type">
                <input type="checkbox" name="fire" id="fire" />
                <label for="fire">Fuego</label>
            </div>
            <div class="group-type">
                <input type="checkbox" name="bug" id="bug" />
                <label for="bug">Bicho</label>
            </div>
            <div class="group-type">
                <input type="checkbox" name="fairy" id="fairy" />
                <label for="fairy">Hada</label>
            </div>
            <div class="group-type">
                <input type="checkbox" name="dragon" id="dragon" />
                <label for="dragon">Dragón</label>
            </div>
            <div class="group-type">
                <input type="checkbox" name="shadow" id="shadow" />
                <label for="shadow">Fantasma</label>
            </div>
            <div class="group-type">
                <input type="checkbox" name="ground" id="ground" />
                <label for="ground">Tierra</label>
            </div>
            <div class="group-type">
                <input type="checkbox" name="normal" id="normal" />
                <label for="normal">Normal</label>
            </div>
            <div class="group-type">
                <input type="checkbox" name="psychic" id="psychic" />
                <label for="psychic">Psíquico</label>
            </div>
            <div class="group-type">
                <input type="checkbox" name="steel" id="steel" />
                <label for="steel">Acero</label>
            </div>
            <div class="group-type">
                <input type="checkbox" name="dark" id="dark" />
                <label for="dark">Siniestro</label>
            </div>
            <div class="group-type">
                <input type="checkbox" name="electric" id="electric" />
                <label for="electric">Eléctrico</label>
            </div>
            <div class="group-type">
                <input type="checkbox" name="fighting" id="fighting" />
                <label for="fighting">Lucha</label>
            </div>
            <div class="group-type">
                <input type="checkbox" name="flying" id="flying" />
                <label for="flying">Volador</label>
            </div>
            <div class="group-type">
                <input type="checkbox" name="ice" id="ice" />
                <label for="ice">Hielo</label>
            </div>
            <div class="group-type">
                <input type="checkbox" name="poison" id="poison" />
                <label for="poison">Veneno</label>
            </div>
            <div class="group-type">
                <input type="checkbox" name="rock" id="rock" />
                <label for="rock">Roca</label>
            </div>
            <div class="group-type">
                <input type="checkbox" name="water" id="water" />
                <label for="water">Agua</label>
            </div>
        </div>
    </div>
    <script src="./assets/api/pokemon.js"></script>
    <script src="./assets/js/main.js"></script>
</body>

</html>