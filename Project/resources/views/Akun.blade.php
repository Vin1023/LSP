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
            background: linear-gradient(to right, #e0f7fa, #80deea); /* Gradient background */
            color: #333; /* Darker text for better readability */
        }
        .header {
            background: linear-gradient(to right, #00796b, #004d40); /* Gradient header */
            color: #fff;
            padding: 20px 0;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); /* Shadow for depth */
        }
        .header h1 {
            margin: 0;
            font-size: 2rem;
            font-weight: bold;
        }
        .dropdown-menu {
            background-color: #004d40; /* Darker gradient for dropdown */
        }
        .dropdown-item {
            color: #fff; /* White text for dropdown items */
        }
        .dropdown-item:hover {
            background-color: #00332d; /* Darker shade on hover */
            color: #fff;
        }
        .table {
            background-color: #ffffff; /* White background for the table */
            border-radius: 0.75rem; /* More rounded corners for the table */
            overflow: hidden; /* Hide overflow for rounded corners */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Shadow for depth */
        }
        .table th, .table td {
            vertical-align: middle; /* Center align text in cells */
        }
        .table-striped tbody tr:nth-of-type(odd) {
            background-color: #f1f8e9; /* Light green for alternating rows */
        }
        .table-dark {
            background-color: #004d40; /* Darker green for table header */
            color: #fff;
        }
        .form-select {
            border-radius: 0.25rem; /* Rounded corners for select */
            border: 1px solid #004d40; /* Border to match the theme */
        }
        .footer {
            background: linear-gradient(to right, #00796b, #004d40); /* Gradient footer */
            color: #fff;
            padding: 15px 0;
            box-shadow: 0 -4px 8px rgba(0, 0, 0, 0.2); /* Shadow for depth */
        }
        .footer p {
            margin: 0;
        }
        .btn-custom {
            background-color: #004d40; /* Custom button background */
            color: #fff;
            border-radius: 0.25rem;
        }
        .btn-custom:hover {
            background-color: #00332d; /* Darker shade on hover */
            color: #fff;
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
            <button class="btn btn-custom dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
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

    <div class="container mt-5">
        <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <thead class="table-dark">
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Status Akun</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($user as $index => $user)
                    <tr>
                        <td>{{ $index + 1 }}</td> <!-- Menampilkan nomor urut -->
                        <td>{{ $user->name }}</td>
                        <td>
                            <form action="/akun/{{ $user->id }}" method="POST">
                                @csrf
                                <select name="statusAkun" class="form-select" onchange="this.form.submit()" {{ in_array($user->statusAkun, ['diterima', 'ditolak']) ? 'disabled' : '' }}>
                                    <option value="diproses" {{ $user->statusAkun == 'diproses' ? 'selected' : '' }}>Diproses</option>
                                    <option value="diterima" {{ $user->statusAkun == 'diterima' ? 'selected' : '' }}>Diterima</option>
                                    <option value="ditolak" {{ $user->statusAkun == 'ditolak' ? 'selected' : '' }}>Ditolak</option>
                                </select>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <footer class="footer text-center fixed-bottom">
        <p>&copy; 2024 Universitas Bersama</p>
    </footer>
</body>
</html>
