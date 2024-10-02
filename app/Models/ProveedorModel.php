<?php
namespace App\Models;
use CodeIgniter\Model;

class ProveedorModel extends Model
{
    protected $table      = 'proveedor';
    protected $primaryKey = 'id_proveedor';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['logo_proveedor','nombre_representante','nombre_empresa', 'telefono','email',
    'direccion','status'];

    protected bool $allowEmptyInserts = false;

    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    public function obtener($data)
    {
        $Usuario= $this->where($data);
        return $Usuario->get()->getResultArray();
    }
    public function insertar($data)
    {
        $usuarioModel= $this->db->table('proveedor');
        $usuarioModel->insert($data);
        return $this->db->InsertID();

    }
    public function modificar($id, $data)
    {
        $usuarioModel= $this->db->table('proveedor');
        $usuarioModel->set($data);
        $usuarioModel->where('id_proveedor',$id);
        return $usuarioModel->update();

    }
    public function borrar($id)
    {
        $usuarioModel= $this->db->table('proveedor');
        $usuarioModel->where('id_proveedor',$id);
        return $usuarioModel->delete();
    }
}