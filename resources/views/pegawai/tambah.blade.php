@extends('layout.bahagia')

   @section('title', 'Menambah Data Pegawai')
   @section('judulhalaman', 'Tambah Data Pegawai')

   @section('konten')

	<br/>
	<br/>

	<form action="/pegawai/store" method="post">
		{{ csrf_field() }}
        <table>
            <tr>
              <td>Nama</td>
              <td><input type="text" name="nama" required="required" style="width: 13cm"></td>
            </tr>
            <tr>
              <td> Jabatan</td>
              <td> <input type="text" name="jabatan" required="required" style="width: 13cm"></td>
            </tr>
            <tr>
              <td> Umur</td>
              <td> <input type="number" name="umur" required="required" style="width: 13cm"></td>
            </tr>
            <tr>
                <td> Alamat</td>
                <td> <textarea name="alamat" required="required" style="width: 13cm"></textarea></td>
              </tr>
          </table>
          <br>
          <br>
          <p><input type="submit" value="Simpan Data"></p>
          <p><a href="/pegawai"  style="color: black"> Kembali</a></p>
	</form>
    @endsection
