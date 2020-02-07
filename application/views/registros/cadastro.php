<div class="container-fluid">
  <!-- Page Heading -->
  <h1 class="h3 mb-1 text-gray-800">Registro de Entrada e Saída</h1>
  <div class="row">
    <div class="col-xl-6 col-lg-6">
      <div class="card shadow mb-4">
        <!-- Card Header - Dropdown -->
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
          <h6 class="m-0 font-weight-bold text-primary">Informações</h6>
        </div>
        <!-- Card Body -->
        <div class="card-body">
          <p><?= $mensagem ?></p>
          <div class="text-center">
            <p><span id="diaAtual"></span><br><span id="dataAtual"></span></p>
            <p class="h4" id="horaAtual"></p>
          </div>
        </div>
      </div>
    </div>

    <div class="col-xl-6 col-lg-6">
      <div class="card shadow mb-4">
        <!-- Card Header - Dropdown -->
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
          <h6 class="m-0 font-weight-bold text-primary"><?= ($ultima_acao == 1) ? 'Registro de Saída' : 'Registro de Entrada' ?></h6>
        </div>
        <!-- Card Body -->
        <div class="card-body">
          <?= form_open('registros/registrar', '', ''); ?>
          <input type="hidden" name="horario" id="dataNow">
          <div class="form-group">
            <?php
            echo form_label('Observações:', 'observacoes');
            echo form_input(
              array(
                'name'  => 'observacoes',
                'id'    => 'observacoes',
                'type'  => 'text',
                'class' => 'form-control',
              )
            );
            ?>
            <p class="text-xs">Ex: <?= ($ultima_acao == 1) ? 'Estou indo almoçar.' : 'Retornando do almoço.' ?></p>
          </div>
          <p class="text-center">
            <button type="submit" class="btn btn-lg btn-info btn-icon-split">
              <?php if ($ultima_acao == 1) : ?>
                <span class="icon text-white-50">
                  <i class="fas fa-sign-out-alt"></i>
                </span>
                <span class="text">Registrar Saída</span>
              <?php else : ?>
                <span class="icon text-white-50">
                  <i class="fas fa-sign-in-alt"></i>
                </span>
                <span class="text">Registrar Entrada</span>
              <?php endif; ?>
            </button>

          </p>
          </form>

        </div>
      </div>
    </div>

  </div>
</div>
