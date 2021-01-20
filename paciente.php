	<html>
<head>
<!--correçao ortografica -->
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<!--conexão com outros arquivos -->
<link rel="stylesheet" href="css/style.css" type="text/css" />
<script>

</script>
<style>
#frmpaciente{margin-top: 100px;}
#formulario{margin-top: 10px;}

</style>
</head>
	<body>
		
	<center>
	<div id = "menu" >
	<center><font class="texto">H.E.R.S</font></center>
	<label class="link">Logar <label>| Cadastrar</label></label>
	
		<center>
		<hr></hr>
		<ul>
			
			<li><a href ="index.html">Início</a></li>
			
		</ul>
		
		<ul>
			<li><a href ="emergencia.php">Emergêcia</a></li>
		</ul>
		
		<ul>
			<li><a href="hospitais.php">Hospitais</a>
				<ul>
					<li><a href="medicos.php">Médicos</a></li>
					<li><a href="usuario.php">Usuários</a></li>
					<li><a href="funcionarios.php">Funcionários</a></li>
				</ul>
			</li>
			<div class="clear"></div>
		</ul>

		</center>		
	</div>
	</center>
		<center>
		<div id= "frmpaciente">
		
			<div id="formulario"
			<form action="paciente_ok.php" method="POST">
			
							<label class="label">Nome:</label>

							<input type="text" name="nome" id="nome" class="caixa"><br><br>
							
							<label class="label">CPF:</label>

							<input type="text" name="cpf" id="cpf" class="caixa"><br><br>

							<label class="label">Telefone:</label>

							<input type="text" name="telefone" id="telefone" class="caixa"><br><br>
							
							
					<input type="submit" name="cadastrar" value="Cadastrar" class= "botao">
					<input type="reset" name="limpar" value="Limpar" class= "botao">
				</p>
			</form>
			</div>
			
		</div>
		</center>
	</body>
</html>


