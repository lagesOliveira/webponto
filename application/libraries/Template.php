<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Template
{
  var $template_data = array();

  function set($name, $value)
  {
    $this->template_data[$name] = $value;
  }

  function load($template = '', $view = '', $view_data = array(), $theme = 'site', $return = FALSE)
  {

    $this->CI = &get_instance();
    if ($theme != 'site' && !file_exists('application/views/' . $theme . '/' . $view . '.php')) // Verifica se tem o arquivo na pasta do tema se n�o pega o Padronizado!!!
      $theme = 'site';

    $this->set('contents', $this->CI->load->view($theme . '/' . $view, $view_data, TRUE));
    return $this->CI->load->view($template, $this->template_data, $return);
  }
}
/* End of file Template.php */
/* Location: ./application/libraries/Template.php */
