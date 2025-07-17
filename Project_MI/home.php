<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CurhatOnline - Home</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="home.css">
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
      <a class="navbar-brand fw-bold text-primary" href="home.php">💗 TemanCerita</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item"><a class="nav-link" href="home.php">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="pricelist.php">Pricelist</a></li>
          <li class="nav-item"><a class="nav-link" href="order.php">Pemesanan</a></li>
        </ul>
      </div>
    </div>
  </nav>

    <section class="hero">
      <div class="container">
        <div class="hero-box d-flex flex-wrap align-items-center justify-content-between">
          <div class="hero-text">
            <h1 class="display-5">“Curhat Tanpa Rasa Takut, Didengarkan Sepenuh Hati”💬</h1>
            <p>💖Kami hadir untukmu yang ingin didengar, bukan dihakimi. Ceritakan segalanya… tanpa beban, tanpa penilaian.</p>
            <a href="order.php" class="btn btn-primary mt-3">Pesan Sekarang</a>
          </div>
          <div class="hero-img-wrapper">
            <img src="gif/I Love You GIF.gif" alt="Curhat Ilustrasi" class="hero-img">
          </div>
        </div>
      </div>
    </section>

  <section class="py-5 text-center bg-light">
    <div class="container">
      <h1 class="display-5 fw-bold">Selamat Datang di TemanCerita</h1>
      <p class="lead">“Semua Orang Punya Cerita. Di Sini, Kamu Didengar Tanpa Harus Kuat.”💌</p>
      <p>🎀Kadang, kita hanya ingin bercerita. Bukan untuk mencari solusi, bukan untuk dinilai.
Tapi untuk didengar. Untuk dimengerti. Untuk merasa bahwa perasaan kita valid.
CurhatOnline hadir sebagai ruang hangat dan aman, di mana kamu bebas berbicara tentang apa pun—tanpa takut, tanpa malu.
Entah itu kesedihan yang lama terpendam, kecemasan yang tak bisa kamu jelaskan, atau sekadar unek-unek hari ini.
🌸Di sini, kamu tidak sendirian. Ceritamu akan kami jaga, emosimu kami peluk dengan empati.
Karena kamu berhak merasa lebih ringan, dan kamu pantas mendapatkan ruang untuk itu. 💕 💕</p>
      <a href="order.php" class="btn btn-primary mt-3">Mulai Curhat Sekarang</a>
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
