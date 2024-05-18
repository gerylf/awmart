@extends('Layout.layoutLogReg')

@section('content')

<div class="card">
    <h1>Join Aw Mart Member</h1>
    <p style="font-style: italic; color: #333;">The sooner you register, the sooner you can enjoy the finest cigars!</p>
    <form action="" method="post">
        <label for="username">Username :</label>
        <input type="text" name="username" id="username" placeholder="Enter your Username" required />

        <label for="email">Email :</label>
        <input type="email" name="email" id="email" placeholder="Enter your Email" required />

        <label for="password">Password :</label>
        <input type="password" name="password" id="password" placeholder="Enter your Password" required />

        <label for="phoneNumber">Phone Number :</label>
        <input type="phoneNumber" name="phoneNumber" id="phoneNumber" placeholder="Enter your Phone Number" required />

        <button type="submit" name="register" style="display: block; width: 100%; margin: 0 auto;">Register</button>
    </form>
    <div class="login-link">
        <p>Sudah punya akun? <a href="/login" style="color: #143C85;">Login</a></p>
        <p><a href="/index" style="text-decoration: none; color: #143C85;">Kembali ke Home</a></p>
    </div>
</div>

@endsection