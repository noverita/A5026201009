@extends('layout.bahagia')

   @section('title', 'Mengedit Data Pegawai')
   @section('judulhalaman', 'Edit Data Pegawai')

   @section('konten')

	<a href="/pegawai"> Kembali</a>

	<br/>
	<br/>

	@foreach($pegawai as $p)



		Nama: {{ $p->pegawai_nama }} <br/>
		Jabatan: {{ $p->pegawai_jabatan }} <br/>
		Umur: {{ $p->pegawai_umur }} <br/>
		Alamat: {{ $p->pegawai_alamat }} <br/>


	@endforeach
    @endsection

