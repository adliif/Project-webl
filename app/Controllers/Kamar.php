<?php

namespace App\Controllers;
use App\Models\KamarModel;
class Kamar extends BaseController
{
	protected $kamarModel;
	public function __construct(){
		$this->kamarModel = new KamarModel();
	}


    public function index()
    {
        $list_data = $this->kamarModel->findAll();
        // dd($list_data);

        $data["title"] = "Data Kamar Hotel";
        $data['list'] = $list_data;
         return view('kamar/list',$data);
    }

    public function edit($id){
         $data = $this->kamarModel->getData($id,"mkamar");
         echo json_encode($data);
    }

    public function simpan(){
        // dd($this->request->getVar());
    	//  ['cNoKamar', 'cNameKamar', 'cFasilitas'];
        $table = "mkamar";
        $data =  [
                    "cNoKamar" => $this->request->getVar('cNoKamar'),
                    'cNameKamar' => $this->request->getVar('cNameKamar'), 
                    'cFasilitas' => $this->request->getVar('cFasilitas'), 
                    ];
        // $insert = $this->staffModel->insert($data);
        $this->kamarModel->insertData($table, $data);
        echo json_encode(array("status" => TRUE));
    }

     public function hapus($id){
        $table = "mkamar";
        $this->kamarModel->deleteByCondition($table,["id"=>$id]);
        echo json_encode(array("status" => TRUE));
    }

    public function update($id){
        $table = "mkamar";
        $data =  [
                    "cNoKamar" => $this->request->getVar('cNoKamar'),
                    'cNameKamar' => $this->request->getVar('cNameKamar'), 
                    'cFasilitas' => $this->request->getVar('cFasilitas'), 
                    ];

        $this->kamarModel->UpdateData($table, $data,["id"=>$id]);
        echo json_encode(array("status" => TRUE));
    }


}
