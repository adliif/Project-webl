<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PemesananModel;

class User extends BaseController
{
    public $pemesananModel;

    public function __construct(){
        $this->pemesananModel = new PemesananModel();
    }

    protected $helpers=['form'];
    public function index()
    {
        $data =[
            'title' => 'Tampilan user',
        ];
        return view('/user/index', $data);
    }

    public function contact()
    {
        $data =[
            'title' => 'Contact Us',
        ];
        return view('/user/contact', $data);
    }

    public function reservasi()
    {
        $data =[
            'title' => 'Reservasi',
        ];
        return view('/user/reservasi', $data);
    }

    public function transaction()
    {
        $data =[
            'title' => 'Transaction',
            'users' => $this->pemesananModel->getPemesanan()
        ];
        return view('/user/transaction', $data);
    }

    public function create(){
        $pemesanan = $this->pemesananModel->getPemesanan();
        $data=[
            'title'=>'Reservasi',
            'pemesanan'=>$pemesanan
        ];
        return view('/user/transaction',$data);
    }

    public function edit($id){
        $pemesanan = $this->pemesananModel->getPemesanan($id);
        $data = [
            'title' => 'Reschedule',
            'pemesanan'  => $pemesanan,
        ];
        return view('/user/transaction', $data);
    }

    public function update($id){
        $data = [
                'nama' => $this->request->getVar('nama'),
                'kelas' => $this->request->getVar('kelas'),
                'npm' => $this->request->getVar('npm'),
        ];
        $result = $this->pemesananModel->updatePemesanan($data, $id);

        if(!$result){
            return redirect()->back()->withInput()
                ->with('error', 'Gagal menyimpan data');
        }
        return redirect()->to(base_url('/user/transaction'));
    }

    public function destroy($id){
        $result = $this->pemesananModel->deletePemesanan($id);

        if(!$result){
            return redirect()->back()->with('error', 'Gagal menghapus data');
        }
        return redirect()->to(base_url('/user/transaction'))
            ->with('success', 'Berhasil menghapus data');
    }
}
