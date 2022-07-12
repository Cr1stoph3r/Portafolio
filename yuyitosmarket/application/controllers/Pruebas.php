<?php 

class Pruebas extends CI_Controller{

    

    public function __construct()
    {
        
        parent::__construct();
        $this->load->helper('form');
        $this->load->model('Prueba');
        $this->load->database();
    }

    public function index(){
        
    }
    


    /*
    public function sp($rut_cliente)
    {
        $this->load->view('test/guardar');
        $this->User_model->pc($rut_cliente);
    }
    */



    public function listado(){


    }

    
    
    public function guardar(){
        $this->load->view('test/guardar');
        if($this->input->server("REQUEST_METHOD") == "POST"){
            echo $data["rut_cliente"] = $this->input->post("rut_cliente");
            echo $data["id_persona"] = $this->input->post("id_persona");
            
            $this->Prueba->pc($data["rut_cliente"]);
            
         }
         
    }

    public function borrar(){

    }
}