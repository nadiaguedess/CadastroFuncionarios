<html>
	<head>
		<!--correçao ortografica -->
		<meta http-equiv="content-type" content="text/html;charset=utf-8" />
		<!--conexão com outros arquivos -->
		<link rel="stylesheet" href="css/style.css" type="text/css" />
		<script>
		
		</script>
		<style>
		
		#frmhospital{margin-top: 100px;}
		
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
			<center>
			<li><a href ="index.html">Início</a></li>
			</center>
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
		<div id="frmhospital">
		<form action="hospital_ok.php" method="POST">
		 
			<label class="label">Nome:</label>

			<input type="text" name="nome" id="nome" class="caixa"><br><br>
			
			<label class="label">CNPJ:</label>

			<input type="text" name="cnpj" id="cnpj" class="caixa"><br><br>

			<label class="label">Telefone Fixo:</label>

			<input type="text" name="telefone_f" id="telefone_f" class="caixa"><br><br>
			
			<label class="label">Telefone Celular:</label>

			<input type="text" name="telefone_c" id="telefone_c" class="caixa"><br><br>
			
			<input type="submit" value="Cadastrar" class="botao">
			<input type="reset" value="Limpar" class="botao">
							
		</form>
		</div>
	</body>
</html>