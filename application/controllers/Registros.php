<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Registros extends CI_Controller
{
  private $usuario;


  public function __construct()
  {
    parent::__construct();
    verifica_logon();
    $this->load->model('registros_model', 'registros');
    $this->load->model('usuarios_model', 'usuarios');
    $this->usuario = dados_usuario_logado();
  }

  public function index()
  {

    $data = array(
      'resumo' => $this->registros->resumo($this->usuario)
    );
    $this->template->load('dashboard', 'registros/dados', $data, '');
  }

  public function adicionar()
  {
    $ultima_acao = $this->verifica_ultima_acao($this->usuario);

    $nome = explode(" ", $this->usuario->nome);

    $mensagem = 'Olá ' . $nome[0] . ' tudo bem? ';

    switch ($ultima_acao) {
      case 1:
        $mensagem .= 'Seu último registro foi de saída.<br/> Vamos registar sua entrada agora?';
        break;
      case 2:
        $mensagem .= 'Seu último registro foi de entrada.<br/> Você vai sair agora?';
        break;
      case 0:
        $mensagem .= 'Como é sua primeira vez aqui, vamos registrar sua entrada agora. Ok?';
        break;
    }

    $data = array(
      'usuario'     => $this->usuario,
      'ultima_acao' => $ultima_acao,
      'mensagem'    => $mensagem

    );
    $this->template->load('dashboard', 'registros/cadastro', $data, '');
  }

  function verifica_ultima_acao($usuario)
  {
    /**
     * Verifica se existe registros de ações do usuário
     * se não encontrar nenhum temos um novo usuário
     * 
     * Ações do Usuário
     * 1 - Entrada
     * 2 - Saída
     */

    $ultima_acao = $this->registros->ultima_acao($usuario);
    if ($ultima_acao && ($ultima_acao->tipo == 1)) {
      return 1;
    } else if ($ultima_acao && ($ultima_acao->tipo == 2)) {
      return 2;
    } else {
      return 0;
    }
  }

  public function registrar()
  {
    $ultima_acao = $this->verifica_ultima_acao($this->usuario);

    /**
     * Se a ultima ação executada foi de entrada ele vai sair
     * caso contrario ele vai registrar entrada
     */
    $tipo_de_acao = ($ultima_acao == 1) ? 2 : 1;

    $registro = array(
      'usuario'     => $this->usuario->id,
      'tipo'        => $tipo_de_acao,
      'horario'     => $this->input->post('horario'),
      'observacoes' => $this->input->post('observacoes')
    );
    $id_retorno = $this->registros->registrar($registro);
    show_alert('Pronto!', 'Operação realizada com sucesso!\n Código da solicitação #' . $id_retorno, 'success');
    redirect(base_url('registros'));
  }

  public function historico($usuario = FALSE)
  {
    $data['listagem'] = TRUE; // Carrega o JS do datatable na Dashboard

    if (!$usuario) {
      $this->template->load('dashboard', 'registros/historico', $data, '');
    } else {
      $data['usuario'] = $this->usuarios->obter_usuario_por_id($usuario);
      $this->template->load('dashboard', 'registros/historico_usuarios', $data, '');
    }
  }

  public function atividades($usuario = FALSE)
  {
    if (!$usuario) {
      $data['response'] = $this->registros->atividades($this->usuario->id);
    } else {
      $data['response'] = $this->registros->atividades($usuario);
    }
    echo json_encode($data);
  }

  public function usuarios()
  {

    $data = array(
      'listagem'  => TRUE, // Carrega o JS do datatable na Dashboard
    );
    $this->template->load('dashboard', 'registros/usuarios', $data, '');
  }
}
