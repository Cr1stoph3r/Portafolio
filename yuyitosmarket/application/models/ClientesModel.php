<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ClientesModel extends CI_Model
{

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

    function editarCliente() {
        $consulta = $this->db->order_by('ASC')->limit(1);
        $consulta->set('rut_cliente', $consulta);
        $consulta->set('cod_usuario', $consulta);
        $consulta->insert();
        $this->db->replace('CLIENTES');
 
        return $consulta;
     }

    function editarDatos($id) {
       $consulta = $this->db->where('id' , $id)->order_by('id','ASC')->limit(1);
       $this->db->replace('CLIENTES');

       return $consulta;
    }
*/

    //prueba de crud clientes

    public $table = 'CLIENTES';
    public $table_id = 'rut_cliente';
    public $tablee = 'PERSONA';
    public $table_iid = 'id_persona';

    public function __construct()
    {

    }
    /*
    public function insertarCliente($datos)
        {
            $query = $this->db->insert('CLIENTES', $datos);
            return $query;
        }
        */
        public function insertarCliente2($datos)
        {
            $query = $this->db->insert('PERSONA', $datos);
            return $query;
        }
    public function selectclientes() {
        $consulta = $this->db->get_where('RESUMEN_CLIENTE', array('ESTADO =' => 1));
        return $consulta;
    }

    public function clientesEliminados() {
        $consulta = $this->db->get_where('RESUMEN_CLIENTE', array('ESTADO =' => 0));
        return $consulta;
    }

    //falta marca
    public function obtenerClientes() {
        $consulta = $this->db->get('RESUMEN_CLIENTE');
        return $consulta;
    }

    public function editarClientes($id) {
        $consulta = $this->db->get_where('RESUMEN_CLIENTE', array('RUT_CLIENTE =' => $id))->row();
        return $consulta;
    }

    public function editarCliente($V_RUT_CLIENTE, $V_NOMBRE, $V_APELLIDOS, $V_DIRECCION, $V_TELEFONO, $V_CORREO) {
        $query = $this->db->query("CALL SP_ACTUALIZAR_CLIENTES('".$V_RUT_CLIENTE."', '".$V_NOMBRE."', '".$V_APELLIDOS."', '".$V_DIRECCION."', '".$V_TELEFONO."', '".$V_CORREO."')");
        return $query;
    }

    public function actualizarClientes($id, $data){
        $this->db->set($data)
        ->where('RUT_CLIENTE', $id)
        ->update('CLIENTES');
    }

    public function pc($V_RUT_CLIENTE, $V_NOMBRE, $V_APELLIDOS, $V_DIRECCION, $V_TELEFONO, $V_CORREO)
    {
        $query = $this->db->query("CALL SP_CREAR_CLIENTE('".$V_RUT_CLIENTE."', '".$V_NOMBRE."', '".$V_APELLIDOS."', '".$V_DIRECCION."', '".$V_TELEFONO."', '".$V_CORREO."')");
        
    }
    /*
    public function insertarCliente($datos){
        $query = $this->db->insert('CALL SP_CREAR_CLIENTE', $datos);
        return $query;
    }
*/

    /*
    

    function selectClientes() {
        $consulta = $this->db->get('CLIENTES');
        return $consulta;
    }

    

    function find($rut_cliente){
        $this->db->select();
        $this->db->from($this->table);
        $this->db->where($this->clientes, $rut_cliente);

        $query = $this->db->get();
        return $query->row();
    }

    //buscar todos los registros de la tabla
    function findAll(){
        $this->db->select();
        $this->db->from($this->table);

        $query = $this->db->get();
        return $query->result();
    }

    //guardar

    public function guardar($rut_cliente = null){
        $this->load->view('tests/guardar');
        if($this->input->server("REQUEST_METHOD") == "POST"){
           echo "POST";
        }
    }

    //function guardar($data){
     //   $this->db->insert($this->table, $data);
     //   return $this->db->rut_cliente();
   // }

    function insert($data){
        $this->db->insert($this->table, $data);
        return $this->db->insert_id();
    }

    function update($rut_cliente, $data){
        $this->db->update($this->table, $data);
        $this->db->where($this->table_id, $rut_cliente);
        
    }

    function delete($rut_cliente){
        $this->db->delete($this->table);
        $this->db->where($this->table_id, $rut_cliente);
        
    }

    */

}
