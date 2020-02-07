URL_BASE = "http://localhost:3000/work/repositorios/controle-ponto/";

$(document).ready(function () {
  $('#tableHistorico').dataTable({
    oLanguage: {
      sLengthMenu: "Mostrar _MENU_ registros por página",
      sZeroRecords: "Nenhum registro encontrado",
      sInfo: "Mostrando _START_ / _END_ de _TOTAL_ registro(s)",
      sInfoEmpty: "Mostrando _START_ / _END_ de _TOTAL_  registros",
      sInfoFiltered: "(filtrado de _MAX_ registros)",
      sSearch: "Pesquisar: ",
      oPaginate: {
        sFirst: "Primeiro",
        sPrevious: "Anterior",
        sNext: "Próximo",
        sLast: "Último"
      }
    },
    // responsive: true,
    processing: true,
    ajax: {
      url: URL_BASE + "registros/atividades",
      dataSrc: 'response'
    },
    columns: [
      { data: "tipo" },
      { data: "horario" },
      { data: "observacoes" },
    ],
    order: [
      [1, "ASC"]
    ],
    columnDefs: [{
      targets: 1,
      render: function (data) {
        return moment(data).format('L LTS');
      }
    }],
  });

  $('#tableHistoricoUser').dataTable({
    oLanguage: {
      sLengthMenu: "Mostrar _MENU_ registros por página",
      sZeroRecords: "Nenhum registro encontrado",
      sInfo: "Mostrando _START_ / _END_ de _TOTAL_ registro(s)",
      sInfoEmpty: "Mostrando _START_ / _END_ de _TOTAL_  registros",
      sInfoFiltered: "(filtrado de _MAX_ registros)",
      sSearch: "Pesquisar: ",
      oPaginate: {
        sFirst: "Primeiro",
        sPrevious: "Anterior",
        sNext: "Próximo",
        sLast: "Último"
      }
    },
    responsive: true,
    processing: true,
    ajax: {
      url: URL_BASE + 'registros/atividades/' + $('#registroUsuario').val(),
      dataSrc: 'response'
    },
    columns: [
      { data: "tipo" },
      { data: "horario" },
      { data: "observacoes" },
    ],
    order: [
      [1, "ASC"]
    ],
    columnDefs: [{
      targets: 1,
      render: function (data) {
        return moment(data).format('L LTS');
      }
    }],
  });

  $('#tableUsers').dataTable({
    oLanguage: {
      sLengthMenu: "Mostrar _MENU_ registros por página",
      sZeroRecords: "Nenhum registro encontrado",
      sInfo: "Mostrando _START_ / _END_ de _TOTAL_ registro(s)",
      sInfoEmpty: "Mostrando _START_ / _END_ de _TOTAL_  registros",
      sInfoFiltered: "(filtrado de _MAX_ registros)",
      sSearch: "Pesquisar: ",
      oPaginate: {
        sFirst: "Primeiro",
        sPrevious: "Anterior",
        sNext: "Próximo",
        sLast: "Último"
      }
    },
    responsive: true,
    processing: true,
    ajax: {
      url: URL_BASE + "usuarios/listagem",
      dataSrc: 'response'
    },
    columns: [
      { data: "nome" },
      {
        data: "email",
        "render": function (data, type, full, meta) {
          return '<a href="mailto:' + data + '">' + data + '</a>';
        }
      },
      {
        data: "id",
        "render": function (data, type, full, meta) {
          return '<a href="' + URL_BASE + 'registros/historico/' + data + '"><i class="fas fa-folder-open fa-2x fa-fw"></i></a>';
        }
      },
    ],
  });
});
