<?php
    require_once 'link.php';
    require_once 'menu.php';
    require_once 'conexao.php';
    $s_name = session_name();
    
    if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 1200)) {
        // Last request was more than 1 second ago
        session_unset();     // Unset $_SESSION variable for the run-time
        session_destroy();   // Destroy session data in storage
        echo "Session expired at " .  gmdate("H:i:s", time()) .  "<br/>";
        echo '<meta http-equiv="refresh" content="1;url=index.php">'; // Refresh after 5 seconds
        
    }
    
    $_SESSION['LAST_ACTIVITY'] = time(); // Update last activity timestamp
    echo "Session created for $s_name, at " . gmdate("H:i:s", time()) .  "<br/>";


    $user_id = $_SESSION['id'];
    if (isset($_GET['filme']) and isset($_GET['rating'])) {
        $filme = $_GET['filme'];
        $rating = $_GET['rating'];
        $sql = "UPDATE `cineflix`.`favoritos` SET `rating` = '$rating' WHERE (`filme_id` = '$filme') and (`usuario_id` = '$user_id')";
        $conn->query($sql);
    }


    if (isset($_GET['titulo'])) {
        $_GET['titulo'] != '' ? $titulo = $_GET['titulo']: $titulo = 'titulo'; 
    } else {
        $titulo = 'titulo';
    };
    if (isset($_GET['genero'])) {
        $_GET['genero'] != '' ? $genero = $_GET['genero']: $genero = 'genero'; 
    } else {
        $genero = 'genero';
    };
    if (isset($_GET['diretor'])) {
        $_GET['diretor'] != '' ? $diretor = $_GET['diretor']: $diretor = 'diretor'; 
    } else {
        $diretor = 'diretor';
    };

    $sql = "SELECT id, imagem, titulo, genero FROM cineflix.filme WHERE titulo = '$titulo' AND genero = '$genero' AND diretor = '$diretor'";
    $sqlFavoritos = "SELECT * FROM cineflix.favoritos WHERE (`usuario_id` = '$user_id')";
    if (strpos($sql, "'titulo'")) {
        $sql = str_replace("'titulo'", "titulo", $sql);
    }
    if (strpos($sql, "'genero'")) {
        $sql = str_replace("'genero'", "genero", $sql);
    }
    if (strpos($sql, "'diretor'")) {
        $sql = str_replace("'diretor'", "diretor", $sql);
    }

    if ((!isset($_GET['titulo']) or $_GET['titulo'] !== '')  or (!isset($_GET['genero']) or $_GET['genero'] !== '') or (!isset($_GET['diretor']) or $_GET['diretor'] !== '')) {
        $run = $conn->query($sql);
    } else {
        $sql = "SELECT imagem, titulo, genero FROM cineflix.filme WHERE titulo = '$titulo' limit 0";
        $run = $conn->query($sql);
    }
    $runFavoritos = $conn->query($sqlFavoritos);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <div class="box">
            <h3 style="margin-left:40px;"> Filmes/Series</h3>
                <form id='form'>
                    <div class="form">
                        <div class="input-group m-2">
                            <input type="text" id="titulo" class="form-control" name="titulo" placeholder="Titulo">
                        </div>
                        <select id="genero" name="genero" class="form-control m-2">
                            <option value="">Gênero</option>
                            <option value="Ação">Ação</option>
                            <option value="Animação">Animação</option>
                            <option value="Aventura">Aventura</option>
                            <option value="Comédia">Comédia</option>
                            <option value="Documentário">Documentário</option>
                            <option value="Drama">Drama</option>
                            <option value="Ficção científica">Ficção científica</option>
                            <option value="Suspense">Suspense</option>
                            <option value="Terror">Terror</option>
                        </select>
                        <div class="input-group m-2">
                            <input type="text" id="diretor" class="form-control" name="diretor" placeholder="Diretor">
                        </div>
                        <button type="submit" class="btn btn-danger btn-sm ml-1" style="background-color: darkred;">Search</button>
                        <button type="reset" class="btn btn-secondary btn-sm ml-1" >Clear</button>
                    </div>
                <form>
                <div class="filmes row"></div>
</body>
</html>

<script>
var url_string = window.location.href
var url = new URL(url_string);
document.getElementById('titulo').value = url.searchParams.get("titulo")
document.getElementById('genero').value = url.searchParams.get("genero") ? url.searchParams.get("genero") : ''
document.getElementById('diretor').value = url.searchParams.get("diretor")

var result = <?php echo json_encode(mysqli_fetch_all($run, MYSQLI_ASSOC))?>;
const resultFavoritos = <?php echo json_encode(mysqli_fetch_all($runFavoritos, MYSQLI_ASSOC))?>;
result.map((filme, index) => {
    resultFavoritos.map(favorito => {
        if (filme.id == favorito.filme_id) {
            result[index].rating = favorito.rating
        }
    })
})

