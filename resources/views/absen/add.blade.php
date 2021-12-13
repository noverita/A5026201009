
   @extends('layout.bahagia')

   @section('title', 'Menambah Absen')
   @section('judulhalaman', 'Menambah Data Absen')

   @section('konten')
    <form action="/absen/store" method="post">
        {{ csrf_field() }}
        <table>
            <tr>
              <td>IDPegawai</td>
              <td><select name="idpegawai" style="width: 13cm" >
                @foreach($pegawai as $p)
                 <option value="{{ $p->pegawai_id }}">{{ $p->pegawai_nama }}</option>
                @endforeach
            </select></td>
            </tr>
            <tr>
              <td>Tanggal </td>
                <td><div class='col-sm-4 input-group date ' id='dtpickerdemo'>
                    <input type='text' class="form-control" name="tanggal" required="required" style="width: 13cm">
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
            </script>
    </td>
            </tr>
            <tr>
              <td> Status</td>
              <td>
                <input type="radio" id="html" name="status" value="I">
                <label for="html">Izin</label>
                <input type="radio" id="css" name="status" value="S" checked="checked">
                <label for="css">Sakit</label>
                <input type="radio" id="javascript" name="status" value="A">
                <label for="javascript">Alpha</label></td>
            </tr>
          </table>
          <br>
        <p><input type="submit" value="Simpan Data"></p>
    </form>
    <p> <a href="/absen"> Kembali</a></p>
@endsection
