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
		$this->load->library('form_validation');
	    $this->form_validation->set_rules('nome_paciente', 'Nome Paciente','required|min_length[5]|max_length[12]');
		$this->load->model('paciente_model');
	    $this->load->model('endereco_model');
		$this->load->helper('array');
	
		$endereco = elements(array('cep', 'uf', 'cidade', 'bairro', 'ibge','numero_casa','rua' ), $this->input->post());   
        $this->endereco_model->inserir_endereco($endereco);

		$paciente = elements(array('nome_paciente', 'mae_paciente', 'cpf', 'cns', 'data_nascimento'), $this->input->post());
        $this->paciente_model->inserir_paciente($paciente);  

        redirect("paciente"); 


		}

	public function editar_paciente($paciente_id)
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

	public function update()
	{
		$id = $this->input->post('paciente_id');
		$this->load->helper('array');
		$atualiza =  elements(array('nome_paciente', 'mae_paciente', 'cpf', 'cns', 'data_nascimento'), $this->input->post());
        $this->db->where('paciente_id', $id);
        $this->db->update('paciente', $atualiza);

        $atualiza_endereco = elements(array('cep', 'uf', 'cidade', 'bairro', 'ibge','numero_casa','rua' ), $this->input->post());   
        $this->db->where('paciente_id', $id);
        $this->db->update('endereco', $atualiza_endereco);


		redirect("paciente");
	}

	public function delete($paciente_id)
	{

		$this->load->model("paciente_model");
		$this->load->model("endereco_model");
		$this->paciente_model->destroy($paciente_id);
		$this->endereco_model->destroy($paciente_id);
		redirect("paciente");
	}
}

