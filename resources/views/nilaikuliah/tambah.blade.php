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
        <?php
            if($n->NilaiAngka <=40){
                echo "D";
            } elseif ($n->NilaiAngka >=41 && $n->NilaiAngka <=60) {
                echo "C";
            } elseif ($n->NilaiAngka >=61 && $n->NilaiAngka <=80) {
                echo "B";
            } else{
                echo "A";
            }
            ?>
            bobot <input type="text" name="bobot" required="required">
            <?php
                $bobot = $n->NilaiAngka * $n->SKS;
                echo $bobot;
                ?>
                <br>
                <input type="submit" value="Simpan Data">
	</form>

</body>
</html>
