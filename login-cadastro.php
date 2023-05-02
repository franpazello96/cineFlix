<!DOCTYPE html>
<html lang="pt-br">

<head>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/4.1.1/crypto-js.min.js"></script>

    <?php
    require_once 'link.php';
    require_once 'menu.php';
    ?>
</head>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
      $(function() {
        // seleciona o campo do CEP
        const cepInput = $('#cep');

        // quando o campo do CEP perde o foco
        cepInput.on('blur', function() {
          // obtém o valor do CEP sem os caracteres não numéricos
          const cep = cepInput.val().replace(/\D/g, '');

          // se o CEP tem 8 dígitos
          if (cep.length === 8) {
            // faz uma requisição GET à API ViaCEP
            $.get('https://viacep.com.br/ws/' + cep + '/json/', function(data) {
              // preenche os campos do endereço
              $('#logradouro').val(data.logradouro);
              $('#bairro').val(data.bairro);
              $('#cidade').val(data.localidade);
              $('#uf').val(data.uf);
            });
          }
        });
      });
    </script>
<body>
<<<<<<< HEAD
    <!-- <script>
    var crypt = {
        secret: "THESECRET",
        encrypt: function (senha) {
            var cipher = CryptoJS.AES.encrypt (senha, this.secret);
            cipher = cipher.toString();
            return cipher;
        },
        decrypt: function (cipher) {
            var decipher = CryptoJS.AES.decrypt (cipher, crypt.secret);
            decipher = decipher.toString (CryptoJS.enc. Utf8);
            return decipher;
        }
    }

    function handleForm(event) {
        var senha = document.getElementById("senha")
        var cipher = crypt.encrypt(senha.value);
        console.log(cipher);
        senha.value = cipher
        
    } 
</script> -->
=======
<script>
     
</script>
>>>>>>> 6081ead3fa8d8959b5db661389d8d7ff90dacc57
    <section id="conteudo">
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-6">
                    <div class="col-md-12 m-3">
                        <h2 class="mt-5 ml-2" style="font-size: 40px;">Cadastre-se</h2>
                        <form method="POST" action="login-cadastro-grava.php" name="login-cadastro-grava" id="login-cadastro-grava">
                            <div class="form-group">
<<<<<<< HEAD
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
                                <a href="index.php" class="btn btn-secondary ml-2">Voltar</a>
                                <button type="submit" class="btn btn-primary ">Cadastrar</button>
=======
                                    <input class="form-control m-2 col-12" type="text" id="nome" name="nome" title="O nome do usuário não possui limites de caracteres" placeholder="Nome: " required >
                                    <input class="form-control m-2 col-12" type="email"id="email" name="email" title="O email aceita apenas outlook ou gmail sempre acompanhados com o @" placeholder="E-mail:  " required>
                                    <input class="form-control m-2 col-12" type="password" id="senha" name="senha" title="A senha precisa conter uma maiscula e com um mínimo de 8 digítos" placeholder="Senha:  " required>
                                    <input class="form-control m-2 col-12" type="password" id="confirma_senha" name="confirma_senha" title="O repita senha precisa ser identica com a senha insira no campo de cima" placeholder="Repita_senha:" required>
                                    <input class="form-control m-2 col-12" type="text" id="cpf" name="cpf" title="O CPF precisa estar com pontos e traço. ex: 111.111.111-11" placeholder="CPF: " required >
                                    <input class="form-control m-2 col-12" type="text" id="dataNascimento" name="dataNascimento" title="A data de nascimento precisa estar separada com barras.ex:DD/MM/Ano"placeholder="Data de Nascimento: " required >
                                    <input class="form-control m-2 col-12" type="tel"  title="O telefone é precisa estar nesse formato (DD) 9xxxx-xxxx"  id="telefone" name="telefone" placeholder="Telefone: " required>
                                    <input class="form-control m-2 col-12" type="text" title="O CEP precisa receber traco ex:xxxxx-xxx" id="cep" name="cep" placeholder="CEP: " required >
                                    <input class="form-control m-2 col-12" type="text" title="O logradouro é gerado através do cep" id="logradouro" name="logradouro" placeholder="Logradouro: " >
                                    <input class="form-control m-2 col-12" type="text" id="numero" title="O numero deve ser inserido de forma númerica ex:233" name="numero" placeholder="Número: " required >
                                    <input class="form-control m-2 col-12" type="text" id="complemento" title="O complemento se refere ao tipo de estabelecimento ou de  moradia" deve ser inserido de forma númerica ex:233" name="complemento" placeholder="Complemento: " required> 
                                    <input class="form-control m-2 col-12" type="text" id="bairro" name="bairro" title="O bairro é gerado automaticamente pelo CEP" placeholder="Bairro: " >
                                    <input class="form-control m-2 col-12" type="text" id="cidade" name="cidade" title="A cidade é gerada automaticamente pelo CEP" placeholder="Cidade: " >
                                    <input class="form-control m-2 col-12" type="text" id="uf" title="O Estado é gerado automaticamente pelo CEP" name="uf" placeholder="Estado: " >
                                    
                                    <a href="index.php" class="btn btn-secondary ml-2">Voltar</a>	
                                    <button type="submit" class="btn btn-primary ">Cadastrar</button>
