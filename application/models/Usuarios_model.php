<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Usuarios_model extends CI_Model
{
  function __construct()
  {
    parent::__construct();
  }

  function cadastrar($usuario)
  {
    $this->db->insert('usuarios', $usuario);
    return $this->db->insert_id();
  }
  function obter_usuario($usuario)
  {
    return $this->db->where('email', $usuario->email)->get('usuarios')->row();
  }

  function obter_usuario_por_id($id_usuario)
  {
    return $this->db->where('id', $id_usuario)->get('usuarios')->row();
  }
  function listar()
  {
    return $this->db
      ->order_by('nome', 'ASC')
      ->select('id, nome, email')
      ->get('usuarios')
      ->result();
  }
}
