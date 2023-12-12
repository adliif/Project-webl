<?php

namespace App\Models;

use CodeIgniter\Model;

class KamarModel extends Model
{
    public function saveKamar($data){
        $this->insert($data);
    }

    public function getKamar($id = null){
        if($id != null){
            return $this->select('kamar.*')
            ->find($id);
        }
        return $this->select('kamar.*')->findAll();

    }

    public function updateKamar($data, $id){
        return $this->update($id, $data);
    }

    public function deleteKamar($id){
        return $this->delete($id);
    }

// KamarModel.php

public function findAllWithTypeNameAndStatus()
{
    $this->select('kamar.*, jeniskamar.type_kamar as type_kamar_name, statuskamar.status as status_name');
    $this->join('jeniskamar', 'jeniskamar.id = kamar.type_kamar');
    $this->join('statuskamar', 'statuskamar.id = kamar.status');
    return $this->findAll();
}


    protected $table            = 'kamar';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields = ['nama_kamar', 'type_kamar', 'status', 'harga'];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];
    
}
