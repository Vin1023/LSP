<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Custom CSS -->
    <style>
        body {
            background-color: #f8f9fa;
            font-family: Arial, sans-serif;
        }
        .header {
            background-color: #343a40; /* Darker background color for the header */
        }
        .header .btn-secondary {
            background-color: #6c757d;
            border: none;
        }
        .header .btn-secondary:hover {
            background-color: #5a6268;
        }
        .card {
            border: 1px solid #ced4da; /* Custom border color for the card */
            border-radius: 0.375rem; /* Adjust border-radius for card */
        }
        .card-body {
            background-color: #ffffff; /* White background for card body */
        }
        .footer {
            background-color: #343a40; /* Darker background color for the footer */
        }
        .footer a {
            color: #ffffff;
            text-decoration: none;
        }
        .footer a:hover {
            text-decoration: underline;
        }
        .alert-warning {
            background-color: #ffeeba;
            color: #856404;
            border-color: #ffeeba;
        }
    </style>
</head>

<body>
    <!-- Header -->
    <header class="header text-white p-3">
        <div class="container d-flex justify-content-between align-items-center">
            <h1 class="h3">Profil Mahasiswa</h1>
            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Menu
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="/dashboard">Dashboard</a></li>
                    <li><a class="dropdown-item" href="/profil">Profil</a></li>
                    <li><a class="dropdown-item" href="{{route('actionlogout')}}">Keluar</a></li>
                </ul>
            </div>
        </div>
    </header>

    <!-- Profil Mahasiswa -->
    <main class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <!-- Check if mahasiswa data exists -->
                @if ($mahasiswa)
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title">{{$mahasiswa->nama}}</h3>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><strong>Jenis Kelamin:</strong> {{$mahasiswa->jeniskel}}</li>
                            <li class="list-group-item"><strong>Tempat Lahir:</strong> {{$mahasiswa->tempatlahir}}</li>
                            <li class="list-group-item"><strong>Tanggal Lahir:</strong> {{$mahasiswa->tanggallahir}}</li>
                            <li class="list-group-item"><strong>Alamat:</strong> {{$mahasiswa->alamat}}</li>
                            <li class="list-group-item"><strong>Status Mahasiswa:</strong> {{$mahasiswa->statusMahasiswa}}</li>
                        </ul>
                    </div>
                </div>
                @else
                <div class="alert alert-warning" role="alert">
                    Data mahasiswa tidak ditemukan.
                </div>
                @endif
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="footer text-white text-center py-3 fixed-bottom">
        <div class="container">
            &copy; 2024 <a href="#" class="text-white">Your Company</a>
        </div>
    </footer>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>
