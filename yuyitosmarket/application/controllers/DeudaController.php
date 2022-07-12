<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class DeudaController extends CI_Controller
{

    protected $deuda;

    public function __construct()
    {
        parent::__construct();
        
        $this->load->model('DeudaModel');

        $validation = [
			array(
				'field' => 'id_deuda',
				'rules'	=> 'required',
                'errors' => array(
                    'required' => 'El campo {field} es obligatorio.',
                 ),
				),
		];

		$this->form_validation->set_rules($validation);


    }

    public function index()
    {
        $deuda = $this->DeudaModel->selectDeuda();
    
        $data = ['titulo' => 'Deudas', 'datos' => $deuda];

        $this->load->view('header', FALSE);
        $this->load->view('deudas/deuda', $data, FALSE);
        $this->load->view('footer', FALSE);
    }

    /* controlador clientes eliminadas */
    public function eliminados()
    {
        $clientes = $this->ClientesModel->deleteClientes();
        //$clientes = $this->clientes->buscarEstados(0);
        //var_dump($clientes);
        $data = ['titulo' => 'Clientes eliminados', 'datos' => $clientes];

        $this->load->view('header', FALSE);
        $this->load->view('clientes/eliminados', $data, FALSE);
        $this->load->view('footer', FALSE);
    }

    /*insertar nuevo cliente*/ 
    public function nuevo()
    {
        $clientes = $this->ClientesModel->selectClientes();
        $data = ['titulo' =>'Clientes', 'datos' => $clientes];

        $this->load->view('header');
        $this->load->view('clientes/nuevo', $data);
        $this->load->view('footer');
    }
    /*insertar a traves de la url controlador */ 
    public function insertar()
    {
        if($this->input->post() && $this->form_validation->run() == TRUE){
            $data = [
                'id_deuda' => $this->input->post('rut_cliente'),
                'fecha_fiado' => $this->input->post('cod_usuario')
            ];

            $this->clientes->insertarDatos($data);
          
            return redirect(base_url() . '/clientes');
        }else{
            $data = ['titulo' => 'Agregar cliente','validation' => $this->form_validation];
            $this->load->view('header');
            $this->load->view('clientes/nuevo', $data);
            $this->load->view('footer');
        }

        
    }

    /*editar controlador*/ 
    public function editar($id)
    {

        $cliente = $this->clientes->editarDatos($id);
        $data = ['titulo' => 'Editar cliente', 'cliente' => $cliente];

        $this->load->view('header');
        $this->load->view('clientes/editar', $data);
        $this->load->view('footer');
    }
    /*actualizar controlador*/ 
    public function actualizar()
    {
        $data = [
            'rut_cliente' => $this->input->post('rut_cliente'),
            'cod_usuario' => $this->input->post('cod_usuario')
        ];
  
        $this->clientes->insertarDatos($data);
        return redirect(base_url().'/clientes');
    }

    public function eliminar($id)
    {

        $data = [
            'id' => $id,
            'estado' => 0
        ];

        $this->clientes->insertarDatos($data);
        return redirect(base_url().'/clientes');
    }

    public function reingresar($id)
    {
 
        $data = [
            'id' => $id,
            'estado' => 1
        ];

        $this->clientes->insertarDatos($data);
        return redirect(base_url().'/clientes');
    }

}