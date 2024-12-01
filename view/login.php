<!DOCTYPE html>
<html>
<head>
	<title>Página Login</title>
	<link rel="stylesheet" href="../styles/log.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.14.5/dist/sweetalert2.min.css">
</head>
<body>
	<img class="wave" src="../components/images/onda.png" alt="">
	<div class="container">
		<div class="img"></div>
		<div class="login-content">
			<form action="../control/loginControl.php" method="post">
				<img src="../components/images/user.png" alt="User Icon">
				<h2 class="title">Bem-vindo!</h2>
				<div class="input-div one">
					<div class="i">
						<i class="fas fa-user"></i>
					</div>
					<div class="div">
						<input type="email" name="email" class="input" placeholder=" " required>
						<h5>E-mail</h5>
					</div>
				</div>
				<div class="input-div pass">
					<div class="i">
						<i class="fas fa-lock"></i>
					</div>
					<div class="div">
						<input type="password" name="senha" class="input" placeholder=" " required>
						<h5>Senha</h5>
					</div>
				</div>
				<a href="#">Esqueceu sua senha?</a>
				<a href="../view/cadastrouser.php">Não possui conta?</a>
				<input type="submit" class="btn" value="Login">
			</form>
		</div>
	</div>

	<!-- SweetAlert2 JS -->
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.14.5/dist/sweetalert2.all.min.js"></script>

	<script>
		// Captura o valor do parâmetro `status` na URL
		const urlParams = new URLSearchParams(window.location.search);
		const status = urlParams.get('status');

		// Exibe alerta SweetAlert com base no status do login
		if (status === 'sucesso') {
			Swal.fire({
				position: 'center',
				icon: 'success',
				title: 'Cadastro realizado com sucesso!',
				showConfirmButton: false,
				timer: 1500
			});
		} else if (status === 'erro') {
			Swal.fire({
				position: 'center',
				icon: 'error',
				title: 'Erro ao tentar login!',
				text: 'Verifique suas credenciais e tente novamente.',
				showConfirmButton: true
			});
		}
	</script>
</body>
</html>
