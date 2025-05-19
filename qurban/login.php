<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login Sistem Qurban</title>

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Bootstrap Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

  <style>
    body {
      background: linear-gradient(to right, #d1e9f9, #fdfbfb);
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      font-family: 'Segoe UI', sans-serif;
    }

    .card {
      padding: 2.5rem;
      border-radius: 1rem;
      box-shadow: 0 10px 40px rgba(0, 0, 0, 0.1);
      animation: fadeInDown 0.8s ease-out;
    }

    @keyframes fadeInDown {
      from {
        opacity: 0;
        transform: translateY(-30px);
      }

      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    .card h2 {
      color: #0d6efd;
    }

    .form-control:focus {
      border-color: #0d6efd;
      box-shadow: 0 0 0 0.2rem rgba(13, 110, 253, 0.25);
    }

    .btn-primary {
      background-color: #0d6efd;
      border: none;
      transition: 0.3s;
    }

    .btn-primary:hover {
      background-color: #0b5ed7;
      transform: scale(1.03);
    }

    .icon-input {
      position: absolute;
      top: 50%;
      left: 15px;
      transform: translateY(-50%);
      color: #0d6efd;
    }

    .input-group {
      position: relative;
    }

    .input-group input {
      padding-left: 40px;
    }
  </style>
</head>

<body>

  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-6 col-lg-5">
        <div class="card">
          <h2 class="text-center mb-4">Login Sistem Qurban</h2>
          <form method="POST" action="proses_login.php?op=in">
            <div class="mb-3 position-relative">
              <i class="bi bi-person-fill position-absolute top-50 start-0 translate-middle-y ms-3 text-primary"></i>
              <input type="text" name="username" class="form-control ps-5" placeholder="Username" required />
            </div>
            <div class="mb-3 position-relative">
              <i class="bi bi-lock-fill position-absolute top-50 start-0 translate-middle-y ms-3 text-primary"></i>
              <input type="password" name="password" class="form-control ps-5" placeholder="Password" required />
            </div>
            <div class="d-grid">
              <button type="submit" class="btn btn-primary">
                <i class="bi bi-box-arrow-in-right me-1"></i> Login
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>