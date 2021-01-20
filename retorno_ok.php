<?php

$gravidade = $_POST ['gravidade'];
$retorno = $_POST ['retorno'];


$conexao = mysqli_connect ('localhost', 'root', '');


mysqli_select_db ($conexao, 'hospital');


$sql = "INSERT INTO retorno (gravidade,retorno) 
values('".$gravidade."','".$retorno."');";


$retorno = mysqli_query($conexao, $sql);


if ($retorno == true) 
{
echo 'Cadastrado com sucesso!';
} else{
echo 'Erro!';
}
?>