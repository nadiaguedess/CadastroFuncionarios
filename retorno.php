	<html>
<head>
<!--correçao ortografica -->
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<!--conexão com outros arquivos -->
<link rel="stylesheet" href="css/style.css" type="text/css" />
<script>

</script>
<style>
#frmretorno{margin-top: 100px;}
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
		<div id= "frmretorno">
		
			<div id="formulario"
			<form action="retorno_ok.php" method="POST" enctype="multipart/form-data">
	
					<p>
						<label class="label">Gravidade:</label>
						<select name="gravidade" id="gravidade" class="caixa">
						<option value="A">Alta</option>
						<option value="M">Média</option>
						<option value="B">Baixa</option>
						</select>
					</p>
					
					<p>
					<label class="label">Retorno:</label>
					<textarea name="descricao" size="300"> </textarea>
				</p>
					
					<p>
						<input type="submit" name="cadastrar" value="Cadastrar" class="botao">
						<input type="reset" name="limpar" value="Limpar" class="botao">
					</p>
			</form>
			</div>
			
		</div>
		</center>
	</body>
</html>