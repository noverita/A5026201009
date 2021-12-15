<!DOCTYPE html>
<html>
<head>
	<title>EAS - Tabel nilaikuliah</title>
</head>
<body>

	<h3>Data Nilai Kuliah Mahasiswa</h3>

	<a href="/nilaikuliah/tambah"> + Tambah Pegawai Baru</a>

	<br/>
	<br/>

	<table border="1">
		<tr>
			<th>NRP</th>
			<th>Nilai Angka</th>
			<th>SKS</th>
			<th>Nilai Huruf</th>
			<th>Bobot</th>
		</tr>
		@foreach($nilaikuliah as $nk)
		<tr>
			<td>{{ $nk->NRP }}</td>
			<td>{{ $nk->NilaiAngka }}</td>
			<td>{{ $nk->SKS }}</td>
		</tr>
		@endforeach
	</table>

</body>
</html>
