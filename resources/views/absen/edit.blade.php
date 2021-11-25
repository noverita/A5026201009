<!DOCTYPE html>
<html>
<head>
	<title>Mengedit Data Absensi</title>
</head>
<body>

	<h2>Edit Absensi Pegawai</h2>

	@foreach($absen as $a)
	<form action="/absen/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $a->absen_id }}"> <br/>

		IDPegawai <input type="text" required="required" name="idpegawai" value="{{ $a->absen_idPegawai }}"> <br/>
		Tanggal <input type="datetime-local" required="required" name="tanggal" value="{{ $a->absen_tanggal }}"> <br/>
		Status <input type="text" required="required" name="status">{{ $a->absen_status }} <br/>
        <p>
            Keterangan Status: <br>
            I : Izin <br>
            S : Sakit <br>
            A : Alpha <br>
            </p>
        <p><input type="submit" value="Simpan Data"></p>
	</form>
	@endforeach

   <p> <a href="/absen"> Kembali</a></p>

</body>
</html>
