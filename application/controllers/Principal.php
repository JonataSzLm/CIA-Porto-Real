<?php
	
	defined('BASEPATH') OR exit('Acesso negado.');

	class Principal extends CI_Controller {

        public function __construct() {
            parent::__construct();
            $this->load->helper(array('form', 'url'));
        }

        public function index($mensagem = null)	{
            $this->load->model('Principal_model', 'main', true);
            if (empty($this->main->listar()) == false) {
                $data['dados'] = $this->main->listar();     
            } else {
                $data['dados'] = false;
            }
            if (empty($this->main->listarVideo()) == false) {
                $data['links'] = $this->main->listarVideo();     
            } else {
                $data['links'] = false;
            }
            $data['mensagem'] = $mensagem;
    	    $this->load->view('principal', $data);
        }

        public function email(){

            $nome = $this->input->post('txtNome');
            $email = $this->input->post('txtEmail');
            $msg = $this->input->post('txtMensagem'); 
            $assunto = $this->input->post('txtAssunto');
            
            if (isset($nome) || isset($email) || isset($msg) || isset($assunto) || !empty($nome) || !empty($email) || !empty($msg) || !empty($assunto)) {
                            
                $mensagem = ' <div style="border: solid 1px black; padding: 10px; margin: 20px; border-radius: 10px;"><center><h1>' . $nome . 
                            ' </h1></center><br> <b>E-MAIL: </b>' . $email . 
                            ' <br> <b>MENSAGEM:</b><br><br>' . $msg . '<br><br></div>';

                $this->email->from("ciaportoreal82@gmail.com", 'Meu E-mail');
                $this->email->subject($assunto);
                $this->email->to("ciaportoreal82@gmail.com"); 
                $this->email->message($mensagem);
                
                if (!$this->email->send()) {
                    echo $this->email->print_debugger();
                    $mensagem = 'Erro ao enviar e-maill!';
                } else {
                    $mensagem = 'E-mail enviado com sucesso!';
                }
                redirect(base_url() . 'Principal');
                //$this->index($mensagem);
            }   
        }
    

	}

?>