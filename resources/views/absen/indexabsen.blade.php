@extends('layout.bahagia')
@section('title', 'CRUD Tabel')
   @section('judulhalaman', 'Daftar Absensi Pegawai')

   @section('konten')

	<a href="/absen/add"> + Tambah Absensi</a>

	<br/>
	<br/>
    <style>
        th {
            width: 15%;
            text-align: center;
            background-color: #216d80;
            height: 1cm;
            color: white;
            font-size: 24px
        }
        .ket{
            text-align: left
        }
        td{
            font-size: 18px
        }
    </style>
	<table border="1">
		<tr>

			<th>Nama Pegawai</th>
			<th>Tanggal</th>
			<th>Status</th>
			<th>Opsi</th>
		</tr>
		@foreach($absen as $a)
		<tr>

			<td>{{ $a->pegawai_nama }}</td>
			<td>{{ $a->Tanggal }}</td>
			<td>{{ $a->Status }}</td>
			<td>
				<a href="/absen/edit/{{ $a->ID }}">Edit Absensi</a>
				|
				<a href="/absen/hapus/{{ $a->ID }}">Delete Absensi</a>
			</td>
		</tr>
		@endforeach
	</table>
    <br>
        <div class="ket">
        <table>
        <tr>
            <td style="width: 5cm"><b> Keterangan Status:</b></td>
            <td style="width: 3cm">I : Izin</td>
            <td style="width: 3cm">S : Sakit</td>
            <td style="width: 3cm">A : Alpha</td>
        </tr>
        </table>
        </div>
        @endsection



