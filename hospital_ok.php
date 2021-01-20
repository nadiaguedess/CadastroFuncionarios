<?php
//1) Recebendo os dados da tela HTML
$nome= $_POST['nome'];
$cnpj= $_POST['cnpj'];
$telefone= $_POST['telefone'];

//2) Conectar no MYSQL
$conexao = mysqli_connect('localhost','root','');

//3)Selecionar o bando de dados: aula
mysqli_select_db($conexao,'hospital');

//4) Montagem do SQL Insert na tabela de clienye
$sql = "INSERT INTO hospital (nome,cnpj,telefone) values('".$nome."','".$cnpj."','".$telefone."');";

//5) Exec o SQL Insert
$retorno = mysqli_query($conexao, $sql);

//6) Msg para o usuário
if($retorno == true)
{
echo 'Cadastrado com sucesso!';
}else{
echo 'Erro!';
}
?>