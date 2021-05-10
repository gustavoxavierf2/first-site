<!DOCTYPE html>
<html>
	<head>
		<title>FORMULARIO|teste</title>
		<link rel="stylesheet" type="text/css" href="css.css">
	</head>
	<body>
		<div class="bloco">
			<?php
				$nome = $_POST["nome"];
				$email = $_POST["email"];
				$senha = $_POST['senha'];
				$checkbox1 = ( isset($_POST['checkbox1']) )  ? "SIM" : "NAO";
				$checkbox = ( isset($_POST['checkbox']) ) ? "SIM" : "NAO";
				$amigo = $_POST['amigo'];
				$texto1 =  $_POST['texto1'];
				
				if ($nome == "" || $email == "" || $amigo == "") {
				   
				   	header("location:index.php?erro=*PREENCHA OS CAMPOS OBRIGATORIOS CORRETAMENTE");
					die();
				 } 
					print "<h3><center><em> OK! DADOS ENVIADOS COM SUCESSO.</center></em></h3>";
					print "<hr>";
					print "NOME: ".$nome."<br><br>";
					print "EMAIL: ".$email."<br><br>";
					print "SENHA: $senha <br><br>";
					print "RECEBER INFORMAÇOES DIARIAS: $checkbox1 <br><br>";
					print "RECEBER INFORMAÇOES SEMANAIS:"."$checkbox <br><br>";
					print "INDICARIA PARA UM AMIGO:"."$amigo <br><br>";
					
					print "TEXTO DIGITADO: <hr>"."<center>$texto1</center>";
					
			?>
		</div>
		<?php
		print "<center>";
			var_dump($_POST);
			print "<hr>";
			var_dump($_FILES);
			print "</center>";
		?>
	</body>
</html>

