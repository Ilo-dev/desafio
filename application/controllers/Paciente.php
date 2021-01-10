<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Paciente extends CI_Controller {

	public function index()
	{
		$this->load->model('paciente_model');
		$data["paciente"] = $this->paciente_model->index();

		$data["title"] = "Cadastro - Pacientes";
		$this->load->view('template/conteudo/header_conteudo/header_conteudo');
	    $this->load->view('template/conteudo/menu');
		$this->load->view('template/conteudo/principal',$data);
		$this->load->view('template/footer/footer');
	}

	public function novo_paciente()
	{

		$data["title"] = "Cadastro - Pacientes";
		$this->load->view('template/conteudo/header_conteudo/header_conteudo');
	    $this->load->view('template/conteudo/menu');
		$this->load->view('template/conteudo/form_paciente');
		$this->load->view('template/footer/footer');
	}

	public function inserir_paciente()
	{
		$this->load->model('paciente_model');
	    $this->load->model('endereco_model');
		$this->load->helper('array');
	
		$dados = elements(array('cep', 'uf', 'cidade', 'bairro', 'ibge','numero_casa','rua' ), $this->input->post());   
        $this->endereco_model->inserir_endereco($dados);

		$dados = elements(array('nome_paciente', 'mae_paciente', 'cpf', 'cns', 'data_nascimento'), $this->input->post());
        $this->paciente_model->inserir_paciente($dados);   
        redirect("paciente");   
		}

	public function editar_paciente($id)
		{
		$this->load->model('paciente_model');
	    $this->load->model('endereco_model');
		$this->load->helper('array');

		$data['paciente'] = $this->paciente_model->exibir_paciente($id);
	 	$data['endereco'] = $this->endereco_model->exibir_endereco($id);
		
		var_dump($data);
		exit();

	//    $dados = elements(array('cep', 'uf', 'cidade', 'bairro', 'ibge','numero_casa','rua' ), $this->input->post());   
    //    $this->endereco_model->exibir_endereco($dados);

//		$dados = elements(array('nome_paciente', 'mae_paciente', 'cpf', 'cns', 'data_nascimento'), $this->input->post());
 //       $this->paciente_model->exibir_paciente($dados);   

	 	$data["title"] = "Editando - Pacientes";
		$this->load->view('template/conteudo/header_conteudo/header_conteudo');
	    $this->load->view('template/conteudo/menu');
		$this->load->view('template/conteudo/form_paciente');
		$this->load->view('template/footer/footer');
	}
}

