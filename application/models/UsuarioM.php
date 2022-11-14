<?php

class UsuarioM extends CI_Model{
    function validaUsuario($CorreoElectronico, $Contrasenia){
        $sql="Select IdClientes, CorreoElectronico from Usuarios where CorreoElectronico = '$CorreoElectronico' and Contrasenia = '$Contrasenia'";
        $query = $this->db->query($sql);
        //echo $this->db->last_query();
        return $query->result();
    }

    function FormularioRegistros(){
        $data = array(
            'Nombre' => $this->input->post('Nombre'),
            'ApellidoPaterno' => $this->input->post('ApellidoPaterno'),
            'ApellidoMaterno' => $this->input->post('ApellidoMaterno'),
            'CorreoElectronico' => $this->input->post('CorreoElectronico'),
            'Contrasenia' => $this->input->post('Contrasenia')
        );
        $this->db->insert('Usuarios', $data);
    }
}

?>