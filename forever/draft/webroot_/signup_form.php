<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>New account</title>
	
	<link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="validetta/validetta.min.css">
	
    <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="js/jquery-passy.js"></script>
	<script type="text/javascript" src="validetta/validetta.js"></script>
	<script type="text/javascript" src="validetta/localization/validettaLang-fr-FR.js"></script>
</head>

<body class="container">

<div class="container">
    <h2>Créer un nouveau compte</h2>
	<form id="freelancers_signup" method="POST" action="signup.php" role="form">
		<div class="form-group">
			<label><b>Nom :</b></label>
			<input type="text" class="form-control" name="lastname" data-validetta="required,minLength[1],maxLength[255]" placeholder="Mandatory field">
		</div>
		<div class="form-group">
			<label><b>Pr&eacutenom :</b></label>
			<input type="text" class="form-control" name="firstname" data-validetta="required,minLength[1],maxLength[255]" placeholder="Mandatory field">
		</div>
		<div class="form-group">
			<label><b>Nom d'utilisateur :</b></label>
			<input type="text" name="login" class="form-control" data-validetta="required,minLength[1],maxLength[255]" placeholder="Mandatory field">
		</div>
		 <div class="form-group">
			<label><b>Mot de passe :</b></label>
			<input type="password" name="password" id="input" data-validetta="required" placeholder="Tapez votre mot de passe" />
			<!-- <a href="javascript:void(0);" id="generate">g&eacuten&eacuterer</a> -->
		</div> 
		<div id="robustesse">
			<div id="left_zone">Robustesse : </div>
			<div id="right_zone"><span id="output">...</span></div><br>
		</div>
		<div class="form-group">
			<label><b>Email :</b></label>
			<input type="text" class="form-control" name="email" data-validetta="required,email">
		</div>
		<button type="submit" class="btn btn-default">Envoyer</button>
	</form>
</div>
<script type="text/javascript">
    var $input = $('#input');
    var $output = $('#output');

    $.passy.requirements.length.min = 4;

    var feedback = [
        { color: '#c00', text: 'Pauvre' },
        { color: '#c80', text: 'Correcte' },
        { color: '#0c0', text: 'Bonne' },
        { color: '#0c0', text: 'Excellente!' }
   ];

    $input.passy(function(strength, valid) {
        $output.text(feedback[strength].text);
        $output.css('background-color', feedback[strength].color);

        if(valid) $input.css('border-color', 'green');
        else $input.css('border-color', 'red');
    });

    $('#generate').click(function() {
        $input.passy('generate', 8);
    });
</script>

<script>
			(function($){
				$('#freelancers_signup').validetta({
					custom : {
						regname : {
							pattern : /^hello$/i,
							errorMessage : 'Custom Reg Error Message !'
						},
						// you can add more
						example : {
							pattern : /^[\+][0-9]+?$|^[0-9]+?$/,
							errorMessage : 'Lan mal !'
						}
					},
					realTime : true
				});
			})(jQuery);
</script>

</body>
</html>
