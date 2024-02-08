<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="icon" type="image/png" href="{{ asset('img/super_admin.png') }}">

    @include('layouts/header_superadmin')
    <title>Dashboard</title>
</head>

<body class="d-flex justify-content-between">
    @include('layouts/navbar_superadmin')
    <div class="content-body pt-5 me-3" id="sa-dashboard-page">
        <div class="d-flex justify-content-between gap-4">
            <div class="left">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 bg-primary align-middle">
                            hello
                        </div>

                        <div class="col-lg-4 bg-secondary">
                            hi
                        </div>

                        <div class="col-lg-4 bg-success">
                            World
                        </div>
                    </div>
                </div>
            </div>
            <div class="right">World</div>
        </div>
        <div class="bar-chart mt-4">
            <!-- <div class="bar-chart">

            </div> -->
        </div>
    </div>
</body>

</html>