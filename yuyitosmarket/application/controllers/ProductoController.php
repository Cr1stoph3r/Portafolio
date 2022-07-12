<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class ProductoController extends CI_Controller
{

    
    
    public function __construct()
    {
       
        
        
        parent::__construct();
        $this->load->helper('form');
        $this->load->model('ProductoModel');
        $this->load->database();

    }

    public function index()
    {
        $producto = $this->ProductoModel->selectproductos();
    
        $data = ['titulo' => 'Producto', 'datos' => $producto];

        $this->load->view('header', FALSE);
        $this->load->view('productos/producto', $data, FALSE);
        $this->load->view('footer', FALSE);
    }

    //crud

    public function obtenerEliminados() {
        $producto = $this->ProductoModel->productosEliminados();

        $data = ['titulo' => 'Eliminados', 'datos' => $producto];

        $this->load->view('header', FALSE);
        $this->load->view('productos/eliminados', $data, FALSE);
        $this->load->view('footer', FALSE);
    }


   public function registrar_producto(){
        $producto = $this->ProductoModel->TipoProductos();
        $marcas = $this->ProductoModel->obtenerMarcas();

        $data = ['marcas' => $marcas ,'productos' => $producto];
        $this->load->view('header', FALSE);
        $this->load->view('productos/nuevo', $data, FALSE);
        $this->load->view('footer', FALSE);
    }


    //

    
    public function editar_producto(){
        
        $id = $this->input->post('id');
        $datos = $this->ProductoModel->editarProducto($id);
        $marcas = $this->ProductoModel->obtenerMarcas();

        $data = ['titulo' => 'Editar Producto', 'datos' => $datos , 'marcas' => $marcas ];
        $this->load->view('header', FALSE);
        $this->load->view('productos/editar', $data);
        $this->load->view('footer', FALSE);
    }

    public function actualizarProducto() {

        $respuesta = 'VALORES INCORRECTOS';

        if ($this->input->post('id')) {
            $id = $this->input->post('id');

            $data = array(
            'NOMBRE_PRODUCTO' => $this->input->post('nombre_producto'),
            'STOCK_UNIDAD' => $this->input->post('stock'),
            'TIPO_PRODUCTO' => $this->input->post('marca'),
        );

            $this->ProductoModel->actualizarProducto($id, $data);
        

            $respuesta = 'Se insertaron correctamente los datos';

            $this->index();
        }

        return $respuesta;

    }

    public function activarProducto() {

        $respuesta = 'VALORES INCORRECTOS';

        if ($this->input->post('id')) {
            $id = $this->input->post('id');

            $data = array(
                'ESTADO' => 1
            );

            $this->ProductoModel->actualizarProducto($id, $data);
        

            $respuesta = 'Se insertaron correctamente los datos';

            $this->index();
        }

        return $respuesta;

    }

    public function eliminarProducto() {

        $respuesta = 'VALORES INCORRECTOS';

        if ($this->input->post('id')) {
            $id = $this->input->post('id');

            $data = array(
            'ESTADO' => 0
        );

            $this->ProductoModel->actualizarProducto($id, $data);
        

            $respuesta = 'Se actualizaron correctamente los datos';

            $this->index();
        }

        return $respuesta;

    }

    public function insertar_producto() {
        $respuesta = 'VALORES INCORRECTOS';
        if($this->input->post('marca')){

            $data = array(
                'COD_MARCA' => $this->input->post('marca'),
                'COD_PRODUCTO' => $this->input->post('cod_producto'),
                'NOMBRE_PRODUCTO' => $this->input->post('nombre_producto'),
                'PESO_NETO' => $this->input->post('peso'),
                'PRECIO_UNIDAD' => $this->input->post('precio_unidad'),
                'STOCK_UNIDAD' => $this->input->post('stock'),
                'TIPO_PRODUCTO' => $this->input->post('tipo_producto'),
                'PERECIBILIDAD' => $this->input->post('perecibilidad'),
            );
            
            $this->ProductoModel->insertarProducto($data);

            $respuesta = 'Se insertaron correctamente los datos';

            $this->index();

         }

         return $respuesta;
    }

}