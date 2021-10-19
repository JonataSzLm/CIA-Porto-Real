<?php
class Login_model extends CI_Model {

	function retornarEmail($email) {
		$this->db->select('senha');
		$this->db->from('login');
		$this->db->where('email', $email);
        return $this->db->get()->result();
	}
}
?>