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
    public function delete(request $request, $id)
    {
        $data = dudi::find($id);
        $data->delete();
        return "Data Berhasil di Hapus";
    }
    public function update(request $request, $id){
      $perusahaan = $request->perusahaan;
      $kota = $request->kota;
      $alamat = $request->alamat;
      $email = $request->email;
      $cp = $request->cp;
      $jabatan = $request->jabatan;
      $kontak = $request->kontak;
      $kuota = $request->kuota;

      $data = dudi::find($id);
      $data->perusahaan = $perusahaan;
      $data->kota = $kota;
      $data->alamat = $alamat;
      $data->email = $email;
      $data->cp = $cp;
      $data->jabatan = $jabatan;
      $data->kontak = $kontak;
      $data->kuota = $kuota;

      $data->save();

      return "Data berhasil di update";
      
    }
}
