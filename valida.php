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


