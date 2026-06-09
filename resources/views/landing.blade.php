<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ternak Lele Saiful</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>

    {{-- HEADER --}}
    @include('header')

    <!-- HERO -->
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

    <!-- FEATURES -->
    <section class="features">

        <div class="feature">
            <a href="{{ route('product') }}">
                <i class="fas fa-fish icon"></i>
            </a>

            <h3>PRODUCT</h3>

            <p>
                We stand by the quality of our livestock,
                offering a wide selection to ensure every purchase.
            </p>
        </div>

        <div class="feature">
            <i class="fas fa-circle-info icon" onclick="openAbout()"></i>

            <h3>TENTANG PETERNAKAN</h3>

            <p>
                We stand by the quality of our livestock,
                offering a wide selection to ensure every purchase.
            </p>
        </div>

        <div class="feature">
            <a href="{{ url('/partner') }}">
                <i class="fas fa-handshake icon"></i>
            </a>

            <h3>PARTNER KAMI</h3>

            <p>
                We stand by the quality of our livestock,
                offering a wide selection to ensure every purchase.
            </p>
        </div>

    </section>

    <!-- ABOUT -->
    <section class="about">

        <div class="about-container">

            <img src="{{ asset('storage/lele/1207.jpg') }}" alt="Tentang">

            <div class="about-text">

                <h2>Tentang Ternak Lele Saiful</h2>

                <p>
                    Ternak Lele Saiful merupakan usaha budidaya ikan lele
                    yang berfokus pada kualitas, kebersihan,
                    dan hasil panen terbaik.
                </p>

                <p>
                    Dengan pengalaman dan komitmen yang tinggi,
                    kami siap menjadi mitra terbaik.
                </p>

                <a href="#" class="btn">Read More</a>

            </div>

        </div>

    </section>

    {{-- FOOTER --}}
    @include('footer')

    {{-- POP UP --}}
    <div id="aboutModal" class="modal">

    <div class="modal-box">
        <div class="modal-header">
            <h2>Tentang Ternak Lele Saiful</h2>
            <span class="close" onclick="closeAbout()">&times;</span>
        </div>
        <div class="modal-body">
            <p>
                Ternak Lele Saiful adalah usaha budidaya ikan lele
                yang berfokus pada kualitas, kebersihan, dan hasil panen terbaik.
            </p>
            <p>
                Sistem kami sudah menggunakan metode modern agar hasil lebih stabil,
                efisien, dan mudah dipantau oleh petugas lapangan.
            </p>
            <ul>
                <li>✔ Kualitas air terkontrol</li>
                <li>✔ Monitoring harian</li>
                <li>✔ Sistem panen terjadwal</li>
            </ul>
        </div>
        <div class="modal-footer">
            <button onclick="closeAbout()">Tutup</button>
        </div>

    </div>

</div>
   <script>
        function openAbout() {
            document.getElementById('aboutModal').style.display = 'flex';
        }

        function closeAbout() {
            document.getElementById('aboutModal').style.display = 'none';
        }
    </script>
</body>
</html>