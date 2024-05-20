@extends('Layout.admin.layoutAdmin')

@section('content')

<div class="container">
    <h1 class="mt-5">Edit Data Produk</h1>
    <form action="{{ route('editProduct', $produk->id) }}" method="POST">

        @method('put')
        @csrf
        <div class="form-group mt-3 mb-3">
            <label for="id_produk">ID Produk</label>
            <input type="text" class="form-control" placeholder="ID Produk" name="product_id" id="product_id"
                value="{{ $produk->product_id }}" readonly>
        </div>
        <div class="form-group mb-3">
            <label for="nama_produk">Nama Produk</label>
            <input type="text" class="form-control" placeholder="Nama Produk" name="product_name" id="product_name"
                value="{{ old('nama_produk', $produk->product_name) }}">
        </div>
        <div class="form-group mb-3">
            <label for="harga_produk">Harga Produk</label>
            <input type="text" class="form-control" placeholder="Kategori Produk" name="product_price"
                id="product_price" value="{{ old('harga_produk', $produk->product_price) }}">
        </div>
        <div class="form-group mb-3">
            <label for="desc_product">Deskripsi Produk</label>
            <input type="text" class="form-control" placeholder="Kategori Produk" name="product_desc" id="product_desc"
                value="{{ old('desc_product', $produk->product_desc) }}">
        </div>
        <div class="form-group mb-3">
            <label for="stok_product">Stok Produk</label>
            <input type="text" class="form-control" placeholder="Kategori Produk" name="product_stock"
                id="product_stock" value="{{ old('stok_product', $produk->product_stock) }}">
        </div>
        <div class="form-group mb-3">
            <label for="gambar_produk">Gambar Produk</label>
            <input type="file" class="form-control" placeholder="Kategori Produk" name="product_image"
                id="product_image" value="{{ old('gambar_produk', $produk->product_image) }}">
        </div>
        <div class="form-group mb-3">
            <label for="kategori_produk">Kategori Produk</label>
            <input type="text" class="form-control" placeholder="Kategori Produk" name="product_category"
                id="product_category" value="{{ old('kategori_produk', $produk->product_category) }}">
        </div>
        <button type="submit" class="btn btn-primary mt-1">Submit</button>
    </form>
</div>

@endsection