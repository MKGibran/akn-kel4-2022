<?php

namespace App\Models;

use CodeIgniter\Model;

class M_Jawaban1 extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'jawaban1';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['tanggal', 'nama', 'debit', 'kredit'];

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
        return $this->db->table('jawaban1')
        ->set('tanggal', $data['tanggal'])
        ->set('nama', $data['nama'])
        ->set('debit', $data['debit'])
        ->set('kredit', $data['kredit'])
        ->where('id', $data['id'])
        ->update();
    }
}
