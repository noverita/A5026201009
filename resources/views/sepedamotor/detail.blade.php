@extends('layout.bahagia')

   @section('title', 'Details Data Sepeda Motor')
   @section('judulhalaman', 'Details Data Sepeda Motor')

   @section('konten')

	<a href="/sepedamotor"> Kembali</a>

	<br/>
	<br/>

	@foreach($sepedamotor as $sm)



		Merk: {{ $sm->merksepedamotor }} <br/>
		Stock: {{ $sm->stocksepedamotor }} <br/>
		Tersedia: {{ $sm->tersedia }} <br/>


	@endforeach
    @endsection

