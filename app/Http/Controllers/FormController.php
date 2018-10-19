<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FormController extends Controller
{
    //Method menampilkan view yang berisi form
    public function create(){
      return view('/form/create');
    }

    //Method untuk menampilkan isi file yang telah berhasil disimpan dalam storage lokal
    public function show($id){
      $content = Storage::get(''.$id.'.txt');
      $array   = explode(",",$content);
      return  view('form/formdetail', ['array'=> $array]);
    }

    //Method untuk menyimpan inputan form kedalam storage lokal dalam bentu file txt
    public function store(Request $request){
    //validasi inputan form
      $this->validate($request,[
        'nama'       => 'required',
        'email'      => 'required|min:5|email',
        'birth'      => 'required',
        'telepon'    => 'required|min:5|numeric',
        'alamat'     => 'required|min:5',
        'gender'     => 'required'
    ]);
    //Menyimpan file dalam bentuk file txt
      $namafile=$request->nama;
      $tanggal=time();
      $tname = (date("dmYHis",$tanggal));
      $content = $request->nama.",".$request->email.",".$request->birth.",".$request->telepon.",".$request->gender.",".$request->alamat;
      Storage::put($namafile."-".$tname.'.txt', $content);
      return view('/form/terimakasih');
    }

}
