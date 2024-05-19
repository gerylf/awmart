@extends('Layout.regLog.layoutLogres')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-12 col-sm-10 col-md-8 col-lg-6">
            <div class="card">
                <div class="card-header bg-primary text-white text-center">
                    <h3>Login</h3>
                </div>
                <div class="card-body">
                    <form action="{{ url('post-login') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email" class="form-control" required autofocus>
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" name="password" id="password" class="form-control" required>
                        </div>
                        <button type="submit" name="login" class="btn btn-primary btn-block btn-flat">Sign In</button>
                    </form>
                </div>
                <div class="card-footer text-center">
                    <p>Belum mempunyai akun? <a href="{{ url('register') }}">Daftar</a></p>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
