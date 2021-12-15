<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
</head>
<body>
	<h3>Data Pegawai</h3>

	<a href="/nilaikuliah"> Kembali</a>

	<br/>
	<br/>

	<form action="/nilaikuliah/store" method="post">
		{{ csrf_field() }}
		NRP <input type="text" name="nrp" required="required"> <br/>
		Nilai Angka <input type="text" name="nilaiangka" required="required"> <br/>
		SKS <input type="text" name="sks" required="required"> <br/>

         Nilai Huruf <input type="text" name="nilaihuruf" required="required"> <br/>

            bobot <input type="text" name="bobot" required="required">
                <input type="submit" value="Simpan Data">
	</form>

</body>
</html>
