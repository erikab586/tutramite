<?php

namespace App\Controllers;
use App\Models\ProveedorModel;
class ProveedorController extends BaseController
{
    public function index()
    {   $proveedor= new ProveedorModel();
        $data['lista']= $proveedor->findAll();
        return view('proveedor/proveedores', $data);
    }
    public function create()
    {
        return view('proveedor/crear');
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
          $file= $this->request->getFile('logo');
          $representante= $this->request->getPost('representante');
          $empresa= $this->request->getPost('empresa');
          $telefono= $this->request->getPost('telefono');
          $email= $this->request->getPost('email');
          $direccion= $this->request->getPost('direccion');
          $estatus= $status;
          $fecha= date("Y-m-d");
         
            if (!$file->isValid()) {
                echo $file->getErrorString();
                exit;
            }
        
            if (!$file->hasMoved()) {
                $lugar = 'images';
                $ruta = ROOTPATH . 'public/' . $lugar;
        
                // Mover el archivo manteniendo el nombre original
                $file->move($ruta);
        
                $foto = $lugar . "/" . $file->getName();
                echo $foto;
            }
        $data=[  "logo_proveedor"=>$foto,
                 "nombre_representante"=>$representante,
                 "nombre_empresa"=>$empresa,
                 "telefono"=>$telefono,
                 "email"=>$email,
                 "direccion"=>$direccion,
                 "status"=>$status,
                 "created_at"=>$fecha
                ];
          $proveedorModel= new ProveedorModel();
          $respuesta=$proveedorModel->insertar($data);
          
          if($respuesta>0)
          {
              return redirect()->to(base_url('proveedores'))->with('mensaje','1');
          }
          else{
              return redirect()->to(base_url('crearproveedor'))->with('mensaje','0');
          } 
      }
      public function edit($id)
      {
          $proveedorModel= new ProveedorModel();
          $item['proveedor']=$proveedorModel->find($id);
         // var_dump($item);
          return view('proveedor/editar',$item);
      }
      public function save() //Este metodo sirve para capturar los nuevos datos para modificar contrato y editar en la bd
      {
          $id= $this->request->getPost('id');
          $logo=$this->request->getPost('logo');
          $empresa=$this->request->getPost('empresa');
          $representante=$this->request->getPost('representante');
          $telefono=$this->request->getPost('telefono');
          $email=$this->request->getPost('email');
          $direccion=$this->request->getPost('direccion');
          $estatus=$this->request->getPost('estatus');
          $fecha=date("Y-m-d");
          $data=["id_proveedor"=>$id,
                 "nombre_representante"=>$representante,
                 "nombre_empresa"=>$empresa,
                 "telefono"=>$telefono,
                 "email"=>$email,
                 "direccion"=>$direccion,
                 "status"=>$estatus,
                 "updated_at"=>$fecha
                ];
          $proveedorModel= new ProveedorModel();
          $respuesta=$proveedorModel->modificar($id,$data);
          if($respuesta>0)
          {
              return redirect()->to(base_url('proveedores'))->with('mensaje','2');
          }
          else{
              return redirect()->to(base_url('editarproveedor/$id'))->with('mensaje','3');
          }
         
        //return var_dump($data, $logo, $id);
      }
  
  
      public function delete($id)
      {
          $proveedorModel= new ProveedorModel();
          $data=["id_proveedor"=>$id];
          $respuesta=$proveedorModel->borrar($id);
  
          if($respuesta)
          {
              return redirect()->to(base_url('/proveedores'))->with('mensaje','4');
          }
          else{
              return redirect()->to(base_url('/proveedores'))->with('mensaje','5');
          }
      }
}