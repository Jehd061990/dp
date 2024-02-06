<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts/header')
    <title>Products</title>
</head>

<body>
    @include('layouts/navbar')
    <div id="product-page">
        <div class="search-bg container-fluid">
            <div class="container">
                <div class="row pt-5 pb-3">
                    <div class="col-sm-5">
                        <input type="text" placeholder="search" class="form-control">
                    </div>

                    <div class="col-sm-7 d-flex justify-content-center gap-3">
                        <select class="form-control" name="" id="">
                            <option value="">Sort by sqm</option>
                        </select>

                        <select class="form-control" name="" id="">
                            <option value="">Sort by storey</option>
                        </select>

                        <select class="form-control" name="" id="">
                            <option value="">Sort by design</option>
                        </select>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="container mt-5 d-grid justify-content-center">
        <div class="row mb-3">
            @foreach($products as $p)
            <div class="col-lg-3 col-md-4 col-6 mb-4">
                <div class="card" style="width: 100%;">
                    <img src="img/{{$p -> image_3d}}" class="card-img-top" alt="...">
                    <div class="card-body">

                        <h5 class="card-title">{{$p->title}}</h5>
                        <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
                        
                        <!-- Button trigger modal -->
                        <div class="text-center">
                            <button type="button" class="view-card-btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                View
                            </button>
                        </div>


                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="d-flex justify-content-between">
                                        <a href="#" class="ms-3 save"><img src="img/icons/save-icon.svg" alt=""></a>
                                        <button type="button" class="btn-close mt-3 me-3" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>

                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-6 house-pic d-grid justify-content-center gap-3">
                                                <img src="img/2086922454.jpg" class="card-img-top" alt="...">
                                                <img src="img/2086922454.jpg" class="card-img-top" alt="...">
                                                <img src="img/2086922454.jpg" class="card-img-top" alt="...">
                                            </div>
                                            <div class="col-6 d-grid justify-content-center gap-3">
                                                <div class="d-flex flex-column">
                                                    <div>
                                                        <input type="checkbox" name="3d" id="3d" value="500" class="form-check-input">
                                                        <label for="3d" class="form-check-label">3D Perspective</label>
                                                    </div>
                                                    <div>
                                                        <input class="form-check-input" type="checkbox" name="floorplan" id="floorplan" value="400">
                                                        <label class="form-check-label" for="floorplan">Floor Plans</label>
                                                    </div>
                                                    <div>
                                                        <input class="form-check-input" type="checkbox" name="interior" id="interior" value="300">
                                                        <label class="form-check-label" for="interior">Interior</label>
                                                    </div>
                                                    <div>
                                                        <input class="form-check-input" type="checkbox" name="full-sets-of-plans" id="full-sets-of-plans" value="1000">
                                                        <label class="form-check-label" for="full-sets-of-plans">Full sets of plans</label>
                                                    </div>

                                                </div>

                                                <div class="mt-2">
                                                    <h3>Php 5,000</h3>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <div>
                                            <h5>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum, aut?</h5>
                                        </div>
                                        <div class="container d-flex justify-content-around">
                                            <button class="d-flex justify-content-between"><span class="image"><img src="img/icons/peso-icon.svg" alt=""></span><span class="span-text">BUY NOW</span></button>
                                            <button class="d-flex justify-content-between"><img src="img/icons/cart-icon.svg" alt=""><span class="span-text">ADD TO CART</span></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            @endforeach
        </div>

    </div>



    </div>
    @include('layouts/footer')
</body>

</html>