<!DOCTYPE html>
<html>
<head>
	<title>Página Login</title>
	<link rel="stylesheet" type="text/css" href="../styles/log.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<img class="wave" src="../components/images/onda.png" alt="">
	<div class="container">
		<div class="img">
			
		</div>
		
		<div class="login-content" >
			<form action="../control/loginControl.php" method="post">
				<img src="../components/images/user.png">
				<h2 class="title">Bem-vindo!</h2>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>E-mail</h5>
           		   		<input type="email" name="email" class="input">
           		   </div>
           		</div>
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>Senha</h5>
           		    	<input type="password" name="senha" class="input">
            	   </div>
            	</div>
            	<a href="#">Esqueceu sua senha?</a>
				<a href="../view/cadastrouser.php">não possui conta?</a>
            	<input type="submit" class="btn" value="Login">
            </form>
        </div>
    </div>
    <script type="text/javascript" src="../js/main.js"></script>
</body>
</html>