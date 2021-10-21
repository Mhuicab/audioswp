<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!--link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">-->
	<link href="<?= base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet" />
	<link href="<?= base_url('assets/css/Style.css'); ?>" rel="stylesheet" />
	<title>Login</title>
</head>

<body>
	<div class="container-xl login" id="ContenLogin">
		<div class="row justify-content-lg-center">
			<div class="col-lg-6 col-xs-6">
				<fieldset class="col-xs-6 col-xs-offset-1">
					<legend class="hidden-xs">
						<h3>Inicio de sesi&oacute;n</h3>
					</legend>
					<div class="form-horizontal">
						<div class="form-group">
							<label class="col-xs-12" for="Usuario">
								<h4>Usuario</h4>
							</label>
							<div class="col-xs-10 col-xs-offset-1">
								<input type="text" placeholder="Usuario" id="Usuario" class="form-control Input">
							</div>
						</div>
						<div class="form-group">
							<label class="col-xs-12" for="Password">
								<h4>Contraseña</h4>
							</label>
							<div class="col-xs-10 col-xs-offset-1">
								<input type="text" placeholder="Contraseña" id="Password" class="form-control Input">
							</div>
						</div>
						<div class="form-group">
							<button type="button" id="enviar" class="btn btn-primary">Enviar</button>
						</div>
					</div>
				</fieldset>
			</div>
		</div>
	</div>
	</div>
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
	<script src="<?= base_url('assets/js/bootstrap.min.js'); ?>"></script>
	<!--<script src="<?= base_url('assets/js/jquery.js'); ?>"></script>-->
</body>

</html>