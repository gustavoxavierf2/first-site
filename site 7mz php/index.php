<!DOCTYPE html>
<html>
	<head >
		<title>formulario1</title>
		<link rel="stylesheet" type="text/css" href="estilo2.css">
		
	</head>
	<body>
		<center>
			<h1><em>FORMULARIO 7MZ</em></h1>
			<p>** digite seu nome e seu email para receber mais informaçoes sobre o 7 minutoz</p>
			<h3 style="color: red;"><?php
				if (empty($_GET['erro'])) {
				}
				else {
					print $_GET['erro'];
				}
				?>		
			</h3>
		</center>
			<div>
				<form action="POST.php" enctype="multipart/form-data" method="POST">
					<input type="text" name="nome" placeholder="   * NOME ..."><hr>
					<input type="email" name="email" placeholder="   * EMAIL ..."><hr>
					<input type="password" name="senha" placeholder="   SENHA FICTICIA ..."><br>
					<label > deseja receber noticias</label><br>
					<div class="box">
						<input type="checkbox" name="checkbox1" ><b>diarias</b>
						<input type="checkbox" name="checkbox" ><b>semanais</b><br>
					</div>
						<label name="amigo" id="amigo">* indicaria o site para um amigo?</label><br>
						<div class="radio">
							<input type="radio" name="amigo" value="SIM"><em>SIM</em>
							<input type="radio" name="amigo" value="NAO"><em>NÃO</em><br><br>
							
						</div>
						<center>
							<b><label style="margin:0px 200px; color: black;text-decoration: underline;">insira sua foto</label></b><br>
						</center>
						<input type="file" name="foto"><br><br>
						<textarea name="texto1" placeholder="DIGITE EM TOPICOS TEMAS ESPECIFICOS QUE QUEIRA RECEBER ..." maxlength="28"></textarea><br><br>
					<input type="submit" value="CADASTRAR"><br><br>
					<input type="reset" value="LIMPAR"><br><br>
				</form>
			</div>		
	</body>
</html>