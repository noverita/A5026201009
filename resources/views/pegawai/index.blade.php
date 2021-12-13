@extends('layout.bahagia')

   @section('title', 'Data Pegawai')
   @section('judulhalaman', 'Data Pegawai')

   @section('konten')
	<a href="/pegawai/tambah"> + Tambah Pegawai Baru</a>

	<br>
    <br>
    <style>
        th {
            width: 15%;
            text-align: center;
            background-color: #216d80;
            height: 1cm;
            color: white;
            font-size: 24px
        }
        td{
            font-size: 18px
        }
    </style>
    <div class="container">
        <form action="/pegawai/cari" method="GET">
            <input style="width: 50%" type="text" name="cari" placeholder="Cari Pegawai berdasarkan nama atau alamat .." value="{{ old('cari') }}">
            <input type="submit" class="btn btn-default" value="CARI">
        </form>
    </div>
    <br>
	<table border="1">
		<tr>
			<th>Nama</th>
			<th>Alamat</th>
			<th>Opsi</th>
		</tr>
		@foreach($pegawai as $p)
		<tr>
			<td>{{ $p->pegawai_nama }}</td>
			<td>{{ $p->pegawai_alamat }}</td>

			<td>
                <a href="/pegawai/view/{{ $p->pegawai_id }}">View Details</a>
                |
				<a href="/pegawai/edit/{{ $p->pegawai_id }}">Edit</a>
				|
				<a href="/pegawai/hapus/{{ $p->pegawai_id }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>

    {{$pegawai->links()}}
    @endsection


