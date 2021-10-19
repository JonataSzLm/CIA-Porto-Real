<?php
	class Principal_model extends CI_Model {
		
		function listar() {
			$this->db->select('id, imagem_anexo');
			$this->db->order_by('id', 'DESC');
			return $this->db->get('galeria')->result();
		}
		function listarVideo() {
			$this->db->select('id, video_link');
			$this->db->order_by('id', 'DESC');
			return $this->db->get('galeria_video')->result();
		}
	
	}
?>