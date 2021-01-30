<?php

namespace App\Controllers;

use App\Models\PegawaiModel;

class Pegawai extends BaseController
{
    public function index()
    {
        $pegawai = new PegawaiModel();
        $data['pegawai'] = $pegawai->paginate(5, 'pegawai');
        $data['pager'] = $pegawai->pager;
        $data['nomor'] = nomor($this->request->getVar('page_pegawai'), 5);
        return view('vw_pegawai', $data);
    }
}
