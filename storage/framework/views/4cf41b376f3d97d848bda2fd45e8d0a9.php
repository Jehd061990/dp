<!DOCTYPE html>
<html lang="en">

<head>
    <!-- <link rel="icon" type="image/png" href="<?php echo e(asset('img/super_admin.png')); ?>"> -->

    <?php echo $__env->make('layouts/header_superadmin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <title>Dashboard</title>
</head>

<body class="d-flex justify-content-between">
    <?php echo $__env->make('layouts/navbar_superadmin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="content-body pt-5 me-3" id="sa-dashboard-page">
        <div class="d-flex justify-content-between gap-4">
            <div class="left">
                <div class="statistics-container">
                    <div class="row">
                        <div class="col-lg-5 d-flex justify-content-center d-grid gap-2 pt-4">
                            <div><img src="/img/icons/add-person.png" alt="add-person-icon"></div>
                            <div>
                                <h5>358</h5>
                                <h6>NEW CUSTOMER | YTD</h6>
                            </div>
                        </div>

                        <div class="col-lg-2 p-0 d-flex justify-content-center">
                            <div class="separator"></div>
                        </div>

                        <div class="col-lg-5 d-flex justify-content-center d-grid gap-2 pt-4">
                            <div><img src="/img/icons/progress-bar.png" alt="add-person-icon"></div>
                            <div>
                                <h5>900,000</h5>
                                <h6>SALES REVENUE | YTD</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="right d-flex justify-content-center">
                <div class="right-chart">
                    <canvas id="rightChart"></canvas>
                </div>
            </div>
        </div>
        <div class="bar-chart mt-4">
            <div class="bottom-chart">
                <canvas id="bottomChart"></canvas>
            </div>
        </div>
    </div>
</body>

<script src="/js/chart.js"></script>

</html><?php /**PATH C:\Users\User\Desktop\bootcamp\capstone\dp\resources\views/superadmin_dashboard.blade.php ENDPATH**/ ?>