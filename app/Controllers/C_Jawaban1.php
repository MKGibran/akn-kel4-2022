<?php

namespace App\Controllers;

use App\Models\M_Jawaban1;
use App\Controllers\BaseController;

class C_Jawaban1 extends BaseController
{
    public function __construct()
    {
       $this->Jawaban1 = new M_Jawaban1();
    }

    public function index()
    {
        // Mengambil data dari database
        $query = $this->Jawaban1->get();

        $data = [
            'title' => 'AKN Kelompok 4 | Jawaban 1',
            'results' => $query->getResult('array')
        ];

        return view('content/V_Jawaban1', $data);
    }

    public function addData()
    {
        // Menangkap data yang dikirim dari view dengan method post
       $data = [
        'tanggal' => $this->request->getPost('Tanggal'),
        'nama' => $this->request->getPost('Nama'),
        'debit' => $this->request->getPost('Debit'),
        'kredit' => $this->request->getPost('Kredit'),
       ];

       $this->Jawaban1->insert($data);
       return redirect()->back();
    }

    public function updateData()
    {
        // Menangkap data yang dikirim dari view dengan method post
        $data = [
            'id' => $this->request->getPost('id'),
            'tanggal' => $this->request->getPost('Tanggal'),
            'nama' => $this->request->getPost('Nama'),
            'debit' => $this->request->getPost('Debit'),
            'kredit' => $this->request->getPost('Kredit'),
           ];

        // Mengirimkan data ke model
        $this->Jawaban1->updateData($data);
        return redirect()->back();
    }

    public function deleteData($id)
    {
        // Query menghapus data berdasarkan id
        $this->Jawaban1->delete($id);
        return redirect()->back();
    }
}
