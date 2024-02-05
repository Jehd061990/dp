<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts/head')
    <link rel="stylesheet" href="css/styles.css" />
    <link rel="stylesheet" href="/css/navbar.css">
    <link rel="stylesheet" href="/css/footer.css">
    <link rel="stylesheet" href="/css/home.css">
    <script src="/js/home.js"></script> 

    <title>Home</title>
</head>

<body>
    @include('layouts/navbar')
    <div>
        <div class="container">
        <div class="row">
        <div class="col-lg-12 sliding_carousel">
            <div
              id="dwelling-hero"
              class="carousel slide"
              data-bs-ride="carousel"
              data-bs-interval="6000"
            >
              <div class="carousel-indicators">
                <button
                  data-bs-target="#dwelling-hero"
                  data-bs-slide-to="0"
                  class="active"
                ></button>
                <button
                  data-bs-target="#dwelling-hero"
                  data-bs-slide-to="1"
                ></button>
                <button
                  data-bs-target="#dwelling-hero"
                  data-bs-slide-to="2"
                ></button>
              </div>
  
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img
                    src="/img/2056374.jpg"
                    alt="3D perspective"
                    class="d-block w-100"
                  />
                  <div class="carousel-caption"></div>
                </div>
  
                <div class="carousel-item">
                  <img
                    src="/img/2056374.jpg"
                    alt="3D perspective"
                    class="d-block w-100"
                  />
                  <div class="carousel-caption"></div>
                </div>
  
                <div class="carousel-item">
                  <img
                    src="/img/2056374.jpg"
                    alt="3D perspective"
                    class="d-block w-100"
                  />
                  <div class="carousel-caption"></div>
                </div>
              </div>
  
              <button
                class="carousel-control-prev"
                type="button"
                data-bs-target="#dwelling-hero"
                data-bs-slide="prev"
              >
                <span class="carousel-control-prev-icon"></span>
              </button>
  
              <button
                class="carousel-control-next"
                type="button"
                data-bs-target="#dwelling-hero"
                data-bs-slide="next"
              >
                <span class="carousel-control-next-icon"></span>
              </button>
            </div>
          </div>
        </div>
    </div>
      </div>
    @include('layouts/footer')
</body>

</html>