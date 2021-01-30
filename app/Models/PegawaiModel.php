<?php

namespace App\Models;

use CodeIgniter\Model;

class PegawaiModel extends Model
{
    protected $table      = 'pegawai';
    protected $primaryKey = 'id_pegawai';
    protected $returnType     = 'object';
    protected $allowedFields = ['nama', 'jenis_kelamin', 'no_telp', 'email', 'tanggal_lahir', 'alamat'];
    protected $useTimestamps = true;
}
