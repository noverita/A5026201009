@extends('layout.bahagia')

   @section('title', 'Mengedit Data Sepeda Motor')
   @section('judulhalaman', 'Edit Data Sepeda Motor')

   @section('konten')


 <br>
	@foreach($sepedamotor as $sm)
	<form action="/sepedamotor/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $sm->kodesepedamotor }}"> <br/>
		<table style="width:5%">
            <tr>
              <td>Merk:</td>
              <td><input type="text" name="merk" required="required" value="{{ $sm->merksepedamotor }}" style="width: 13cm"></td>
            </tr>
            <tr>
              <td> Stock:</td>
              <td> <input type="number" name="stock" required="required" value="{{ $sm->stocksepedamotor }}" style="width: 13cm"></td>
            </tr>
            <tr>
              <td> Tersedia:</td>
              <td> <input type="radio" id="ya" name="tersedia" value="Y" @if ($sm->tersedia === "Y" ) checked="checked" @endif>
                          <label for="ya">Ya</label>
                          <input type="radio" id="tidak" name="tersedia" value="T" @if ($sm->tersedia === "T" ) checked="checked" @endif>
                          <label for="tidak">Tidak</label></td>
            </tr>
          </table>
          <br>
		<p><input type="submit" value="Simpan Data"></p>
        <p><a href="/sepedamotor" style="color: black"> Kembali</a></p>
	</form>
	@endforeach
@endsection
