<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Login</title>

	<link rel="apple-touch-icon" sizes="57x57" href="<?= base_url() ?>icone/apple-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="<?= base_url() ?>icone/apple-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="<?= base_url() ?>icone/apple-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="<?= base_url() ?>icone/apple-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="<?= base_url() ?>icone/apple-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="<?= base_url() ?>icone/apple-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="<?= base_url() ?>icone/apple-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="<?= base_url() ?>icone/apple-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="<?= base_url() ?>icone/apple-icon-180x180.png">
  <link rel="icon" type="image/png" sizes="192x192"  href="<?= base_url() ?>icone/android-icon-192x192.png">
  <link rel="icon" type="image/png" sizes="32x32" href="<?= base_url() ?>icone/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="96x96" href="<?= base_url() ?>icone/favicon-96x96.png">
  <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url() ?>icone/favicon-16x16.png">
  <link rel="manifest" href="<?= base_url() ?>icone/manifest.json">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
  <meta name="theme-color" content="#417C38">
	
    <link href="<?= base_url() ?>assets/css/estilo.css" rel="stylesheet">
	<link href="<?= base_url() ?>assets/css/bootstrap-reboot.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/css/bootstrap.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/css/bootstrap-grid.min.css" rel="stylesheet">
</head>
<body>

	<div class="container-fluid">
		<div class="row d-flex mt-5 p-5">
			<div class="col-sm-4"></div>
			<div class="col-sm-4 login">
				<img src="<?= base_url() ?>assets/src/images/logo.svg" class="img-fluid">
				<form method="POST" action="Login/logar">
  					<div class="form-group">
    					<label for="txtemail">Usuario:</label>
    					<input type="email" class="form-control" id="txtemail" name="txtemail" aria-describedby="emailHelp" placeholder="Seu email" required>
  					</div>
  					<div class="form-group">
    					<label for="txtsenha">Senha:</label>
    					<input type="password" class="form-control" id="txtsenha" name="txtsenha" placeholder="Senha" required>
  					</div>
  					<button type="submit" name="logar" id="logar" class="btn btn-dark">Entrar</button>
  					<a href="<?php echo base_url()?>Principal"  target="_blank">Ir para a pagina principal</a>
				</form>
			</div>
			<div class="col-sm-4"></div>
		</div>
	</div>

	<script src="<?= base_url() ?>assets/js/jquery-3.4.1.js"></script>
    <script src="<?= base_url() ?>assets/js/bootstrap.min.js"></script>

</body>
</html>