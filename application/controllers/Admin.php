<?php

defined('BASEPATH') OR exit('Acesso negado.');

class Admin extends MY_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
    }

    public function index()	{
        $this->load->model('Admin_model', 'adm', true);
        $data['dados'] = $this->adm->listar();
        $data['links'] = $this->adm->listarVideo();
        $this->load->view('admin', $data);
    }

    public function upload_file(){
        $config['allowed_types']='jpg|png|jpeg|svg';
        //$config['file_name'] = 'block.jpg';
        $config['overwrite'] = TRUE;
        $config['encrypt_name']= TRUE;
        $config['upload_path']= './uploads';
        $this->load->library('upload', $config);
        if ($this->upload->do_upload('txtImagemAnexo')) {
            $this->upload->data();
        } else {
            $this->upload->display_errors();
        }
    }

	function salvar() {
        $this->load->model('Admin_model', 'imagem', true);
        $this->load->helper('date');
		
        if ($_FILES['txtImagemAnexo'] != null) {
            $this->upload_file();
            $dados['imagem_anexo'] = $this->upload->data('file_name');
            $this->imagem->inserir($dados);
        }
        redirect(base_url() . 'Admin');
    }

    function delete_file($name){
        $filename = './uploads/' . $name;
        @unlink($filename);
    }

    public function excluir($id, $name) {

        $this->load->model('Admin_model', 'imagem', true);
        if ($this->imagem->retornarImagem($id) != null || $this->imagem->retornarImagem($id) != '') {
            $this->imagem->excluir($id);
            $this->delete_file($name);
        }
        redirect(base_url() . 'Admin');

    }

    function salvarVideo() {
        $this->load->model('Admin_model', 'video', true);
        if ($this->input->post('txtVideo') != null) {
            $links['video_link'] = $this->input->post('txtVideo');
            $this->video->inserirVideo($links);
        }
        redirect(base_url() . 'Admin');
    }

    public function excluirVideo($id) {

        $this->load->model('Admin_model', 'video', true);
        if ($this->video->retornarVideo($id) != null || $this->video->retornarVideo($id) != '') {
            $this->video->excluirVideo($id);
            redirect(base_url() . 'Admin');
        }

    }

    function logout() {
        $this->session->unset_userdata("logado");
        redirect(base_url() . 'Login');
    }   
}
?>
