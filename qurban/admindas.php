<?php
session_start();
if (!isset($_SESSION['username']) || $_SESSION['level'] !== 'admin') {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Dashboard Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(to right,rgb(189, 198, 206),rgb(217, 221, 201));
            font-family: 'Segoe UI', sans-serif;
            min-height: 100vh;
        }

        .card {
            border: none;
            border-radius: 12px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            animation: slideDown 0.8s ease forwards;
            opacity: 0;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
        }

        .icon-box {
            font-size: 2.5rem;
            color: #0d6efd;
        }

        .navbar-brand {
            font-weight: bold;
            font-size: 1.4rem;
        }

        @keyframes slideDown {
            from {
                opacity: 0;
                transform: translateY(-30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        h3 {
            animation: fadeIn 1s ease-out;
            color: white;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

        .container .card {
            background-color: #ffffffdd;
        }

        .card-title, .card-text {
            color: #333;
        }

    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4">
    <a class="navbar-brand" href="#">🕌 Aplikasi Qurban</a>
    <div class="collapse navbar-collapse justify-content-end">
        <ul class="navbar-nav">
            <li class="nav-item">
                <span class="nav-link text-white">Halo, <?= $_SESSION['username']; ?></span>
            </li>
            <li class="nav-item">
                <a class="nav-link text-danger" href="login.php">Logout</a>
            </li>
        </ul>
    </div>
</nav>

<div class="container py-5">
    <h3 class="mb-4 text-center">👤Dashboard Admin</h3>
    <div class="row g-4">

        <!-- Kelola Pengguna -->
        <div class="col-md-6 col-lg-3">
            <div class="card shadow-sm p-3">
                <div class="icon-box text-center"><i class="bi bi-people-fill"></i></div>
                <div class="text-center mt-2">
                    <h5 class="card-title">Kelola Pengguna</h5>
                    <p class="card-text">Warga, panitia, berqurban</p>
                    <a href="kelola_pengguna.php" class="btn btn-primary btn-sm">Kelola</a>
                </div>
            </div>
        </div>

        <!-- Kelola Keuangan -->
        <div class="col-md-6 col-lg-3">
            <div class="card shadow-sm p-3">
                <div class="icon-box text-center"><i class="bi bi-cash-coin"></i></div>
                <div class="text-center mt-2">
                    <h5 class="card-title">Kelola Keuangan</h5>
                    <p class="card-text">Iuran & pengeluaran</p>
                    <a href="kelola_keuangan.php" class="btn btn-primary btn-sm">Kelola</a>
                </div>
            </div>
        </div>

        <!-- Pembagian Daging -->
        <div class="col-md-6 col-lg-3">
            <div class="card shadow-sm p-3">
                <div class="icon-box text-center"><i class="bi bi-box2-heart-fill"></i></div>
                <div class="text-center mt-2">
                    <h5 class="card-title">Pembagian Daging</h5>
                    <p class="card-text">Distribusi ke warga</p>
                    <a href="kelola_pembagian.php" class="btn btn-primary btn-sm">Kelola</a>
                </div>
            </div>
        </div>

        <!-- QR Code -->
        <div class="col-md-6 col-lg-3">
            <div class="card shadow-sm p-3">
                <div class="icon-box text-center"><i class="bi bi-qr-code-scan"></i></div>
                <div class="text-center mt-2">
                    <h5 class="card-title">Kelola QR Code</h5>
                    <p class="card-text">Generate & verifikasi</p>
                    <a href="kelola_qrcode.php" class="btn btn-primary btn-sm">Kelola</a>
                </div>
            </div>
        </div>

    </div>
</div>

</body>
</html>
