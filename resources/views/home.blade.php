<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Data Alumni Elektro Unsri</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
body{
    min-height:100vh;
    display:flex;
    justify-content:center;
    align-items:center;
    background:#f5f7fb;
}

.main-card{
    max-width:800px;
    width:100%;
    border:none;
    border-radius:20px;
    overflow:hidden;
    box-shadow:0 0 25px rgba(0,0,0,.1);
}

.header{
    background:#003366;
    color:white;
    padding:30px;
}

.option-card{
    border:1px solid #ddd;
    border-radius:15px;
    transition:.3s;
}

.option-card:hover{
    transform:translateY(-5px);
    box-shadow:0 5px 15px rgba(0,0,0,.15);
}

.btn-unsri{
    background:#003366;
    color:white;
}
</style>

</head>
<body>

<div class="card main-card">

    <div class="header text-center">
        <h2>Sistem Pendataan Alumni</h2>
        <h4>Himpunan Mahasiswa Eleketro</h4>
        <h5>Universitas Sriwijaya</h5>
    </div>

    <div class="card-body p-5">

        <div class="row">

            <div class="col-md-6 mb-3">

                <div class="card option-card h-100">

                    <div class="card-body text-center">

                        <h4>Login Admin</h4>

                        <p>
                            Untuk Admin atau Dosen
                        </p>

                        <a href="/login"
                           class="btn btn-unsri">
                            Login
                        </a>

                    </div>

                </div>

            </div>

            <div class="col-md-6 mb-3">

                <div class="card option-card h-100">

                    <div class="card-body text-center">

                        <h4>Isi Data Alumni</h4>

                        <p>
                            Untuk Alumni Teknik Elektro
                        </p>

                        <a href="/form-alumni"
                           class="btn btn-success">
                            Isi Form
                        </a>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>

</body>
</html>