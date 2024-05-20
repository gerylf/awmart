@extends('Layout.layout')

@section('content')

@include('Component.navbar')

<div style="margin-top: 80px;"></div> <!-- Jarak antara navbar dan konten -->

<!-- Breadcrumb -->
<div class="container mt-4">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item"><a href="/belanja">Belanja</a></li>
            <li class="breadcrumb-item active" aria-current="page">Nama Produk</li>
        </ol>
    </nav>
</div>

<!-- Konten Product Detail -->
<div class="container">
    <div class="row">
        <!-- Bagian Kiri: Gambar Product -->
        <div class="col-md-6">
            <img src="/images/product.jpg" class="img-fluid" alt="Gambar Produk">
        </div>
        <!-- Bagian Tengah: Nama, Harga, dan Deskripsi Product -->
        <div class="col-md-6">
            <h2>Nama Produk</h2>
            <p>Harga: $100</p>
            <p>Deskripsi lengkap produk...</p>
        </div>
    </div>
    <div class="row mt-4">
        <!-- Bagian Kanan: Tombol, Stok, Subtotal -->
        <div class="col-md-6 offset-md-6">
            <div class="card">
                <div class="card-body">
                    <!-- Tombol + dan - untuk jumlah produk -->
                    <div class="mb-3">
                        <button>-</button>
                        <input type="text" value="1">
                        <button>+</button>
                    </div>
                    <!-- Stok tersisa -->
                    <p>Stok Tersisa: 10</p>
                    <!-- Tombol ke keranjang dan beli langsung -->
                    <button class="btn btn-primary">Tambah ke Keranjang</button>
                    <button class="btn btn-success">Beli Langsung</button>
                    <!-- Subtotal -->
                    <p>Subtotal: $100</p>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection