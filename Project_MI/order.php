<?php
$step = $_POST['step'] ?? 'form';
$nama = htmlspecialchars($_POST['nama'] ?? '');
$layanan = htmlspecialchars($_POST['layanan'] ?? '');

$linkKonfirmasi = "https://api.whatsapp.com/send?phone=6288972770106&text=" . urlencode("Halo admin 💗, saya $nama ingin konfirmasi pembayaran untuk layanan: $layanan");

?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CurhatOnline - Pemesanan</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="order.css">
</head>

<script>
  function redirectToWA() {
    const phone = "6288972770106";
    const message = encodeURIComponent("Halo admin 💗, saya <?= $nama ?> ingin konfirmasi pembayaran untuk layanan: <?= $layanan ?>");

    const isMobile = /Android|iPhone|iPad|iPod/i.test(navigator.userAgent);
    const url = isMobile
      ? `https://wa.me/${phone}?text=${message}`
      : `https://web.whatsapp.com/send?phone=${phone}&text=${message}`;

    window.open(url, '_blank');
  }
</script>

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
          <li class="nav-item"><a class="nav-link" href="pricelist.php">Pricelist</a></li>
          <li class="nav-item"><a class="nav-link active" href="order.php">Pemesanan</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <section class="py-5">
    <div class="container">
      <h1 class="text-center mb-5">📝 Form Pemesanan Layanan</h1>
      <div class="row justify-content-center">
        <div class="col-md-8">
          <div class="card p-4 shadow">
            <?php if ($step === 'form'): ?>
              <form method="POST">
                <input type="hidden" name="step" value="bayar">
                <div class="mb-3">
                  <label for="nama" class="form-label">Nama Anda</label>
                  <input type="text" class="form-control" name="nama" id="nama" required>
                </div>
                <div class="mb-3">
                  <label for="layanan" class="form-label">Pilih Layanan Curhat</label>
                  <select class="form-select" name="layanan" id="layanan" required>
                    <option value="Curhat via Chat Teks (30 menit)">Curhat via Chat Teks (30 menit)</option>
                    <option value="Curhat Intensif Chat (60 menit)">Curhat Intensif Chat (60 menit)</option>
                    <option value="Curhat Via Video Call (30 menit)">Curhat Via Video Call (30 menit)</option>
                    <option value="Curhat Via Video Call Premium (60 menit)">Curhat Via Video Call Premium (60 menit)
                    </option>
                  </select>
                </div>
                <button type="submit" class="btn btn-primary">Pesan Sekarang</button>
              </form>

            <?php elseif ($step === 'bayar'): ?>
              <div class="alert alert-info">
                <p>Silakan lakukan pembayaran ke rekening berikut:</p>
                <ul>
                  <li>Bank BRI - 628301028272534 </li>
                  <li>Bank Seabank - 901151037039 </li>
                  <li>Bank Mandiri - 1710017062244 </li>
                </ul>
                <p>Setelah selesai membayar, klik tombol di bawah untuk konfirmasi langsung ke admin via WhatsApp (Kirim bukti pembayaran).</p>
              </div>
              <a href="#" onclick="redirectToWA()" class="btn btn-success">Konfirmasi via WhatsApp</a>
            <?php endif; ?>
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
