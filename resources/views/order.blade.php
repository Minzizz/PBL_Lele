<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Pemesanan</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- CSS External -->
    <link rel="stylesheet" href="{{ asset('css/order.css') }}">
</head>
<body>

<div class="order-card">
    <h2 class="order-title">Form Pemesanan Lele</h2>

    <!-- Produk -->
    <div class="product-box">
        <div class="row align-items-center">
            <div class="col-md-5">
                <img src="{{ asset('storage/' . $product->image) }}" alt="Produk">
            </div>

            <div class="col-md-7 mt-3 mt-md-0">
                <h3>{{ $product->nama_produk }}</h3>

                <p class="price-text">
                    Rp {{ number_format($product->harga) }}/kg
                </p>

                <p>Kategori: {{ $product->kategori }}</p>
                <p>Kualitas: {{ $product->kualitas }}</p>
            </div>
        </div>
    </div>

    <!-- Form -->
    <form action="{{ route('order.store') }}" method="POST">
        @csrf

        <input type="hidden" name="product_id" value="{{ $product->id }}">

        <div class="mb-3">
            <label>Nama Pembeli</label>
            <input type="text" name="nama_pembeli" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>No HP</label>
            <input type="text" name="no_hp" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Alamat</label>
            <textarea name="alamat" class="form-control" rows="3" required></textarea>
        </div>

        <div class="mb-3">
            <label>Jumlah Pesanan (kg)</label>
            <input type="number" name="jumlah_kg" class="form-control" required>
        </div>

        <button type="submit" class="btn-order">
            Konfirmasi Pesanan
        </button>
    </form>
</div>

</body>
</html>