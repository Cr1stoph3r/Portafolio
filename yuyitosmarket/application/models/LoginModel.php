<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginModel extends CI_Model
{
    public function __construct()
    {

    }

    public function validarLogin($usuario, $contrasena) {
        $consulta = $this->db->get_where('USUARIOS', array('USUARIO =' => $usuario, 'CONTRASENA =' => $contrasena ));
        return $consulta->row(); 
    }

    public function registrarSession($id,$data) {
        $consulta = $this->db->set($data)
        ->where('ID_PERSONA ', $id)
        ->update('USUARIOS');
        return $consulta;
    }
}