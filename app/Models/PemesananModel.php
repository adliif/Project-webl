<?php

namespace App\Models;

use CodeIgniter\Model;

class PemesananModel extends Model
{
    public function savePemesanan($data){
        $this->insert($data);
    }
    
    public function getPemesanan($id = null){
        if($id != null){
            return $this->select('pemesanan.*, kamar.nama_kamar')
            ->join('kamar', 'kamar.id = pemesanan.nomor_kamar')->find($id);
        }
        return $this->select('pemesanan.*')->findAll();

    }

    public function updatePemesanan($data, $id){
        return $this->update($id, $data);
    }

    public function deletePemesanan($id){
        return $this->delete($id);
    }

    protected $table            = 'pemesanan';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['tanggal_pemesanan','tanggal_masuk','tanggal_keluar','nama','nomor_kamar','harga'];

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
