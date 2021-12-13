
   @extends('layout.bahagia')

   @section('title', 'Mengedit Data Absensi')
   @section('judulhalaman', 'Edit Absensi Pegawai')

   @section('konten')

<h3>{{ $judul }}</h3>
	@foreach($absen as $a)
	<form action="/absen/update" method="post">
		{{ csrf_field() }}
		<table>
        <input type="hidden" name="id" value="{{ $a->ID }}">
        <tr>
        <td> IDPegawai</td>
        <td> <select name="idpegawai" style="width: 13cm" >
            @foreach($pegawai as $p)
             <option value="{{ $p->pegawai_id }}" @if ($p->pegawai_id === $a->IDPegawai ) selected="selected" @endif>{{ $p->pegawai_nama }}</option>
            @endforeach
        </select></td></tr>
        <tr>
            <td>Tanggal</td>
            <td>
                    <div class='col-sm-4 input-group date ' id='dtpickerdemo'>
                        <input style="width: 13cm" type='text' class="form-control" name="tanggal" value="{{ $a->Tanggal }}" required="required" />
                        <span class="input-group-addon">
                            <span class="glyphicon glyphicon-calendar"></span>
                        </span>
                    </div>
                </div>
                <script type="text/javascript">
                    $(function() {
                        $('#dtpickerdemo').datetimepicker({
                            format: 'YYYY-MM-DD hh:mm:ss',
                            showTodayButton: false,
                            locale : 'id',
                            "defaultDate": new Date(),
                        });
                    });
                </script></td> </tr>
                <tr>
                <td> Status </td>
               <td> <input type="radio" id="html" name="status" value="I" @if ($a->Status === "I" ) checked="checked" @endif>
                <label for="html">Izin</label>
                <input type="radio" id="css" name="status" value="S"  @if ($a->Status === "S" ) checked="checked" @endif>
                <label for="css">Sakit</label>
                <input type="radio" id="javascript" name="status" value="A"  @if ($a->Status === "A" ) checked="checked" @endif>
                <label for="javascript">Alpha</label></td>
            </tr>
            </table>
            <br>
        <p><input type="submit" value="Simpan Data"></p>
	</form>
	@endforeach

   <p> <a href="/absen" style="color: black"> Kembali</a></p>
   @endsection
