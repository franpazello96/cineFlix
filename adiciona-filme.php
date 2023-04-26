<!DOCTYPE html>
<html lang="pt-br">

<head>
    <?php require_once 'link.php'; ?>
    <?php require_once 'menu.php'; ?>
    <link rel="stylesheet" href="css/layout.css" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>


</head>

<body>
    <div class="content">
        <div class="container aling-self-center">
            <div style="padding-top: 15%;">
                <form method="POST" action="adiciona-filme-grava.php" name="adiciona-filme-grava" id="adiciona-filme-grava" class="col-md-12" style="background-color: #dbdbdb; border-radius: 30px;">
                    <div class="form-group m-3" style="padding-top: 5%;">
                        <label for="titulo">Título</label>
                        <input type="text" id="titulo" class="form-control" name="titulo" placeholder="Título" required>
                    </div>
                    <div class="form-group m-3">
                        <label for="descricao">Descrição</label>
                        <input type="text" id="descricao" class="form-control" name="descricao" placeholder="Descrição" required>
                    </div>
                    <div class="form-group m-3">
                        <label for="genero">Gênero</label>
                        <select id="genero" class="form-control" name="genero" required>
                            <option value="">Selecione um gênero</option>
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
                    </div>
                    <div class="form-group m-3">
                        <label for="diretor">Diretor</label>
                        <select id="diretor" class="form-control" name="diretor" required>
                            <option value="">Selecione um diretor</option>
                            <option value="Christopher Nolan">Christopher Nolan</option>
                            <option value="Steven Spielberg">Steven Spielberg</option>
                            <option value="Quentin Tarantino">Quentin Tarantino</option>
                            <option value="Martin Scorsese">Martin Scorsese</option>
                            <option value="David Fincher">David Fincher</option>
                            <option value="James Cameron">James Cameron</option>
                            <option value="Alfred Hitchcock">Alfred Hitchcock</option>
                            <option value="Stanley Kubrick">Stanley Kubrick</option>
                            <option value="Francis Ford Coppola">Francis Ford Coppola</option>
                        </select>
                    </div>
                    <div class="form-group m-3">
                        <label for="ano">Ano</label>
                        <input type="text" id="ano" class="form-control" name="ano" placeholder="Ano" pattern="\d*" maxlength="4" required>
                    </div>
                    <div class="form-group m-3">
                        <label for="duracao">Duração em minutos</label>
                        <input type="number" id="duracao" class="form-control" name="duracao" placeholder="Duração" required>
                    </div>
                    <div style="padding-bottom: 5%; padding-left: 40%">
                        <a href="index.php" class="btn btn-secondary">Cancelar</a>
                        <button type="submit" onclick="validaAno()" class="btn btn-primary ">Cadastrar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <?php require_once 'rodape.php' ?>
</body>
<script>
    function validaAno() {
        const anoAtual = new Date().getFullYear();
        const ano = document.getElementById("ano").value;

        if (ano < 1900 || ano > anoAtual) {
            document.getElementById("ano").value = null;
            alert("Ano invalido");
        }

    }



    // Seleciona o formulário pelo ID
    const form = document.querySelector('#login_grava');

    // Seleciona os campos de entrada pelo ID
    const titulo = document.querySelector('#titulo');
    const descricao = document.querySelector('#descricao');
    const genero = document.querySelector('#genero');
    const diretor = document.querySelector('#diretor');
    const tipo = document.querySelector('#tipo');
    const ano = document.querySelector('#ano');
    const duracao = document.querySelector('#duracao');

    // Adiciona um ouvinte de evento de envio ao formulário
    form.addEventListener('submit', (event) => {
        // Verifica se os campos estão vazios ou não preenchidos corretamente
        if (!titulo.value) {
            alert('Por favor, preencha o campo Título.');
            event.preventDefault();
        }

        if (!descricao.value) {
            alert('Por favor, preencha o campo Descrição.');
            event.preventDefault();
        }

        if (!genero.value) {
            alert('Por favor, preencha o campo Gênero.');
            event.preventDefault();
        }

        if (!diretor.value) {
            alert('Por favor, preencha o campo Diretor.');
            event.preventDefault();
        }

        if (!tipo.value) {
            alert('Por favor, preencha o campo Tipo.');
            event.preventDefault();
        }

        if (!duracao.value || duracao.value <= 0) {
            alert('Por favor, preencha o campo Duração com uma duração válida.');
            event.preventDefault();
        }

    });


</script>

</html>