<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* body {

            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        } */

        .bg-custom{
            background-image: url('{{ asset('assets/images/backgrounds/login.jpg') }}');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            height: 100vh;
        }

        .login-card {
            width: 100%;
            max-width: 400px;
            padding: 2rem;
            border-radius: 15px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
            background: #fff;
            animation: fadeIn 0.5s ease-in-out;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(-10px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .btn-primary {
            background-color:rgb(1, 84, 12);
            border: none;
            transition: 0.3s;
        }

        .btn-primary:hover {
            background-color:rgb(3, 140, 44);
        }

        .form-control {
            border-radius: 8px;
        }

        .form-floating label {
            color: #888;
        }
    </style>
</head>

<body class="bg-custom d-flex align-items-center justify-content-center">
    <div class="login-card">
        <h3 class="text-center mb-4">Login</h3>
        <form method="POST" action="{{ route('admin.login') }}">
            @csrf
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="name" name="name" placeholder="name" required autofocus>
                <label for="name">Username</label>
            </div>

            <div class="form-floating mb-3">
                <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                <label for="password">Password</label>
            </div>

            <button type="submit" class="btn btn-primary w-100 py-2">Login</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
