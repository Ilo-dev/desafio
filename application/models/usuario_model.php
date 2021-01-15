<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Usuario_model extends CI_Model
{
	
	public function index()
	{
	  return $this->db->get('usuario')->result_array();
	}

	public function verifica($login, $senha){
		
	
			$this->db->where(array('login'=>$login, 'senha'=>$senha));
			$res = $this->db->get('usuario'); // coletando usuarios no banco
			
			if( $res->num_rows() > 1 ) {
			
				return true;
			
			} else {
			
				return false;
			
			}
			
		}
	
}


