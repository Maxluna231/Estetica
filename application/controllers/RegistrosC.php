<?php

class RegistrosC extends CI_Controller{

    function _construct() {
        parent::__construct();
        if(!$this->session->userdata('Logeado')){
            redirect(base_url());
        }
 }

    public function show(){
        
        $this->load->view('registros/FormularioRegistros');
        
    }

    public function FormularioRegistros(){
        $this->load->model('UsuarioM');
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->form_validation->set_rules('Nombres','ApellidoPaterno','ApellidoMaterno','CorreoElectronico', 'Contrasenia','required');
        

        if($this->form_validation->run()==FALSE){
            $this->load->view('registros/FormularioRegistros');
        }else{
            $this->UsuarioM->FormularioRegistros();
            redirect(base_url('/'),'refresh');
        }
    }
}

?>