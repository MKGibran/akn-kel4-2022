<?php

namespace App\Controllers;

use App\Models\M_Soal2;
use App\Controllers\BaseController;

class C_Soal2 extends BaseController
{
    public function __construct()
    {
       $this->Soal2 = new M_Soal2();
    }

    public function index()
    {
        // Mengambil data dari database
        $query = $this->Soal2->get();

        $data = [
            'title' => 'AKN Kelompok 4 | Soal 1',
            'results' => $query->getResult('array')
        ];

        return view('content/V_Soal2', $data);
    }

    public function addData()
    {
        // Menangkap data yang dikirim dari view dengan method post
       $data = [
        'tanggal' => $this->request->getPost('Tanggal'),
        'keterangan' => $this->request->getPost('Keterangan'),
        'kuantitas' => $this->request->getPost('Kuantitas'),
        'unit' => $this->request->getPost('Unit'),
        'harga' => $this->request->getPost('Harga'),
       ];

       // Query menambahkan data
       $this->Soal2->insert($data);
       return redirect()->back();
    }

    public function updateData()
    {
        // Menangkap data yang dikirim dari view dengan method post
        $data = [
            'id' => $this->request->getPost('id'),
            'tanggal' => $this->request->getPost('Tanggal'),
            'keterangan' => $this->request->getPost('Keterangan'),
            'kuantitas' => $this->request->getPost('Kuantitas'),
            'unit' => $this->request->getPost('Unit'),
            'harga' => $this->request->getPost('Harga'),
           ];
        
        // Mengirimkan data ke model
        $this->Soal2->updateData($data);
        return redirect()->back();
    }

    public function deleteData($id)
    {
        // Query menghapus data berdasarkan id
        $this->Soal2->delete($id);
        return redirect()->back();
    }
}
