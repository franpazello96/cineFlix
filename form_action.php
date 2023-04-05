<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="css/layout.css" type="text/css">
    
    

    
</head>

<body>
    <script type="text/javascript" src="script/script.js"></script>
    <script type="text/javascript" src="script/enderenco.js"></script>
    <script type="text/javascript" src="script/CPF.js"></script>
   <style>
    body {
        background-color: #d4390ad5;
      }
    </style>
    <div class="content">

         <h3 id="corners">RECEBIMENTO DADOS DE FORMULÁRIOS</h3>

        <table class="tableCSS">
            <tr><th>Chave</th><th>Valor</th></tr>
            <script language=javascript>
                var params = new Array();
                params = getParameters();
                for (let [key, value] of Object.entries(params)) {
                    document.write("<tr><td style='text-align: center;'><b>" + key + "</b></td><td>" + value + "</td></tr>");
                }
            </script>
                        
    </div>
</body>

</html>
