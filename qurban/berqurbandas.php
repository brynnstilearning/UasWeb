<?php
session_start();
if (!isset($_SESSION['username']) || $_SESSION['level'] !== 'berqurban') {
    header("Location: ../login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Dashboard Berqurban</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(to right, #dfe9f3, #e1d8f1);
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
        }

        .icon-info { color: #0d6efd; }
        .icon-pay { color: #198754; }
        .icon-qr  { color: #fd7e14; }
        .icon-meat { color: #dc3545; }
        .icon-report { color: #6f42c1; }

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
            color: #333;
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
    <h3 class="mb-4 text-center">🐐 Dashboard Berqurban</h3>
    <div class="row g-4">

        <!-- Input Data Diri -->
        <div class="col-md-6 col-lg-4">
            <div class="card shadow-sm p-3">
                <div class="icon-box text-center icon-info"><i class="bi bi-person-lines-fill"></i></div>
                <div class="text-center mt-2">
                    <h5 class="card-title">Input Data Diri</h5>
                    <p class="card-text">Lengkapi informasi pribadi.</p>
                    <a href="input_diri.php" class="btn btn-primary btn-sm">Isi Data</a>
                </div>
            </div>
        </div>

        <!-- Bayar Iuran Qurban -->
        <div class="col-md-6 col-lg-4">
            <div class="card shadow-sm p-3">
                <div class="icon-box text-center icon-pay"><i class="bi bi-currency-dollar"></i></div>
                <div class="text-center mt-2">
                    <h5 class="card-title">Bayar Qurban</h5>
                    <p class="card-text">Pembayaran partisipasi qurban.</p>
                    <a href="bayar_iuran.php" class="btn btn-success btn-sm">Bayar</a>
                </div>
            </div>
        </div>

        <!-- Download QR Code -->
        <div class="col-md-6 col-lg-4">
            <div class="card shadow-sm p-3">
                <div class="icon-box text-center icon-qr"><i class="bi bi-qr-code"></i></div>
                <div class="text-center mt-2">
                    <h5 class="card-title">QR Code Anda</h5>
                    <p class="card-text">Unduh untuk ambil daging.</p>
                    <a href="download_qrcode.php" class="btn btn-warning btn-sm">Download</a>
                </div>
            </div>
        </div>

        <!-- Laporan Pembelian Hewan -->
        <div class="col-md-6 col-lg-4">
            <div class="card shadow-sm p-3">
                <div class="icon-box text-center icon-report"><i class="bi bi-clipboard-data-fill"></i></div>
                <div class="text-center mt-2">
                    <h5 class="card-title">Laporan Hewan</h5>
                    <p class="card-text">Lihat data hewan yang dibeli.</p>
                    <a href="laporan_hewan.php" class="btn btn-secondary btn-sm">Lihat</a>
                </div>
            </div>
        </div>

        <!-- Info Daging -->
        <div class="col-md-6 col-lg-4">
            <div class="card shadow-sm p-3">
                <div class="icon-box text-center icon-meat"><i class="bi bi-basket-fill"></i></div>
                <div class="text-center mt-2">
                    <h5 class="card-title">Perolehan Daging</h5>
                    <p class="card-text">Daging yang Anda terima.</p>
                    <a href="info_daging.php" class="btn btn-danger btn-sm">Lihat</a>
                </div>
            </div>
        </div>

    </div>
</div>

</body>
</html>
