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
            <td>@if($nk->NilaiAngka <=40)
                 D @endif
            @if ($nk->NilaiAngka >=41 && $nk->NilaiAngka <=60)
                 C @endif
            @if ($nk->NilaiAngka >=61 && $nk->NilaiAngka <=80)
                B @endif
            @if($nk->NilaiAngka >=81)
                 A
            @endif</td>
            <td>{{$nk ->NilaiAngka* $nk->SKS}}</td>
		</tr>
		@endforeach
	</table>

</body>
</html>
