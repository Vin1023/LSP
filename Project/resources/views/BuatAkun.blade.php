<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            background-color: #282c34;
            color: #e0e0e0;
        }
        .card {
            border-radius: 20px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3);
            background-color: #333;
        }
        .card-header {
            background-color: #61dafb;
            color: #282c34;
            border-top-left-radius: 20px;
            border-top-right-radius: 20px;
            font-size: 1.5rem;
        }
        .card-footer {
            background-color: #61dafb;
            color: #282c34;
            border-bottom-left-radius: 20px;
            border-bottom-right-radius: 20px;
        }
        .btn-outline-primary {
            border-color: #61dafb;
            color: #61dafb;
        }
        .btn-outline-primary:hover {
            background-color: #61dafb;
            color: #282c34;
        }
        .form-control {
            border-radius: 12px;
            background-color: #444;
            color: #e0e0e0;
        }
        .form-control::placeholder {
            color: #aaa;
        }
        .form-label {
            font-weight: bold;
            color: #e0e0e0;
        }
        .container {
            margin-top: 30px;
        }
        .text-center {
            color: #61dafb;
        }
        .fixed-bottom {
            border-top: 1px solid #e0e0e0;
        }
    </style>
    <title>Halaman Daftar</title>
</head>
<body>
    <div class="card">
      <div class="card-header">
        Universitas Bersama
      </div>
      <div class="container mt-5">
        <div class="card-body">
          <div class="mx-auto" style="max-width: 600px;">
            <form action="/storeakun" method="POST">
              @csrf
              <h3 class="text-center">Formulir Pendaftaran Akun Baru</h3>
              <br>
              
              <div class="mb-3">
                <label for="nama" class="form-label">Nama Lengkap</label>
                <input type="text" class="form-control" placeholder="Masukkan Nama Anda" id="nama" name="nama" required>
              </div>
              
              <div class="mb-3">
                <label for="email" class="form-label">Email Address</label>
                <input type="email" class="form-control" id="email" placeholder="Masukkan Email Anda" name="email" required>
              </div>

              <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" placeholder="Masukkan Password Anda" name="password" required>
              </div>

              <div class="d-grid gap-2">
                <button type="submit" name="submit" class="btn btn-outline-primary">Daftar</button>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="card-footer text-center fixed-bottom">
        &copy; 2024 Universitas Bersama
      </div>
    </div>
</body>
</html>
