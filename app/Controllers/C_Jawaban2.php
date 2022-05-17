<?php

namespace App\Controllers;

use App\Models\M_Jawaban2;
use App\Controllers\BaseController;
use App\Models\M_HargaPokok;

class C_Jawaban2 extends BaseController
{
    public function __construct()
    {
       $this->Jawaban2 = new M_Jawaban2();
       $this->HargaPokok = new M_HargaPokok();
    }

    public function index()
    {
        // Mengambil data dari database
        $query1 = $this->Jawaban2->get();
        $query2 = $this->HargaPokok->get();

        $data = [
            'title' => 'AKN Kelompok 4 | Jawaban 2',
            'results1' => $query1->getResult('array'),
            'results2' => $query2->getResult('array')
        ];

        return view('content/V_Jawaban2', $data);
    }

    public function addData()
    {
        // Menangkap data yang dikirim dari view dengan method post
       $data = [
        'tanggal' => $this->request->getPost('Tanggal'),
        'unit1' => $this->request->getPost('Unit1'),
        'harga1' => $this->request->getPost('Harga1'),
        'total_harga1' => $this->request->getPost('Total_Harga1'),
        'unit2' => $this->request->getPost('Unit2'),
        'harga2' => $this->request->getPost('Harga2'),
        'total_harga2' => $this->request->getPost('Total_Harga2'),
        'unit3' => $this->request->getPost('Unit3'),
        'harga3' => $this->request->getPost('Harga3'),
        'total_harga3' => $this->request->getPost('Total_Harga3'),
       ];

       // Query menambahkan data
       $this->Jawaban2->insert($data);
       return redirect()->back();
    }

    public function updateData1()
    {
        // Menangkap data yang dikirim dari view dengan method post
        $data = [
            'id' => $this->request->getPost('id'),
            'tanggal' => $this->request->getPost('Tanggal'),
            'unit1' => $this->request->getPost('Unit1'),
            'harga1' => $this->request->getPost('Harga1'),
            'total_harga1' => $this->request->getPost('Total_Harga1'),
            'unit2' => $this->request->getPost('Unit2'),
            'harga2' => $this->request->getPost('Harga2'),
            'total_harga2' => $this->request->getPost('Total_Harga2'),
            'unit3' => $this->request->getPost('Unit3'),
            'harga3' => $this->request->getPost('Harga3'),
            'total_harga3' => $this->request->getPost('Total_Harga3'),
           ];
        
        // Mengirimkan data ke model
        $this->Jawaban2->updateData($data);
        return redirect()->back();
    }

    public function deleteData($id)
    {
        // Query menghapus data berdasarkan id
        $this->Jawaban2->delete($id);
        return redirect()->back();
    }

    public function updateData2()
    {
        // Menangkap data yang dikirim dari view dengan method post
        $data = [
            'id' => $this->request->getPost('id'),
            'persediaan_awal' => $this->request->getPost('Persediaan_Awal'),
            'pembelian' => $this->request->getPost('Pembelian'),
            'barang_tersedia' => $this->request->getPost('Barang_Tersedia'),
            'persediaan_akhir' => $this->request->getPost('Persediaan_Akhir'),
            'harga_pokok' => $this->request->getPost('Harga_Pokok'),
           ];
        
        // Mengirimkan data ke model
        $this->HargaPokok->updateData($data);
        return redirect()->back();
    }
}
