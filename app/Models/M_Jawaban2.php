<?php

namespace App\Models;

use CodeIgniter\Model;

class M_Jawaban2 extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'jawaban2';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['tanggal', 'unit1', 'harga1', 'total_harga1', 
                                    'unit2', 'harga2', 'total_harga2',
                                    'unit3', 'harga3', 'total_harga3'];

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
        return $this->db->table('jawaban2')
        ->set('tanggal', $data['tanggal'])
        ->set('unit1', $data['unit1'])
        ->set('harga1', $data['harga1'])
        ->set('total_harga1', $data['total_harga1'])
        ->set('unit2', $data['unit2'])
        ->set('harga2', $data['harga2'])
        ->set('total_harga2', $data['total_harga2'])
        ->set('unit3', $data['unit3'])
        ->set('harga3', $data['harga3'])
        ->set('total_harga3', $data['total_harga3'])
        ->where('id', $data['id'])
        ->update();
    }
}
