<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CurhatOnline - Pricelist</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="pricelist.css">
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
      <a class="navbar-brand fw-bold text-primary" href="home.php">💗 CurhatOnline</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item"><a class="nav-link" href="home.php">Home</a></li>
          <li class="nav-item"><a class="nav-link active" href="pricelist.php">Pricelist</a></li>
          <li class="nav-item"><a class="nav-link" href="order.php">Pemesanan</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <section class="py-5">
    <div class="container">
      <h1 class="text-center mb-5">💰 Daftar Harga Layanan Curhat</h1>
      <div class="row justify-content-center">
        <div class="col-md-8">
          <div class="card p-4 shadow">
            <ul class="list-group list-group-flush">
              <li class="list-group-item d-flex justify-content-between align-items-center">
                <span>Curhat via Chat Teks (30 menit)</span>
                <span class="fw-bold text-primary">Rp 10.000</span>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center">
                <span>Curhat Intensif Chat (60 menit)</span>
                <span class="fw-bold text-primary">Rp 15.000</span>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center">
                <span>Curhat Via Video Call (30 menit)</span>
                <span class="fw-bold text-primary">Rp 20.000</span>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center">
                <span>Curhat Via Video Call Premium (60 menit)</span>
                <span class="fw-bold text-primary">Rp 35.000</span>
              </li>
            </ul>
            <div class="text-center mt-4">
              <a href="order.php" class="btn btn-primary">Lanjut ke Pemesanan</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

 <footer class="footer-custom mt-5 text-center">
  <div class="container py-4">
    <p class="mb-1 fw-semibold text-muted">💗 CurhatOnline — Ruang Aman untuk Hatimu</p>
    <p class="mb-1 small">Copyright &copy; <?= date('Y') ?> CurhatOnline. All rights reserved.</p>
    <p class="small">
      Made with 💕 by <a href="#" class="text-decoration-none text-primary">YourTeamName</a>
    </p>
  </div>
</footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
