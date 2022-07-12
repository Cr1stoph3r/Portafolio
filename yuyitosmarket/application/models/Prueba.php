<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Prueba extends CI_Model
{

    public $table = 'CLIENTES';
    public $table_id = 'rut_cliente';

    public function __construct()
    {
        
    }


    public function pc($rut_cliente)
        {
            $query = $this->db->query("CALL SP_INSERTAR_CLIENTE('$rut_cliente')");

        }





        
    public function selectClientes() {
        $consulta = $this->db->get('CLIENTES');
        return $consulta;
    }

    public function find($rut_cliente){
        $this->db->select();
        $this->db->from($this->table);
        $this->db->where($this->table_id, $rut_cliente);

        $query = $this->db->get();
        return $query->row();
    }

    public function findAll(){
        $this->db->select();
        $this->db->from($this->table);

        $query = $this->db->get();
        return $query->result();
    }


    public function insert($data){
        $this->db->insert($this->table, $data);
        return $this->db->insert();
    }



    public function update($rut_cliente, $data){
        $this->db->update($this->table, $data);
        $this->db->where($this->table_id, $rut_cliente);
        
    }


    public function delete($rut_cliente){
        $this->db->delete($this->table);
        $this->db->where($this->table_id, $rut_cliente);
        
    }

    public function guardar($rut_cliente = null){
        $this->load->view('test/guardar');
        
    }

    

    

}
