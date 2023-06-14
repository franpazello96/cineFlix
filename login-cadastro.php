
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/4.1.1/crypto-js.min.js"></script>
    <?php

    
    require_once 'link.php';
    require_once 'menu.php';



// Set the default session name
    $s_name = session_name();

    if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 1200)) {
        // Last request was more than 20 seconds ago
        session_unset();     // Unset $_SESSION variable for the run-time
        session_destroy();   // Destroy session data in storage
        echo "Session expired at " .  gmdate("H:i:s", time()) .  "<br/>";
        echo '<meta http-equiv="refresh" content="1;url=index.php">';
        echo '<script>alert("Sessão expirada");</script>';


    }


    $_SESSION['LAST_ACTIVITY'] = time(); // Update last activity time stamp
    echo "Session created for $s_name, at " . gmdate("H:i:s", time()) .  "<br/>";
    ?>
</head>

<body>
    <section id="conteudo">
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-6">
                    <div class="col-md-12 m-3">
                        <h2 class="mt-5 ml-2" style="font-size: 40px;">Cadastre-se</h2>
                        <form method="POST" enctype="multipart/form-data" action="login-cadastro-grava.php" name="login-cadastro-grava" id="login-cadastro-grava">
                            <div class="form-group">
                                <input class="form-control m-2 col-12" type="text" id="nome" name="nome" placeholder="Nome: " required>
                                <input class="form-control m-2 col-12" type="email" id="email" name="email" placeholder="E-mail:  " required>
                                <input class="form-control m-2 col-12" type="password" id="senha" name="senha" placeholder="Senha:  " required>
                                <input class="form-control m-2 col-12" type="text" id="cpf" name="cpf" placeholder="CPF: " required>
                                <input class="form-control m-2 col-12" type="text" id="cep" oninput="formatCep(this)" name="cep" placeholder="CEP: ">
                                <input class="form-control m-2 col-12" type="text" id="logradouro" name="logradouro" placeholder="Logradouro: ">
                                <input class="form-control m-2 col-12" type="text" id="numero" name="numero" placeholder="Número: ">
                                <input class="form-control m-2 col-12" type="text" id="complemento" name="complemento" placeholder="Complemento: ">
                                <input class="form-control m-2 col-12" type="text" id="bairro" name="bairro" placeholder="Bairro: ">
                                <input class="form-control m-2 col-12" type="text" id="cidade" name="cidade" placeholder="Cidade: ">
                                <input class="form-control m-2 col-12" type="text" id="uf" name="uf" placeholder="Estado: ">
                                <input class="form-control m-2 col-12" type="text" id="telefone" name="telefone" placeholder="Telefone: " required>
                                <input class="form-control m-2 col-12" type="file" id="imagem" name="imagem" placeholder="Imagem" required>
                                <a href="index.php" class="btn btn-secondary ml-2">Voltar</a>
                                <button type="submit" class="btn btn-danger ">Cadastrar</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-6" style="margin-top: 100px;">
                    <div class="col-md-12 m-3">
                        <img id="img" src="imagens/logo_red.png" width="100%" height="70%">
                    </div>
                </div>

            </div>
        </div>
    </section>
    <?php require_once 'rodape.php' ?>
    <script src="/script/cep.js">
    </script>
</body>

</html>
<script>




    const emailInput = document.getElementById('email');
    emailInput.addEventListener('blur', function() {
        const email = emailInput.value;
        if (!isValidEmail(email)) {
            alert('Endereço de e-mail inválido!');
        }
    });

    function isValidEmail(email) {
        const emailRegex = /^[^\s@]+@(hotmail|outlook|gmail)\.[^\s@]+$/;
        return emailRegex.test(email);
    }

    function mascaraCPF(cpf) {
        cpf = cpf.replace(/\D/g, '');
        cpf = cpf.substring(0, 3) + '.' + cpf.substring(3, 6) + '.' + cpf.substring(6, 9) + '-' + cpf.substring(9, 11);
        return cpf;
    }

    const cpfInput = document.getElementById('cpf');
    cpfInput.oninput = function() {
        cpfInput.value = mascaraCPF(cpfInput.value);
    };

    cpfInput.onkeydown = function(event) {
        if (event.key === 'Backspace') {
            return true;
        }
        if (cpfInput.value.length >= 14) {
            event.preventDefault();
            return false;
        }
        return true;
    };


    function mascaraTelefone(telefone) {
        telefone = telefone.replace(/\D/g, ''); // remove qualquer caractere que não seja um número
        telefone = telefone.replace(/^(\d{2})(\d)/g, '($1) $2'); // adiciona parênteses ao redor do DDD
        telefone = telefone.replace(/(\d{4})(\d)/, '$1-$2'); // adiciona o hífen entre o quarto e o quinto dígitos
        return telefone;
    }

    const telefoneInput = document.getElementById('telefone');
    telefoneInput.addEventListener('input', function() {
        telefoneInput.value = mascaraTelefone(telefoneInput.value);
    });


    function formatCep(cepInput) {
        let cep = cepInput.value;
        cep = cep.replace(/\D/g, ''); // Remove todos os caracteres que não são dígitos
        cep = cep.substring(0, 5) + '-' + cep.substring(5, 8); // Adiciona o hífen entre o quinto e o sexto dígitos
        cepInput.value = cep;
    }
</script>