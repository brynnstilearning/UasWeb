<?php
session_start();
if (!isset($_SESSION['username']) || $_SESSION['level'] !== 'panitia') {
    header("Location: ../login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Dashboard Panitia</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(to right, #d4fc79, #96e6a1);
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

        .icon-green { color: #28a745; }
        .icon-blue  { color: #0d6efd; }
        .icon-purple { color: #6f42c1; }
        .icon-orange { color: #fd7e14; }

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
    <h3 class="mb-4 text-center">🤝 Dashboard Panitia</h3>
    <div class="row g-4">

        <!-- Input Data Diri -->
        <div class="col-md-6 col-lg-3">
            <div class="card shadow-sm p-3">
                <div class="icon-box text-center icon-blue"><i class="bi bi-person-badge-fill"></i></div>
                <div class="text-center mt-2">
                    <h5 class="card-title">Input Data Diri</h5>
                    <p class="card-text">Informasi identitas panitia.</p>
                    <a href="input_diri.php" class="btn btn-primary btn-sm">Isi Data</a>
                </div>
            </div>
        </div>

        <!-- Verifikasi QR -->
        <div class="col-md-6 col-lg-3">
            <div class="card shadow-sm p-3">
                <div class="icon-box text-center icon-orange"><i class="bi bi-qr-code-scan"></i></div>
                <div class="text-center mt-2">
                    <h5 class="card-title">Verifikasi QR Code</h5>
                    <p class="card-text">Cek status & ambil daging.</p>
                    <a href="verifikasi_qrcode.php" class="btn btn-warning btn-sm">Verifikasi</a>
                </div>
            </div>
        </div>

        <!-- Kelola Perlengkapan -->
        <div class="col-md-6 col-lg-3">
            <div class="card shadow-sm p-3">
                <div class="icon-box text-center icon-green"><i class="bi bi-tools"></i></div>
                <div class="text-center mt-2">
                    <h5 class="card-title">Perlengkapan</h5>
                    <p class="card-text">Tas, tali, air, dll.</p>
                    <a href="kelola_perlengkapan.php" class="btn btn-success btn-sm">Kelola</a>
                </div>
            </div>
        </div>

        <!-- Pembagian Daging -->
        <div class="col-md-6 col-lg-3">
            <div class="card shadow-sm p-3">
                <div class="icon-box text-center icon-purple"><i class="bi bi-basket-fill"></i></div>
                <div class="text-center mt-2">
                    <h5 class="card-title">Pembagian Daging</h5>
                    <p class="card-text">Kelola distribusi qurban.</p>
                    <a href="data_pembagian.php" class="btn btn-secondary btn-sm">Lihat</a>
                </div>
            </div>
        </div>

    </div>
</div>

</body>
</html>
