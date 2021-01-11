<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Paciente_model extends CI_Model
{
	
	public function index()
	{
	  return $this->db->get("paciente")->result_array();
	}

	public function inserir_paciente($paciente_id)
	{
		$this->db->insert('paciente', $paciente_id);
	}

	 public function exibir_paciente($paciente_id)
	{
		return $this->db->get_where('paciente', array('paciente_id' => $paciente_id


		))->row_array();
	}

	public function destroy($paciente_id)
	{
		$this->db->where('paciente_id', $paciente_id);
		$this->db->delete("paciente");
	}

}