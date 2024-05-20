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
                <h1>Account</h1>
                <ul class="breadcrumb">
                    <li><a href="#">Product</a></li>
                    /
                    <li><a href="#" class="active">Dashboard</a></li>
                </ul>
            </div>
           
        </div>



        <!-- Profile Section -->
        <div class="profile-section">
            <div class="profile-card">
                <img src="/images/profile.jpg" alt="Profile Picture" class="profile-img">
                <h3 class="profile-name">GerylF</h3>
                <p class="profile-email">Gerl@gmail.com</p>
                <div class="profile-info">
                    <div class="profile-info-item">
                        <span class="info-title">Joined</span>
                        <span class="info-value">January 1, 2020</span>
                    </div>
                    <div class="profile-info-item">
                        <span class="info-title">Role</span>
                        <span class="info-value">Admin</span>
                    </div>
                </div>
                <div class="profile-actions">
                    <button class="btn btn-edit-profile">Edit Profile</button>
                    {{-- <button class="btn btn-logout">Logout</button> --}}
                </div>
            </div>
        </div>
        <!-- End of Profile Section -->

    </main>

</div>
@endsection
