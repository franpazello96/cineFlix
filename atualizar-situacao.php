<script>
      
  function alterarSituacao(novaSituacao) {
  var id = <?php echo $row['id']; ?>; // ID do registro no banco de dados
  var url = 'atualizar-situacao.php'; // URL do script PHP para atualizar a situação no banco de dados

  // Cria uma solicitação AJAX
  var xhr = new XMLHttpRequest();
  xhr.open('POST', url, true);
  xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

  // Define a função de retorno de chamada para manipular a resposta da solicitação AJAX
  xhr.onreadystatechange = function () {
    if (xhr.readyState === 4 && xhr.status === 200) {
      // Verifica se a atualização foi bem-sucedida e realiza ações adicionais, se necessário
      console.log('Situação atualizada com sucesso!');
      // Você pode adicionar mais ações aqui, como exibir uma mensagem de sucesso ao usuário
    }
  };

  // Envia a solicitação AJAX com os dados do formulário
  xhr.send('id=' + id + '&situacaoSetor=' + novaSituacao);
}
</script>