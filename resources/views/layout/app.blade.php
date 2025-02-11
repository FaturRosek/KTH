<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kuisioner Laporan</title>
    <link rel="shortcut icon" type="image/png" href="{{ asset('assets/images/logos/favicon.png') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <style>
        /* Atur jarak agar tabel tidak tertindih header dan sidebar */
        .main-content {
            margin-left: 250px; /* Sesuai dengan sidebar */
            margin-top: 80px; /* Sesuaikan dengan tinggi header */
            padding: 20px;
        }
    
        .table-container {
            overflow-x: auto;
            background: #fff;
            padding: 15px;
            border-radius: 8px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
        }
    
        @media (max-width: 768px) {
            .main-content {
                margin-left: 0;
            }
        }
    </style>

</head>

<body>
    @include('layout.header')
    
    @yield('konten')
</body>
        
        