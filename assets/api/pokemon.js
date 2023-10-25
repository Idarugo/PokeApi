// URL de la API de Pokémon para obtener la lista completa de Pokémon
const apiUrl = 'https://pokeapi.co/api/v2/pokemon?limit=898';

// Realiza una solicitud GET a la API para obtener la lista de Pokémon
fetch(apiUrl)
  .then((response) => response.json())
  .then((data) => {
    const pokemonList = data.results;

    // Obtén el contenedor donde se agregarán las tarjetas de Pokémon
    const cardContainer = document.querySelector('.card-list-pokemon');

    // Recorre la lista de Pokémon y crea una tarjeta para cada uno
    pokemonList.forEach((pokemon, index) => {
      const pokemonUrl = pokemon.url;

      // Crea una nueva tarjeta de Pokémon
      const card = document.createElement('a');
      card.classList.add('card-pokemon');

      // Agregar un evento click a la tarjeta
      card.addEventListener('click', () => {
        // Obtener el número de Pokémon a partir de la URL
        const pokemonNumber = pokemonUrl.match(/\/(\d+)\/$/)[1];

        // Redirigir a la página de detalles del Pokémon
        window.location.href = `../Pokedex/pages/pokemon.php?id=${pokemonNumber}`;
      });

      fetch(pokemonUrl)
        .then((response) => response.json())
        .then((data) => {
          const pokemonName = data.name;
          const pokemonImage = data.sprites.front_default;
          const pokemonNumber = data.id;
          const pokemonTypes = data.types.map((type) => type.type.name).join(', ');

          card.href = '/../Pokedex/pages/pokemon.php?id=' + pokemonNumber;
          card.innerHTML = `
            <div class="card-img">
              <img src="${pokemonImage}" alt="${pokemonName}">
            </div>
            <div class="card-info">
              <span class="pokemon-id">Nº ${pokemonNumber}</span>
              <h3>${pokemonName}</h3>
              <div class="card-types">
                <span class="${pokemonTypes}">${pokemonTypes}</span>
              </div>
            </div>
          `;

          // Agrega la tarjeta al contenedor
          cardContainer.appendChild(card);
        })
        .catch((error) => {
          console.error(`Error al cargar los datos del Pokémon ${pokemon.name}`, error);
        });
    });
  })
  .catch((error) => {
    console.error('Error al cargar la lista de Pokémon', error);
  });
