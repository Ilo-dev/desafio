<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('usuario_model');
	}

	public function index()
	{
		$this->load->model('usuario_model');
		$data["usuarios"] = $this->usuario_model->index();

		$data["title"] = "Cadastro - Pacientes";
		$this->load->view('template/header/header', $data);

		$this->load->view('template/conteudo/form_login');
		$this->load->view('template/footer/footer');
	}

	public function login(){
			
			$login = $this->input->post('usuario');
			$senha = $this->input->post('senha');	

			
			$this->load->model('usuario_model'); // carregamos o model
				
			$verificar = $this->usuario_model->verifica($login, $senha);

			if( $verificar == true ) {
				
			$this->session->set_userdata( 'usuario', $login );
			$this->session->set_userdata( 'logado', true );
					
			redirect(base_url().'paciente');
				
			} else {
				
				echo "deu erro";
				
			}
				
			
		}

		public function logged(){
		if( $this->session->userdata('logado') !== true ) {
		
			redirect(base_url());
		
		}
	}
		
		public function logout() {
			
			$this->session->sess_destroy();
			redirect(site_url());
		
		}
}
