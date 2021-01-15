<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Login extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

    public function acesso() {

    	echo 'Teste';

        // VALIDATION RULES
        $this->load->library('form_validation');
        $this->form_validation->set_rules('usuario', 'Usuario', 'required');
        $this->form_validation->set_rules('senha', 'Senha', 'required');
        $this->form_validation->set_error_delimiters('<p class="error">', '</p>');


        // MODELO MEMBERSHIP
        $this->load->model('usuario_model', 'usuario');
        $query = $this->usuario->validacao();

        if ($this->form_validation->run() == FALSE) {

            $this->load->view('template/conteudo/form_login');
        } else {

            if ($query) { // VERIFICA LOGIN E SENHA
                $data = array(
                    'login' => $this->input->post('usuario'),
                    'logged' => true
                );
                $this->session->set_userdata($data);
                redirect('desafio/paciente');
            } else {
                redirect($this->index());
            }
        }
    }
}