var filmes = document.getElementsByClassName('filmes')
result.sort((a, b) => b.rating - a.rating)
if (result.length) {
    result.map(v => {
        var div = document.createElement('div')
        div.classList.add('filmeBox', 'col') 
        var span = document.createElement('span')
        span.classList.add('filmeBoxTitulo')
        span.innerHTML = v.titulo
        var image = document.createElement('img')
        image.setAttribute('src', v.imagem);
        image.classList.add('image')
        if (resultFavoritos.length) {
            spanList = {}
            for (let i = 1; i < 6; i++) {
                spanList['li' + i] = document.createElement('li');
                spanList['li' + i].setAttribute('id', 'star' + i);
                spanList['li' + i].setAttribute('value', i);
                spanList['li' + i].classList.add('star', 'fa', 'fa-star')
                spanList['li' + i].addEventListener('mouseover', (event) => {
                    for (const starChildren of event.target.parentElement.children) {
                        starChildren.value <= event.target.value ? starChildren.classList.add('checked') : starChildren.classList.remove("checked") 
                    }
                })
            }
            var ratingBox = document.createElement('ol')
            ratingBox.classList.add('ratingBox')
            for (let i = 1; i < 6; i++) {
                ratingBox.appendChild(spanList['li'+i])
            }
            for (const starChildren of ratingBox.children) {
                v.rating >= starChildren.value ? starChildren.classList.add('definite_checked') : undefined
            }
            ratingBox.addEventListener('mouseleave', (event)=>{
                for (const starChildren of event.target.children) {
                    starChildren.classList.remove('checked')
                    starChildren.classList.replace("definite_checked_off", "definite_checked") 
                }
            })
            ratingBox.addEventListener('mouseenter', (event) => {
                for (const starChildren of event.target.children) {
                    starChildren.classList.replace("definite_checked", "definite_checked_off") 
                }
            })
            ratingBox.addEventListener('click', (event) => {
                for (const starChildren of event.target.parentElement.children) {
                    console.log(starChildren.classList.contains("checked"))
                    starChildren.classList.contains("checked") ? starChildren.classList.add('definite_checked_off') : starChildren.classList.remove('definite_checked_off')
                }
                url.searchParams.set('filme', v.id)
                url.searchParams.set('rating', event.target.value)
                window.location.href = url

            })
        }
        div.appendChild(span)
        div.appendChild(image)
        if (resultFavoritos.length) {
                   div.appendChild(ratingBox) 
        }
        filmes[0].appendChild(div)
    })
} else {
    var div = document.createElement('div')
    var span = document.createElement('span')
    div.classList.add('notFound')
    span.innerHTML = 'ERRO: Nenhum filme encontrado'
    div.appendChild(span)
    filmes[0].appendChild(div)
}

const form = document.getElementById('form')
form.addEventListener('reset', () => {
    url.search = ''
    window.location.href = url
})

</script>

<style>
.ratingBox {
    display: inline;
    cursor: pointer;
    padding: 0px;
    margin-right: 80px;
}
.star {
    color: white;
}
.checked {
    color: #df0000;
}
.definite_checked_off {}

.definite_checked {
    color: #df0000
}


.btn {
    height: 48px;
    border-radius: 10px;
    min-width: 60px;
    margin-top: 3px;
    border: none; 
    margin-right: 5px;
}

.btn-danger:hover {
    background-color: #ab3535!important;
}
.form-control:focus {
    border-color: darkred;
    box-shadow: 0 0 0 0.2rem #8b000096;
}
.form {
    display: flex; 
    width: 70%; 
    min-height: 140px;
    margin-left: 40px;
}
@media (max-width: 600px) {
    .form {
    display: flex;
    flex-direction: column; 
    width: 40%; 
    min-height: 140px
    }
    .form button {
    width: 60px; 
}
}
.box {
    margin-top: 2em;
    margin-left: 2em;
}
.image {
    height: 25em;
    box-shadow: rgba(0, 0, 0, 0.56) 0px 22px 70px 4px;
}
.filmes {
    box-shadow: rgba(0, 0, 0, 0.56) 0px 22px 70px 4px;;
    background-color: #1F1F1F;
    display: flex;
    justify-content: center;
    padding: 0px 130px;
}

.notFound{
    display: flex;
    height: 100px;
    font-size: 20px;
    align-items: center;
}

.notFound span{
    color: black
}

.filmeBox {
    flex-direction: column;
    display: flex;
    align-items: center;
    margin: 15px 40px 10px;
    max-width: 200px;
}

.filmeBoxTitulo {
    color: white;
}


</style>