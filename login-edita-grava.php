<?php

    require_once 'conexao.php';
    
    if(isset($_POST['id']))
    {
      $id = $_POST['id']; 
      $nome = $_POST['nome']; 
      $cep = $_POST['cep']; 
      $logradouro = $_POST['logradouro']; 
      $numero = $_POST['numero']; 
      $cidade = $_POST['cidade']; 
      $uf = $_POST['uf']; 
      $complemento = $_POST['complemento']; 
      $bairro = $_POST['bairro'];
      $email = $_POST['email']; 
      $senha = $_POST['senha'];  
      $cpf = $_POST['cpf']; 
      $telefone = $_POST['telefone']; 

        $sql = "UPDATE usuario SET nome='$nome', cep='$cep', logradouro='$logradouro', numero='$numero', cidade='$cidade', uf='$uf',complemento='$complemento',
        bairro='$bairro', email='$email', senha=md5('$senha') , cpf='$cpf', telefone='$telefone' WHERE id = '$id'"; 
        
        $resultado = mysqli_query($conn,$sql);

        if($resultado){
              header('Location:login-edita-cadastro.php');
          } else {
              echo "Erro na execução da consulta: " . mysqli_error($conn);
          }


    } else{ 
      echo "Erro na execução da consulta: " . mysqli_error($conn);
    }


?>

   
    