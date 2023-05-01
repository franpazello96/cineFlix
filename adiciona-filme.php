
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
                        <input type="text" id="titulo" class="form-control" name="titulo" placeholder="Título" title="O nome da produção não possui limites de caracteres" required>
                    </div>
                    <div class="form-group m-3">
                        <label for="descricao">Descrição</label>
                        <input type="text" id="descricao" class="form-control" name="descricao" placeholder="Descrição" title="A descrição da produção precisa ser inserida de uma forma de sinopse" required>
                    </div>
                    <div class="form-group m-3">
                        <label for="genero">Gênero</label>
                        <select id="genero" class="form-control" title="Selecione apenas um tipo de genero em que esta produção pertence" name="genero" required>
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
                        <select id="diretor" class="form-control" name="diretor" title="Selecione apenas um diretor da produção" required>
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
                        <input type="text" id="ano" class="form-control" name="ano" placeholder="Ano" pattern="\d*" title="O ano é referente a data de lançamento da produção" maxlength="4" required>
                    </div>
                    <div class="form-group m-3">
                        <label for="duracao">Duração em minutos</label>
                        <input type="number" id="duracao" title="A duracao da producao pode ser inserida tanto em minutos ou tanto em horas." class="form-control" name="duracao" placeholder="Duração" required>
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
    function validaDuracao(duracao){

        if (isNaN(duracao) || duracao <= 0) {
            return false;
        }

        return true;
    }


    // Seleciona o formulário pelo ID
    const form = document.querySelector('#adiciona-filme-grava');

    // Seleciona os campos de entrada pelo ID
    const duration = document.querySelector('#duracao');

    // Adiciona um ouvinte de evento de envio ao formulário
    form.addEventListener('submit', (event) => {
        // Verifica se os campos estão vazios ou não preenchidos corretamente
       
        if (!validaDuracao(duration)){
            alert("Duracão invalida!!!;Por favor insira um duração válida");
            event.preventDefault();
            document.getElementById("duracao").value=null;
        }
    

    });



</script>

</html>
