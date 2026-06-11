<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Berhasil Dikirim</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
          rel="stylesheet">
</head>

<body class="bg-light">

<div class="container">

    <div class="row justify-content-center vh-100 align-items-center">

        <div class="col-md-6">

            <div class="card shadow border-0">

                <div class="card-body text-center p-5">

                    <h1 class="text-success mb-4">
                        ✓
                    </h1>

                    <h3>
                        Data Berhasil Dikirim
                    </h3>

                    <p class="text-muted mt-3">
                        Terima kasih telah mengisi data alumni
                        Departemen Teknik Elektro Universitas Sriwijaya.
                    </p>

                    <a href="{{ url('/') }}"
                       class="btn btn-primary mt-3">
                        Kembali ke Beranda
                    </a>

                </div>

            </div>

        </div>

    </div>

</div>

</body>
</html>