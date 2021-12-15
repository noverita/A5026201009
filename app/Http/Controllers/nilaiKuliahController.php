<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class nilaiKuliahController extends Controller
{
    public function index()
    {
    	// mengambil data dari table nilaikuliah
    	$nilaikuliah = DB::table('nilaikuliah')->get();

    	// mengirim data pegawai ke view index
    	return view('nilaikuliah.index',['nilaikuliah' => $nilaikuliah]);

    }
// method untuk menampilkan view form tambah nilaikuliah
public function tambah()
{

	// memanggil view tambah
	return view('nilaikuliah.tambah');

}
// method untuk insert data ke table nilaikuliah
public function store(Request $request)
{
	// insert data ke table nilaikuliah
	DB::table('nilaikuliah')->insert([
		'NRP' => $request->nrp,
		'NilaiAngka' => $request->nilaiangka,
		'SKS' => $request->sks
	]);
	// alihkan halaman ke halaman pegawai
	return redirect('/nilaikuliah');

}
}
