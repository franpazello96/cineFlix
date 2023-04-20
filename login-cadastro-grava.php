<?php

require_once 'conexao.php';

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
$dataNascimento = $_POST['dataNascimento']; 

$sql = "INSERT INTO usuario (nome, cep, logradouro, numero, cidade, uf, complemento, bairro, email, senha, cpf, dataNascimento) 
VALUES ('$nome','$cep', '$logradouro', '$numero', '$cidade', '$uf', '$complemento', '$bairro', '$email', '$senha', '$cpf', '$dataNascimento')";

$resultado = mysqli_query($conn,$sql);

if($resultado){
      header('Location:index.php');
  } else {
      echo "Erro na execução da consulta: " . mysqli_error($conn);
  }

?>