<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" type="image/png" href="{{ url('/img/icon/home.png', [], true) }}">
   


    @include('layouts/header')
    <title>Home</title>
</head>

<body class="home">
    <div class="home_body">
        @include('layouts/navbar')
      
        <div>
          <div class="row">
            <div class="col-lg-12">
              <div id="dwelling_carousel">
                <div
                  id="dwelling-hero"
                  class="carousel slide"
                  data-bs-ride="carousel"
                  data-bs-interval="6000"
                >
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img
                        src="/img/2056374.jpg"
                        alt="3D perspective"
                        class="img-fluid img_home"
                      />
                      <div class="carousel-caption"></div>
                    </div>
                    <div class="carousel-item">
                      <img
                        src="/img/her_2.jpg"
                        alt="3D perspective"
                        class="img-fluid img_home"
                      />
                      <div class="carousel-caption"></div>
                    </div>
                    <div class="carousel-item">
                      <img
                        src="/img/her_1.jpg"
                        alt="3D perspective"
                        class="img-fluid img_home"
                      />
                      <div class="carousel-caption"></div>
                    </div>
                  </div>
                  <button
                    class="carousel-control-prev"
                    id="previous"
                    type="button"
                    data-bs-target="#dwelling-hero"
                    data-bs-slide="prev"
                  >
                    <span class="carousel-control-prev-icon"></span>
                  </button>
                  <button
                    class="carousel-control-next next"
                    id="next"
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
      
          <div class="container d-grid justify-content-center dwelling_2nd_images">
            <div class="row">
              <div class="col-lg-4">
                <img src="/img/2086922454.jpg" class="display_1 img-fluid" />
      
                <h6 class="text_indent_background" id="crafting">
                  <strong
                    >Crafting Spaces, Building Dreams: Explore Our Architectural
                    Creations</strong
                  >
                </h6>
      
                <p class="text_indent">
                  Making ideas a reality through meticulous attention to detail and an
                  unwavering commitment to quality. Making ideas a reality through
                  meticulous attention to detail and.
                </p>
              </div>
              <div class="col-lg-4 discover">
                <h5 id="inspired">
                  <strong
                    >Discover Inspired Designs and Timeless Architecture with
                    Us</strong
                  >
                </h5>
      
                <p class="text_indent">
                  At <strong>Dwelling Plans</strong>, we welcome you to take a journey
                  into a world where innovation meets tradition and each architectural
                  design tells its own story. Our collection features a varied range
                  of innovative designs and timeless architecture that flawlessly
                  combine form and function.
                </p>
                <p class="text_indent">
                  Whether you choose modern elegance, timeless charm, or creative
                  solutions, our team of passionate architects and designers is
                  committed to making your vision a reality. Explore our selection to
                  see how we transform places into timeless masterpieces that
                  captivate and withstand the test of time. Experience the small
                  details and precise work that define the commitment we make to
                  designing spaces regarding aesthetics, importance, and durability.
                </p>
              </div>
              <div class="col-lg-4" id="display_2">
                <img src="/img/image_content.png" class="img-fluid" />
              </div>
            </div>
      
            <div class="container">
              <div class="row" id="no-gutters">
                <div class="col-lg-3 homie display_1">
                  <a href="/product">
                    <img
                      src="/img/display_3.jpg"
                      id="small_3"
                      alt="3D Perspective"
                      class="img-fluid"
                    />
                  </a>
      
                  <p class="text_indent">
                    Innovative Designs, Endless <br />Possibilities: Start Your
                    Journey Here
                  </p>
                </div>
                <div class="col-lg-3 homie">
                  <a href="/product">
                    <img
                      src="/img/display_4.jpg"
                      id="small_3"
                      alt="3D Perspective"
                      class="img-fluid"
                    />
                  </a>
      
                  <p class="text_indent" id="small_4">
                    Explore the beauty of Art and Architecture
                  </p>
                </div>
                <div class="col-lg-6 homie">
                  <h6 class="text_indent_background">
                    <strong
                      >"Transforming Spaces, Enriching Lives: Experience our designs
                      that elevate environments and bring joy to everyday
                      living."</strong
                    >
                  </h6>
                  <p class="text_indent">
                    Whether you choose modern elegance, timeless charm, or creative
                    solutions, our team of passionate architects and designers is
                    committed to making your vision a reality. Explore our selection
                    to see how we transform places into timeless masterpieces that
                    captivate and withstand the test of time. Discover unmatched
                    expertise and dedication as we elevate every project with a touch
                    of visionary excellence. Trust in our relentless pursuit of
                    perfection, ensuring each space we shape becomes a timeless
                    testament to artistry and functionality. Experience the harmonious
                    blend of aesthetics and functionality that sets our creations
                    apart, making every project a showcase of unparalleled design.
                  </p>
                </div>
              </div>
            </div>
      
            <div class="container">
              <div class="row" id="no-gutters">
                <div class="col-lg-4">
                  <h6 class="text_indent_background">
                    <strong
                      >"Our designs stand out, addressing the unique needs and
                      aspirations of our clients."</strong
                    >
                  </h6>
                  <p class="text_indent">
                    By choosing our designs, clients not only invest in aesthetically
                    pleasing solutions but also in a strategic approach that enhances
                    their brand identity and user experience. Our team of skilled
                    designers employs a meticulous process, ensuring that every
                    element is carefully curated to reflect the client's vision and
                    resonate with their target audience. The result is a collection of
                    designs that not only meet but exceed industry standards,
                    providing a distinct competitive edge.Our designs are crafted to
                    optimize usability and create lasting impressions.
                  </p>
                </div>
                <div class="col-lg-4 homie">
                  <a href="/product">
                    <img
                      src="/img/display_7.jpg"
                      id="small_4"
                      alt="3D Perspective"
                      class="img-fluid"
                    />
                  </a>
                </div>
                <div class="col-lg-4 homie display_1">
                  <a href="/product">
                    <img
                      src="/img/display_5.jpg"
                      alt="3D Perspective"
                      class="img-fluid"
                      id="small_2"
                    />
                  </a>
                </div>
              </div>
              <div class="row" id="no-gutters">
                <div class="col-lg-12 homie">
                  <strong
                    ><p class="text_indent_background">
                      In every form of architecture, unique concepts and affordability
                      combines together to provide a blend of accessibility and
                      creativity. Discover an area where innovative design meets
                      cost-effective solutions as evidence of how committed we are to
                      elevating the standard for design accessibility. At the heart of
                      our philosophy is a dedication to implementing rules and
                      regulations that not only ensure structural integrity but also
                      uphold the highest standards of safety and sustainability. Our
                      designs are not just visually striking; they are meticulously
                      crafted to align with local building codes and regulations,
                      ensuring a seamless integration of creativity and compliance.
                    </p></strong
                  >
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
@include('layouts/footer')
</body>

</html>
