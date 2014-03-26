<!DOCTYPE HTML><!-- DECLARAÇÃO DO HTML 5 -->
<html lang="pt-br">
	<head>
		<meta charset="UTF-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<!-- CSS -->
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-responsive.css"/>
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css"/>
		<!-- FIM DO CSS -->

		<!--JAVASCRIPT -->
		<script type="text/javascript" src="jquery/jquery-1.11.0.js"></script>
		<script type="text/javascript" src="scripts/login.js"></script>
		<!-- FIM DO JAVASCRIPT -->
		<title>Tela de Login 4SM</title>
	</head>
	<body>
		<form class="form-horizontal" method="post" action="src/efetuarLogin.php">
			<div class="control-group">
				<label class="control-label" for="inputUsuario">Usuário</label>
				<div class="controls">
                                    <input type="text" id="inputUsuario" placeholder="Usuário" autofocus="true" name="user"/>
				</div>
			</div>

			<div class="control-group">
				<label class="control-label" for="inputSenha">Senha</label>
				<div class="controls">
                                    <input type="password" id="inputSenha" placeholder="Senha" name="senha"/>
				</div>
			</div>

			<div class="control-group">
				<div class="controls">
					<input type="submit" id="entrar" class="btn-info" name="entrar" value="Entrar"/>
					<input type="reset" id="cancelar" class="btn-info" name="cancelar" value="Cancelar"/>
				</div>
			</div>
		</form>
	</body>
</html>