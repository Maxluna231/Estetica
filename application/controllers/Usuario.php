<?php

class Usuario extends CI_Controller{
    public function login(){
        

        $this->load->helper(array('form', 'url'));

                $this->load->library('form_validation');
                $this->form_validation->set_rules('CorreoElectronico', 'CorreoElectronico', 'required');
                $this->form_validation->set_rules('Contrasenia', 'Contrasenia', 'required');

                if ($this->form_validation->run() == FALSE)
                {
                        $this->load->view('headers/head');
                        $this->load->view('usuario/login');
                }
                else
                {
                        $this->load->model('UsuarioM');
                        $usuario = $this->UsuarioM->validaUsuario($this->input->post('CorreoElectronico'), md5($this->input->post('Contrasenia')));
                        if($usuario[0]->IdClientes==1){

                                $newdata = array(
                                        'CorreoElectronico'  => $this->input->post('CorreoElectronico'),
                                        'IdClientes'     => 1,
                                        'Logeado' => TRUE
                                );
                                
                                $this->session->set_userdata($newdata);

                                redirect(base_url('index.php/RegistrosC/show'), 'refresh');
                        }
                        
                }
    }

    public function registros(){
        $this->load->view('usuario/saludo');
    }
}

?>