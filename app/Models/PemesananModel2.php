<?php

namespace App\Models;

use CodeIgniter\Model;

class PemesananModel2 extends Model
{
    protected $table = 'pemesanan';
    protected $primaryKey = 'id';
    protected $allowedFields = ['id_kamar', 'tanggal_pemesanan', 'tanggal_masuk','tanggal_keluar','harga'];

    public function getData($id = false,$table){
        $this->table = $table;
        if($id == false){
            return $this->findAll();
        }else{
            return $this->where(["id"=>$id])->first();
        }
     }

    public function insertData($table, $data)
    {
    	$this->allowedFields = ['id_kamar', 'tanggal_pemesanan', 'tanggal_masuk','tanggal_keluar','harga'];
        $this->table = $table;
        $this->insert($data);
    }

    public function deleteByCondition($table,$where)
    {
        // Delete data based on the provided condition
         $this->table = $table;
        return $this->where($where)->delete();
    }
    
    public function UpdateData($table, $data,$where)
    {
        $this->allowedFields = ['id_kamar', 'tanggal_pemesanan', 'tanggal_masuk','tanggal_keluar','harga','status'];
        $this->table = $table;
        return $this->where($where)->set($data)->update();
    }

}
