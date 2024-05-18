@extends('Layout.admin.layoutAdmin')

@section('content')

@extends('Component.sidebar')

<!-- Main Content -->
<div class="content">
    <!-- Navbar -->
    <nav>
        <i class='bx bx-menu'></i>
        <form action="#">
            <div class="form-input">
                <input type="search" placeholder="Search...">
                <button class="search-btn" type="submit"><i class='bx bx-search'></i></button>
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

    <main>
        <div class="header">
            <div class="left">
                <h1>Product</h1>
                <ul class="breadcrumb">
                    <li><a href="#">Product</a></li>
                    /
                    <li><a href="#" class="active">Dashboard</a></li>
                </ul>
            </div>
            <a href="#" class="report">
                <i class='bx bx-cloud-download'></i>
                <span>Download CSV</span>
            </a>
        </div>

        <ul class="insights">
            <li>
                <i class='bx bx-money'></i>
                <span class="info">
                    <h3>$15,000</h3>
                    <p>Pengeluaran per Bulan</p>
                </span>
            </li>
            <li>
                <i class='bx bx-dollar'></i>
                <span class="info">
                    <h3>$30,000</h3>
                    <p>Pendapatan per Bulan</p>
                </span>
            </li>
            <li>
                <i class='bx bx-group'></i>
                <span class="info">
                    <h3>500</h3>
                    <p>Total Member</p>
                </span>
            </li>
        </ul>
        <!-- End of Insights -->

        <!-- Table Data -->
        <div class="table-data">
            <table class="tableData">
                <thead>
                    <tr>
                        <th>Product ID</th>
                        <th>Product Name</th>
                        <th>Category</th>
                        <th>Price</th>
                        <th>Stock Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>101</td>
                        <td>Product A</td>
                        <td>Category 1</td>
                        <td>$25.00</td>
                        <td>In Stock</td>
                        <td>
                      
                            <button class="btn btn-edit">Edit</button>
                            <button class="btn btn-delete">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td>102</td>
                        <td>Product B</td>
                        <td>Category 2</td>
                        <td>$35.00</td>
                        <td>Out of Stock</td>
                        <td>
                          
                            <button class="btn btn-edit">Edit</button>
                            <button class="btn btn-delete">Delete</button>
                        </td>
                    </tr>
                    <!-- Add more rows as needed -->
                </tbody>
            </table>
        </div>
        <!-- End of Table Data -->

    </main>

</div>
@endsection
