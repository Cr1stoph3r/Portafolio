<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProveedorModel extends CI_Model
{

    public $table = 'PROVEEDOR';
    public $table_id = 'rut_proveedor';

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('form');
        $this->load->model('ProveedorModel');
        $this->load->database();
    }

    function selectProveedor() {
        $consulta = $this->db->get('PROVEEDOR');
        return $consulta;
    }

    public function registrar_proveedores($rut_proveedor)
    {
        $query = $this->db->query("CALL SP_Registrar_proveedores('$rut_proveedor')");
    }














    /*
    function buscarEstados($estado) {

        if ($estado === 1) {
            $consulta = $this->db->where('estado', 1);
        } 
        if ($estado === 0) {
            $consulta = $this->db->where('estado', 0);
        }

       return $consulta;
        
    }
    */

    
    
    

    /*
    function insertarDatos($data){
      $this->db->update($data);
    }

    function deleteClientes(){
        $consulta = $this->db->delete('CLIENTES');
    }

    

    function editarDatos($id) {
       $consulta = $this->db->where('id' , $id)->order_by('id','ASC')->limit(1);
       $this->db->replace('CLIENTES');

       return $consulta;
    }
    */

}
