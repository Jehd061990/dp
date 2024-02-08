<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="icon" type="image/png" href="{{ asset('img/super_admin.png') }}">

    @include('layouts/header_superadmin')
    <title>Dashboard</title>
</head>

<body class="d-flex justify-content-between">
    @include('layouts/navbar_superadmin')
    <div class="bg-primary content-body">
        <h1>WELCOME SUPERADMIN</h1>
        <!-- <a href="/logout">Logout</a> -->
    </div>
</body>

</html>