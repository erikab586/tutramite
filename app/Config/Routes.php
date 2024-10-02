<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
//Funciones de Usuario 
$routes->get('/', 'UsuarioController::index');
$routes->get('cuenta', 'UsuarioController::registro');
$routes->get('administrador','UsuarioController::crearAdmin');
$routes->post('formadmin', 'UsuarioController::guardarAdmin');
$routes->get('editarusuario/(:any)','UsuarioController::edit/$1');
$routes->post('guardarusuario','UsuarioController::save');
$routes->get('eliminarusuario/(:any)','UsuarioController::delete/$1');
$routes->post('loguear', 'UsuarioController::login');
$routes->post('guardar','UsuarioController::create');
$routes->get('salir', 'UsuarioController::salir');
$routes->get('getusuarios', 'UsuarioController::usuarioList');



//Funciones de Cliente
$routes->get('login', 'ClienteController::index');
$routes->get('cliente', 'ClienteController::registro');
$routes->post('verificar', 'ClienteController::login');
$routes->post('crear','ClienteController::create');
$routes->get('saliendo', 'ClienteController::salir');
$routes->get('getclientes', 'ClienteController::clienteList');
$routes->get('clientela','ClienteController::crearAdmin');
$routes->post('formcliente', 'ClienteController::guardarAdmin');
$routes->get('editarcliente/(:any)','ClienteController::edit/$1');
$routes->post('guardarcliente','ClienteController::save');
$routes->get('eliminarcliente/(:any)','ClienteController::delete/$1');

//Funciones de Presupuesto Desde Cliente
$routes->get('presupuestos', 'PresupuestoController::index');
$routes->get('solicitud', 'PresupuestoController::solicitudPresupuesto');  //Desde el cliente
$routes->get('formPresupuesto', 'PresupuestoController::presupuestoCliente'); //Desde el Cliente
$routes->post('cargarPresupuesto', 'PresupuestoController::store');           //Desde el cliente/Administrador

//Funciones de Presupuesto desde Usuario
$routes->get('crearpresupuesto', 'PresupuestoController::create'); //Desde el Administrador


//Funciones de Proveedor
$routes->get('proveedores', 'ProveedorController::index');
$routes->get('crearproveedor','ProveedorController::create');
$routes->post('formproveedor', 'ProveedorController::store');
$routes->get('editarproveedor/(:any)','ProveedorController::edit/$1');
$routes->post('guardarproveedor','ProveedorController::save');
$routes->get('eliminarproveedor/(:any)','ProveedorController::delete/$1');

//Funciones de Productos
$routes->get('productos', 'ProductoController::index');
$routes->get('crearproducto','ProductoController::create');
$routes->post('formproducto', 'ProductoController::store');
$routes->get('editarproducto/(:any)','ProductoController::edit/$1');
$routes->post('guardarproducto','ProductoController::save');
$routes->get('mostrar/(:any)','ProductoController::show/$1');
$routes->get('eliminarproducto/(:any)','ProductoController::delete/$1');

//Funciones Detalle de Presupuesto
$routes->get('disponibles', 'MuebleController::disponibles'); //Desde Administrador
$routes->get('ventas', 'MuebleController::ventas'); //Desde el cliente
$routes->get('muebles', 'MuebleController::index');
$routes->get('crearmueble/(:any)','MuebleController::create/$1');
$routes->post('formmueble', 'MuebleController::store');
$routes->get('editarmueble/(:any)','MuebleController::edit/$1');
$routes->post('guardarmueble','MuebleController::save');
$routes->get('vermueble/(:any)','MuebleController::show/$1');
$routes->get('eliminarmueble/(:any)','MuebleController::delete/$1');
$routes->get('confirmarcompra/(:any)','MuebleController::compra/$1');//Desde el cliente
$routes->get('mostrarmueble/(:any)','MuebleController::mostrar/$1');//Desde el cliente