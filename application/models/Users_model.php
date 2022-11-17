<?php
	class Users_model extends CI_Model {
		function __construct(){
			parent::__construct();
			$this->load->database();
		}

		public function login($CorreoElectronico, $Contrasenia){
			$query = $this->db->get_where('Usuarios', array('CorreoElectronico'=>$CorreoElectronico, 'Contrasenia'=>$Contrasenia));
			return $query->row_array();
		}

	}
?>