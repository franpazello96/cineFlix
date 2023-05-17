const search = document.getElementById("search");
let input = document.getElementById('input');


search.addEventListener("mouseover", () => {
    console.log('runinin')
    if (input.classList.contains('hidden')) {
        input.classList.remove('hidden');
        setTimeout(() => {
            input.classList.remove('visuallyhidden');
        }, 50);
    }
})

search.addEventListener("mouseleave", () => {
    input.classList.add('visuallyhidden');

    input.addEventListener('transitionend', () => {
        input.classList.add('hidden');
    }, {
      capture: false,
      once: true,    
      passive: false
    });

    setTimeout(() => {
        input.value = ''
    }, 200);

})

function Search() {
    if (input.value !== '') {
       const valor =  input.value
        var url_string = window.location.href
        url_string = url_string.replace('index.php', 'filmes-lista.php')
        var url = new URL(url_string);
        url.searchParams.set('titulo', valor)
        window.location.href = url
    }
}

input.addEventListener("keyup", event => {
    if (event.keyCode === 13) {
        Search()
    }
});