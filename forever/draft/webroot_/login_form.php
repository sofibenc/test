<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Connexion</title>
	
	<link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
    <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
</head>

<body class="container">

<div id="container">
    <h1>Connexion</h1>
	<form id="freelancers_connection" method="POST" action="signup.php" role="form">
		<div class="form-group">
			<label><b>Nom d'utilisateur :</b></label>
			<input type="text" name="user">
		</div>
		
		<div class="form-group">
			<label><b>Mot de passe :</b></label>
			<input type="password" name="password" id="input" />
			<br>
		</div>
		<button type="submit" class="btn btn-default">Envoyer</button>
	</form>
</body>
</html>
