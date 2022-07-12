<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class ProveedorController extends CI_Controller
{

    protected $proveedor;

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('form');
        $this->load->model('ProveedorModel');

        /*
        $validation = [
			array(
				'field' => 'rut_proveedor',
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
        $proveedor = $this->ProveedorModel->selectProveedor();
    
        $data = ['titulo' => 'Proveedor', 'datos' => $proveedor];

        $this->load->view('header', FALSE);
        $this->load->view('proveedores/proveedor', $data, FALSE);
        $this->load->view('footer', FALSE);
    }


    public function registrar_proveedores()
    {
        $this->load->view('header', FALSE);
        $this->load->view('proveedores/nuevo');
        $this->load->view('footer', FALSE);
        if($this->input->server("REQUEST_METHOD") == "POST"){
            echo $data["rut_proveedor"] = $this->input->post("rut_proveedor");
            echo $data["noimbre_proveedor"] = $this->input->post("noimbre_proveedor");
            echo $data["apellido_materno"] = $this->input->post("apellido_materno");
            echo $data["apellido_paterno"] = $this->input->post("apellido_paterno");
            echo $data["edad"] = $this->input->post("edad");
            echo $data["nacionalidad"] = $this->input->post("nacionalidad");
            echo $data["telefono"] = $this->input->post("telefono");
            echo $data["correo"] = $this->input->post("correo");
        }
    }



    /* controlador eliminadas */
    /*
    public function eliminados()
    {
        $proveedor = $this->ClientesModel->deleteClientes();
        //$clientes = $this->clientes->buscarEstados(0);
        //var_dump($clientes);
        $data = ['titulo' => 'Clientes eliminados', 'datos' => $proveedor];

        $this->load->view('header', FALSE);
        $this->load->view('clientes/eliminados', $data, FALSE);
        $this->load->view('footer', FALSE);
    }
*/
    
    /*insertar nuevo cliente*/ 
    /*
    public function nuevo()
    {
        $proveedor = $this->ProveedorModel->selectClientes();
        $data = ['titulo' =>'Proveedor', 'datos' => $proveedor];

        $this->load->view('header');
        $this->load->view('proveedor/nuevo', $data);
        $this->load->view('footer');
    }
    */
    /*insertar a traves de la url controlador */
    /* 
    public function insertar()
    {
        if($this->input->post() && $this->form_validation->run() == TRUE){
            $data = [
                'rut_proveedor' => $this->input->post('rut_proveedor'),
                'nombre_proveedor' => $this->input->post('nombre_proveedor'),
                'apellido_materno' => $this->input->post('apellido_materno')
            ];

            $this->proveedor->insertarDatos($data);
          
            return redirect(base_url() . '/proveedores');
        }else{
            $data = ['titulo' => 'Agregar proveedor','validation' => $this->form_validation];
            $this->load->view('header');
            $this->load->view('proveedores/nuevo', $data);
            $this->load->view('footer');
        }
*/
        
    }

    /*editar controlador*/ 
    /*
    public function editar($id)
    {

        $cliente = $this->clientes->editarDatos($id);
        $data = ['titulo' => 'Editar cliente', 'cliente' => $cliente];

        $this->load->view('header');
        $this->load->view('clientes/editar', $data);
        $this->load->view('footer');
    }
   */
    /*actualizar controlador*/ 
     /*
    public function actualizar()
    {
        $data = [
            'rut_cliente' => $this->input->post('rut_cliente'),
            'cod_usuario' => $this->input->post('cod_usuario')
        ];
  
        $this->clientes->insertarDatos($data);
        return redirect(base_url().'/clientes');
    }
    */
/*
    public function eliminar($id)
    {

        $data = [
            'id' => $id,
            'estado' => 0
        ];

        $this->clientes->insertarDatos($data);
        return redirect(base_url().'/clientes');
    }
    */
/*
    public function reingresar($id)
    {
 
        $data = [
            'id' => $id,
            'estado' => 1
        ];

        $this->clientes->insertarDatos($data);
        return redirect(base_url().'/clientes');
    }
*/
{
}