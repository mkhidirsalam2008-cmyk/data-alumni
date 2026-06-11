
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Alumni Elektro Unsri</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body{
            background:#f5f7fb;
        }

        .header{
            background:#003366;
            color:white;
            padding:25px;
            border-radius:15px 15px 0 0;
        }

        .card-form{
            border:none;
            border-radius:15px;
            overflow:hidden;
            box-shadow:0 0 20px rgba(0,0,0,.1);
        }

        .section-title{
            color:#003366;
            font-weight:bold;
            margin-top:20px;
            margin-bottom:15px;
            border-left:5px solid #003366;
            padding-left:10px;
        }

        .btn-submit{
            background:#003366;
            border:none;
        }

        .btn-submit:hover{
            background:#00264d;
        }
    </style>
</head>

<body>

<div class="container py-5">

    <div class="card card-form">

        <div class="header text-center">
            <h2>Form Pendataan Alumni</h2>
            <h5>Himpunan Mahasiswa Elektro Universitas Sriwijaya</h5>
            
        </div>

        <div class="card-body p-4">
 <div class="d-flex justify-content-between mb-3">

        <a href="{{ url('/') }}"
           class="btn btn-secondary">
            ← Kembali ke Beranda
        </a>

    </div>
            <form action="{{ url('/alumni') }}"
                  method="POST"
                  enctype="multipart/form-data">

                @csrf

                <h5 class="section-title">
                    Data Pribadi
                </h5>

                <div class="mb-3">
                    <label class="form-label">
                        Nama Lengkap dengan Gelar
                    </label>
                    <input type="text"
                           name="nama_gelar"
                           class="form-control"
                           required>
                </div>

                <div class="row">

                    <div class="col-md-6 mb-3">
                        <label class="form-label">
                            Tahun Angkatan
                        </label>
                        <select name="tahun_angkatan" class="form-select" required>
    

    @for($tahun = date('Y'); $tahun >= 1950; $tahun--)
        <option value="{{ $tahun }}">
            {{ $tahun }}
        </option>
    @endfor

</select>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label">
                            3 Digit Terakhir NIM
                        </label>
                        <input type="text"
                               maxlength="3"
                               name="nim_3_digit"
                               class="form-control" required>
                    </div>

                </div>

                <div class="mb-3">
                    <label class="form-label">
                        Jenis Kelamin
                    </label>

                    <select name="jenis_kelamin"
                            class="form-select"required>
                        
                        <option value="Laki-laki">
                            Laki-laki
                        </option>
                        <option value="Perempuan">
                            Perempuan
                        </option>
                    </select>
                </div>

                <div class="row">

                    <div class="col-md-6 mb-3">
                        <label>Tempat Lahir</label>
                        <input type="text"
                               name="tempat_lahir"
                               class="form-control" required>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label>Tanggal Lahir</label>
                        <input type="date"
                               name="tanggal_lahir"
                               class="form-control" required>
                    </div>

                </div>

                <div class="row">

                    <div class="col-md-6 mb-3">
                        <label>No HP</label>
                        <input type="text"
                               name="no_hp"
                               class="form-control" required>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label>No WhatsApp</label>
                        <input type="text"
                               name="no_whatsapp"
                               class="form-control" required>
                    </div>

                </div>

                <h5 class="section-title">
                    Domisili Saat Ini
                </h5>

                <div class="row">

    <div class="col-md-6 mb-3">
        <label>Provinsi</label>
        <select id="provinsi"
                name="provinsi"
                class="form-select"
                required>
        </select>
    </div>

    <div class="col-md-6 mb-3">
        <label>Kota/Kabupaten</label>
        <select id="kota"
                name="kota_kabupaten"
                class="form-select"
                required>
        </select>
    </div>

</div>

<div class="row">

    <div class="col-md-6 mb-3">
        <label>Kecamatan</label>
        <select id="kecamatan"
                name="kecamatan"
                class="form-select"
                required>
        </select>
    </div>

    <div class="col-md-6 mb-3">
        <label>Kelurahan</label>
        <select id="kelurahan"
                name="kelurahan"
                class="form-select"
                required>
        </select>
    </div>

