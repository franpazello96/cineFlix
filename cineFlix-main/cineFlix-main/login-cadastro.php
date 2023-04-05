<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Cadastrando usuário novo</title>
    <link rel="stylesheet" href="css/layout.css" type="text/css">
</head>
<body>
    <script>
        function validardataDeNascimento(data){
            dataAtual= new Date();

            data=new Date(data);
            	if(data<=1900){
                window.alert("Data inválida!");
                return false; 
            } 
            
            if (data<dataAtual){
                console.log("Data Válida");
                return true;
            } else {
                window.alert("Data inválida!");

                return false;
            }
        }
    </script>   
    <style>
        body {
            background-color: #d4390ad5;
        }
    </style>       
    <script type="text/javascript" src="script/script.js"></script>
	<script type="text/javascript" src="script/CPF.js"></script>
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
                    <td><input type="text" name="CPF" id="cpf" title="Deve contar 8 dígitos númericos sem o uso de caracteres especiais"
                    minlength="14" maxlength="14" placeholder="Insira um CEP válido" 
                      onkeyup="mask(this)" ></td> 
                </tr><tr>
                    <td>Data Nascimento:</td>
                    <td> <input name="Data de nascimento" onchange="validardataDeNascimento(this.value);" pattern="([0-9]{2})/([0-9]{2})/([0-9]{4})" id="dataDeNascimento" type="date" placeholder="Insira uma data válida" title="Deve seguir o formato seguinte data/mes/ano" required>
                </tr><tr>
                
				<td>Email:</td>
                    <td><input type=text name="Email" pattern="^[A-Za-z0-9_.-]+@([A-Za-z0-9_]+\.)+[A-Za-z]{2,4}$" placeholder="Insira um email válido"  title="Deve coonter o nome do email seguido com o @.Ex:nomeemail@email.com" required>
               
				</tr><tr>
					<td>Telefone:</td>
					<td><input type="phone" name="Celular" id="celular" pattern="\(\d{2}\)\s\d{4,5}-\d{4}$"                    
                    onkeydown="return mascaraTelefone(event)"  placeholder="Insira um telefone válido" title=" Deve conter 11 digitos sem caracteres especiais,os dois primeiros dígitos são o DD e o primeiro dígito do telefone é sempre 9. ex:(xx) xxxxx-xxxx" required>
					</td>
				</tr><tr>
                    <td>Senha:</td>
                    <td><input type=password pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[@#$%&*]).{6,10}" name="Senha" placeholder="Insira uma senha válida"  title="Deve conter pelo menos um número e uma letra maiúscula e minúscula e pelo menos 6 ou mais caracteres." required>
                    </td>
                </tr><tr>
                    <td>CEP:</td>
                      <td><input name="CEP" type="text" id="cep" value="" size="10" maxlength="9"
               onblur= "pesquisacep(this.value);"placeholder="Insira um CEP válido" title="Deve conter nove dígitos 8 númericos.O uso de hifen é opcional.Ex de CEP válido:xxxxx-xxx ou xxxxxxxx" required></td>
               </tr><tr> 
                <td>RUA:</td>
                <td><input name="Rua" type="text" id="rua" size="60" /></td>    
                </tr><tr>
                </tr><tr> 
                <td>Estado:</td>
                <td><input name="Uf" type="text" id="uf" size="2" /></td>    
                </tr><tr>
                </tr><tr> 
                    <td>Cidade:</td>
                <td><input name="Cidade" type="text" id="cidade" size="40" /></td>    
                </tr><tr>
                <th colspan="2">
                    <input type="submit">
                    <input type="reset" value="Limpar Campos">
                </th>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>
