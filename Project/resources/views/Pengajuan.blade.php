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
            background-color: #e9ecef; /* Light gray background for the page */
        }
        .header {
            background-color: #343a40; /* Dark gray for header */
            color: #fff;
            padding: 15px 0;
        }
        .header h1 {
            margin: 0;
            font-size: 1.5rem;
        }
        .dropdown-menu {
            background-color: #343a40; /* Matching header background for dropdown */
        }
        .dropdown-item {
            color: #ced4da; /* Light gray text for dropdown items */
        }
        .dropdown-item:hover {
            background-color: #495057; /* Slightly lighter gray on hover */
            color: #fff;
        }
        .table {
            background-color: #fff; /* White background for the table */
            border-radius: 0.5rem; /* Rounded corners for the table */
            overflow: hidden; /* Hide overflow for rounded corners */
        }
        .table th, .table td {
            vertical-align: middle; /* Center align text in cells */
        }
        .table-bordered {
            border: 1px solid #dee2e6; /* Border color for table */
        }
        .btn-success, .btn-danger {
            border-radius: 0.25rem; /* Rounded corners for buttons */
        }
        .footer {
            background-color: #343a40; /* Dark gray for footer */
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
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <table class="table table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Jenis Kelamin</th>
                    <th>Tempat Lahir</th>
                    <th>Tanggal Lahir</th>
                    <th>Alamat</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                @php $no = 1; @endphp
                @foreach ($mahasiswa as $mhs)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{$mhs->nama}}</td>
                    <td>{{$mhs->jeniskel}}</td>
                    <td>{{$mhs->tempatlahir}}</td>
                    <td>{{$mhs->tanggallahir}}</td>
                    <td>{{$mhs->alamat}}</td>
                    <td>
                        <form action="{{ route('updateStatus', $mhs->id) }}" method="POST" style="display: inline;">
                            @csrf
                            <input type="hidden" name="status" value="diterima">
                            <button type="submit" class="btn btn-success">Diterima</button>
                        </form>
                        <form action="{{ route('updateStatus', $mhs->id) }}" method="POST" style="display: inline;">
                            @csrf
                            <input type="hidden" name="status" value="ditolak">
                            <button type="submit" class="btn btn-danger">Ditolak</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <footer class="footer text-center fixed-bottom">
        &copy; 2024 Universitas Bersama
    </footer>
</body>
</html>
