<?php

namespace App\Http\Controllers;

use App\dudi;
use Illuminate\Http\Request;
use App\Exports\export;
use App\Imports\Import;
use Maatwebsite\Excel\Facades\Excel;

class ExcelController extends Controller
{
    public function index(){
      return view('index');
    }
    public function showAll(){
      return dudi::all();
    }
    public function export()
        {
            return Excel::download(new export, 'data.xlsx');
        }

        /**
        * @return \Illuminate\Support\Collection
        */
    public function import()
    {
        Excel::import(new import,request()->file('file'));
        return back();
    }
    public function create(Request $request){
        $data = new dudi;
        $data->perusahaan = $request->perusahaan;
        $data->kota = $request->kota;
        $data->alamat = $request->alamat;
        $data->email = $request->email;
        $data->cp = $request->cp;
        $data->jabatan = $request->jabatan;
        $data->kontak = $request->kontak;
        $data->kuota = $request->kuota;
        $data->save();
        return "Data berhasil Masuk";
    }
}
