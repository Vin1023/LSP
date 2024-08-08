<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Halaman Login</title>
    <style>
        body {
            background-color: #f8f9fa;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }
        .card {
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .card-header, .card-footer {
            border-radius: 15px 15px 0 0;
        }
        .card-footer {
            border-radius: 0 0 15px 15px;
            background-color: #17a2b8;
        }
        .card-body {
            padding: 2rem;
        }
        .btn-login {
            background-color: #17a2b8;
            color: #fff;
            border: none;
        }
        .btn-login:hover {
            background-color: #138496;
        }
    </style>
</head>
<body>
    <div class="card" style="max-width: 400px;">
        <div class="card-header bg-info text-white text-center">
            <h4>Universitas Bersama</h4>
        </div>
        @if (session()->has('loginError'))
        <div class="alert alert-danger" role="alert">
            {{ session('loginError') }}
        </div>
        @endif
        <div class="card-body">
            <form action="{{ route('actionlogin') }}" method="POST">
                @csrf
                <div class="text-center mb-4">
                    <img src="{{ asset('images/profile.png') }}" class="rounded-circle" alt="Profile" width="120" height="120">
                    <h3 class="mt-3">Log In</h3>
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="Masukkan Email Anda" required>
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Masukkan Password Anda" required>
                </div>

                <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-login">Log In</button>
                </div>
                <div class="mt-3 text-center">
                    <small><a href="/buatakun">Buat Akun</a></small>
                </div>
            </form>
        </div>
        <div class="card-footer text-center text-white">
            &copy; 2024 Universitas Bersama
        </div>
    </div>
</body>
</html>
