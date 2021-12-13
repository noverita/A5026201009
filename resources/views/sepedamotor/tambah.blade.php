@extends('layout.bahagia')

   @section('title', 'Menambah Data Sepeda Motor')
   @section('judulhalaman', 'Tambah Data Sepeda Motor')

   @section('konten')

	<br/>
    <table>
	<form action="/sepedamotor/store" method="post">
		{{ csrf_field() }}
		<table>
            <tr>
              <td>Merk</td>
              <td><input type="text" name="merk" required="required" style="width: 13cm"></td>
            </tr>
            <tr>
              <td> Stock</td>
              <td> <input type="number" name="stock" required="required" style="width: 13cm"></td>
            </tr>
            <tr>
              <td> Tersedia</td>
              <td> <input type="radio" id="ya" name="tersedia" value="Y">
                          <label for="ya">Ya</label>
                          <input type="radio" id="tidak" name="tersedia" value="T" checked="checked">
                          <label for="tidak">Tidak</label></td>
            </tr>
          </table>
          <br>
          <br>
          <p><input type="submit" value="Simpan Data"></p>
          <p><a href="/sepedamotor"  style="color: black"> Kembali</a></p>
	</form>
</table>
    @endsection

