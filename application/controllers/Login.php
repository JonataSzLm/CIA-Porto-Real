<?php

defined('BASEPATH') OR exit('Acesso negado.');

class Login extends CI_Controller {
    
    public function __construct() {
            parent::__construct();
            $this->load->helper(array('form', 'url'));
    }

    public function index()
    {
        $this->load->view('login');
    }

    function verificaEmail($email) {
        $this->load->model('Login_model', 'Login', true);
        if ($this->Login->retornarEmail($email) != null && $this->Login->retornarEmail($email) != '') {
            $data['senha'] =  $this->Login->retornarEmail($email);
            $data['status'] = true;
        } else {
            $data['status'] = false;
        }
        return $data;
    }

    function logar() {
        $email = $this->input->post('txtemail');
        $senha = sha1($this->input->post('txtsenha'));
        $data = $this->verificaEmail($email);

        if ($data['status'] == true) {
            if ($data['senha'][0]->senha == $senha) {
               $this->session->set_userdata("logado", 1);
               redirect(base_url() . 'Admin');
            } else {
               redirect(base_url() . 'Login'); 
            }
        } else {
            redirect(base_url() . 'Login');
        }
    }
}
?>