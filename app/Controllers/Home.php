<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }

    

    public function home(): string
    {
        $db = db_connect();
        $data['title'] = "Halaman Utama";
        $query   = $db->query("SELECT * FROM grafik");
        // dd($query->getResult());
        $data['grafik_pemesanan'] = $query->getResult();

    	return  view('home',$data);
    }


    public function staff(): string
    {
        $db = db_connect();
        $data['title'] = "Data Staff";
        $query   = $db->query('SELECT * FROM staf');
        $data['list'] = $query->getResult();

        return view('staff',$data);

        // return view('index');
    }

    public function edit($id): string
    {
        $db = db_connect();
        $data['title'] = "Data Staff";
        $query   = $db->query("SELECT * FROM staf WHERE id = '$id' ");
        $data['list'] = $query->getResult();

        return  view('Edit',$data);

        // return view('index');
    }
//  $query   = $db->query("SELECT * FROM staf WHERE id = '$id' ");

    public function hapus($id)
    {
        $db      = \Config\Database::connect(); // Connect to the database
        $builder = $db->table('staf');
        $builder->where('id', $id);

        if ($builder->delete()) {
            return redirect()->to('/home/staff');
        } else {
            die('Error deleting staff member.');
        }

    }


 public function tambah()
    {
        if ($this->request->getMethod() === 'post') {
            $validation = \Config\Services::validation();
            $validation->setRules([
                'nama_staf' => 'required',
                'alamat' => 'required',
                'no_telepon' => 'required',
            ]);

            if ($validation->withRequest($this->request)->run()) {
                // Connect to the database
                $db = \Config\Database::connect();

                // Get data from the form
                $nama_staf = $this->request->getPost('nama_staf');
                $alamat = $this->request->getPost('alamat');
                $no_telepon = $this->request->getPost('no_telepon');

                // Insert data into the 'staff' table
                $query = $db->query("INSERT INTO staf (nama_staf, alamat, no_telepon) VALUES ('$nama_staf', '$alamat', '$no_telepon')");

                // Redirect to the home page
                return redirect()->to('/home/staff');
            } else {
                // Handle validation errors, if any
                return view('home/staff', ['validation' => $validation]);
            }
        }

        return view('home/staff');
    }



 public function update()
    {
        if ($this->request->getMethod() === 'post') {
            $validation = \Config\Services::validation();
            $validation->setRules([
                'nama_staf' => 'required',
                'alamat' => 'required',
                'no_telepon' => 'required',
            ]);

            if ($validation->withRequest($this->request)->run()) {
                // Connect to the database
                $db = \Config\Database::connect();

                // Get data from the form
                $id = $this->request->getPost('id_staff');
                $nama_staf = $this->request->getPost('nama_staf');
                $alamat = $this->request->getPost('alamat');
                $no_telepon = $this->request->getPost('no_telepon');

                // Insert data into the 'staff' table
                // $query = $db->query("INSERT INTO staf (nama_staf, alamat, no_telepon) VALUES ('$nama_staf', '$alamat', '$no_telepon')");
                $query = $db->query("UPDATE `staf` SET `alamat` = '$alamat',nama_staf = '$nama_staf', no_telepon = '$no_telepon' WHERE `id` = '$id'; ");

                // Redirect to the home page
                return redirect()->to('/home/staff');
            } else {
                // Handle validation errors, if any
                return view('home/staff', ['validation' => $validation]);
            }
        }

        return view('home/staff');
    }





}
