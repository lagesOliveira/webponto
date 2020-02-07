<?php $usuario = dados_usuario_logado(); ?>
<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
  <!-- Sidebar Toggle (Topbar) -->
  <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
    <i class="fa fa-bars"></i>
  </button>
  <!-- Topbar Navbar -->
  <ul class="navbar-nav ml-auto">
		<div class="topbar-divider d-none d-sm-block"></div>
		
    <!-- Nav Item - User Information -->
    <li class="nav-item no-arrow">
			<strong><?= $usuario->nome ?></strong>
      <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
        Sair
      </a>
    </li>
  </ul>

</nav>
