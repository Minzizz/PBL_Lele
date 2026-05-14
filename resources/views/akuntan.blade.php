<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengeluaran - Ternak Lele Saiful</title>

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body class="product-page">

    {{-- Navigasi (Opsional jika ingin disertakan) --}}
    @include('header')

    <main class="catalog-container">


        <header class="catalog-header">
            <div class="header-badge">
                <i class="fas fa-shopping-basket"></i>
                <span>100% Produk Fresh & Organik</span>
            </div>
            <p class="header-subtitle">Sustainable • High Quality • Freshly Harvested</p>
            <h1 class="header-title">Pengeluaran</h1>
        </header>
        <div class="filter-wrapper">
            <div class="filter-box">
                <label for="year-select" class="filter-label">Pilih Tahun:</label>
                <select name="year" id="year-select" class="year-select">
                    <option value="2026">2026</option>
                    <option value="2025">2025</option>
                    <option value="2024">2024</option>
                </select>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        </div>
        </div>
        <div class="product-grid">

            <article class="product-card">
                <div class="product-content">
                    <h2 class="product-name">Kuartal 1</h2>

                    <div class="product-details">
                        <div class="detail-item">
                            <span class="label">Biaya Pakan:</span>
                            <span class="value">Rp 500.000</span>
                        </div>
                        <div class="detail-item border-top">
                            <span class="label">Biaya Listrik:</span>
                            <span class="value">Rp 125.000</span>
                        </div>
                        <div class="detail-item border-top">
                            <span class="label">Biaya vitamin:</span>
                            <span class="value">Rp 75.000</span>
                        </div>
                        <div class="detail-item border-top">
                            <span class="label">Biaya air:</span>
                            <span class="value">Rp 120.000</span>
                        </div>
                    </div>

                    <div class="product-footer">
                        <span class="price">Total: Rp 820.000</span>
                        <a href="/checkout" class="btn btn-dark">Edit</a>
                    </div>
                </div>
            </article>

            <article class="product-card">
                <div class="product-content">
                    <h2 class="product-name">Kuartal 2</h2>

                    <div class="product-details">
                        <div class="detail-item">
                            <span class="label">Biaya Pakan:</span>
                            <span class="value">Rp 500.000</span>
                        </div>
                        <div class="detail-item border-top">
                            <span class="label">Biaya Listrik:</span>
                            <span class="value">Rp 125.000</span>
                        </div>
                        <div class="detail-item border-top">
                            <span class="label">Biaya vitamin:</span>
                            <span class="value">Rp 75.000</span>
                        </div>
                        <div class="detail-item border-top">
                            <span class="label">Biaya air:</span>
                            <span class="value">Rp 120.000</span>
                        </div>
                    </div>

                    <div class="product-footer">
                        <span class="price">Total: Rp 820.000</span>
                        <a href="/checkout" class="btn btn-dark">Edit</a>
                    </div>
                </div>
            </article>

            <article class="product-card">
                <div class="product-content">
                    <h2 class="product-name">Kuartal 3</h2>

                    <div class="product-details">
                        <div class="detail-item">
                            <span class="label">Biaya Pakan:</span>
                            <span class="value">Rp 500.000</span>
                        </div>
                        <div class="detail-item border-top">
                            <span class="label">Biaya Listrik:</span>
                            <span class="value">Rp 125.000</span>
                        </div>
                        <div class="detail-item border-top">
                            <span class="label">Biaya vitamin:</span>
                            <span class="value">Rp 75.000</span>
                        </div>
                        <div class="detail-item border-top">
                            <span class="label">Biaya air:</span>
                            <span class="value">Rp 120.000</span>
                        </div>
                    </div>

                    <div class="product-footer">
                        <span class="price">Total: Rp 820.000</span>
                        <a href="/checkout" class="btn btn-dark">Edit</a>
                    </div>
                </div>
            </article>

            <article class="product-card">
                <div class="product-content">
                    <h2 class="product-name">Kuartal 4</h2>

                    <div class="product-details">
                        <div class="detail-item">
                            <span class="label">Biaya Pakan:</span>
                            <span class="value">Rp 500.000</span>
                        </div>
                        <div class="detail-item border-top">
                            <span class="label">Biaya Listrik:</span>
                            <span class="value">Rp 125.000</span>
                        </div>
                        <div class="detail-item border-top">
                            <span class="label">Biaya vitamin:</span>
                            <span class="value">Rp 75.000</span>
                        </div>
                        <div class="detail-item border-top">
                            <span class="label">Biaya air:</span>
                            <span class="value">Rp 120.000</span>
                        </div>
                    </div>

                    <div class="product-footer">
                        <span class="price">Total: Rp 820.000</span>
                        <a href="/checkout" class="btn btn-dark">Edit</a>
                    </div>
                </div>
            </article>
        </div>
    </main>

    {{-- Footer (Opsional) --}}
    @include('footer')

</body>

</html>