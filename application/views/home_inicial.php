<!DOCTYPE html>
<html lang="ptbr">

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Controle de ponto.">
	<meta name="author" content="Júlio Oliveira">

	<title>Controle de Entrada e Saída</title>

	<!-- Custom fonts for this template-->
	<link href="<?= base_url('assets/vendor/fontawesome-free/css/all.min.css'); ?>" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

	<!-- Custom styles for this template-->
	<link href="<?= base_url('assets/css/styles.css'); ?>" rel="stylesheet">
	<link href="<?= base_url('assets/vendor/sweetalert/sweetalert.css'); ?>" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

	<div class="container">

		<!-- Outer Row -->
		<?= $contents ?>

	</div>

	<!-- Bootstrap core JavaScript-->
	<script src="<?= base_url('assets/vendor/jquery/jquery.min.js'); ?>"></script>
	<script src="<?= base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
	<script src="<?= base_url('assets/vendor/sweetalert/sweetalert.min.js'); ?>"></script>

	<!-- Custom scripts for all pages-->
	<script src="<?= base_url('assets/js/scripts.js'); ?>"></script>

	<?php
	$error = $this->session->flashdata('mensagem');
	if ($error) : ?>
		<script>
			swal(
				'<?= $error['titulo'] ?>',
				'<?= $error['mensagem'] ?>',
				'<?= $error['tipo'] ?>',
			);
		</script>
	<?php endif; ?>

</body>

</html>
