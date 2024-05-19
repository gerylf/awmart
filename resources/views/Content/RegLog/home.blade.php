@extends('Layout.layout')

@section('content')

<p>akun yang login adalah {{ Auth::user()->name }}</p>
<p>klik <a href="logout">Logout</a> untuk keluar</p>

@endsection