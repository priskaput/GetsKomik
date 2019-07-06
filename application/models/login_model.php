<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login_model extends CI_Model
{	
	public function process_login(){
		return $this->db->get('user')->result();
	}
}

?>