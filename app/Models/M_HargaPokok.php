<?php

namespace App\Models;

use CodeIgniter\Model;

class M_HargaPokok extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'harga_pokok';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['persediaan_awal', 'pembelian', 'barang_tersedia', 'persediaan_akhir', 'harga_pokok'];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];

    public function updateData($data)
    {
        // Query mengubah data berdasarkan id
        return $this->db->table('harga_pokok')
        ->set('persediaan_awal', $data['persediaan_awal'])
        ->set('pembelian', $data['pembelian'])
        ->set('barang_tersedia', $data['barang_tersedia'])
        ->set('persediaan_akhir', $data['persediaan_akhir'])
        ->set('harga_pokok', $data['harga_pokok'])
        ->where('id', $data['id'])
        ->update();
    }
}
