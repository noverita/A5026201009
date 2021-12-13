@extends('layout.bahagia')

   @section('title', 'Mengedit Data Pegawai')
   @section('judulhalaman', 'Edit Data Pegawai')

   @section('konten')



	<br/>
	<br/>

	@foreach($pegawai as $p)
	<form action="/pegawai/update" method="post">
		{{ csrf_field() }}
        <table>
            <input type="hidden" name="id" value="{{ $p->pegawai_id }}">
            <tr>
              <td>Nama</td>
              <td><input type="text" required="required" name="nama" value="{{ $p->pegawai_nama }}" style="width: 13cm"></td>
            </tr>
            <tr>
              <td> Jabatan</td>
              <td> <input type="text" required="required" name="jabatan" value="{{ $p->pegawai_jabatan }}" style="width: 13cm"></td>
            </tr>
            <tr>
              <td> Umur</td>
              <td> <input type="number" required="required" name="umur" value="{{ $p->pegawai_umur }}" style="width: 13cm"></td>
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
	@endforeach
    @endsection

