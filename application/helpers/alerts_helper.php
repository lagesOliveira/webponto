<?php
if (!defined('BASEPATH'))
  exit('No direct script access allowed');


function show_alert($titulo, $mensagem, $tipo)
{
  /* Tipos permitidos
  * Primary, info, success, warning, danger
  * https://lipis.github.io/bootstrap-sweetalert/
  */

  $ci = &get_instance();

  $ci->session->set_flashdata(
    "mensagem",
    array(
      'titulo'   => $titulo,
      'mensagem' => $mensagem,
      'tipo'     => $tipo,
    )
  );
}
