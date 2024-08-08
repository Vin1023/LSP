<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa Baru</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <style>
        body {
            background-color: #f8f9fa; /* Background color of the body */
        }
        .header {
            background-color: #343a40; /* Dark color for header */
            color: #fff;
            border-bottom: 4px solid #495057; /* Slightly lighter border for contrast */
        }
        .header h1 {
            margin: 0;
            font-size: 1.75rem;
        }
        .dropdown-menu {
            background-color: #343a40;
        }
        .dropdown-item {
            color: #adb5bd; /* Light gray text for dropdown items */
        }
        .dropdown-item:hover {
            background-color: #495057;
            color: #fff;
        }
        .table {
            background-color: #fff; /* White background for the table */
            border-radius: 0.5rem; /* Rounded corners */
            overflow: hidden;
        }
        .table thead {
            background-color: #007bff; /* Blue header background */
            color: #fff;
        }
        .table tbody tr:nth-child(odd) {
            background-color: #e9ecef; /* Light gray rows */
        }
        .table tbody tr:nth-child(even) {
            background-color: #ffffff; /* White rows for contrast */
        }
        .table th, .table td {
            vertical-align: middle; /* Center align text in table cells */
        }
        .alert-success {
            background-color: #d4edda; /* Light green background for success alerts */
            color: #155724; /* Dark green text */
            border: 1px solid #c3e6cb; /* Green border */
        }
        footer {
            background-color: #343a40; /* Dark footer background */
            color: #fff;
            border-top: 4px solid #495057; /* Matching border for consistency */
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header class="header d-flex justify-content-between align-items-center py-3">
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
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Jenis Kelamin</th>
                    <th>Tempat Lahir</th>
                    <th>Tanggal Lahir</th>
                    <th>Alamat</th>
                    <th>Status Mahasiswa</th>
                </tr>
            </thead>
            <tbody>
                @php $no = 1; @endphp
                @foreach ($mahasiswa as $mhs)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $mhs->nama }}</td>
                    <td>{{ $mhs->jeniskel }}</td>
                    <td>{{ $mhs->tempatlahir }}</td>
                    <td>{{ $mhs->tanggallahir }}</td>
                    <td>{{ $mhs->alamat }}</td>
                    <td>{{ $mhs->statusMahasiswa }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    
    <footer class="bg-info text-white text-center py-3 fixed-bottom">
        &copy; 2024 Universitas Bersama
    </footer>
</body>
</html>
