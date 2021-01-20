<?php

$nome = $_POST ['nome'];
$cpf = $_POST ['cpf'];
$telefone = $_POST ['telefone'];


$conexao = mysqli_connect ('localhost', 'root', '');


mysqli_select_db ($conexao, 'hospital');


$sql = "INSERT INTO paciente (nome,cpf,telefone) 
values('".$nome."','".$cpf."','".$telefone."');";


$retorno = mysqli_query($conexao, $sql);


if ($retorno == true) 
{
echo 'Cadastrado com sucesso!';
} else{
echo 'Erro!';
}
?>