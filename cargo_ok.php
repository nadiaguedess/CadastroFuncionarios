<?php

$cargo = $_POST ['cargo'];


$conexao = mysqli_connect ('localhost', 'root', '');


mysqli_select_db ($conexao, 'hospital');


$sql = "INSERT INTO cargo (cargo) 
values('".$cargo."');";


$retorno = mysqli_query($conexao, $sql);


if ($retorno == true) 
{
echo 'Cadastrado com sucesso!';
} else{
echo 'Erro!';
}
?>