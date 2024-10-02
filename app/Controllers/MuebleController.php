<?php

namespace App\Controllers;
use App\Models\MuebleModel;
use App\Models\UsuarioModel;
use App\Models\PresupuestoModel;
use App\Models\ProductoModel;
class MuebleController extends BaseController
{
    public function index()
    {   $mueble= new MuebleModel();
        $data['lista']= $mueble->mueblesall();
        
        return view('mueble/muebles', $data);
    }
    public function disponibles()
    {   $mueble= new MuebleModel();
        $data['lista']= $mueble->mueblesall();
       return view('mueble/muebledisp', $data);
    }
    public function ventas()
    {   $mueble= new MuebleModel();
        $data['lista']= $mueble->mueblesall();
       return view('mueble/muebleus', $data);
    }
    public function create($id)
    {
        $usuario= new UsuarioModel();
        $data['usuario']= $usuario->findAll();
        $presupuesto= new PresupuestoModel();
        $data['presupuesto']= $presupuesto->find($id);
        $producto= new ProductoModel();
        $data['madera']= $producto->findAll();
        $data['lista']=$id;
       
        return view('mueble/crear', $data);
    }
    public function store()
    {
          if($this->request->getPost('estatus')==1)
                $estatus=1;
          else
                $estatus=0;

          $presupuesto= $this->request->getPost('presupuesto');
          $usuario= $this->request->getPost('usuario');
          $nombre= $this->request->getPost('nombre_mueble');
          $producto1= $this->request->getPost('producto1');
          $precio1= $this->request->getPost('precio1');
          $producto2= $this->request->getPost('producto2');
          $precio2= $this->request->getPost('precio2');
          $producto3= $this->request->getPost('producto3');
          $precio3= $this->request->getPost('precio3');
          $producto4= $this->request->getPost('producto4');
          $precio4= $this->request->getPost('precio4');
          $producto5= $this->request->getPost('producto5');
          $precio5= $this->request->getPost('precio5');
          $precio6= $this->request->getPost('precio6');
          $condiciones= $this->request->getPost('cond_pago');
          $transporte= $this->request->getPost('transporte');
          $descuento= $this->request->getPost('descuento');
          $teentrega= $this->request->getPost('tentrega');
          $garantia= $this->request->getPost('garantia');
          $subtotal= $this->request->getPost('subtotal');
          $total= $this->request->getPost('total');
          $fecha= date("Y-m-d");
         
        $data=[  "id_presupuesto"=>$presupuesto,
                 "id_usuario"=>$usuario,
                 "nombre_mueble"=>$nombre,
                 "producto1"=>$producto1,
                 "precio1"=>$precio1,
                 "producto1"=>$producto2,
                 "precio1"=>$precio2,
                 "producto1"=>$producto3,
                 "precio1"=>$precio3,
                 "producto1"=>$producto4,
                 "precio1"=>$precio4,
                 "producto1"=>$producto5,
                 "precio1"=>$precio5,
                 "precio1"=>$precio6,
                 "transporte"=>$transporte,
                 "descuento"=>$descuento,
                 "cond_pago"=>$condiciones,
                 "tentrega"=>$teentrega,
                 "garantia"=>$garantia,
                 "subtotal"=>$subtotal,
                 "total"=>$total,
                 "statusmueble"=>$estatus,
                 "created_at"=>$fecha
                ];
          $muebleModel= new MuebleModel();
          $respuesta=$muebleModel->insertar($data);
          
          if($respuesta>0)
          {
            //echo "Guardado con Exito";
            return redirect()->to(base_url('muebles'))->with('mensaje','1');
          }
          else{
            //echo "No Guardado";
              return redirect()->to(base_url('muebles'))->with('mensaje','0');
          } 
    }
      public function edit($id)
      {
        $mueble= new MuebleModel();
        $data['lista']= $mueble->muebleId($id);
        return view('mueble/editar', $data);
      }
      public function save()
      {
        if($this->request->getPost('estatus')==1)
              $estatus=1;
        else
              $estatus=0;
        $id= $this->request->getPost('mueble');
        $presupuesto= $this->request->getPost('presupuesto');
        $usuario= $this->request->getPost('usuario');
        $nombre= $this->request->getPost('nombre_mueble');
        $condiciones= $this->request->getPost('condiciones');
        $transporte= $this->request->getPost('transporte');
        $descuento= $this->request->getPost('descuento');
        $teentrega= $this->request->getPost('tentrega');
        $garantia= $this->request->getPost('garantia');
        $subtotal= $this->request->getPost('subtotal');
        $total= $this->request->getPost('total');
        $fecha= date("Y-m-d");
      
      $data=[ 
              "id_presupuesto"=>$presupuesto,
              "id_usuario"=>$usuario,
              "nombre_mueble"=>$nombre,
              "transporte"=>$transporte,
              "descuento"=>$descuento,
              "cond_pago"=>$condiciones,
              "tentrega"=>$teentrega,
              "garantia"=>$garantia,
              "subtotal"=>$subtotal,
              "total"=>$total,
              "statusmueble"=>$estatus,
              "updated_at"=>$fecha
              ];
          $productoModel= new MuebleModel();
          $respuesta=$productoModel->modificar($id,$data);
          if($respuesta>0)
          {
              return redirect()->to(base_url('muebles'))->with('mensaje','2');
          }
          else{
              return redirect()->to(base_url('editarmueble/$id'))->with('mensaje','3');
          }
    }
      public function show($id)
      {
        $muebleModel= new MuebleModel();
        $item['lista']=$muebleModel->muebleId($id);
        return view('mueble/mostrar',$item);
      }
  
      public function delete($id)
      {
          $muebleModel= new MuebleModel();
          $data=["id_mueble"=>$id];
          $respuesta=$muebleModel->borrar($id);
  
          if($respuesta)
          {
              return redirect()->to(base_url('/muebles'))->with('mensaje','4');
          }
          else{
              return redirect()->to(base_url('/muebles'))->with('mensaje','5');
          }
      }
      public function compra($id)
      {
        $mueble= new MuebleModel();
        $data['lista']= $mueble->muebleId($id);
        return view('mueble/ventacli', $data);
      }
      public function mostrar($id)
      {
        $mueble= new MuebleModel();
        $data['lista']= $mueble->muebleId($id);
        return view('mueble/mostrarmueble', $data);
      }
}