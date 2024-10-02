<?php

namespace App\Controllers;
use App\Models\UsuarioModel;
use App\Models\ClienteModel;
use App\Models\ProductoModel;
use App\Models\PresupuestoModel;
class PresupuestoController extends BaseController
{
    public function index()
    {   $presupuesto= new PresupuestoModel();
        $data['lista']= $presupuesto->findAll();
        return view('inicio', $data);
    }
   
    public function solicitudPresupuesto()
    {
        $presupuesto= new PresupuestoModel();
        $data['lista']= $presupuesto->findAll();
        return view('cliente/presupuestocli', $data);
    }

    public function create(){
        $presupuesto= new ClienteModel();
        $data['cliente']= $presupuesto->findAll();
        return view('presupuesto/crear', $data);
    }
    public function presupuestoCliente(){
        $presupuesto= new ClienteModel();
        $data['cliente']= $presupuesto->findAll();
        $producto= new ProductoModel();
        $data['madera']= $producto->productoMadera();
        $data['tela']= $producto->productoTela();
        $data['cuero']= $producto->productoCuero();
        $data['mdf']= $producto->productoMDF();
        $data['liquido']= $producto->productoLiquido();
        $data['metal']= $producto->productoMetal();
        return view('cliente/formularioPresupuesto', $data);
    }

    public function store()
    {
    
          $file= $this->request->getFile('imagen');
          $usuario= $this->request->getPost('usuario');
          $material= $this->request->getPost('material');

          $madera= $this->request->getPost('madera');
          $tela= $this->request->getPost('tela');
          $cuero= $this->request->getPost('cuero');
          $ancho= $this->request->getPost('ancho');
          $alto= $this->request->getPost('alto');
          $profundidad= $this->request->getPost('profundidad');
          $color= $this->request->getPost('color');
          $acabado= $this->request->getPost('acabado');
          $ubicacion= $this->request->getPost('ubicacion');
          
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
        $data=[  "imagen"=>$foto,
                 "cliente_id"=>$usuario,
                 "material"=>$material,
                 "id_madera"=> $madera,
                 "id_tela"=>$tela,
                 "id_cuero"=>$cuero,
                 "alto"=>$alto,
                 "ancho"=>$ancho,
                 "profundidad"=>$profundidad,
                 "acabado"=>$acabado,
                 "color"=>$color,
                 "ubicacion"=>$ubicacion,
                 "created_at"=>$fecha
                ];
          $presupuestoModel= new PresupuestoModel();
          $respuesta=$presupuestoModel->insertar($data);
          
          if($respuesta>0)
          {
              return redirect()->to(base_url('/solicitud'))->with('mensaje','1');
          }
          else{
              return redirect()->to(base_url('/solicitud'))->with('mensaje','0');
          } 
      }
}