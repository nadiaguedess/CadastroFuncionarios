<?php

$rua = $_POST ['rua'];
$numero = $_POST ['numero'];
$bairro = $_POST ['bairro'];
$cidade = $_POST ['cidade'];


$conexao = mysqli_connect ('localhost', 'root', '');


mysqli_select_db ($conexao, 'hospital');


$sql = "INSERT INTO endereco (rua,numero,bairro,cidade) 
values('".$rua."','".$numero."','".$bairro."','".$cidade."');";


$retorno = mysqli_query($conexao, $sql);


if ($retorno == true) 
{
echo 'Cadastrado com sucesso!';
} else{
echo 'Erro!';
}
?>