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

<body id="page-top">

	<!-- Page Wrapper -->
	<div id="wrapper">

		<?php require_once('menus/menu_bar.php'); ?>

		<!-- Content Wrapper -->
		<div id="content-wrapper" class="d-flex flex-column">

			<!-- Main Content -->
			<div id="content">

				<!-- Topbar -->
				<?php require_once('menus/menu_top.php'); ?>
				<!-- End of Topbar -->

				<!-- Begin Page Content -->
				<?= $contents ?>
				<!-- /.container-fluid -->

			</div>
			<!-- End of Main Content -->

			<!-- Footer -->
			<footer class="sticky-footer bg-white">
				<div class="container my-auto">
					<div class="copyright text-center my-auto">
						<p>Desenvolvido por <a href="https://julio.lagesoliveira.com.br" target="_blank">Júlio Oliveira</a></p>
						<p>Disponível para download no Github <i class="fab fa-github"></i></p>
					</div>
				</div>
			</footer>
			<!-- End of Footer -->

		</div>
		<!-- End of Content Wrapper -->

	</div>
	<!-- End of Page Wrapper -->

	<!-- Scroll to Top Button-->
	<a class="scroll-to-top rounded" href="#page-top">
		<i class="fas fa-angle-up"></i>
	</a>

	<!-- Logout Modal-->
	<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Já vai embora?</h5>
					<button class="close" type="button" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">×</span>
					</button>
				</div>
				<div class="modal-body">Se realmente deseja ir embora, clique em sair para salvar seus dados antes.</div>
				<div class="modal-footer">
					<button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
					<a class="btn btn-primary" href="<?= base_url('/login/logout/'); ?>">Sim, quero sair</a>
				</div>
			</div>
		</div>
	</div>

	<script src="<?= base_url('assets/vendor/jquery/jquery.min.js'); ?>"></script>
	<script src="<?= base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
	<script src="<?= base_url('assets/vendor/sweetalert/sweetalert.min.js'); ?>"></script>

	<script src="<?= base_url('assets/vendor/jquery-easing/jquery.easing.min.js'); ?>"></script>
	<script src="<?= base_url('assets/vendor/moment.js'); ?>"></script>

	<?php if (isset($listagem)) : ?>
		<script src="<?= base_url('assets/vendor/datatables/jquery.dataTables.min.js'); ?>"></script>
		<script src="<?= base_url('assets/vendor/datatables/dataTables.bootstrap4.min.js'); ?>"></script>
		<script src="<?= base_url('assets/vendor/datatables/datetime-moment.js'); ?>"></script>
		<script src="<?= base_url('assets/js/datatables.js'); ?>"></script>
	<?php endif; ?>

	<script src="<?= base_url('assets/js/scripts.js'); ?>"></script>
	<script src="<?= base_url('assets/js/relogio.js'); ?>"></script>

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
