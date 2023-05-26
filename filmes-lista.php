
<?php
    require_once 'link.php';
    require_once 'menu.php';
    require_once 'conexao.php';
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

    $sql = "SELECT imagem, titulo, genero FROM cineflix.filme WHERE titulo = '$titulo' AND genero = '$genero' AND diretor = '$diretor'";
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
                        <button type="submit" class="btn btn-danger btn-sm ml-2" style="background-color: darkred;">Search</button>
                        <button type="reset" class="btn btn-secondary btn-sm ml-2" >Clear</button>
                    </div>
                <form>
            <div class="filmes row"></div>
        </div>
    <?php require_once 'rodape.php' ?>
</body>
</html>

<script>
var url_string = window.location.href
var url = new URL(url_string);
document.getElementById('titulo').value = url.searchParams.get("titulo")
document.getElementById('genero').value = url.searchParams.get("genero") ? url.searchParams.get("genero") : ''
document.getElementById('diretor').value = url.searchParams.get("diretor")

const result = <?php echo json_encode(mysqli_fetch_all($run, MYSQLI_ASSOC))?>;
const t = <?php echo json_encode($sql)?>;

var filmes = document.getElementsByClassName('filmes')
if (result.length) {
    result.map(v => {
        var div = document.createElement('div')
        var span = document.createElement('span')
        div.classList.add('filmeBox', 'col')
        var image = document.createElement('img')
        image.classList.add('image')
        image.setAttribute('src', v.imagem);
        span.innerHTML = v.titulo
        div.appendChild(span)
        div.appendChild(image)
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
    margin-top: 120px;
}
.image {
    height: 270px;
    width: 200px;
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

.filmeBox span {
    color: white;
}


</style>