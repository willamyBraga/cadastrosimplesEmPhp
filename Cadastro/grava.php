<?php

require_once('conexao.php');

if(isset($_POST['enviar'])){
$nome = $_POST['nome'];
$fornecdor = $_POST['Forne'];
$qtd = $_POST['qtd'];

   try{
       $grava = $conn->prepare("INSERT INTO produtos(nome, fornecedor, qtd) VALUES ('$nome', '$fornecdor', '$qtd')");
       $grava->bindParam(1, $nome , PDO::PARAM_STR);
       $grava->bindParam(2, $fornecdor , PDO::PARAM_STR);
       $grava->bindParam(3, $qtd , PDO::PARAM_STR);
       $grava->execute();
 
       if($grava){
           echo ("<SCRIPT LANGUAGE='JavaScript'>
           window.alert('Produto Inserido com sucesso')
           window.location.href='index.php';
           </SCRIPT>");
       }
       else{
           echo 'Erro ao inserir os dados';
       }
   }
   catch(PDOException $e){
      echo $e->getMessage();
   }
}