<!DOCTYPE html>
<html lang="pt-br">
    <head>
    <?php require_once 'link.php';?>
    </head>
    <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <header>
            <!---Inicio Navbar--->
            <nav class="navbar navbar-expand-md navbar-light fixed-top navbar-transparente">
                <div class="container">
                  <a href="index.php" class="navbar-brand text-white" style="font-size: 3em;  font-weight: 700; letter-spacing: -0.05em; ">CineFlix</a>
                  <button class="navbar-toggler" data-toggle="collapse" data-target="#nav-principal">
                    <i class="fas fa-bars text-white"></i>
                  </button>
        
                    <div class="collapse navbar-collapse" id="nav-principal">
                        <ul class="navbar-nav ml-auto">
                            <li  class="nav-item">
                                <a href="index.php" class="nav-link">HOME</a>
                            </li>

                            <li>
                                <a href="adiciona-filme.php" class="nav-link">CADASTRAR FILME</a>
                            </li>
                            
                            <li  class="nav-item">
                                <a href="doar.php" class="nav-link">CATEGORIAS</a>
                            </li>
                            <li  class="nav-item">
                                <a href="contato.php" class="nav-link">FAQ</a>
                            </li>
                            <li  class="nav-item divisor"></li>
                            
                           <li  class="nav-item">
                           <li  class="nav-item">
                                <a href="login-cadastro.php" class="nav-link">INSCREVER-SE</a>
                            </li>
                            <li  id='entrar' class="nav-item" style="display: flex; align-items: center;">
                                <a href="login.php" class="nav-link">ENTRAR</a>
                            </li> 
                            <!-- <div class="dropdown">
                                <button onclick="myFunction()" class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                    SEARCH
                                </button>
                            <div id="search" style="background-color: darkred">
                                <input id='movieTitle' style="border:0; outline:0" placeholder="Pesquise por título"/>
                                <select style="margin-left: 10px" aria-label="Pesquise por genero">
                                    <option selected>Open this select menu</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                            </div> -->
                        </ul>
                    </div>
                </div>
            </nav>
        </header> 
    </body>
</html>

<script>
const queryString = window.location.search;
const urlParams = new URLSearchParams(queryString);
const logged = urlParams.get('logged');
console.log(logged, 'ghjbv');
if ( logged ) {
    document.getElementById("entrar").innerHTML = '<a class="nav-link">LOGADO</a><img src="imagens/perfil.png"  style="background-color:black;" witdh="5px" height="25px" class="imagem">';
}

function myFunction() {
  var search = document.getElementById("search");
  if (search.style.display === "none") {
    search.style.display = "flex";
  } else {
    search.style.display = "none";
  }

}

document.addEventListener("keyup", event => {
    if (event.keyCode === 13) {
        var movieTitle = document.getElementById("movieTitle");
        alert(movieTitle.value)
    }
});
</script> 

<style>
    #search {
            position: absolute;
            display: none;
            right: 0px;
            top: 42px;
            padding: 10px
        }
</style>