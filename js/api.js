const apiKey = 'fc2506c384195e9a082fe340bddbec41';
const url = `https://api.themoviedb.org/3/discover/movie?api_key=${apiKey}&include_adult=false&include_video=false&language=tr-TR&page=1&sort_by=popularity.desc`;


fetch(url)
    .then(response => response.json())
    .then(data=> {
        const filmler = data.results.slice(0,6);

    filmler.forEach(film => {
    const filmDiv = document.createElement('div');  // Create a new div element
    filmDiv.className = 'col-md-4';

    filmDiv.innerHTML = `
        <div class="card shadow mb-4 mt-4 ms-3">
            <img src="https://image.tmdb.org/t/p/w500/${film.poster_path}" class="card-img-top" alt="${film.title}">
            <div class="card-body">
                <h5 class="card-title">${film.title}</h5>
                <p class="card-text">${film.overview || 'Açıklama bulunamadı.'}</p>
            </div>
        </div>
    `;

    document.getElementById('film_yeri').appendChild(filmDiv);
    });
})

    .catch(error =>{
    console.error('Yüklenemedi:',error);
    });

