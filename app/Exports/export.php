<?php

namespace App\Exports;

use App\dudi;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class export implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return dudi::all();
    }
    public function headings(): array
    {
        return [
            'id',
            'perusahaan',
            'kota',
            'alamat',
            'email',
            'cp',
            'jabatan',
            'kontak',
            'kuota',
            'created_at',
            'updated_at',
        ];
    }
}
