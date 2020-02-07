<div class="card o-hidden border-0 shadow-lg my-5">
	<div class="card-body p-0">
		<!-- Nested Row within Card Body -->
		<div class="row">
			<div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
			<div class="col-lg-7">
				<div class="p-5">
					<div class="text-center">
						<h1 class="h4 text-gray-900 mb-4">Cadastro de Usuário!</h1>
						<p>Olá estagiário, realize seu cadastro abaixo para registrar seus dados de Entrada e Saida em nossa empresa.</p>
					</div>
					<form class="user" method="POST" action="<?= base_url('login/registro') ?>">
						<div class="form-group">
							<input name="nomeCompleto" required type="text" class="form-control form-control-user" id="exampleFirstName" placeholder="Nome completo">
						</div>
						<div class="form-group">
							<input name="email" required type="email" class="form-control form-control-user" id="exampleInputEmail" placeholder="Email">
						</div>
						<div class="form-group row">
							<div class="col-sm-6 mb-3 mb-sm-0">
								<input name="senha" required type="password" class="form-control form-control-user" id="senhaCadastro" placeholder="Senha">
							</div>
							<div class="col-sm-6">
								<p>Lembre-se de utilizar uma senha forte!</p>
							</div>
						</div>
						<button type="submit" id="realizarCadastro" class="btn btn-primary btn-user btn-block">
							Cadastrar
						</button>
					</form>
					<hr>
					<div class="text-center">
						<a class="small" href="<?= base_url() ?> ">Fazer Login!</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
