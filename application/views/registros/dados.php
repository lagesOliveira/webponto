<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Controle de Ponto</h1>

  </div>

  <div class="row">
    <div class="col">
      <div class="card shadow mb-4">
        <!-- Card Header - Dropdown -->
        <div class="card-header d-flex flex-row align-items-center justify-content-between">
          <h6 class="m-0 font-weight-bold text-primary">Últimas 5 atividades de Entrada e Saída</h6>
        </div>
        <!-- Card Body -->
        <div class="card-body">
          <?php foreach ($resumo as $registro) : ?>

            <div class="card my-3 border-left-<?= ($registro->tipo == "Entrada") ? 'success' : 'danger' ?>">
              <div class="card-body">
                <strong><?= $registro->tipo ?></strong>
                <ul>
                  <li><?= $registro->horario ?></li>
                  <?php if ($registro->observacoes != '') : ?>
                    <li><?= $registro->observacoes ?></li>
                  <?php endif; ?>
                </ul>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </div>
</div>
