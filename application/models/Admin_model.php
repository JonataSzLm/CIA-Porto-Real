<?php
class Admin_model extends CI_Model {

	function listar() {
		$this->db->select('id, imagem_anexo');
		$this->db->order_by('id', 'DESC');
		return $this->db->get('galeria')->result();
	}

	function inserir($dados) {
		return $this->db->insert('galeria', $dados);
	}

	function excluir($id) {
		$this->db->where('id', $id);
		return $this->db->delete('galeria');
	}

	function retornarImagem($id) {
		$this->db->select('imagem_anexo');
		$this->db->from('galeria');
		$this->db->where('id', $id);
        return $this->db->get()->result();
	}



	function listarVideo() {
		$this->db->select('id, video_link');
		$this->db->order_by('id', 'DESC');
		return $this->db->get('galeria_video')->result();
	}

	function inserirVideo($dados) {
		return $this->db->insert('galeria_video', $dados);
	}	

	function excluirVideo($id) {
		$this->db->where('id', $id);
		return $this->db->delete('galeria_video');
	}
	function retornarVideo($id) {
		$this->db->select('video_link');
		$this->db->from('galeria_video');
		$this->db->where('id', $id);
        return $this->db->get()->result();
	}

}
?>