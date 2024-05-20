@extends('Layout.layout')

@section('content')

@include('Component.navbar')

<div style="margin-top: 100px;"></div> <!-- Jarak antara navbar dan konten -->

<!-- Breadcrumb -->
<div class="container mt-4">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/index">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Belanja</li>
        </ol>
    </nav>
</div>

<!-- Konten Belanja -->
<div class="container">
    <div class="row row-cols-1 row-cols-md-4 g-4">
        <!-- Card 1 -->
        <div class="col">
            <a href="/product-details" style="text-decoration: none; color: inherit;">
                <div class="card shadow">
                    <img src="/images/taro.png" class="card-img-top" alt="Product 2">
                    <div class="card-body">
                        <h5 class="card-title">Taro</h5>
                        <p class="card-text">Deskripsi singkat produk.</p>
                        <p class="card-text">Harga: Rp 4000</p>
                    </div>
                </div>
            </a>
        </div>
        <!-- Card 2 -->
        <div class="col">
            <div class="card shadow">
                <img src="/images/chitato.png" class="card-img-top" alt="Product 2">
                <div class="card-body">
                    <h5 class="card-title">Chitato</h5>
                    <p class="card-text">Deskripsi singkat produk.</p>
                    <p class="card-text">Harga: Rp 5000</p>
                </div>
            </div>
        </div>
        <!-- Card 3 -->
        <div class="col">
            <div class="card shadow">
                <img src="/images/chitatolite.png" class="card-img-top" alt="Product 2">
                <div class="card-body">
                    <h5 class="card-title">Chitato Lite</h5>
                    <p class="card-text">Deskripsi singkat produk.</p>
                    <p class="card-text">Harga: $150</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card shadow">
                <img src="/images/fr2000.png" class="card-img-top" alt="Product 2">
                <div class="card-body">
                    <h5 class="card-title">French Fries2000</h5>
                    <p class="card-text">Deskripsi singkat produk.</p>
                    <p class="card-text">Harga: $150</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card shadow">
                <img src="/images/taro.png" class="card-img-top" alt="Product 2">
                <div class="card-body">
                    <h5 class="card-title">Taro</h5>
                    <p class="card-text">Deskripsi singkat produk.</p>
                    <p class="card-text">Harga: $150</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card shadow">
                <img src="/images/taro.png" class="card-img-top" alt="Product 2">
                <div class="card-body">
                    <h5 class="card-title">Taro</h5>
                    <p class="card-text">Deskripsi singkat produk.</p>
                    <p class="card-text">Harga: $150</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card shadow">
                <img src="/images/taro.png" class="card-img-top" alt="Product 2">
                <div class="card-body">
                    <h5 class="card-title">Taro</h5>
                    <p class="card-text">Deskripsi singkat produk.</p>
                    <p class="card-text">Harga: $150</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card shadow">
                <img src="/images/taro.png" class="card-img-top" alt="Product 2">
                <div class="card-body">
                    <h5 class="card-title">Taro</h5>
                    <p class="card-text">Deskripsi singkat produk.</p>
                    <p class="card-text">Harga: $150</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card shadow">
                <img src="/images/taro.png" class="card-img-top" alt="Product 2">
                <div class="card-body">
                    <h5 class="card-title">Taro</h5>
                    <p class="card-text">Deskripsi singkat produk.</p>
                    <p class="card-text">Harga: $150</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card shadow">
                <img src="/images/taro.png" class="card-img-top" alt="Product 2">
                <div class="card-body">
                    <h5 class="card-title">Taro</h5>
                    <p class="card-text">Deskripsi singkat produk.</p>
                    <p class="card-text">Harga: $150</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card shadow">
                <img src="/images/taro.png" class="card-img-top" alt="Product 2">
                <div class="card-body">
                    <h5 class="card-title">Taro</h5>
                    <p class="card-text">Deskripsi singkat produk.</p>
                    <p class="card-text">Harga: $150</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card shadow">
                <img src="/images/taro.png" class="card-img-top" alt="Product 2">
                <div class="card-body">
                    <h5 class="card-title">Taro</h5>
                    <p class="card-text">Deskripsi singkat produk.</p>
                    <p class="card-text">Harga: $150</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card shadow">
                <img src="/images/taro.png" class="card-img-top" alt="Product 2">
                <div class="card-body">
                    <h5 class="card-title">Taro</h5>
                    <p class="card-text">Deskripsi singkat produk.</p>
                    <p class="card-text">Harga: $150</p>
                </div>
            </div>
        </div>
        <!-- Tambahkan card lainnya sesuai kebutuhan -->
    </div>
</div>
<div style="margin-top: 100px;"></div> <!-- Jarak antara navbar dan konten -->
@include('Component.footer')
@endsection