<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Katalog Produk - Ternak Lele Saiful</title>
    
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
            <h1 class="header-title">Katalog Produk Kami</h1>
        </header>

        <div class="product-grid">
            
            <article class="product-card">
                <div class="product-image">
                    <img src="{{ asset('storage/lele/jumbo.jpg') }}" alt="Lele Jumbo">
                </div>
                <div class="product-content">
                    <h2 class="product-name">Lele Jumbo</h2>
                    
                    <div class="product-details">
                        <div class="detail-item">
                            <span class="label">Kategori:</span>
                            <span class="value-tag">Konsumsi</span>
                        </div>
                        <div class="detail-item border-top">
                            <span class="label">Gramasi:</span>
                            <span class="value">125g - 250g / ekor</span>
                        </div>
                        <div class="detail-item border-top">
                            <span class="label">Kualitas:</span>
                            <span class="value">Grade A Premium</span>
                        </div>
                    </div>

                    <div class="badge-group">
                        <span class="badge badge-green">100% ORGANIK</span>
                        <span class="badge badge-blue">HIGIENIS</span>
                    </div>

                    <div class="product-footer">
                        <span class="price">Rp 20.000 / kg</span>
                        <a href="{{ route('order.create', $product->id) }}" class="btn btn-dark">Pesan</a>
                    </div>
                </div>
            </article>

            <article class="product-card">
                <div class="product-image">
                    <img src="{{ asset('storage/lele/lokal.jpg') }}" alt="Lele Lokal">
                </div>
                <div class="product-content">
                    <h2 class="product-name">Lele Lokal</h2>
                    
                    <div class="product-details">
                        <div class="detail-item">
                            <span class="label">Kategori:</span>
                            <span class="value-tag">Budidaya</span>
                        </div>
                        <div class="detail-item border-top">
                            <span class="label">Gramasi:</span>
                            <span class="value">100g - 150g / ekor</span>
                        </div>
                        <div class="detail-item border-top">
                            <span class="label">Kualitas:</span>
                            <span class="value">Standar Lokal</span>
                        </div>
                    </div>

                    <div class="badge-group">
                        <span class="badge badge-green">NON-KIMIA</span>
                        <span class="badge badge-blue">SEGAR</span>
                    </div>

                    <div class="product-footer">
                        <span class="price">Rp 15.000 / kg</span>
                        <a href="{{ route('order.create', $product->id) }}" class="btn btn-dark">Pesan</a>
                    </div>
                </div>
            </article>

            <article class="product-card">
                <div class="product-image">
                    <img src="{{ asset('storage/lele/mutiara.jpg') }}" alt="Lele Mutiara">
                </div>
                <div class="product-content">
                    <h2 class="product-name">Lele Mutiara</h2>
                    
                    <div class="product-details">
                        <div class="detail-item">
                            <span class="label">Kategori:</span>
                            <span class="value-tag">Unggulan</span>
                        </div>
                        <div class="detail-item border-top">
                            <span class="label">Gramasi:</span>
                            <span class="value">200g - 300g / ekor</span>
                        </div>
                        <div class="detail-item border-top">
                            <span class="label">Kualitas:</span>
                            <span class="value">Super Mutiara</span>
                        </div>
                    </div>

                    <div class="badge-group">
                        <span class="badge badge-green">100% ORGANIK</span>
                        <span class="badge badge-blue">PREMIUM</span>
                    </div>

                    <div class="product-footer">
                        <span class="price">Rp 18.000 / kg</span>
                        <a href="{{ route('order.create', $product->id) }}" class="btn btn-dark">Pesan</a>
                    </div>
                </div>
            </article>

        </div>
    </main>

    {{-- Footer (Opsional) --}}
    @include('footer')

</body>
</html>