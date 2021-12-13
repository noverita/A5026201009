<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class sepedaMotorController extends Controller
{
    public function index()
    {
    	// mengambil data dari table sepedamotor
    	$sepedamotor = DB::table('sepedamotor')->paginate(5);

    	// mengirim data sepedamotor ke view index
    	return view('sepedamotor.index',['sepedamotor' => $sepedamotor]);

    }
    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

    		// mengambil data dari table sepedamotor sesuai pencarian data
		$sepedamotor = DB::table('sepedamotor')
		->where('merksepedamotor','like',"%".$cari."%")
		->paginate();

    		// mengirim data sepedamotor ke view index
		return view('sepedamotor.index',['sepedamotor' => $sepedamotor]);

	}
// method untuk menampilkan view form tambah data sepedamotor
public function tambah()
{

	// memanggil view tambah
	return view('sepedamotor.tambah');

}
// method untuk insert data ke table sepedamotor
    public function store(Request $request)
{
	// insert data ke table sepedamotor
	DB::table('sepedamotor')->insert([
		'merksepedamotor' => $request->merk,
		'stocksepedamotor' => $request->stock,
		'tersedia' => $request->tersedia
	]);
	// alihkan halaman ke halaman sepedamotor
	return redirect('/sepedamotor');

}
// method untuk edit data sepedamotor
public function edit($id)
{
	// mengambil data sepedamotor berdasarkan kode yang dipilih
	$sepedamotor = DB::table('sepedamotor')->where('kodesepedamotor',$id)->get();
	// passing data sepedamotor yang didapat ke view edit.blade.php
	return view('sepedamotor.edit',['sepedamotor' => $sepedamotor]);
}
// method untuk melihat detail data pegawai
public function detail($id)
{
	// mengambil data sepedamotor berdasarkan kode yang dipilih
	$sepedamotor = DB::table('sepedamotor')->where('kodesepedamotor',$id)->get();
	// passing data sepedamotor yang didapat ke view edit.blade.php
	return view('sepedamotor.detail',['sepedamotor' => $sepedamotor]);

}
// update data sepedamotor
public function update(Request $request)
{
	// update data sepedamotor
	DB::table('sepedamotor')->where('kodesepedamotor',$request->id)->update([
		'merksepedamotor' => $request->merk,
		'stocksepedamotor' => $request->stock,
		'tersedia' => $request->tersedia
	]);
	// alihkan halaman ke halaman sepedamotor
	return redirect('/sepedamotor');
}
// method untuk hapus data sepedamotor
public function hapus($id)
{
	// menghapus data sepedamotor berdasarkan id yang dipilih
	DB::table('sepedamotor')->where('kodesepedamotor',$id)->delete();

	// alihkan halaman ke halaman sepedamotor
	return redirect('/sepedamotor');
}
}
