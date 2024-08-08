<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Mahasiswa Baru</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <style>
        body {
            background-color: #e9ecef; /* Latar belakang halaman */
        }
        .header {
            background-color: #007bff; /* Warna biru cerah untuk header */
            border-bottom: 4px solid #0056b3; /* Garis bawah untuk efek kontras */
        }
        .header h1 {
            margin: 0;
            font-size: 1.75rem;
        }
        .card {
            border: 1px solid #dee2e6; /* Garis border pada card */
            border-radius: 1rem; /* Sudut membulat */
            overflow: hidden;
            transition: transform 0.2s ease-in-out;
        }
        .card:hover {
            transform: scale(1.02); /* Efek zoom saat hover */
        }
        .card-img-top {
            height: 200px; /* Sesuaikan ukuran gambar */
            object-fit: cover;
        }
        .card-body {
            text-align: center;
        }
        .btn-custom {
            background-color: #28a745; /* Warna hijau untuk tombol */
            color: #fff;
            border: none;
        }
        .btn-custom:hover {
            background-color: #218838;
        }
        .btn-warning {
            background-color: #ffc107; /* Warna kuning untuk tombol edit */
            color: #000;
        }
        .btn-warning:hover {
            background-color: #e0a800;
        }
        .btn-danger {
            background-color: #dc3545; /* Warna merah untuk tombol delete */
            color: #fff;
        }
        .btn-danger:hover {
            background-color: #c82333;
        }
        .card-footer {
            background-color: #f8f9fa; /* Warna latar footer card */
            border-top: 1px solid #dee2e6;
        }
        footer {
            background-color: #007bff; /* Warna biru cerah untuk footer */
            color: #fff;
            border-top: 4px solid #0056b3;
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header class="header d-flex justify-content-between align-items-center p-3 text-white">
        <div class="container">
            <h1 class="mb-0">Universitas Bersama</h1>
        </div>
        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
              Menu
            </button>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="/dashboard">Dashboard</a></li>
                @if (Auth::user()->role == 'Mahasiswa')
                    <li><a class="dropdown-item" href="/profile">Profile</a></li>
                    <li><a class="dropdown-item" href="/daftar">Pendaftaran Mahasiswa</a></li>
                @endif
                @if (Auth::user()->role == 'admin')
                    <li><a class="dropdown-item" href="/datamhs">Data Mahasiswa</a></li>
                    <li><a class="dropdown-item" href="/pengumuman">Pengumuman</a></li>
                    <li><a class="dropdown-item" href="/pengajuan">Pengajuan Mahasiswa</a></li>
                    <li><a class="dropdown-item" href="/akun">Pengajuan Akun</a></li>
                @endif
                <li><a class="dropdown-item" href="{{ route('actionlogout') }}">Keluar</a></li>
            </ul>
        </div>
    </header>
    
    <div class="container mt-4">
        <div class="row">
            @foreach ($pengumuman as $p)
                <div class="col-md-4 mb-4">
                    <div class="card shadow-sm">
                        @if($p->thumbnail)
                            <img src="{{ asset('storage/' . $p->thumbnail) }}" alt="Gambar {{ $p->judul }}" class="card-img-top">
                        @else
                            <div class="card-img-top bg-light d-flex align-items-center justify-content-center" style="height: 200px;">
                                <p class="text-muted">Tidak ada gambar</p>
                            </div>
                        @endif
                        <div class="card-body">
                            <h5 class="card-title">{{ $p->judul }}</h5>
                            <p class="card-text">{{ Str::limit($p->isi, 100) }}</p>
                            <p class="card-text">{{ $p->kategori }}</p>
                        </div>
                        @if (Auth::user()->role == 'admin')
                            <div class="card-footer d-flex justify-content-between">
                                <a href="/{{ $p->id }}/edit" class="btn btn-warning btn-sm">Edit</a>
                                <form action="/{{ $p->id }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                </form>
                            </div>
                        @endif
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    
    <footer class="bg-info text-white text-center py-3 fixed-bottom">
        &copy; 2024 Universitas Bersama
    </footer>
</body>
</html>
