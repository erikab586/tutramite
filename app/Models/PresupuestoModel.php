<?php
namespace App\Models;
use CodeIgniter\Model;

class PresupuestoModel extends Model
{
    protected $table      = 'presupuest';
    protected $primaryKey = 'id_presupuesto';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['imagen','cliente_id', 'material', 'id_tela', 'id_madera', 'id_vidrio','alto','ancho',
    'profundidad', 'acabado', 'color', 'ubicacion'];

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
        $usuarioModel= $this->db->table('presupuest');
        $usuarioModel->insert($data);
        return $this->db->InsertID();

    }
    public function modificar($id, $data)
    {
        $usuarioModel= $this->db->table('presupuest');
        $usuarioModel->set($data);
        $usuarioModel->where('id_presupuesto',$id);
        return $usuarioModel->update();

    }
    public function borrar($id)
    {
        $usuarioModel= $this->db->table('presupuest');
        $usuarioModel->where('id_presupuesto',$id);
        return $usuarioModel->delete();
    }

    
   
}