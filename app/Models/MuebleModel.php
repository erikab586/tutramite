<?php
namespace App\Models;
use CodeIgniter\Model;

class MuebleModel extends Model
{
    protected $table      = 'detalle_presupuesto';
    protected $primaryKey = 'id_detalle';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['id_presupuesto', 'id_usuario','nombre_mueble','producto1','precio1','producto2','precio2', 
    'producto3','precio3','producto4','precio4','producto5','precio5', 'precio6','transporte', 'descuento', 'cond_pago',
    'tentrega', 'garantia', 'subtotal', 'total', 'status'];

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
        $usuarioModel= $this->db->table('detalle_presupuesto');
        $usuarioModel->insert($data);
        return $this->db->InsertID();

    }
    public function modificar($id, $data)
    {
        $usuarioModel= $this->db->table('detalle_presupuesto');
        $usuarioModel->set($data);
        $usuarioModel->where('id_detalle',$id);
        return $usuarioModel->update();

    }
    public function borrar($id)
    {
        $usuarioModel= $this->db->table('detalle_presupuesto');
        $usuarioModel->where('id_detalle',$id);
        return $usuarioModel->delete();
    }

    public function mueblesall()
    {
        $builder = $this->db->table('detalle_presupuesto');
        $builder->select('detalle_presupuesto.*, presupuest.*, usuario.*');
        $builder->join('presupuest', 'presupuest.id_presupuesto = detalle_presupuesto.id_presupuesto');
        $builder->join('usuario', 'usuario.id_usuario = detalle_presupuesto.id_usuario');
        return $builder->get()->getResultArray();
    }
    public function muebleId($id)
    {
        $builder = $this->db->table('detalle_presupuesto');
        $builder->select('detalle_presupuesto.*, presupuest.*, usuario.*');
        $builder->join('presupuest', 'presupuest.id_presupuesto = detalle_presupuesto.id_presupuesto');
        $builder->join('usuario', 'usuario.id_usuario = detalle_presupuesto.id_usuario');
        $builder->where('id_detalle',$id);
        return $builder->get()->getResultArray();
    }
   
}