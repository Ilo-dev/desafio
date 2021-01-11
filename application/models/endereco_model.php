<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Endereco_model extends CI_Model
{

	public function inserir_endereco($id_endereco)
	{
		$this->db->insert('endereco', $id_endereco);
	}

	 public function exibir_endereco($id_endereco)
	{
		return $this->db->get_where('endereco', array('id_endereco' => $id_endereco


		))->row_array();
	}


	public function destroy($id_endereco)
	{
		$this->db->where('id_endereco', $id_endereco);
		$this->db->delete("endereco");
	}

}