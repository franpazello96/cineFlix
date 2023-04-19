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
                                    <input class="form-control m-2 col-12" type="text" id="nome" name="nome" placeholder="Nome: " >
            
                            
                                    <input class="form-control m-2 col-12" type="email"id="email" name="email" placeholder="E-mail:  " >
                                    <input class="form-control m-2 col-12" type="password"id="senha" name="senha" placeholder="Senha:  " >
                                    <input class="form-control m-2 col-12" type="text" id="cpf" name="cpf" placeholder="CPF: " >
                                    <input class="form-control m-2 col-12" type="text" id="dataDeNascimento" name="dataDeNascimento" placeholder="Data de Nascimento: " >
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
                    <img id="img" src="imagens/logo_red.png"  width="100%" height="70%">                           
                    </div>
                </div>

            </div>
        </div>
    </section>
    <?php require_once 'rodape.php'?>
</body>
</html>