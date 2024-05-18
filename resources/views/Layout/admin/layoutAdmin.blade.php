<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="{{ asset('css/dashboardHome.css') }}">
</head>

<body>
    @yield('content')

    <!-- Ensure the script tag is placed correctly -->
    <script src="{{ asset('js/dashboardHome.js') }}"></script>
   
</body>

</html>
