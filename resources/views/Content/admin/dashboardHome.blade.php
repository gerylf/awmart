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
            <img src="/images/profile.jpg">
        </a>
    </nav>

    <!-- End of Navbar -->

    <main>
        <div class="header">
            <div class="left">
                <h1>Dashboard</h1>
                <ul class="breadcrumb">
                    <li><a href="/dashboard-home">
                            Dashboard
                        </a></li>
                    /
                    <li><a href="/dashboard-product" class="active">Products</a></li>
                </ul>
            </div>
            <a href="#" class="report">
                <i class='bx bx-cloud-download'></i>
                <span>Download CSV</span>
            </a>
        </div>

       <!-- Insights -->
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


        <div class="bottom-data">
            <div class="orders">
                <div class="header">
                    <i class='bx bx-receipt'></i>
                    <h3>Recent Orders</h3>
                    <i class='bx bx-filter'></i>
                    <i class='bx bx-search'></i>
                </div>
                <table>
                    <thead>
                        <tr>
                            <th>User</th>
                            <th>Order Date</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <img src="/images/profile.jpg">
                                <p>John Doe</p>
                            </td>
                            <td>14-08-2023</td>
                            <td><span class="status completed">Completed</span></td>
                        </tr>
                        <tr>
                            <td>
                                <img src="/images/profile.jpg">
                                <p>John Doe</p>
                            </td>
                            <td>14-08-2023</td>
                            <td><span class="status pending">Pending</span></td>
                        </tr>
                        <tr>
                            <td>
                                <img src="/images/profile.jpg">
                                <p>John Doe</p>
                            </td>
                            <td>14-08-2023</td>
                            <td><span class="status process">Processing</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>      

        </div>

    </main>

</div>
@endsection