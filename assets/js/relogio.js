// Atualiza a hora na página de registros
$(document).ready(function () {
	var interval = setInterval(function () {
		moment.locale('pt-br');
		$('#diaAtual').text(moment().format('dddd'));
		$('#dataAtual').text(moment().format('L'));
		$('#horaAtual').text(moment().format('LTS'));
		$('#dataNow').val(moment().format('YYYY-MM-DD LTS'));
	}, 100);
});
