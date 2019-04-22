<?php

namespace App\Imports;

use App\dudi;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class Import implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new dudi([
            'id' => $row['id'],
            'perusahaan' => $row['perusahaan'],
            'kota' => $row['kota'],
            'alamat' => $row['alamat'],
            'email' => $row['email'],
            'cp' => $row['cp'],
            'jabatan' => $row['jabatan'],
            'kontak' => $row['kontak'],
            'kuota' => $row['kuota'],
        ]);
    }
}
