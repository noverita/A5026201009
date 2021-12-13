@extends('layout.bahagia')

   @section('title', 'Data Sepeda Motor')
   @section('judulhalaman', 'Data Sepeda Motor')

   @section('konten')
	<a href="/sepedamotor/tambah"> + Tambah Data Sepeda Motor</a>

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
        <form action="/sepedamotor/cari" method="GET">
            <input style="width: 50%" type="text" name="cari" placeholder="Cari sepeda motor berdasarkan merk .." value="{{ old('cari') }}">
            <input type="submit" class="btn btn-default" value="CARI">
        </form>
    </div>
    <br>
	<table border="1">
		<tr>
			<th>Merk</th>
			<th>Stock</th>
			<th>Tersedia</th>
            <th>Opsi</th>
		</tr>
		@foreach($sepedamotor as $sm)
		<tr>
			<td>{{ $sm->merksepedamotor }}</td>
			<td>{{ $sm->stocksepedamotor }}</td>
            <td>{{ $sm->tersedia }}</td>

			<td>
                <a href="/sepedamotor/view/{{ $sm->kodesepedamotor }}">View Details</a>
                |
				<a href="/sepedamotor/edit/{{ $sm->kodesepedamotor }}">Edit</a>
				|
				<a href="/sepedamotor/hapus/{{ $sm->kodesepedamotor }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
    <br>
    <table>
        <tr>
            <td style="width: 5cm"><b> Keterangan:</b></td>
            <td style="width: 3cm">Y : Ya</td>
            <td style="width: 3cm">T : Tidak</td>
        </tr>
        </table>
    {{$sepedamotor->links()}}
    @endsection


