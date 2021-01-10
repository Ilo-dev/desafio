<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Paciente_model extends CI_Model
{
	
	public function index()
	{
	  return $this->db->get("paciente")->result_array();
	}

	public function inserir_paciente($paciente)
	{
		$this->db->insert('paciente', $paciente);
	}

	 public function exibir_paciente($id)
	{
		return $this->db->get_where('paciente', array('paciente_id' => $id


		))->row_array();
	}

}