@extends('Layout.admin.layoutAdmin')

@section('content')

@extends('Component.sidebar')

<!-- Main Content -->
<div class="content">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <i class='bx bx-menu'></i>
        <form class="form-inline my-2 my-lg-0">
            <div class="form-input">
                <input class="form-control mr-sm-2" type="search" placeholder="Search...">
                <button class="btn btn-outline-success my-2 my-sm-0 search-btn" type="submit"><i
                        class='bx bx-search'></i></button>
            </div>
        </form>
        <input type="checkbox" id="theme-toggle" hidden>
        <label for="theme-toggle" class="theme-toggle"></label>
        <a href="#" class="notif">
            <i class='bx bx-bell'></i>
            <span class="count">12</span>
        </a>
        <a href="#" class="profile">
            <img src="images/logo.png">
        </a>
    </nav>
    <!-- End of Navbar -->

    <main class="container mt-5">
        <div class="header mb-4">
            <div class="d-flex justify-content-between align-items-center">
                <div class="left">
                    <h1>Product</h1>
                    <ul class="breadcrumb">
                        <li><a href="#">Product</a></li>

                        <li><a href="#" class="active">Dashboard</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="right ml-auto"> <!-- Menggunakan kelas ml-auto untuk memindahkan ke kanan -->
            <a href="/createProduct" class="btn btn-primary report">Tambah Produk</a>
        </div>

        <!-- Table Data -->
        <div class="table-responsive">
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>ID Produk</th>
                        <th>Nama Produk</th>
                        <th>Harga Produk</th>
                        <th>Deskripsi Produk</th>
                        <th>Stok Produk</th>
                        <th>Gambar Produk</th>
                        <th>Kategori Produk</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($produk as $pro)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $pro->product_id }}</td>
                            <td>{{ $pro->product_name }}</td>
                            <td>{{ $pro->product_price}}</td>
                            <td>{{ $pro->product_desc }}</td>
                            <td>{{ $pro->product_stock }}</td>
                            <td>
                                <img src="{{ asset('images/' . $pro->product_image) }}" alt="Gambar Produk" width="50">
                            </td>
                            <td>{{ $pro->product_category }}</td>
                            <td class="d-flex">
                                <a href="{{ route('editProduct', ['id' => $pro->id]) }}"
                                    class="btn btn-secondary mx-1">Edit</a>
                                <form action="{{ route('deleteProduct', ['id' => $pro->id]) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <!-- Tombol Delete -->
                                    <button type="submit" class="btn btn-danger mx-1"
                                        onclick="return confirm('Are you sure?')">Delete</button>
                                </form>
                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- End of Table Data -->

    </main>
</div>
@endsection