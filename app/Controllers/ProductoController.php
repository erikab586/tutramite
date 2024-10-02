<?php

namespace App\Controllers;
use App\Models\ProductoModel;
use App\Models\ProveedorModel;
class ProductoController extends BaseController
{
    public function index()
    {   $producto= new ProductoModel();
        $data['lista']= $producto->productosall();
        return view('producto/productos', $data);
    }
    public function create()
    {
        $proveedor= new ProveedorModel();
        $data['lista']= $proveedor->findAll();
        return view('producto/crear', $data);
    }
    public function store()
    {
        if($this->request->getPost('estatus')==1)
        {
            $status=1;
        }
        else
        {
            $status=0;
        }
          $proveedor= $this->request->getPost('proveedor');
          $producto= $this->request->getPost('producto');
          $file= $this->request->getFile('imagen');
          $tipo= $this->request->getPost('tipo');
          $precio= $this->request->getPost('precio');
          $estatus= $status;
          $color= $this->request->getPost('color');
          $ancho= $this->request->getPost('ancho');
          $alto= $this->request->getPost('alto');
          $profundidad= $this->request->getPost('profundidad');
          $peso= $this->request->getPost('peso');
          $observacion= $this->request->getPost('observacion');
          $fecha= date("Y-m-d");
         
            if (!$file->isValid()) {
                echo $file->getErrorString();
                exit;
            }
        
            if (!$file->hasMoved()) {
                $lugar = 'images';
                $ruta = ROOTPATH . 'public/' . $lugar;
                $file->move($ruta);
                $foto = $lugar . "/" . $file->getName();
                echo $foto;
            }
        $data=[  "id_proveedor"=>$proveedor,
                 "nombre_producto"=>$producto,
                 "img_producto"=>$foto,
                 "tipo_producto"=>$tipo,
                 "precio_producto"=>$precio,
                 "observacion"=>$observacion,
                 "status"=>$estatus,
                 "color"=>$color,
                 "ancho"=>$ancho,
                 "alto"=>$alto,
                 "profundidad"=>$profundidad,
                 "peso"=>$peso,
                 "created_at"=>$fecha
                ];
          $productoModel= new ProductoModel();
          $respuesta=$productoModel->insertar($data);
          
          if($respuesta>0)
          {
              return redirect()->to(base_url('productos'))->with('mensaje','1');
          }
          else{
              return redirect()->to(base_url('crearproducto'))->with('mensaje','0');
          } 
    }
      public function edit($id)
      {
          $proveedor= new ProveedorModel();
          $item['lista']= $proveedor->findAll();
          $productoModel= new ProductoModel();
          $item['producto']=$productoModel->productoId($id);
          return view('producto/editar',$item);
      }
      public function save()
      {
          if($this->request->getPost('estatus')==1)
          {
            $status=1;
          }
          else
          {
            $status=0;
          }
          $id= $this->request->getPost('id');
          $proveedor= $this->request->getPost('proveedor');
          $producto= $this->request->getPost('producto');
          $tipo= $this->request->getPost('tipo');
          $precio= $this->request->getPost('precio');
          $estatus= $status;
          $color= $this->request->getPost('color');
          $ancho= $this->request->getPost('ancho');
          $alto= $this->request->getPost('alto');
          $profundidad= $this->request->getPost('profundidad');
          $peso= $this->request->getPost('peso');
          $observacion= $this->request->getPost('observacion');
          $fecha= date("Y-m-d");
          $data=["id_proveedor"=>$proveedor,
                 "nombre_producto"=>$producto,
                 "tipo_producto"=>$tipo,
                 "precio_producto"=>$precio,
                 "observacion"=>$observacion,
                 "status"=>$estatus,
                 "color"=>$color,
                 "ancho"=>$ancho,
                 "alto"=>$alto,
                 "profundidad"=>$profundidad,
                 "peso"=>$peso,
                 "created_at"=>$fecha
                ];
          $productoModel= new ProductoModel();
          $respuesta=$productoModel->modificar($id,$data);
          if($respuesta>0)
          {
              return redirect()->to(base_url('productos'))->with('mensaje','2');
          }
          else{
              return redirect()->to(base_url('editarproducto/$id'))->with('mensaje','3');
          }
      }
      public function show($id)
      {
        $productoModel= new ProductoModel();
        $item['producto']=$productoModel->productoId($id);
        return view('producto/mostrar',$item);
      }
  
      public function delete($id)
      {
          $productoModel= new ProductoModel();
          $data=["id_producto"=>$id];
          $respuesta=$productoModel->borrar($id);
  
          if($respuesta)
          {
              return redirect()->to(base_url('/productos'))->with('mensaje','4');
          }
          else{
              return redirect()->to(base_url('/productos'))->with('mensaje','5');
          }
      }
}