>>>>>>> 6081ead3fa8d8959b5db661389d8d7ff90dacc57
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
<<<<<<< HEAD
    <?php require_once 'rodape.php' ?>
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
=======
    <script>
    function validarEmail(email) {
        const outlookRegex = /@outlook\.(com|com\.br)$/;
        const gmailRegex = /@gmail\.(com|com\.br)$/;
        
        if (outlookRegex.test(email) || gmailRegex.test(email)) {
            return true;
        } else {
            return false;
        }
    }   


    function validaSenha(senha) {
        const password =document.getElementById("confirma_senha").value;
        const regexSenha = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$/;
        if (regexSenha.test(senha) && senha == password  ) {
            return true
        } else {
            return false
        }   
                      
    }
    var crypt = {
            secret: "THESECRET",
            encrypt: function (senha) {
                var cipher = CryptoJS.AES.encrypt (senha, this.secret);
                cipher = cipher.toString();
                return cipher;
            },
            decrypt: function (cipher) {
                var decipher = CryptoJS.AES.decrypt (cipher, crypt.secret);
                decipher = decipher.toString (CryptoJS.enc. Utf8);
                return decipher;
            }
    }
    function handleForm(event) {
            var senha = document.getElementById("senha");
            var cipher = crypt.encrypt(senha.value);
            senha.value = cipher
    }    
    
    
       
    function validarDataNascimento(dataNascimento) {
        const regexDataNascimento = /^([0-2][0-9]|(3)[0-1])(\/)(((0)[0-9])|((1)[0-2]))(\/)\d{4}$/;
        const dataAtual = new Date();
        const anoAtual = dataAtual.getFullYear();
        const mesAtual = dataAtual.getMonth() + 1;
        const diaAtual = dataAtual.getDate();

        if (!regexDataNascimento.test(dataNascimento.value)) {
            return false;
        }

        const partesData = dataNascimento.value.split('/');
        const dia = parseInt(partesData[0], 10);
        const mes = parseInt(partesData[1], 10);
        const ano = parseInt(partesData[2], 10);

        if (ano < 1900 || ano > anoAtual) {
            return false;
        }

        if (ano === anoAtual && mes > mesAtual) {
            return false;
        }

        if (ano === anoAtual && mes === mesAtual && dia > diaAtual) {
            return false;
        }

        return true;
    }
    function validarCPF(cpf) {
        cpf = cpf.replace(/[^\d]+/g,''); // remove todos os caracteres não numéricos do CPF
        if(cpf == '') return false; // se o CPF estiver vazio, retorna falso
        // verifica se o CPF é uma sequência de números iguais (ex: 111.111.111-11)
        if (cpf.length !== 11 || /^(\d)\1+$/.test(cpf)) return false;
        // calcula o primeiro dígito verificador
        var add = 0;
        for (var i = 0; i < 9; i++) add += parseInt(cpf.charAt(i)) * (10 - i);
        var rev = 11 - (add % 11);
        if (rev == 10 || rev == 11) rev = 0;
        if (rev != parseInt(cpf.charAt(9))) return false;
        // calcula o segundo dígito verificador
        add = 0;
        for (i = 0; i < 10; i++) add += parseInt(cpf.charAt(i)) * (11 - i);
        rev = 11 - (add % 11);
        if (rev == 10 || rev == 11) rev = 0;
        if (rev != parseInt(cpf.charAt(10))) return false;
        return true; // CPF válido
    }

    function validarCep(cep) {
        var regexCep = /^[0-9]{5}-?[0-9]{3}$/;
        return regexCep.test(cep);
    }

    function consultarCep(cep) {
    var xhr = new XMLHttpRequest();
    xhr.open("GET", `https://viacep.com.br/ws/${cep}/json/`, true);
    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {
            var endereco = JSON.parse(xhr.responseText);
            if (endereco.erro) {
                alert("CEP não encontrado. Tente novamente.");
            } else {
                document.getElementById("logradouro").value = endereco.logradouro;
                document.getElementById("bairro").value = endereco.bairro;
                document.getElementById("cidade").value = endereco.localidade;
                document.getElementById("uf").value = endereco.uf;
               
            }
        }
    }
    xhr.send();
    }
    function verificaNumero_de_enderenco(numero){
        var addressNumberRegex = /^[0-9]+$/;
        if (addressNumberRegex.test(numero)) {
            return true
        } else {
            return false
        }
    }
    function validarTelefone(telefone) {
        var regex = /^\([1-9]{2}\) (?:[2-8]|9[1-9])[0-9]{3}\-[0-9]{4}$/; // regex para validar telefone no formato (xx) 9xxxx-xxxx ou (xx) xxxxx-xxxx
        return regex.test(telefone);
    }
        
    const form=document.querySelector('#login-cadastro-grava');
    form.addEventListener('submit',(event)=> {
        event.preventDefault();
        const email=document.querySelector('#email').value;
        if(!validarEmail(email)){
            alert("Por favor insira um email válido.")
            event.preventDefault();
            document.getElementById("email").value = null;

            
        }
       
       
        const dataNascimento = document.querySelector('#dataNascimento');
        if (!validarDataNascimento(dataNascimento)) {
            alert("Data Nascimento inválida !!! .Por favor insira uma data de nascimento válida.");
            event.preventDefault();
            document.getElementById("dataNascimento").value = null;
            
        }
        var passwords = document.querySelector('#senha');
        if(!validaSenha(passwords.value)){
            alert("Senha inválida !!!.Por favor insira uma senha válida");
            document.getElementById("senha").value = null;
            document.getElementById("confirma_senha").value = null;
        }
        const cpfs = document.querySelector('#cpf');
        if (!validarCPF(cpfs.value)) {
            alert("CPF inválido ,Por favor insira uma CPF válido")
            document.getElementById("cpf").value = null;
            event.preventDefault();
            
       
        }
        
        const ceps = document.querySelector('#cep');
        if (!validarCep(ceps.value)) {
            alert("Cep inválido!!!.Por favor insira um cep válida.");
            document.getElementById("cep").value = null;
            document.getElementById("cidade").value = null;
            document.getElementById("logradouro").value = null;
            document.getElementById("uf").value = null;
            event.preventDefault();
            
       
        }
        else{
           consultarCep(ceps.value);
        }
        const telefones=document.querySelector('#telefone');
        if (!validarTelefone(telefones.value)) {
            alert(" Telefone incorreto!! Por favor insira um telefone válido.");
            document.getElementById("telefone").value = null;
            event.preventDefault();
       
        }
        const numeros=document.querySelector('#numero');
        if(!verificaNumero_de_enderenco(numeros.value)){
            alert("Número de endereço inválido!!! Por favor insira um número de endereco válido.");
            event.preventDefault();
            document.getElementById("numero").value = null;

        }
        
        

    });      


    

</script>
    <?php require_once 'rodape.php'?>
</body>
</html>
>>>>>>> 6081ead3fa8d8959b5db661389d8d7ff90dacc57
