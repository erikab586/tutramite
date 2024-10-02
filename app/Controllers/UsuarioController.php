<?php

namespace App\Controllers;
use App\Models\UsuarioModel;
class UsuarioController extends BaseController
{
    public function index(): string
    {
        return view('login');
    }

    public function registro(): string
    {
        return view('cuentaUsuario');
    }

    public function login()
    {
        $email= $this->request->getPost('email');
        $password= $this->request->getPost('password');
        $UsuarioModel= new UsuarioModel();
        $item= $UsuarioModel->obtener(['email'=>$email]);
        if((count($item)>0)&&(password_verify($password,$item[0]['password'])))
        {
            $data=["nombre"=> $item[0]['email'],
                  "apelido"=> $item[0]['apellido'],
                  "telefono"=> $item[0]['telefono'],
                  "email"=> $item[0] ['email'],
                  "status"=> $item[0]['status']
            ];
            $session= session();
            $session->set($data);
            return redirect()->to(base_url('disponibles'))->with('mensaje','1');
        }
        else{
            return redirect()->to(base_url('/'))->with('mensaje','0');
        }
    }

    public function salir()
    {
        $session= session();
        $session->destroy();
        return redirect()->to(base_url('/'));
    }

    public function create() //Este metodo sirve para capturar los datos para un nuevo iva y guardar en la bd
    {
        
        $status=1;
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
               "created_at"=>$fecha];
        $UsuarioModel= new UsuarioModel();
        $respuesta=$UsuarioModel->insertar($data);
        
       if($respuesta>0)
        {
            return redirect()->to(base_url('/'))->with('mensaje','1');
           //return "Resgistro con exito";
        }
        else{
           return redirect()->to(base_url('/cuenta'))->with('mensaje','0');
          //return "No Registrado";
        }
    }
    public function usuarioList()
    {
        $usuario= new UsuarioModel();
        $data['lista']= $usuario->findAll();
        return view('usuario/usuarios', $data);
    }
    public function crearAdmin()
    {
        return view('usuario/crear');
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
        $UsuarioModel= new UsuarioModel();
        $respuesta=$UsuarioModel->insertar($data);
        
       if($respuesta>0)
        {
            return redirect()->to(base_url('getusuarios'))->with('mensaje','1');
           //return "Resgistro con exito";
        }
        else{
           return redirect()->to(base_url('administrador'))->with('mensaje','0');
          //return "No Registrado";
        }
    }

    public function edit($id)
    {
        $usuarioModel= new UsuarioModel();
        $item['usuario']=$usuarioModel->find($id);
       // var_dump($item);
        return view('usuario/editar',$item);
    }
    public function save() //Este metodo sirve para capturar los nuevos datos para modificar contrato y editar en la bd
    {
        $id= $this->request->getPost('id');
        $nombre=$this->request->getPost('nombre');
        $apellido=$this->request->getPost('apellido');
        $telefono=$this->request->getPost('telefono');
        $email=$this->request->getPost('email');
        $status=$this->request->getPost('estatus');
        $fecha=date("Y-m-d");
        $data=["id_usuario"=>$id,
               "nombre"=>$nombre,
               "apellido"=>$apellido,
               "telefono"=>$telefono,
               "email"=>$email,
               "status"=>$status,
               "updated_at"=>$fecha
              ];
        $usuarioModel= new UsuarioModel();
        $respuesta=$usuarioModel->modificar($id,$data);
        if($respuesta>0)
        {
            return redirect()->to(base_url('getusuarios'))->with('mensaje','2');
        }
        else{
            return redirect()->to(base_url('editarusuario/$id'))->with('mensaje','3');
        }
       

    }


    public function delete($id)
    {
        $usuarioModel= new UsuarioModel();
        $data=["id_cliente"=>$id];
        $respuesta=$usuarioModel->borrar($id);

        if($respuesta)
        {
            return redirect()->to(base_url('/getusuarios'))->with('mensaje','4');
        }
        else{
            return redirect()->to(base_url('/getusuarios'))->with('mensaje','5');
        }
    }

}