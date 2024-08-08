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
            background-color: #f0f2f5; /* Light gray background for the page */
        }
        .header {
            background-color: #007bff; /* Bright blue background for header */
            color: #fff;
            padding: 15px 0;
        }
        .header h1 {
            margin: 0;
            font-size: 1.5rem;
        }
        .dropdown-menu {
            background-color: #007bff;
        }
        .dropdown-item {
            color: #e9ecef; /* Light gray text for dropdown items */
        }
        .dropdown-item:hover {
            background-color: #0056b3; /* Darker blue on hover */
            color: #fff;
        }
        .card-body {
            background-color: #fff; /* White background for form */
            border-radius: 0.5rem; /* Rounded corners */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Subtle shadow */
            padding: 20px;
        }
        .form-control {
            border-radius: 0.5rem; /* Rounded corners for form controls */
        }
        .btn-outline-primary {
            color: #007bff;
            border-color: #007bff;
        }
        .btn-outline-primary:hover {
            background-color: #007bff;
            color: #fff;
        }
        .card-footer {
            background-color: #007bff; /* Matching blue for footer */
            color: #fff;
            padding: 10px 0;
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header class="header d-flex justify-content-between align-items-center">
        <div class="container">
            <h1>Universitas Bersama</h1>
        </div>
        
        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
              Menu
            </button>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="/dashboard">Dashboard</a></li>
              @if (Auth::user()->role == 'Mahasiswa')
              <li><a class="dropdown-item" href="/profile">Profile</a></li>
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
    <br>

    <div class="container mt-5">
        <div class="card-body">
            <div class="mx-auto" style="max-width: 600px;">
                <form action="/storepengumuman" method="POST" enctype="multipart/form-data">
                    @csrf
                    <h3 class="text-center mb-4">Penambahan Pengumuman</h3>
                    <div class="mb-3">
                        <label for="judul" class="form-label">Judul Pengumuman</label>
                        <input type="text" class="form-control" id="judul" name="judul" required>
                    </div>
                    <div class="mb-3">
                        <label for="isi" class="form-label">Isi Pengumuman</label>
                        <textarea class="form-control" id="isi" name="isi" rows="4" required></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="kategori">kategori</label>
                        <select id="kategori" class="form-select" name="kategori">
                          <option value="Informasi">Informasi</option>
                          <option value="Pengumuman">Pengumuman</option>
                        </select>
                      </div>
                    <div class="mb-3">
                        <label for="thumbnail" class="form-label">Unggah Thumbnail</label>
                        <input class="form-control" type="file" id="thumbnail" name="thumbnail" accept="image/*">
                    </div>
                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-outline-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <footer class="card-footer text-center fixed-bottom">
        &copy; 2024 Universitas Bersama
    </footer>
</body>
</html>
