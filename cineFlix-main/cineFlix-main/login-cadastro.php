<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Cadastrando usuário novo</title>
    <link rel="stylesheet" href="css/layout.css" type="text/css">
</head>
<body>
    <script type="text/javascript" src="script/script.js"></script>
	<script type="text/javascript" src="script/CPF.js"></script>
	<script type="text/javascript" src="script/data.js"></script>
    <script type="text/javascript" src="script/enderenco.js"></script>
    <div class="content">
        <form method="GET" action="form_action.html">

            <table class="tableCSS">
                <tr>
                    <th colspan="2">CADASTRO</th>
					
                </tr><tr>
                    <td>Nome:</td>
                    <td><input type=text name="Nome" pattern="[A-Za-záàâãéèêíóôõúç\s]{8,50}" placeholder="Insira um nome válido" title="Nome com 8 a 50 letras" required>
                </tr><tr>
			    
				</tr><tr>
                    <td>CPF:</td>
                    <td><input type="text" name="cpf" id="cpf"
                    minlength="14" maxlength="14" placeholder="CPF com apenas números"
                      onkeyup="mask(this)" ></td> 
                </tr><tr>
                    <td>Data Nascimento:</td>
                    <td><input type=date id="Datanasc" pattern="[0-9]{2}/[0-9]{2}/[0-9]{2}" onblur="data_valida(date)" title="Data Nascimento" required></td>
                </tr><tr>
                
				<td>Email:</td>
                    <td><input type=text name="EMAIL" pattern="^[A-Za-z0-9_.-]+@([A-Za-z0-9_]+\.)+[A-Za-z]{2,4}$" placeholder="nome do email@email.com"  title="Telefone" required>
               
				</tr><tr>
					<td>Telefone:</td>
					<td><input type="phone" name="celular" id="celular" pattern="\(\d{2}\)\s\d{4,5}-\d{4}$"                    
                    onkeydown="return mascaraTelefone(event)" placeholder="(DD)9xxxx-xxxx" title="(xx) xxxxx-xxxx" required>
					</td>
				</tr><tr>
                    <td>Senha:</td>
                    <td><input type=password pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[@#$%&*]).{6,10}" name="Senha" placeholder="Crie uma senha"  title="Deve conter pelo menos um número e uma letra maiúscula e minúscula e pelo menos 6 ou mais caracteres." required>
                    </td>
                </tr><tr>
                    <td>CEP:</td>
                      <td><input name="cep" type="text" id="cep" value="" size="10" maxlength="9"
               onblur= "pesquisacep(this.value);" required></td>
               </tr><tr> 
                <td>RUA:</td>
                <td><input name="rua" type="text" id="rua" size="60" /></td>    
                </tr><tr>
                </tr><tr> 
                <td>Estado:</td>
                <td><input name="uf" type="text" id="uf" size="2" /></td>    
                </tr><tr>
                </tr><tr> 
                    <td>Cidade:</td>
                <td><input name="cidade" type="text" id="cidade" size="40" /></td>    
                </tr><tr>
                <th colspan="2">
                    <input type=submit>
                    <input type=reset value="Limpar Campos">
                </th>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>