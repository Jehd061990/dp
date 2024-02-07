<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts/header')

    <title>Home</title>
</head>

<body id="home-page">
    @include('layouts/navbar')

    <div class="home_body">
        <div id="dwelling_carousel">
            <div id="dwelling-hero" class="carousel slide" data-bs-ride="carousel" data-bs-interval="6000">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="/img/2056374.jpg" alt="3D perspective" class="img-fluid img_home">
                        <div class="carousel-caption"></div>
                    </div>
                    <div class="carousel-item">
                        <img src="/img/her_2.jpg" alt="3D perspective" class="img-fluid img_home">
                        <div class="carousel-caption"></div>
                    </div>
                    <div class="carousel-item">
                        <img src="/img/her_1.jpg" alt="3D perspective" class="img-fluid img_home">
                        <div class="carousel-caption"></div>
                    </div>
                </div>
                <button class="carousel-control-prev" id="previous" type="button" data-bs-target="#dwelling-hero" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </button>
                <button class="carousel-control-next next" id="next" type="button" data-bs-target="#dwelling-hero" data-bs-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </button>
            </div>
        </div>
    </div>
</body>

</html>