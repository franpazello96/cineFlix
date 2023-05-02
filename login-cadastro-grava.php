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

$sql = "INSERT INTO usuario (nome, cep, logradouro, numero, cidade, uf, complemento, bairro, email, senha, cpf, nivel) 
VALUES ('$nome','$cep', '$logradouro', '$numero', '$cidade', '$uf', '$complemento', '$bairro', '$email', '$senha', '$cpf', 'cliente')";

$resultado = mysqli_query($conn,$sql);

if($resultado){
      header('Location:login.php');
  } else {
      echo "Erro na execução da consulta: " . mysqli_error($conn);
  }

?>