<?php $usuario = dados_usuario_logado() ?>

<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion toggled" id="accordionSidebar">

  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url(); ?>">
    <div class="sidebar-brand-icon rotate-n-15">
      <i class="fas fa-laugh-wink"></i>
    </div>
    <div class="sidebar-brand-text mx-3">Controle de Ponto<sup>1.0</sup></div>
  </a>

  <!-- Divider -->
  <hr class="sidebar-divider my-0">

  <!-- Nav Item - Dashboard -->
  <li class="nav-item active">
    <a class="nav-link" href="<?= base_url(); ?>">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Painel Administrativo</span></a>
  </li>

  <!-- Divider -->
  <hr class="sidebar-divider">

  <!-- Heading -->
  <div class="sidebar-heading">
    ACESSO RÁPIDO
  </div>

  <li class="nav-item">
    <a class="nav-link" href="<?= base_url('registros'); ?>">
      <i class="fas fa-fw fa-list"></i>
      <span>Resumo</span></a>
  </li>

  <li class="nav-item">
    <a class="nav-link" href="<?= base_url('registros/adicionar'); ?>">
      <i class="fas fa-fw fa-plus"></i>
      <span>Registrar Entrada/Saída</span></a>
  </li>

  <li class="nav-item">
    <a class="nav-link" href="<?= base_url('registros/historico'); ?>">
      <i class="fas fa-history"></i>
      <span>Meu Histórico</span></a>
  </li>

  <hr class="sidebar-divider">

  <?php if (isset($usuario->nivel_acesso) && ($usuario->nivel_acesso == 1)) : ?>
    <li class="nav-item">
      <a class="nav-link" href="<?= base_url('registros/usuarios'); ?>">
        <i class="fas fa-history"></i>
        <span>Histórico de Usuários</span></a>
    </li>
    <hr class="sidebar-divider">

  <?php endif; ?>

  <div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
  </div>

</ul>
