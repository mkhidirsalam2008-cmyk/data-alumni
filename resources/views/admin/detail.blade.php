<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Alumni</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
          rel="stylesheet">

    <style>
        body{
            background:#f4f6f9;
        }

        .header{
            background:#003366;
            color:white;
            padding:20px;
            border-radius:15px 15px 0 0;
        }

        .card-custom{
            border:none;
            border-radius:15px;
            overflow:hidden;
            box-shadow:0 0 20px rgba(0,0,0,.08);
        }

        .section-title{
            color:#003366;
            font-weight:bold;
            border-left:5px solid #003366;
            padding-left:10px;
            margin-top:25px;
            margin-bottom:15px;
        }

        .label{
            font-weight:bold;
            color:#555;
        }

        .foto-alumni{
            width:220px;
            height:220px;
            object-fit:cover;
            border-radius:10px;
            border:4px solid #003366;
        }
    </style>
</head>
<body>

<div class="container py-5">

    <div class="card card-custom">

        <div class="header d-flex justify-content-between align-items-center">

            <div>
                <h2 class="mb-0">Detail Data Alumni</h2>
                <small>Himpunan Mahasiswa Elektro UNSRI</small>
            </div>

            <a href="{{ url('/dashboard') }}"
               class="btn btn-light">
                ← Kembali
            </a>

        </div>

        <div class="card-body p-4">

            <div class="row">

                <div class="col-md-4 text-center">

                    @if($alumni->foto)

                        <img src="{{ asset('storage/'.$alumni->foto) }}"
                             class="foto-alumni">

                    @else

                        <img src="https://via.placeholder.com/220"
                             class="foto-alumni">

                    @endif

                </div>

                <div class="col-md-8">

                    <h3 class="text-primary">
                        {{ $alumni->nama_gelar }}
                    </h3>

                    <hr>

                    <div class="row">

                        <div class="col-md-6 mb-3">
                            <div class="label">Angkatan</div>
                            {{ $alumni->tahun_angkatan }}
                        </div>

                        <div class="col-md-6 mb-3">
                            <div class="label">3 Digit NIM</div>
                            {{ $alumni->nim_3_digit }}
                        </div>

                        <div class="col-md-6 mb-3">
                            <div class="label">Jenis Kelamin</div>
                            {{ $alumni->jenis_kelamin }}
                        </div>

                        <div class="col-md-6 mb-3">
                            <div class="label">No HP</div>
                            {{ $alumni->no_hp }}
                        </div>

                    </div>

                </div>

            </div>

            <h5 class="section-title">
                Data Pribadi
            </h5>

            <div class="row">

                <div class="col-md-6 mb-3">
                    <div class="label">Tempat Lahir</div>
                    {{ $alumni->tempat_lahir }}
                </div>

                <div class="col-md-6 mb-3">
                    <div class="label">Tanggal Lahir</div>
                    {{ $alumni->tanggal_lahir }}
                </div>

                <div class="col-md-6 mb-3">
                    <div class="label">No WhatsApp</div>
                    {{ $alumni->no_whatsapp }}
                </div>

            </div>

            <h5 class="section-title">
                Domisili
            </h5>

            <div class="row">

                <div class="col-md-6 mb-3">
                    <div class="label">Provinsi</div>
                    {{ $alumni->provinsi }}
                </div>

                <div class="col-md-6 mb-3">
                    <div class="label">Kota / Kabupaten</div>
                    {{ $alumni->kota_kabupaten }}
                </div>

                <div class="col-md-6 mb-3">
                    <div class="label">Kecamatan</div>
                    {{ $alumni->kecamatan }}
                </div>

                <div class="col-md-6 mb-3">
                    <div class="label">Kelurahan</div>
                    {{ $alumni->kelurahan }}
                </div>

                <div class="col-12 mb-3">
                    <div class="label">Alamat Lengkap</div>
                    {{ $alumni->alamat }}
                </div>

            </div>

            <h5 class="section-title">
                Pekerjaan Saat Ini
            </h5>

            <div class="row">

                <div class="col-md-6 mb-3">
                    <div class="label">Institusi / Perusahaan</div>
                    {{ $alumni->institusi }}
                </div>

                <div class="col-md-6 mb-3">
                    <div class="label">Jabatan</div>
                    {{ $alumni->jabatan }}
                </div>

                <div class="col-12 mb-3">
                    <div class="label">Alamat Tempat Kerja</div>
                    {{ $alumni->alamat_kerja }}
                </div>

            </div>

            <h5 class="section-title">
                Informasi Tambahan
            </h5>

            <div class="mb-4">
                <div class="label">Bidang Fokus Keahlian</div>
                {{ $alumni->bidang_keahlian }}
            </div>

            <div class="mb-4">
                <div class="label">Hobi</div>
                {{ $alumni->hobi }}
            </div>

            <div class="mb-4">
                <div class="label">Pesan dan Harapan</div>

                <div class="p-3 bg-light rounded">
                    {{ $alumni->pesan_harapan }}
                </div>
            </div>

        </div>

    </div>

</div>

</body>
</html>