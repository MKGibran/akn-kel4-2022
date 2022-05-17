<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\M_Soal1;

class C_Soal1 extends BaseController
{
    public function __construct()
    {
       $this->Soal1 = new M_Soal1();
    }

    public function index()
    {
        // Mengambil data dari database
        $query = $this->Soal1->get();

        $data = [
            'title' => 'AKN Kelompok 4 | Soal 2',
            'results' => $query->getResult('array')
        ];

        return view('content/V_Soal1', $data);
    }

    public function addData()
    {
        // Menangkap data yang dikirim dari view dengan method post
       $data = [
        'tanggal' => $this->request->getPost('Tanggal'),
        'uraian' => $this->request->getPost('Uraian'),
        'nominal' => $this->request->getPost('Nominal'),
       ];

       // Query menambahkan data
       $this->Soal1->insert($data);
       return redirect()->back();
    }

    public function updateData()
    {
        // Menangkap data yang dikirim dari view dengan method post
        $data = [
            'id' => $this->request->getPost('id'),
            'tanggal' => $this->request->getPost('Tanggal'),
            'uraian' => $this->request->getPost('Uraian'),
            'nominal' => $this->request->getPost('Nominal'),
           ];
        
        // Mengirimkan data ke model
        $this->Soal1->updateData($data);
        return redirect()->back();
    }

    public function deleteData($id)
    {
        // Query menghapus data berdasarkan id
        $this->Soal1->delete($id);
        return redirect()->back();
    }
}
