<?php
if (!defined('BASEPATH'))
  exit('No direct script access allowed');


function dados_usuario_logado()
{
  $CI = &get_instance();
  return  $CI->session->userdata('usuario');
}

function verifica_logon()
{
  $CI = &get_instance();

  $usuario_esta_logado = $CI->session->userdata('esta_logado');
  if (!$usuario_esta_logado)
    redirect(base_url());
}
