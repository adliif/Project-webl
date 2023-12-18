<?php

namespace App\Controllers;
use App\Models\KamarModel2;
use App\Models\KamarModel;
use App\Models\JenisKamarModel;
use App\Models\StatusKamarModel;

class Kamar extends BaseController
{
	protected $kamarModel;
	public function __construct(){
		$this->kamarModel = new KamarModel2();
	}


    public function index2()
    {
        $list_data = $this->kamarModel->findAll();
        // dd($list_data);

        $data["title"] = "Data Kamar - Staf";
        $data['list'] = $list_data;
         return view('kamar/list',$data);
    }
    public function index()
    {
        $kamarModel = new KamarModel();
        $data = [
            'title' => 'Data Kamar - Staf',
            'kamar' => $kamarModel->findAllWithTypeNameAndStatus(),
        ];

        return view('/kamar/list', $data);
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




    
    public function editKamar($id)
    {
        $kamarModel = new KamarModel();
        $jenisKamarModel = new JenisKamarModel();
        $statusKamarModel = new StatusKamarModel();

        $data = [
            'title' => 'Edit Kamar',
            'kamar' => $kamarModel->find($id),
            'jenis_kamar' => $jenisKamarModel->findAll(),
            'status_kamar' => $statusKamarModel->findAll(),
        ];

        return view('/kamar/kamaredit', $data);
    }

    public function updateKamar($id)
    {
        $kamarModel = new KamarModel();

        if ($this->request->getMethod() === 'post') {
            // Get data from the form
            $data = [
                'nama_kamar' => $this->request->getPost('nama_kamar'),
                'type_kamar' => $this->request->getPost('type_kamar'),
                'status' => $this->request->getPost('status'),
                'harga' => $this->request->getPost('harga'),
                // ... add other fields as needed ...
            ];

            // Update data in the 'kamar' table
            $kamarModel->update($id, $data);

            // Redirect or perform other actions after updating
            return redirect()->to(base_url('kamarstaff'))->with('success', 'Kamar updated successfully');
        }

        return redirect()->back()->with('error', 'Invalid request');
    }

    public function tambahKamar()
    {
        $jenisKamarModel = new JenisKamarModel();
        $statusKamarModel = new StatusKamarModel();

        $data = [
            'title' => 'Tambah Kamar',
            'jenis_kamar' => $jenisKamarModel->findAll(),
            'status_kamar' => $statusKamarModel->findAll(),
        ];

        return view('/kamar/kamartambah', $data);
    }

    public function createKamar()
{
    if ($this->request->getMethod() === 'post') {
        $kamarModel = new KamarModel();

        // Ganti 'jenis_kamar' menjadi 'type_kamar'
        $data = [
            'nama_kamar' => $this->request->getPost('nama_kamar'),
            'type_kamar' => $this->request->getPost('type_kamar'),
            'status' => $this->request->getPost('status'),
            'harga' => $this->request->getPost('harga'),
        ];

        $kamarModel->saveKamar($data);

        return redirect()->to(base_url('kamarstaff'))->with('success', 'Kamar added successfully');
    }

    $jenisKamarModel = new JenisKamarModel();
    $statusKamarModel = new StatusKamarModel();

    $data = [
        'title' => 'Tambah Kamar',
        'jenis_kamar' => $jenisKamarModel->findAll(),
        'status_kamar' => $statusKamarModel->findAll(),
    ];

    return view('/kamar/kamartambah', $data);
}

    public function deleteKamar($kamarId)
    {
        $kamarModel = new KamarModel();
        $kamarModel->delete($kamarId);
        return redirect()->to('/kamarstaff')->with('success', 'Kamar deleted successfully');
    }

}
