@extends('Layout.layout')

@section('content')

@include('Component.navbar')

<!-- Header -->
<div style="margin-top: 100px;"></div> <!-- Jarak antara navbar dan konten -->

<!-- Breadcrumb -->
<div class="container mt-4">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/index">Home</a></li>
            <li class="breadcrumb-item"><a href="/belanja">Belanja</a></li>
            <li class="breadcrumb-item active" aria-current="page">Checkout</li>
        </ol>
    </nav>
</div>

<!-- Konten -->
<div class="container mt-4" style="overflow-y: auto;">
    <h2 class="mb-4" style="font: Montserrat;">Alamat Pengiriman</h2>
    <div class="alamat">
        <form action="{{ url('/submit-alamat') }}" method="POST" class="needs-validation" novalidate>
            @csrf
            <div class="form-group">
                <textarea class="form-control" id="alamat" name="alamat" placeholder="Masukkan alamat Anda" rows="4"
                    style="font: Montserrat;" required></textarea>
                <div class="invalid-feedback">
                    Alamat harus diisi.
                </div>
            </div>
        </form>
    </div>
    <div style="margin-top: 50px;"></div>
   <!-- Card untuk produk yang dipesan -->
   <div class="card mb-1">
    <div class="card-header">
        <h5>Produk yang Dipesan</h5>
    </div>
    <div class="card-body">
        <!-- Card untuk setiap produk -->
        <div class="row align-items-center mt-3">
            <div class="col-auto">
                <img src="/images/taro.png" alt="Product Image" style="width: 80px;">
            </div>
            <div class="col">
                <div class="row">
                    <div class="col"><strong>Produk Dipesan:</strong> Taronet 3D potato</div>
                    <div class="col"><strong>Harga Satuan:</strong> Rp 5.500,00</div>
                    <div class="col"><strong>Jumlah:</strong>
                        <!-- Tombol + dan - untuk jumlah produk -->
                        <div class="d-flex justify-content-center align-items-center">
                            <button class="btn btn-sm btn-outline-secondary" onclick="decrementQuantity()">-</button>
                            <input type="text" class="form-control text-center mx-2" id="quantityInput" value="1" oninput="calculateSubtotal()">
                            <button class="btn btn-sm btn-outline-secondary" onclick="incrementQuantity()">+</button>
                        </div>
                    </div>
                    <div class="col"><strong>Subtotal:</strong> <span id="subtotal">Rp 5.500,00</span></div>
                </div>
            </div>
        </div>
    </div>
</div>  

<!-- Card untuk setiap produk -->
<div class="card mb-1">
    <div class="card-body">
        <!-- Card untuk setiap produk -->
        <div class="row align-items-center mt-3">
            <div class="col-auto">
                <img src="/images/taro.png" alt="Product Image" style="width: 80px;">
            </div>
            <div class="col">
                <div class="row">
                    <div class="col"><strong>Produk Dipesan:</strong> Taronet 3D potato</div>
                    <div class="col"><strong>Harga Satuan:</strong> Rp 5.500,00</div>
                    <div class="col"><strong>Jumlah:</strong>
                        <!-- Tombol + dan - untuk jumlah produk -->
                        <div class="d-flex justify-content-center align-items-center">
                            <button class="btn btn-sm btn-outline-secondary" onclick="decrementQuantity()">-</button>
                            <input type="text" class="form-control text-center mx-2" id="quantityInput" value="1" oninput="calculateSubtotal()">
                            <button class="btn btn-sm btn-outline-secondary" onclick="incrementQuantity()">+</button>
                        </div>
                    </div>
                    <div class="col"><strong>Subtotal:</strong> <span id="subtotal">Rp 5.500,00</span></div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Card untuk setiap produk -->
<div class="card mb-3">
    <div class="card-body">
        <!-- Card untuk setiap produk -->
        <div class="row align-items-center mt-3">
            <div class="col-auto">
                <img src="/images/taro.png" alt="Product Image" style="width: 80px;">
            </div>
            <div class="col">
                <div class="row">
                    <div class="col"><strong>Produk Dipesan:</strong> Taronet 3D potato</div>
                    <div class="col"><strong>Harga Satuan:</strong> Rp 5.500,00</div>
                    <div class="col"><strong>Jumlah:</strong>
                        <!-- Tombol + dan - untuk jumlah produk -->
                        <div class="d-flex justify-content-center align-items-center">
                            <button class="btn btn-sm btn-outline-secondary" onclick="decrementQuantity()">-</button>
                            <input type="text" class="form-control text-center mx-2" id="quantityInput" value="1" oninput="calculateSubtotal()">
                            <button class="btn btn-sm btn-outline-secondary" onclick="incrementQuantity()">+</button>
                        </div>
                    </div>
                    <div class="col"><strong>Subtotal:</strong> <span id="subtotal">Rp 5.500,00</span></div>
                </div>
            </div>
        </div>
    </div>
</div>

    <!-- Metode Pembayaran -->
    <div class="container mt-4">
        <div class="card">
            <div class="card-header">
                <h5>Metode Pembayaran</h5>
            </div>
            <div class="card-body text-center">
                <img src="/images/qris_logo.png" alt="QRIS Logo" style="width: 100px;">
                <p>Bayar dengan QRIS</p>
            </div>
        </div>
    </div>

    <!-- Card untuk checkout -->
    <div class="container mt-4">
        <div class="card">
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col"><strong>Total Produk:</strong>
                        <span id="totalProducts">1</span>
                    </div>
                    <div class="col"><strong>Total:</strong> <span id="totalSubtotal">Rp 5.500,00</span></div>
                    <div class="col-auto">
                        <button class="btn btn-success"
                            style="color: white; background-color: #E86F24;">Checkout</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<div style="height: 200px;"></div>
@include('Component.footer')
@endsection