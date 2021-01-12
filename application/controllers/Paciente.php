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
     	$insercao =  $this->paciente_model->inserir_paciente($paciente);
	    
	    redirect("paciente");
		}

	public function buscar_paciente($paciente_id)
		{
		$data['paciente'] = $this->db->get('paciente')->result();
		$busca = $this->input->post('busca');
		$data2['busca'] = $busca;

		$this->db->like('nome', $busca);
		$this->db->or_like('cpf',$busca);
		$data2['pacientes'] = $this->db->get('paciente')->result();
	 	$data['title'] = "Exibindo - Paciente";
		$this->load->view('template/conteudo/header_conteudo/header_conteudo');
	    $this->load->view('template/conteudo/menu');
		$this->load->view('template/conteudo/form_paciente', $data);
		$this->load->view('template/footer/footer');

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

	public function login(){		
		$usuario = $this->input->post('usuario');
		$senha = $this->input->post('senha');
		$this->db->where('login',$usuario);
		$this->db->where('senha',$senha);
		$usuario = $this->db->get('usuario')->result();		
		if(count($usuario)===1){
			$dados = array(
               'login'  => $usuario[0]->usuario,
               'logado' => TRUE
            );
			$this->session->set_userdata($dados);
			redirect("paciente");
		}
		else{
			redirect(base_url());
		}
	}
}

