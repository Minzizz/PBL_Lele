<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ternak Lele Saiful</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <!-- WAJIB: Load CSS Laravel -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
<header class="hero">
  <div class="overlay"></div>

  <div class="hero-content">
    <h1>Ternak Lele Saiful</h1>
    <p>
      Adalah usaha budidaya ikan lele yang berfokus pada pengelolaan ikan lele
      berkualitas tinggi dengan sistem modern.
    </p>
    <a href="#" class="btn">Lihat Selengkapnya</a>
  </div>
</header>

<<section class="features">
  <div class="feature">
    <i class="fas fa-bars icon"></i>
    <h3>PRODUCT</h3>
    <p>We stand by the quality of our livestock, offering a wide selection to ensure every purchase.</p>
  </div>

  <div class="feature">
    <i class="fas fa-desktop icon"></i>
    <h3>TENTANG PETERNAKAN</h3>
    <p>We stand by the quality of our livestock, offering a wide selection to ensure every purchase.</p>
  </div>

  <div class="feature">
    <i class="fas fa-users icon"></i>
    <h3>PARTNER KAMI</h3>
    <p>We stand by the quality of our livestock, offering a wide selection to ensure every purchase.</p>
  </div>
</section>

<section class="about">
      <div class="about-container">
        <img src="{{ asset('storage/lele/1207.jpg') }}" alt="Tentang">
        <div class="about-text">
      <h2>Tentang Ternak Lele Saiful</h2>

      <p>
        Ternak Lele Saiful merupakan usaha budidaya ikan lele yang berfokus pada 
        kualitas, kebersihan, dan hasil panen terbaik. Kami menggunakan sistem 
        budidaya modern dengan pengelolaan air yang baik serta pakan berkualitas 
        untuk menghasilkan lele yang sehat dan bernilai tinggi.
      </p>

      <p>
        Dengan pengalaman dan komitmen yang tinggi, kami siap menjadi mitra terbaik 
        dalam memenuhi kebutuhan ikan lele untuk konsumsi maupun usaha Anda.
      </p>

      <a href="#" class="btn">Read More</a>
      </div>
    </div>
</section>

<section class="products">
  <h2>Our Premium Livestock</h2>

  <div class="tabs">
    <button>LELE JUMBO</button>
    <button>LELE LOKAL</button>
    <button>LELE MUTIARA</button>
  </div>

  <div class="cards">
    <div class="card">
      <img src="{{ asset('storage/lele/jumbo.jpg') }}">
      <h4>Lele Jumbo</h4>
      <p>Rp 20.000</p>
      <button>Beli</button>
    </div>

    <div class="card">
      <img src="{{ asset('storage/lele/lokal.jpg') }}">
      <h4>Lele Lokal</h4>
      <p>Rp 15.000</p>
      <button>Beli</button>
    </div>

    <div class="card">
      <img src="{{ asset('storage/lele/mutiara.jpg') }}">
      <h4>Lele Mutiara</h4>
      <p>Rp 18.000</p>
      <button>Beli</button>
    </div>
  </div>
</section>

</body>
</html>