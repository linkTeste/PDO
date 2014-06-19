<?php

include './alunoBanco.php';  
include './aluno.php';
    
$objetoAluno = new Aluno();
$objetoAluno->nome = $_POST ['nome'];
$objetoAluno->matricula = $_POST ['matricula'];

$teste =  new AlunoBanco();

if($teste->insert($objetoAluno)){
    echo "Cadastro Efetuado com Sucesso";
     
  }else{
     
      echo " Erro no Cadastro"; 
  }
 
    
