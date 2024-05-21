@extends('Layout.admin.layoutAdmin')

@section('content')

<div class="container ml-20">
    <h1 class="mt-5">Tambah Data Produk</h1>
    <form action="/createProduct" method="POST">
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @if (session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif

        @csrf
        <div class="form-group mt-3 mb-3">
            <label for="id_produk">ID Produk</label>
            <input type="text" class="form-control" placeholder="ID Produk" name="product_id" id="product_id">
        </div>
        <div class="form-group mb-3">
            <label for="nama_produk">Nama Produk</label>
            <input type="text" class="form-control" placeholder="Nama Produk" name="product_name" id="product_name">
        </div>
        <div class="form-group mb-3">
            <label for="harga_produk">Harga Produk</label>
            <input type="text" class="form-control" placeholder="Kategori Produk" name="product_price"
                id="product_price">
        </div>
        <div class="form-group mb-3">
            <label for="desc_product">Deskripsi Produk</label>
            <input type="text" class="form-control" placeholder="Kategori Produk" name="product_desc" id="product_desc">
        </div>
        <div class="form-group mb-3">
            <label for="stok_product">Stok Produk</label>
            <input type="text" class="form-control" placeholder="Kategori Produk" name="product_stock"
                id="product_stock">
        </div>
        <div class="form-group mb-3">
            <label for="gambar_produk">Gambar Produk</label>
            <input type="file" class="form-control" name="product_image" id="product_image">
        </div>
        <div class="form-group mb-3">
            <label for="kategori_produk">Kategori Produk</label>
            <input type="text" class="form-control" placeholder="Kategori Produk" name="product_category"
                id="product_category">
        </div>
        <button type="submit" class="btn btn-primary mt-1">Submit</button>
    </form>
</div>

@endsection