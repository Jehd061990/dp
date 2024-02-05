<!DOCTYPE html>
<html lang="en">

<head>
    <!-- @include('layouts/head')
    <link rel="stylesheet" href="css/styles.css" />
    <link rel="stylesheet" href="/css/navbar.css">
    <link rel="stylesheet" href="/css/footer.css">
    <link rel="stylesheet" href="/css/home.css">
    <script src="/js/home.js"></script>  -->

    @include('layouts/header')

    <title>Home</title>
</head>

<body>
    @include('layouts/navbar')
    <div class="home-page bg-primary">
        <!-- <div><img src="/img/2056374.jpg" alt="3D House Perspective" class="img-fluid dwelling_car"/></div> -->
        <!-- <div class="row dwelling_car"> -->
            <!-- <div class="col-lg-12"> -->
                    <div id="dwelling-hero" class="carousel slide" data-bs-ride="carousel" data-bs-interval="6000">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="/img/2056374.jpg" alt="3D perspective" class="img-fluid">
                                <div class="carousel-caption"></div>
                            </div>
                            <div class="carousel-item">
                                <img src="/img/2056374.jpg" alt="3D perspective" class="img-fluid">
                                <div class="carousel-caption"></div>
                            </div>
                            <div class="carousel-item">
                                <img src="/img/2056374.jpg" alt="3D perspective" class="img-fluid">
                                <div class="carousel-caption"></div>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#dwelling-hero" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#dwelling-hero" data-bs-slide="next">
                            <span class="carousel-control-next-icon"></span>
                        </button>
                    </div>
               
            <!-- </div> -->
        <!-- </div> -->
    </div>
    
    <div class="container d-grid justify-content-center dwelling_2nd_images">
        <div class="row">
            <div class="col-lg-4">
                <img src="/img/2086922454.jpg" class="display_1 img-fluid"/>
            
                <h6 class="text_indent_background mt-3"><strong>Crafting Spaces, Building Dreams: Explore Our Architectural Creations</strong></h6>

                <p class="text_indent">Making ideas a reality through meticulous attention to detail and an unwavering commitment to quality.</p>
            </div>
            <div class="col-lg-4 discover">
                <h5><strong>Discover Inspired Designs and Timeless Architecture with Us</strong></h5>
                
                <p class="text_indent">At Dwelling Plans, we welcome you to take a journey into a world where innovation meets tradition and each architectural design tells its own story. Our collection features a varied range of innovative designs and timeless architecture that flawlessly combine form and function. </p>
                <p class="text_indent">Whether you choose modern elegance, timeless charm, or creative solutions, our team of passionate architects and designers is committed to making your vision a reality. Explore our selection to see how we transform places into timeless masterpieces that captivate and withstand the test of time.</p>
            
            </div>
            <div class="col-lg-4">
                <img src="/img/image_content.png" class="display_2 img-fluid"/>
                <h6 class="text_indent_background mt-3"><strong>"Transforming Spaces, Enriching Lives: Experience our designs that elevate environments and bring joy to everyday living."</strong></h6>

                
            </div>
        </div>

        <div class="row">
            <div class="col-lg-3">
                <img src="/img/display_3.jpg" class="display_4 img-fluid" />
            

                <p class="text_indent">Innovative Designs, Endless <br/>Possibilities: Start Your Journey Here</p>
            </div>
            <div class="col-lg-2 explore" style="margin-left: -45px; margin-right: -50px; width: 300px; height: 250px">
                <img src="/img/display_4.jpg" class="display_4 img-fluid"/>
                
            
                <p class="text_indent">Explore the beauty of Art and Architecture</p>
            
            </div>
            <div class="col-lg-2 elevate" style="margin-left: 30px; margin-right: -50px; width: 300px; height: 250px">
                        <img src="/img/display_5.jpg" class="display_3 img-fluid"/>

                <p class="text_indent">Elevating Spaces, Inspiring Living: Dive into Our Architectural World</p>
                
            </div>
            <div class="col-lg-4 explore_1" style="margin-left: 63px" class="text_indent">

                <p class="text_indent">With each project, we start on an effort to create places that go beyond simple structures, aiming to improve lives and create an atmosphere of connection. Our approach blends careful design, environmental techniques, and an in-depth understanding of our client's needs, resulting in spaces that have purpose and meaning. We believe in crafting architectural solutions that not only reflect our commitment to innovation and sustainability but also resonate with the unique identity of each community we serve.</p>
    
            </div>
        </div>
    </div>

    @include('layouts/footer')
</body>

</html>