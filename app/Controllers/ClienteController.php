<?php

namespace App\Controllers;
use App\Models\ClienteModel;
class ClienteController extends BaseController
{
    public function index(): string
    {
        return view('cliente/login');
    }

    public function registro(): string
    {
        return view('cliente/registro');
    }

    public function login()
    {
        $email= $this->request->getPost('email');
        $password= $this->request->getPost('password');
        $clienteModel= new clienteModel();
        $item= $clienteModel->obtener(['email'=>$email]);
        if((count($item)>0)&&(password_verify($password,$item[0]['password'])))
        {
            $data=["nombre"=> $item[0]['email'],
                  "apelido"=> $item[0]['apellido'],
                  "telefono"=> $item[0]['telefono'],
                  "email"=> $item[0] ['email']
            ];
            $session= session();
            $session->set($data);
            return redirect()->to(base_url('ventas'))->with('mensaje','1');
        }
        else{
            return redirect()->to(base_url('login'))->with('mensaje','0');
        }
    }

    public function salir()
    {
        $session= session();
        $session->destroy();
        return redirect()->to(base_url('login'));
    }

    public function create() 
    {
        echo "estoy en Crear";
      
        $nombre= $this->request->getPost('nombre');
        $apellido= $this->request->getPost('apellido');
        $telefono= $this->request->getPost('telefono');
        $email= $this->request->getPost('email');
        $password= $this->request->getPost('password');
        $opciones=['cont'=>123456];
        $hash=password_hash($password, PASSWORD_BCRYPT,$opciones);
        $data=["nombre"=>$nombre,
               "apellido"=>$apellido,
               "telefono"=>$telefono,
               "email"=>$email,
               "password"=>$hash];
        $clienteModel= new ClienteModel();
        $respuesta=$clienteModel->insertar($data);
        if($respuesta>0)
        {
            return redirect()->to(base_url('login'))->with('mensaje','1');
           //return "Resgistro con exito";
        }
        else{
           return redirect()->to(base_url('cliente'))->with('mensaje','0');
          //return "No Registrado";
        }
    }
    public function clienteList()
    {
        $cliente= new ClienteModel();
        $data['lista']= $cliente->findAll();
        return view('cliente/clientes', $data);
    }

    public function crearAdmin()
    {
        return view('cliente/crear');
    }
    public function guardarAdmin()
    {
        if($this->request->getPost('estatus')==1)
        {
            $status=1;
        }
        else
        {
            $status=0;
        }
        $nombre= $this->request->getPost('nombre');
        $apellido= $this->request->getPost('apellido');
        $telefono= $this->request->getPost('telefono');
        $email= $this->request->getPost('email');
        $password= $this->request->getPost('password');
        $opciones=['cont'=>123456];
        $hash=password_hash($password, PASSWORD_BCRYPT,$opciones);
        $fecha=date("Y-m-d");
        $data=["nombre"=>$nombre,
               "apellido"=>$apellido,
               "telefono"=>$telefono,
               "email"=>$email,
               "password"=>$hash,
               "status"=>$status,
               "created_at"=> $fecha ];
        $clienteModel= new ClienteModel();
        $respuesta=$clienteModel->insertar($data);
        
       if($respuesta>0)
        {
            return redirect()->to(base_url('getclientes'))->with('mensaje','1');
           //return "Resgistro con exito";
        }
        else{
           return redirect()->to(base_url('clientela'))->with('mensaje','0');
          //return "No Registrado";
        }
    }

    public function edit($id)
    {
        $clienteModel= new ClienteModel();
        $item['cliente']=$clienteModel->find($id);
       // var_dump($item);
        return view('cliente/editar',$item);
    }
    public function save() //Este metodo sirve para capturar los nuevos datos para modificar contrato y editar en la bd
    {
        $id= $this->request->getPost('id');
        $nombre=$this->request->getPost('nombre');
        $apellido=$this->request->getPost('apellido');
        $telefono=$this->request->getPost('telefono');
        $email=$this->request->getPost('email');
        $estatus=$this->request->getPost('estatus');
        $fecha=date("Y-m-d");
        $data=["id_cliente"=>$id,
               "nombre"=>$nombre,
               "apellido"=>$apellido,
               "telefono"=>$telefono,
               "email"=>$email,
               "status"=>$estatus,
               "updated_at"=>$fecha
              ];
       $usuarioModel= new ClienteModel();
        $respuesta=$usuarioModel->modificar($id,$data);
        if($respuesta>0)
        {
            return redirect()->to(base_url('getclientes'))->with('mensaje','2');
        }
        else{
            return redirect()->to(base_url('editarcliente/$id'))->with('mensaje','3');
        }
       

    }


    public function delete($id)
    {
        $usuarioModel= new ClienteModel();
        $data=["id_cliente"=>$id];
        $respuesta=$usuarioModel->borrar($id);

        if($respuesta)
        {
            return redirect()->to(base_url('/getclientes'))->with('mensaje','4');
        }
        else{
            return redirect()->to(base_url('/getclientes'))->with('mensaje','5');
        }
    }
}