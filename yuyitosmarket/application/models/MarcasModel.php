<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MarcasModel extends CI_Model
{


    function buscarEstados($estado) {

        if ($estado === 1) {
            $consulta = $this->db->where('estado', 1);
        } 
        if ($estado === 0) {
            $consulta = $this->db->where('estado', 0);
        }

       return $consulta;
        
    }
    
    function selectMarcas() {
        $consulta = $this->db->get('MARCAS');
        return $consulta;
    }

    function insertarDatos($data){
      $this->db->update($data);
    }

    function deleteDeuda(){
        $consulta = $this->db->delete('DEUDA');
    }

    

    function editarDatos($id) {
       $consulta = $this->db->where('id' , $id)->order_by('id','ASC')->limit(1);
       $this->db->replace('CLIENTES');

       return $consulta;
    }


}
