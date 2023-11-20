<?php

namespace App\Controllers;
use App\Models\PemesananModel;
use App\Models\KamarModel;
class Pemesanan extends BaseController
{
    protected $pemesananModel;
    protected $kamarModel;
    public function __construct(){
        $this->pemesananModel = new PemesananModel();
        $this->kamarModel = new KamarModel();
    }


    public function index()
    {
        $list_kamar = $this->kamarModel->findAll();
        $list_data = $this->pemesananModel->getData($id = false,"v_pemesanan");
        // dd($list_kamar);
        $data["title"] = "Data Pemesanan Hotel";
        $data['list'] = $list_data;
        $data['list2'] = $list_kamar;
         return view('Pemesanan/list',$data);
    }

    public function edit($id){
         $data = $this->pemesananModel->getData($id,"pemesanan");
         echo json_encode($data);
    }

    public function simpan(){
        // dd($this->request->getVar());
        //  ['id_kamar', 'tanggal_pemesanan', 'tanggal_masuk'];
        $table = "pemesanan";
        $data =  [
                    "id_kamar" => $this->request->getVar('id_kamar'),
                    'tanggal_pemesanan' => $this->request->getVar('tanggal_pemesanan'), 
                    'tanggal_masuk' => $this->request->getVar('tanggal_masuk'), 
                    'tanggal_keluar' => $this->request->getVar('tanggal_keluar'), 
                    'harga' => $this->request->getVar('harga'), 
                    
                    ];
        // $insert = $this->staffModel->insert($data);
        $this->pemesananModel->insertData($table, $data);
        echo json_encode(array("status" => TRUE));
    }

     public function hapus($id){
        $table = "pemesanan";
        $this->pemesananModel->deleteByCondition($table,["id"=>$id]);
        echo json_encode(array("status" => TRUE));
    }

    public function update($id){
        $table = "pemesanan";
        $data =  [
                    "id_kamar" => $this->request->getVar('id_kamar'),
                    'tanggal_pemesanan' => $this->request->getVar('tanggal_pemesanan'), 
                    'tanggal_masuk' => $this->request->getVar('tanggal_masuk'), 
                    'tanggal_keluar' => $this->request->getVar('tanggal_keluar'), 
                    'harga' => $this->request->getVar('harga'), 
                    ];

        $this->pemesananModel->UpdateData($table, $data,["id"=>$id]);
        echo json_encode(array("status" => TRUE));
    }

    public function acc($id){
        $table = "pemesanan";
        $data =  [
                    'status' => "Dikonfirmasi", 
                    ];

        // $this->pemesananModel->where(["id"=>$id])->set($data)->update();
        $this->pemesananModel->UpdateData($table, $data,["id"=>$id]);
        echo json_encode(array("status" => TRUE));
    }



}
