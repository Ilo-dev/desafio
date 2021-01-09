<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		$this->load->model('usuario_model');
		$data["usuarios"] = $this->usuario_model->index();

		$data["title"] = "Cadastro - Pacientes";
		$this->load->view('template/header/header', $data);

		$this->load->view('template/conteudo/form_login');
		$this->load->view('template/footer/footer');
	}
}
