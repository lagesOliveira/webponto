<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Usuarios extends CI_Controller
{
  private $usuario;


  public function __construct()
  {
    parent::__construct();
    verifica_logon();
    $this->load->model('usuarios_model', 'usuarios');
    $this->usuario = dados_usuario_logado();
  }

  public function listagem()
  {
    $usuarios['response'] = $this->usuarios->listar();
    echo json_encode($usuarios);
  }
}
