// Obtener el número de Pokémon desde la URL
const urlParams = new URLSearchParams(window.location.search);
const pokemonNumber = urlParams.get('id');

// Construir la URL de la API de detalles del Pokémon utilizando el número obtenido
const apiUrl = `https://pokeapi.co/api/v2/pokemon/${pokemonNumber}`;

// Obtén una referencia al contenedor principal de detalles de Pokémon
const mainPokemon = document.querySelector('.main-pokemon');

// Realiza una solicitud GET a la API para obtener los detalles del Pokémon
fetch(apiUrl)
  .then((response) => response.json())
  .then((data) => {
    // Extrae los datos relevantes del Pokémon
    const pokemonName = data.name;
    const pokemonImage = data.sprites.front_default;
    const pokemonNumber = data.id;
    const pokemonTypes = data.types.map((type) => type.type.name).join(', ');
    const pokemonHeight = (data.height / 10) + 'm'; // Convertir a metros
    const pokemonWeight = (data.weight / 10) + 'Kg'; // Convertir a kilogramos

    // Actualiza los elementos HTML con la información del Pokémon
    mainPokemon.querySelector('.number-pokemon').textContent = `#${pokemonNumber}`;
    mainPokemon.querySelector('.container-img-pokemon img').src = pokemonImage;
    mainPokemon.querySelector('.container-img-pokemon img').alt = `pokemon ${pokemonName}`;
    mainPokemon.querySelector('h1').textContent = pokemonName;

    // Actualiza el texto y la clase CSS del elemento <span> para el tipo de Pokémon
    const typeSpan = mainPokemon.querySelector('.card-types span');
    typeSpan.textContent = pokemonTypes;

    // Asigna una clase CSS basada en el tipo de Pokémon
    typeSpan.classList.add(pokemonTypes.toLowerCase()); // Convierte a minúsculas para que coincida con la clase CSS

    mainPokemon.querySelector('.card-types span').textContent = pokemonTypes;
    mainPokemon.querySelector('.info-pokemon .group-info:nth-child(1) span').textContent = pokemonHeight;
    mainPokemon.querySelector('.info-pokemon .group-info:nth-child(2) span').textContent = pokemonWeight;

    // Actualiza las estadísticas del Pokémon (debes proporcionar las estadísticas en la respuesta de la API)
    mainPokemon.querySelector('.counter-stat:nth-child(1)').textContent = data.stats[0].base_stat;
    mainPokemon.querySelector('.counter-stat:nth-child(2)').textContent = data.stats[1].base_stat;
    mainPokemon.querySelector('.counter-stat:nth-child(3)').textContent = data.stats[2].base_stat;
    mainPokemon.querySelector('.counter-stat:nth-child(4)').textContent = data.stats[3].base_stat;
    mainPokemon.querySelector('.counter-stat:nth-child(5)').textContent = data.stats[4].base_stat;
    mainPokemon.querySelector('.counter-stat:nth-child(6)').textContent = data.stats[5].base_stat;
  })
  .catch((error) => {
    console.error('Error al cargar los datos del Pokémon', error);
  });
