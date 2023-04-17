<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php 
    require_once 'link.php';
    require_once 'menu.php';
    ?>
</head>
<body>
    <section id="conteudo">
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-6">
                    <div class="col-md-12 m-3">
                            <h2 class="mt-5 ml-2" style="font-size: 40px;" >Cadastre-se</h2>
                            <form method="POST" action="login-cadastro_grava.php" name="login-cadastro_grava" id="login-cadastro_grava">
                            <div class="form-group">
                                <select class="form-control  m-2 col-12" id="tipo_pessoa" name="tipo_pessoa" onchange="exibir_ocultar(this)">
                                    <option id="selecione" value="selecione" name="selecione">Selecione</option>
                                    <option selected id="pessoa_fisica" value="pessoa_fisica" name="pessoa_fisica">Pessoa Fisica</option>
                                    <option id="pessoa_juridica" value="pessoa_juridica" name="pessoa_juridica">Pessoa Juridica</option>
                                </select>
                                <div id="pessoa_juridica_campos">
                                    <input class="form-control m-2 col-12" type="text" id="razao" name="razao" placeholder="Razão Social: " >
                                    <input class="form-control m-2 col-12" type="text" id="fantasia" name="fantasia" placeholder="Nome Fantasia: " >
                                    <input class="form-control m-2 col-12" type="text" id="cnpj" name="cnpj" placeholder="CNPJ: " >
                                </div>
                                <div id="pessoa_fisica_campos">
                                    <input class="form-control m-2 col-12" type="text" id="nome" name="nome" placeholder="Nome: " >
                                    <input class="form-control m-2 col-12" type="text" id="cpf" name="cpf" placeholder="CPF: " >
                                    <input class="form-control m-2 col-12" type="text" id="dataDeNascimento" name="dataDeNascimento" placeholder="Data de Nascimento: " >
                                </div>    
                                <input class="form-control m-2 col-12" type="email"id="email" name="email" placeholder="E-mail:  " >
                                <input class="form-control m-2 col-12" type="password"id="senha" name="senha" placeholder="Senha:  " >   
                                <input class="form-control m-2 col-12" type="text" id="cep" name="cep" placeholder="CEP: " >
                                <input class="form-control m-2 col-12" type="text" id="logradouro" name="logradouro" placeholder="Logradouro: " >
                                <input class="form-control m-2 col-12" type="text" id="numero" name="numero" placeholder="Número: " >
                                <input class="form-control m-2 col-12" type="text" id="complemento" name="complemento" placeholder="Complemento: " >
                                <input class="form-control m-2 col-12" type="text" id="bairro" name="bairro" placeholder="Bairro: " >
                                <input class="form-control m-2 col-12" type="text" id="cidade" name="cidade" placeholder="Cidade: " >
                                <input class="form-control m-2 col-12" type="text" id="uf" name="uf" placeholder="Estado: " >
                                <input class="form-control m-2 col-12" type="text" id="telefone" name="telefone" placeholder="Telefone: ">
                                <a href="index.php" class="btn btn-secondary ml-2">Voltar</a>	
                                <button  type="submit" class="btn btn-primary ">Cadastrar</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-6" style="margin-top: 100px;">
                    <div class="col-md-12 m-3">
                    <img id="img" src="imagens/iphone3.png"  width="100%" height="70%">                           
                    </div>
                </div>

            </div>
        </div>
    </section>
    <?php require_once 'rodape.php'?>
</body>
<script>
    const pessoa_fisica_campos = document.getElementById("pessoa_fisica_campos")
    const pessoa_juridica_campos = document.getElementById("pessoa_juridica_campos")
    pessoa_juridica_campos.classList.add("hidden");
    function exibir_ocultar(e) {
        if (e.value == 'pessoa_fisica') {
            pessoa_juridica_campos.classList.add("hidden");
            pessoa_fisica_campos.classList.remove("hidden");
        } else {
            pessoa_fisica_campos.classList.add("hidden");
            pessoa_juridica_campos.classList.remove("hidden");
        }
    }

</script>
<style>
    .hidden {
        display: none;
}
</style>
</html>