<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            background-color: #f5f5f5;
            font-family: Arial, sans-serif;
        }
        .card {
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .card-header {
            background-color: #4a90e2;
            color: white;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
        }
        .card-footer {
            background-color: #4a90e2;
            color: white;
            border-bottom-left-radius: 10px;
            border-bottom-right-radius: 10px;
        }
        .btn-outline-primary {
            border-color: #4a90e2;
            color: #4a90e2;
        }
        .btn-outline-primary:hover {
            background-color: #4a90e2;
            color: white;
        }
        .form-control {
            border-radius: 8px;
        }
        .form-label {
            font-weight: bold;
        }
    </style>
    <title>Halaman Daftar</title>
</head>
<body>
    <div class="card mx-auto mt-5" style="max-width: 800px;">
        <div class="card-header">
            Universitas Bersama
        </div>
        <div class="card-body">
            <h3 class="text-center mb-4">Formulir Pendaftaran Mahasiswa Baru</h3>
            <form action="/storemhs" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama Lengkap</label>
                    <input type="text" class="form-control" placeholder="Masukkan Nama Anda" id="nama" name="nama" required>
                </div>
                
                <div class="mb-3">
                    <label for="jeniskel" class="form-label">Jenis Kelamin</label>
                    <select id="jeniskel" class="form-select" name="jeniskel">
                        <option value="L">Laki - Laki</option>
                        <option value="P">Perempuan</option>
                    </select>
                </div>
                
                <div class="mb-3">
                    <label for="tempatlahir" class="form-label">Tempat Lahir</label>
                    <input type="text" class="form-control" placeholder="Masukkan Tempat Lahir Anda" id="tempatlahir" name="tempatlahir" required>
                </div>
                
                <div class="mb-3">
                    <label for="tanggallahir" class="form-label">Tanggal Lahir</label>
                    <input type="date" class="form-control" id="tanggallahir" name="tanggallahir" required>
                </div>
                
                <div class="mb-3">
                    <label for="alamat" class="form-label">Alamat</label>
                    <input type="text" class="form-control" placeholder="Masukkan Alamat Anda" id="alamat" name="alamat" required>
                </div>

                <div class="mb-3">
                    <label for="noktp" class="form-label">No. KTP</label>
                    <input type="text" class="form-control" id="noktp" placeholder="Masukkan No. KTP Anda" name="noktp">
                </div>

                <div class="mb-3">
                    <label for="prodi" class="form-label">Prodi</label>
                    <select id="prodi" class="form-select" name="prodi">
                        <option value="IF">Informatika</option>
                        <option value="SI">Sistem Informasi</option>
                        <option value="MJ">Manajemen</option>
                    </select>
                </div>
                
                <div class="d-grid gap-2">
                    <button type="submit" name="submit" class="btn btn-outline-primary">Daftar</button>
                </div>
            </form>
        </div>
        <div class="card-footer text-center">
            &copy; 2024 Universitas Bersama
        </div>
    </div>
</body>
</html>
