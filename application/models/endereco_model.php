<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Endereco_model extends CI_Model
{

	public function inserir_endereco($endereco)
	{
		$this->db->insert('desafio.endereco', $endereco);
	}

	 public function exibir_endereco($id)
	{
		return $this->db->get_where('desafio.endereco', array('id_endereco' => $id


		))->row_array();
	}
}