</div>

                <div class="mb-3">
                    <label>Alamat Lengkap</label>
                    <textarea class="form-control"
                              rows="3"
                              name="alamat"required></textarea>
                </div>

                <h5 class="section-title">
                    Pekerjaan Saat Ini
                </h5>

                <div class="mb-3">
                    <label>Institusi / Perusahaan</label>
                    <input type="text"
                           name="institusi"
                           class="form-control"required>
                </div>

                <div class="mb-3">
                    <label>Jabatan</label>
                    <input type="text"
                           name="jabatan"
                           class="form-control"required>
                </div>

                <div class="mb-3">
                    <label>Alamat Tempat Kerja</label>
                    <textarea class="form-control"
                              rows="3"
                              name="alamat_kerja"required></textarea>
                </div>

                <h5 class="section-title">
                    Informasi Tambahan
                </h5>

                <div class="mb-3">
                    <label>Bidang Fokus Keahlian</label>
                    <textarea class="form-control"
                              rows="3"
                              name="bidang_keahlian"required></textarea>
                </div>

                <div class="mb-3">
                    <label>Hobi yang Digeluti</label>
                    <textarea class="form-control"
                              rows="3"
                              name="hobi"required></textarea>
                </div>

                <div class="mb-3">
                    <label>Pesan dan Harapan untuk Departemen Elektro Unsri</label>
                    <textarea class="form-control"
                              rows="4"
                              name="pesan_harapan"required></textarea>
                </div>

                <div class="mb-4">
                    <label>Foto Terbaru</label>
                    <input type="file"
                           name="foto"
                           class="form-control"required>
                </div>

                <div class="text-center">
                    <button type="submit"
                            class="btn btn-submit text-white px-5">
                        Simpan Data Alumni
                    </button>
                </div>

            </form>

        </div>
    </div>

</div>
<script>

// =====================
// LOAD PROVINSI
// =====================

fetch('https://www.emsifa.com/api-wilayah-indonesia/api/provinces.json')
.then(response => response.json())
.then(data => {

    let provinsi = document.getElementById('provinsi');

    

    data.forEach(item => {

        provinsi.innerHTML += `
            <option value="${item.name}"
                    data-id="${item.id}">
                ${item.name}
            </option>
        `;

    });

});

// =====================
// PROVINSI -> KOTA
// =====================

document.getElementById('provinsi')
.addEventListener('change', function() {

    let provinsiId =
        this.options[this.selectedIndex].dataset.id;

    fetch(
        `https://www.emsifa.com/api-wilayah-indonesia/api/regencies/${provinsiId}.json`
    )
    .then(response => response.json())
    .then(data => {

        let kota = document.getElementById('kota');

        

        data.forEach(item => {

            kota.innerHTML += `
                <option value="${item.name}"
                        data-id="${item.id}">
                    ${item.name}
                </option>
            `;

        });

        document.getElementById('kecamatan').innerHTML = '';
        document.getElementById('kelurahan').innerHTML = '';

    });

});

// =====================
// KOTA -> KECAMATAN
// =====================

document.getElementById('kota')
.addEventListener('change', function() {

    let kotaId =
        this.options[this.selectedIndex].dataset.id;

    fetch(
        `https://www.emsifa.com/api-wilayah-indonesia/api/districts/${kotaId}.json`
    )
    .then(response => response.json())
    .then(data => {

        let kecamatan =
            document.getElementById('kecamatan');

        

        data.forEach(item => {

            kecamatan.innerHTML += `
                <option value="${item.name}"
                        data-id="${item.id}">
                    ${item.name}
                </option>
            `;

        });

        document.getElementById('kelurahan').innerHTML = '';

    });

});

// =====================
// KECAMATAN -> KELURAHAN
// =====================

document.getElementById('kecamatan')
.addEventListener('change', function() {

    let kecamatanId =
        this.options[this.selectedIndex].dataset.id;

    fetch(
        `https://www.emsifa.com/api-wilayah-indonesia/api/villages/${kecamatanId}.json`
    )
    .then(response => response.json())
    .then(data => {

        let kelurahan =
            document.getElementById('kelurahan');

        

        data.forEach(item => {

            kelurahan.innerHTML += `
                <option value="${item.name}">
                    ${item.name}
                </option>
            `;

        });

    });

});

</script>
</body>
</html>

