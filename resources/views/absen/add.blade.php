<!DOCTYPE html>
<html>
<head>
	<title>Menambah Absensi</title>
</head>
<body>


	<h3>Tambah Absensi Pegawai</h3>

	<form action="/absen/store" method="post">
		{{ csrf_field() }}

		IDPegawai <input type="text" name="idpegawai" required="required"> <br/>
		Tanggal <input type="datetime-local" name="tanggal" required="required"> <br/>
		Status <input type="text" name="status" required="required"> <br/>
		<p>
            Keterangan Status: <br>
            I : Izin <br>
            S : Sakit <br>
            A : Alpha <br>
            </p>
        <p><input type="submit" value="Simpan Data"></p>
	</form>
       <p> <a href="/absen"> Kembali</a></p>

</body>
</html>
