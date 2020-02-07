<div class="container-fluid">
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary text-uppercase">HISTÓRICO DE ATIVIDADES DO USUÁRIO <?= $usuario->nome ?></h6>
      <input type="hidden" value="<?= $usuario->id ?>" id="registroUsuario">
    </div>
    <div class="card-body">
      <div class="table-responsive-sm">
        <table class="table table-striped table-bordered table-hover" id="tableHistoricoUser" width="100%">
          <thead>
            <tr>
              <th>Tipo</th>
              <th>Data</th>
              <th>Observações</th>
          </thead>
        </table>
      </div>
    </div>
  </div>
</div>
