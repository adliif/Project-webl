<?php

namespace App\Models;

use CodeIgniter\Model;

class KamarModel2 extends Model
{
    protected $table = 'mkamar';
    protected $primaryKey = 'id';
    protected $allowedFields = ['cNoKamar', 'cNameKamar', 'cFasilitas','status'];


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
    	$this->allowedFields = ['cNoKamar', 'cNameKamar', 'cFasilitas','status'];
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
        $this->allowedFields = ['cNoKamar', 'cNameKamar', 'cFasilitas','status'];
        $this->table = $table;
        return $this->where($where)->set($data)->update();
    }

}
