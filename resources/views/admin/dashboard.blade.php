<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
          rel="stylesheet">

    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <style>

        body{
            background:#f4f6f9;
        }

        .navbar-custom{
            background:#003366;
        }

        .navbar-custom .navbar-brand,
        .navbar-custom .nav-link{
            color:white;
        }

        .card-stat{
            border:none;
            border-radius:15px;
            box-shadow:0 0 15px rgba(0,0,0,.08);
            transition:.3s;
        }

        .card-stat:hover{
            transform:translateY(-3px);
        }

        .table-container{
            background:white;
            border-radius:15px;
            padding:20px;
            box-shadow:0 0 15px rgba(0,0,0,.08);
        }

        .btn-detail{
            background:#003366;
            color:white;
        }

        .btn-detail:hover{
            background:#00264d;
            color:white;
        }

        .page-title{
            color:#003366;
            font-weight:bold;
        }

    </style>

</head>
<body>

<nav class="navbar navbar-expand-lg navbar-custom">

    <div class="container">

        <a class="navbar-brand fw-bold" href="#">
            Data Alumni Elektro UNSRI
        </a>

        <form method="POST"
              action="{{ route('logout') }}">
            @csrf

            <button class="btn btn-danger">
                <i class="fa-solid fa-right-from-bracket"></i>
                Logout
            </button>
        </form>

    </div>

</nav>

<div class="container py-4">

    <h2 class="page-title mb-4">
        Dashboard Admin
    </h2>

    {{-- Statistik --}}
    <div class="row mb-4">

        <div class="col-md-4">

            <div class="card card-stat">

                <div class="card-body">

                    <h6 class="text-muted">
                        Total Alumni
                    </h6>

                    <h2 class="fw-bold text-primary">
                        {{ $alumni->count() }}
                    </h2>

                </div>

            </div>

        </div>

    </div>

    {{-- Search --}}
    <div class="table-container">

        <div class="d-flex justify-content-between mb-3">

            <h4>
                Daftar Alumni
            </h4>

            <form method="GET">

    <input type="text"
           name="search"
           class="form-control"
           placeholder="Cari alumni..."
           value="{{ request('search') }}">

</form>

        </div>

        <div class="table-responsive">

            <table class="table table-hover align-middle"
                   id="alumniTable">

                <thead class="table-dark">

                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Angkatan</th>
                        <th>No HP</th>
                        <th>Institusi</th>
                        <th>Jabatan</th>
                        <th>Aksi</th>
                    </tr>

                </thead>

                <tbody>

                @foreach($alumni as $item)

                    <tr>

                        <td>
                            {{ $loop->iteration }}
                        </td>

                        <td>
                            {{ $item->nama_gelar }}
                        </td>

                        <td>
                            {{ $item->tahun_angkatan }}
                        </td>

                        <td>
                            {{ $item->no_hp }}
                        </td>

                        <td>
                            {{ $item->institusi }}
                        </td>

                        <td>
                            {{ $item->jabatan }}
                        </td>

                        <td>

                            <a href="/alumni/{{ $item->id }}"
                               class="btn btn-detail btn-sm">

                                <i class="fa-solid fa-eye"></i>
                                Detail

                            </a>

                        </td>

                    </tr>

                @endforeach

                </tbody>

            </table>
<div class="mt-4 d-flex justify-content-center">
    {{ $alumni->links() }}
    
</div>
        </div>

    </div>

</div>

<script>

document.getElementById("searchInput")
.addEventListener("keyup", function() {

    let value =
        this.value.toLowerCase();

    let rows =
        document.querySelectorAll(
            "#alumniTable tbody tr"
        );

    rows.forEach(row => {

        row.style.display =
            row.innerText
                .toLowerCase()
                .includes(value)
            ? ""
            : "none";

    });

});

</script>

</body>
</html>