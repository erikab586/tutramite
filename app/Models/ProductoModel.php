<?php
namespace App\Models;
use CodeIgniter\Model;
class ProductoModel extends Model
{
    protected $table      = 'producto';
    protected $primaryKey = 'id_producto';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['id_proveedor','nombre_producto', 'img_producto', 'tipo_producto',
    'precio_producto', 'observacion', 'status', 'ancho', 'alto','profundidad', 'peso'];

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
        $usuarioModel= $this->db->table('producto');
        $usuarioModel->insert($data);
        return $this->db->InsertID();

    }
    public function modificar($id, $data)
    {
        $usuarioModel= $this->db->table('producto');
        $usuarioModel->set($data);
        $usuarioModel->where('id_producto',$id);
        return $usuarioModel->update();

    }
    public function borrar($id)
    {
        $usuarioModel= $this->db->table('producto');
        $usuarioModel->where('id_producto',$id);
        return $usuarioModel->delete();
    }

    public function productosall()
    {
        $builder = $this->db->table('producto');
        $builder->select('producto.*, proveedor.nombre_empresa');
        $builder->join('proveedor', 'proveedor.id_proveedor = producto.id_proveedor');
        return $builder->get()->getResultArray();
    }
    public function productoId($id)
    {
        $builder = $this->db->table('producto');
        $builder->select('producto.*, proveedor.nombre_empresa');
        $builder->join('proveedor', 'proveedor.id_proveedor = producto.id_proveedor');
        return $builder->get()->getResultArray();
    }

    public function productoMadera()
    {   $tipo="Madera Maciza";
        $builder = $this->db->table('producto');
        $builder->select('producto.*, proveedor.nombre_empresa');
        $builder->join('proveedor', 'proveedor.id_proveedor = producto.id_proveedor');
        $builder->where('producto.tipo_producto', $tipo);
        return $builder->get()->getResultArray();
    }

    public function productoTela()
    {
        $tipo= "Telas";
        $builder = $this->db->table('producto');
        $builder->select('producto.*, proveedor.nombre_empresa');
        $builder->join('proveedor', 'proveedor.id_proveedor = producto.id_proveedor');
        $builder->where('producto.tipo_producto', $tipo);
        return $builder->get()->getResultArray();
    }

    public function productoCuero()
    {
        $tipo= "Cuero";
        $builder = $this->db->table('producto');
        $builder->select('producto.*, proveedor.nombre_empresa');
        $builder->join('proveedor', 'proveedor.id_proveedor = producto.id_proveedor');
        $builder->where('producto.tipo_producto', $tipo);
        return $builder->get()->getResultArray();
    }
    public function productoMDF()
    {
        $tipo= "Madera MDF";
        $builder = $this->db->table('producto');
        $builder->select('producto.*, proveedor.nombre_empresa');
        $builder->join('proveedor', 'proveedor.id_proveedor = producto.id_proveedor');
        $builder->where('producto.tipo_producto', $tipo);
        return $builder->get()->getResultArray();
    }
    public function productoMetal()
    {
        $tipo= "Metal";
        $builder = $this->db->table('producto');
        $builder->select('producto.*, proveedor.nombre_empresa');
        $builder->join('proveedor', 'proveedor.id_proveedor = producto.id_proveedor');
        $builder->where('producto.tipo_producto', $tipo);
        return $builder->get()->getResultArray();
    }
    public function productoLiquido()
    {
        $tipo= "Líquidos";
        $builder = $this->db->table('producto');
        $builder->select('producto.*, proveedor.nombre_empresa');
        $builder->join('proveedor', 'proveedor.id_proveedor = producto.id_proveedor');
        $builder->where('producto.tipo_producto', $tipo);
        return $builder->get()->getResultArray();
    }

}