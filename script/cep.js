async function buscaEndereco(cep){

      var mensagemErro = document.getElementById('erroCEP');
      //mensagemErro.innerHTML = "";
      try{
          var consultaCEP = await fetch(`https://viacep.com.br/ws/${cep}/json/`);
      var consultaCEPConvertida = await consultaCEP.json()
      if (consultaCEPConvertida.erro){
          throw Error('CEP não existente!')
      }
      var localidade = document.getElementById('cidade');
      var logradouro = document.getElementById('logradouro');
      var uf = document.getElementById('uf');
      var bairro = document.getElementById('bairro');
  
      localidade.value = consultaCEPConvertida.localidade
      logradouro.value = consultaCEPConvertida.logradouro
      uf.value = consultaCEPConvertida.uf
      bairro.value = consultaCEPConvertida.bairro
  
      console.log(consultaCEPConvertida);
      return consultaCEPConvertida;
      } catch (erro){
          console.log(cep.value)
          if(cep.value === ""){
              alert("Preencha o campo CEP")
          }else {
              console.log(erro)
              alert("CEP inválido. Tente novamente!")
          }
      }
  }
  
  var cep = document.getElementById('cep');
  
  cep.addEventListener("focusout", () => buscaEndereco(cep.value));
  
  //let ceps = ['01001000', '01001001']
  //let conjuntoCeps = ceps.map(valores => buscaEndereco(valores));
  
  //Promise.all(conjuntoCeps).then(respostas => console.log(respostas))
  
  
  
  