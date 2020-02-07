<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('usuarios_model', 'usuarios');
	}

	public function index()
	{

		$usuario_esta_logado = $this->session->userdata('esta_logado');

		if (!$usuario_esta_logado)
			$this->template->load('home_inicial', 'usuario/logar', '', '');
		else
			redirect(base_url('registros'));
	}

	public function registro()
	{
		$post = $this->input->post();

		if (!$post) {

			$this->template->load('home_inicial', 'usuario/registrar', '', '');
		} else {

			$novo_usuario = (object) array(
				'nome'  => $this->input->post('nomeCompleto'),
				'email' => $this->input->post('email'),
				'senha' => password_hash($this->input->post('senha'), PASSWORD_DEFAULT)
			);

			$usuario_ja_existe = $this->verificar_usuario_existente($novo_usuario);

			if ($usuario_ja_existe) {

				show_alert('Ops', 'Este e-mail já está sendo utilizado por outro usuário.', 'warning');
				redirect(base_url('login/registro'));
			} else {

				$id_registrado = $this->usuarios->cadastrar($novo_usuario);
				$novo_usuario->id = $id_registrado;

				$this->iniciar_sessao($novo_usuario);
				show_alert('', 'Você foi cadastrado com sucesso!\nVamos começar registrando sua entrada de hoje.', 'success');
				redirect(base_url('registros/adicionar'));
			}
		}
	}

	public function logar()
	{
		$usuario_logando = (object) array(
			'email' => $this->input->post('email'),
			'senha' => $this->input->post('senha')
		);

		$usuairo_existe = $this->verificar_usuario_existente($usuario_logando);

		if ($usuairo_existe) {
			$senha_valida = password_verify($usuario_logando->senha, $usuairo_existe->senha) ? TRUE : FALSE;


			if ($senha_valida) {

				$this->iniciar_sessao($usuairo_existe);
				redirect(base_url());
			} else {

				show_alert('Ops', 'Usuário ou senha Inválidos', 'error');
				redirect(base_url());
			}
		} else {
			show_alert('Ops', 'Usuário ou senha Inválidos', 'error');
			redirect(base_url());
		}
	}

	public function logout()
	{
		session_destroy();
		redirect(base_url());
	}

	function iniciar_sessao($usuario)
	{
		$this->session->set_userdata("esta_logado", TRUE);
		$this->session->set_userdata("usuario", $usuario);
	}

	// Pesquisa no BD se já existe usuário cadastrado
	function verificar_usuario_existente($usuario)
	{
		$usuario = $this->usuarios->obter_usuario($usuario);
		if ($usuario)
			return $usuario;
		else
			return FALSE;
	}
}
