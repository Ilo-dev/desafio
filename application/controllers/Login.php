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

	public function acesso()
	{

		$usuario = $this->input->post('login');
		$senha   = $this->input->post('senha');

		$this->db->where('login', $usuario);
		$this->db->where('senha', $senha);

		$usuario = $this->db->get('usuario')->result();
		if(count($usuario) === 1)
		{
			$dados= array('usuario' => $usuario[0]->usuario ,'logado' => TRUE );
			$this->session->set_userdata($dados);
			redirect("paciente");
		}else
		{
			redirect("login");
		}
	}
}
