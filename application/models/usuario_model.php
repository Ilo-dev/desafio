<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Usuario_model extends CI_Model
{
	
	public function index()
	{
	  return $this->db->get('usuario')->result_array();
	}
}