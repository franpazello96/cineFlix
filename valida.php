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


pattern="[A-Za-záàâãéèêíóôõúç\s]{8,50}" placeholder="Insira um nome válido"


onkeyup="mask(this)" 

onchange="validardataDeNascimento(this.value);" pattern="([0-9]{2})/([0-9]{2})/([0-9]{4})" id="dataDeNascimento" type="date" placeholder="Insira uma data válida" 

name="Email" pattern="^[A-Za-z0-9_.-]+@([A-Za-z0-9_]+\.)+[A-Za-z]{2,4}$"


name="Celular" id="celular" pattern="\(\d{2}\)\s\d{4,5}-\d{4}$" 


maxlength="9"
               onblur= "pesquisacep(this.value);"placeholder="Insira um CEP válido"