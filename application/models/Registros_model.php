<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Registros_model extends CI_Model
{
  function __construct()
  {
    parent::__construct();
  }

  function ultima_acao($usuario)
  {
    return $this->db->where('usuario', $usuario->id)->get('controle')->last_row();
  }

  function registrar($registro)
  {
    $this->db->insert('controle', $registro);
    return $this->db->insert_id();
  }
  function resumo($usuario)
  {
    return $this->db
      ->select('id, IF(tipo = 1, "Entrada","Saída") as tipo, DATE_FORMAT(horario, "%d/%m/%y - %H:%i:%s") as horario, observacoes')
      ->limit('5')
      ->order_by('horario', 'DESC')
      ->where('usuario', $usuario->id)
      ->get('controle')
      ->result();
  }
  function atividades($id_usuario)
  {
    return $this->db
      ->select('IF(tipo = 1, "Entrada","Saída") as tipo, horario, observacoes')
      ->order_by('horario','DESC')
      ->where('usuario', $id_usuario)
      ->get('controle')
      ->result();
  }
}
