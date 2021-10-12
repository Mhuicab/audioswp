<!DOCTYPE html>
<html lang="en">
	<head>
		<link href="<?= base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
		<script src="<?= base_url(); ?>assets/js/bootstrap.min.js"></script>
		<script src="<?= base_url(); ?>assets/js/jquery.js"></script>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Login</title>
	</head>
	<body>
		<div class="container login">
			<div class="row">
				<div class="separador">
				</div>
				<div class="row">
					<fieldset class="col-xs-10 col-xs-offset-1">
						<legend class="hidden-xs"> <h3>Inicio de sesi&oacute;n</h3></legend>
						<div class="form-horizontal">
							<div class="form-group">
								<label class="col-xs-12" for="Usuario"><h4>Usuario</h4></label>
								<div class="col-xs-10 col-xs-offset-1">
									<input type="text" placeholder="Usuario" id="Usuario" class="form-control Input">
								</div>
							</div>
							<div class="form-group">
								<label class="col-xs-12" for="Password"><h4>Contraseña</h4></label>
								<div class="col-xs-10 col-xs-offset-1">
									<input type="text" placeholder="Contraseña" id="Password" class="form-control Input">
								</div>
							</div>
							<div class="form-group">
								<button type="button" id="enviar" class="btn btn-button center-block">Enviar</button>
							</div>
						</div>
					</fieldset>
				</div>
			</div>
		</div>
	</body>
</html>