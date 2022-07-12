<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class ClientesController extends CI_Controller
{

    protected $clientes;

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('form');
        $this->load->model('ClientesModel');
        $this->load->database();

        /*
        $validation = [
			array(
				'field' => 'rut_cliente',
				'rules'	=> 'required',
                'errors' => array(
                    'required' => 'El campo {field} es obligatorio.',
                 ),
				),
		];

		$this->form_validation->set_rules($validation);
        */

    }

    public function index()
    {
        $clientes = $this->ClientesModel->selectclientes();
    
        $data = ['titulo' => 'Clientes', 'datos' => $clientes];

        $this->load->view('header', FALSE);
        $this->load->view('clientes/clientes', $data, FALSE);
        $this->load->view('footer', FALSE);
    }



    //prueba de crud clientes

    public function obtenerEliminados() {
        $clientes = $this->ClientesModel->clientesEliminados();

        $data = ['titulo' => 'Eliminados', 'datos' => $clientes];

        $this->load->view('header', FALSE);
        $this->load->view('clientes/eliminados', $data, FALSE);
        $this->load->view('footer', FALSE);
    }




    public function registrar_clientes(){
        $clientes = $this->ClientesModel->selectClientes();
        $clientes = $this->ClientesModel->obtenerClientes();

        $data = ['clientes' => $clientes];
        $this->load->view('header', FALSE);
        $this->load->view('clientes/nuevo', $data, FALSE);
        $this->load->view('footer', FALSE);

    }


    //
      
    public function editar_cliente(){
        
        $id = $this->input->post('id');
        //$datos = $this->ClientesModel->editarCliente($id);
        $datos = $this->ClientesModel->editarClientes($id);

        $data = ['titulo' => 'Editar Clientes', 'datos' => $datos];
        $this->load->view('header', FALSE);
        $this->load->view('clientes/editar', $data);
        $this->load->view('footer', FALSE);
    }

    public function actualizarClientes() {

        $respuesta = 'VALORES INCORRECTOS';

        if ($this->input->post('id')) {
            $id = $this->input->post('id');
            $nombre = $this->input->post('nombre');
            $apellidos = $this->input->post('apellidos');
            $direccion = $this->input->post('direccion');
            $telefono = $this->input->post('telefono');
            $correo = $this->input->post('correo');

            $this->ClientesModel->editarCliente($id, $nombre,$apellidos,$direccion,$telefono,$correo);
        

            $respuesta = 'Se insertaron correctamente los datos';

            $this->index();
        }

        return $respuesta;

    }

    public function activarClientes() {

        $respuesta = 'VALORES INCORRECTOS';

        if ($this->input->post('id')) {
            $id = $this->input->post('id');

            $data = array(
                'ESTADO' => 1
            );

            $this->ClientesModel->actualizarClientes($id, $data);
        

            $respuesta = 'Se insertaron correctamente los datos';

            $this->index();
        }

        return $respuesta;

    }

    public function eliminarClientes() {

        $respuesta = 'VALORES INCORRECTOS';

        if ($this->input->post('id')) {
            $id = $this->input->post('id');

            $data = array(
            'ESTADO' => 0
        );

            $this->ClientesModel->actualizarClientes($id, $data);
        

            $respuesta = 'Se actualizaron correctamente los datos';

            $this->index();
        }

        return $respuesta;

    }

    public function SP_RESITRAR_CLIENTE(){
        if ($this->input->post('rut_cliente')) {
               $V_RUT_CLIENTE = $this->input->post('rut_cliente');
                $V_NOMBRE = $this->input->post('nombre');
                $V_APELLIDOS = $this->input->post('apellidos');
                $V_DIRECCION = $this->input->post('direccion');
                $V_TELEFONO = $this->input->post('telefono');
                $V_CORREO = $this->input->post('correo');
            $this->ClientesModel->pc($V_RUT_CLIENTE, $V_NOMBRE, $V_APELLIDOS, $V_DIRECCION, $V_TELEFONO, $V_CORREO);
        }
        $this->index();
    }
/*
    public function insertar_clientes() {
        $respuesta = 'VALORES INCORRECTOS';
        if($this->input->post('rut_clilente')){

            $data = array(
                'RUT_CLIENTE' => $this->input->post('rut_cliente'),
                'NOMBRE' => $this->input->post('nombre'),
                'APELLIDOS' => $this->input->post('apellidos'),
                'DIRECCION' => $this->input->post('direccion'),
                'TELEFONO' => $this->input->post('telefono'),
                'CORREO' => $this->input->post('correo'),
            );
            
            $this->ClientesModel->insertarCliente($data);

            $respuesta = 'Se insertaron correctamente los datos';

            $this->index();

         }

         return $respuesta;
    }
/*

    public function insertar_clientes() {
        $respuesta = 'VALORES INCORRECTOS';
        if($this->input->post('rut_cliente')){

            $data = array(
                'RUT_CLIENTE' => $this->input->post('rut_cliente'),
                'ID_PERSONA' => $this->input->post("24"),
            );
            $dataa = array (
                'ID_PERSONA' => $this->input->post("24"),
                'NOMBRE' => $this->input->post('nombre'),
                'APELLIDOS' => $this->input->post('apellidos'),
                'DIRECCION' => $this->input->post('direccion'),
                'TELEFONO' => $this->input->post('telefono'),
                'CORREO' => $this->input->post('correo'),
            );
            $this->ClientesModel->insertarCliente($data);
            $this->ClientesModel->insertarCliente2($dataa);
            $respuesta = 'Se insertaron correctamente los datos';

            $this->index();

         }

         return $respuesta;
    }
    */
}