<html>
<head>
    <title>Form Pendaftaran Kuota Internet</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
    <script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.0/additional-methods.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fjalla+One&display=swap" rel="stylesheet">
    <style>
        .card {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            transition: 0.3s;
        }

        .card:hover {
            box-shadow: 0 8px 40px 0 rgba(0, 0, 0, 0.2);
        }

        .card-header {
            background-color: indianred;
        }

        .header {
            text-align: center;
            font-size: 30pt;
            color: rgb(247, 235, 181);
            font-family: 'Fjalla One', sans-serif;
        }

        .card-body {
            font-size: 14pt;
            background-color: rgb(241, 234, 168);
            color: indianred;
        }

        .kirim {
            width: 100%;
            background-color: rgb(47, 107, 94);
            color: rgb(247, 235, 181);
            font-size: 18pt;
        }

        .reset {
            width: 100%;
            background-color: rgb(112, 50, 42);
            color: rgb(247, 235, 181);
            font-size: 18pt;
        }

        label.error {
            color: rgb(255, 0, 0);
            font-size: 10pt;
            display: block;
            margin-top: 10px;
        }
    </style>
</head>

<body>
    <div class="container">
        <label><b> Noverita Rizki Pramesta</b></label><br>
        <label><b> Novi</b></label><br>
        <label><b> 5026201009</b></label><br>
        <div class="card">

            <div class="card-header">
                <div class="header"><b> Form Pendaftaran Kuota Internet</b></div>
            </div>
            <div class="card-body">
                <form id="formkuota" action="https://www.telkomsel.com/" method="POST">
                    @csrf
                    <label for="nama"><b> Nama Mahasiswa</b></label><br>
                    <input name="nama" type="text" class="form-control" placeholder="Masukkan Nama..."
                        minlength="2"><br>

                    <label for="nrp" style="color: indianred;"><b> NRP Mahasiswa</b></label><br>
                    <input name="nrp" type="text" class="form-control" placeholder="Masukkan NRP..." minlength="10"
                        maxlength="10"><br>

                    <label for="jurusan"><b> Jurusan </b></label><br>
                    <select class="form-control" name="jurusan">
                        <option value=""></option>
                        <option value="sisteminformasi">Sistem Informasi</option>
                        <option value="elektro">Elektro</option>
                        <option value="informatika">Informatika</option>
                    </select><br>

                    <label for="nohp"><b> Nomor Handphone</b></label><br>
                    <input name="nohp" type="text" class="form-control" placeholder="Masukkan Nomor Handphone..."
                        minlength="10"><br>

                    <p> <input type="submit" value="Kirim" class="kirim"></p>
                    <p> <input type="reset" value="Reset" class="reset"></p>
                </form>
            </div>
        </div>
        <script>
            $(document).ready(function () {
                $("#formkuota").validate({
                    rules: {
                        nama: {
                            required: true,
                            lettersonly: true,
                            minlength: 2
                        },
                        nrp: {
                            required: true,
                            minlength: 10,
                            maxlength: 10,
                            number: true
                        },
                        jurusan: {
                            required: true
                        },
                        nohp: {
                            required: true,
                            minlength: 10,
                            number: true
                        }
                    },
                    messages: {
                        nama: {
                            required: "Nama mahasiswa harus diisi!",
                            lettersonly: "Hanya dapat memasukkan huruf.",
                            minlength: "Paling sedikit terdiri dari 2 huruf."
                        },
                        nrp: {
                            required: "NRP mahasiswa harus diisi!",
                            minlength: "Harus terdiri dari 10 digit angka.",
                            maxlength: "Harus terdiri dari 10 digit angka.",
                            number: "Hanya dapat memasukkan angka."
                        },
                        jurusan: {
                            required: "Jurusan harus dipilih salah satu!"
                        },
                        nohp: {
                            required: "Nomor handphone harus diisi!",
                            minlength: "Paling sedikit terdiri dari 10 digit angka",
                            number: "Hanya dapat memasukkan angka"
                        }
                    },
                });
            });

        </script>
    </div>
</body>

</html>
