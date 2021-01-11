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
	
		$endereco = elements(array('cep', 'uf', 'cidade', 'bairro', 'ibge','numero_casa','rua' ), $this->input->post());   
        $this->endereco_model->inserir_endereco($endereco);

		$paciente = elements(array('nome_paciente', 'mae_paciente', 'cpf', 'cns', 'data_nascimento'), $this->input->post());
        $this->paciente_model->inserir_paciente($paciente);  

        redirect("paciente");   
		}

	public function editar_paciente($paciente_id = 1)
		{
		$this->load->model('paciente_model');
	    $this->load->model('endereco_model');
		$this->load->helper('array');

		$data['paciente'] = $this->paciente_model->exibir_paciente($paciente_id);
	 	$data['endereco'] = $this->endereco_model->exibir_endereco($paciente_id);
	 	$data["title"] = "Editando - Pacientes";
		$this->load->view('template/conteudo/header_conteudo/header_conteudo');
	    $this->load->view('template/conteudo/menu');
		$this->load->view('template/conteudo/form_paciente', $data);
		$this->load->view('template/footer/footer');
	}

	public function update($paciente_id = 1)
	{

		$this->load->model('paciente_model');	
		$this->load->model('endereco_model');
		$this->load->helper('array');

		$endereco = elements(array('cep', 'uf', 'cidade', 'bairro', 'ibge','numero_casa','rua' ), $this->input->post());   
        $this->endereco_model->update($paciente_id, $endereco);

		$paciente = elements(array('nome_paciente', 'mae_paciente', 'cpf', 'cns', 'data_nascimento'), $this->input->post());
        $this->paciente_model->update($paciente_id, $paciente);  

		redirect("paciente");
	}

	public function delete($paciente_id)
	{

		$this->load->model("paciente_model");
		$this->load->model("endereco_model");
		$this->paciente_model->destroy($paciente_id);
		$this->paciente_model->destroy($paciente_id);
	}
}

