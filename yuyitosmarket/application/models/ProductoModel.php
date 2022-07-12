<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProductoModel extends CI_Model
{

    public $table = 'PRODUCTO';
    public $table_id = 'cod_producto';

    public function __construct()
    {
        
    }

    //procesos almacenados
    public function insertarProducto($datos)
        {
            $query = $this->db->insert('PRODUCTO', $datos);
            return $query;
        }


    public function selectProductos() {
        $consulta = $this->db->get_where('RESUMEN_PRODUCTOS', array('ESTADO =' => 1));
        return $consulta;
    }

    public function productosEliminados() {
        $consulta = $this->db->get_where('RESUMEN_PRODUCTOS', array('ESTADO =' => 0));
        return $consulta;
    }

    public function obtenerMarcas() {
        $consulta = $this->db->get('MARCAS');
        return $consulta;
    }


    public function editarProducto($id) {
        $consulta = $this->db->get_where('PRODUCTO', array('COD_PRODUCTO =' => $id ))->row();
        return $consulta;
    }

    public function actualizarProducto($id, $data){
        $this->db->set($data)
        ->where('COD_PRODUCTO', $id)
        ->update('PRODUCTO');
    }

    public function TipoProductos() {
        $this->db->select('*');
        $consulta = $this->db->get('TIPO_PRODUCTO');
        return $consulta;
    }


    
    

    

}
