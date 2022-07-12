<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//rutas Login
$route['default_controller'] = 'loginController/index';
$route['login/validar'] = 'loginController/validarLogin';
$route['login/logout'] = 'loginController/logout';

//rutas clientes
$route['clientes'] = 'ClientesController/index';
$route['clientes/editar'] = 'ClientesController/editar_cliente';
$route['clientes/editarCliente'] = 'ClientesController/actualizarClientes';
$route['clientes/eliminar'] = 'ClientesController/eliminarClientes';
$route['clientes/eliminados'] = 'ClientesController/obtenerEliminados';
$route['clientes/eliminadosActivar'] = 'ClientesController/activarClientes';
$route['clientes/insertar'] = 'ClientesController/SP_RESITRAR_CLIENTE';

//rutas proveedor
$route['proveedor'] = 'ProveedorController/index';

//rutas productos
$route['producto'] = 'ProductoController/index';
$route['producto/editar'] = 'ProductoController/editar_producto';
$route['producto/editarProducto'] = 'ProductoController/actualizarProducto';
$route['producto/eliminar'] = 'ProductoController/eliminarProducto';
$route['producto/eliminados'] = 'ProductoController/obtenerEliminados';
$route['producto/eliminadosActivar'] = 'ProductoController/activarProducto';
$route['producto/insertar'] = 'ProductoController/insertar_producto';

//rutas deuda
$route['deuda'] = 'DeudaController/index';

//rutas marcas
$route['marcas'] = 'MarcasController/index';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;