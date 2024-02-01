<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts/header')
    <title>Products</title>
    <!-- <style>
        
    </style> -->
</head>
<body>
    @include('layouts/navbar')
    <div id="product-page">
        <div class="search-bg container-fluid">
            <div class="container">
                <div class="row pt-5">
                    <div class="col-sm-6">
                        <input type="text" placeholder="search">
                    </div>

                    <div class="col-sm-6">
                        <select name="" id="">
                            <option value="">Sort by sqm</option>
                        </select>

                        <select name="" id="">
                            <option value="">Sort by storey</option>
                        </select>

                        <select name="" id="">
                            <option value="">Sort by design</option>
                        </select>
                    </div>
                </div>
                
            </div>
        </div>
    
        <div class="container mt-5">
            <div class="row d-flex justify-content-center mb-3">
                <div class="col-lg-3">
                    <div class="card" style="width: 18rem;">
                        <img src="img/2086922454.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                            <!-- Button trigger modal -->
                            <div class="text-center">
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    View
                                </button>
                            </div>
                            

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="text-end">
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-6 house-pic">
                                                    <img src="img/2086922454.jpg" class="card-img-top" alt="...">
                                                    <img src="img/2086922454.jpg" class="card-img-top" alt="...">
                                                    <img src="img/2086922454.jpg" class="card-img-top" alt="...">
                                                </div>
                                                <div class="col-6">
                                                    <div class="d-flex flex-column">
                                                        <div>
                                                            <input type="checkbox" name="3d" id="3d" value="500">
                                                            <label for="3d">3D Perspective</label>
                                                        </div>
                                                        <div>
                                                            <input type="checkbox" name="floorplan" id="floorplan" value="400">
                                                            <label for="floorplan">Floor Plans</label>
                                                        </div>
                                                        <div>
                                                            <input type="checkbox" name="interior" id="interior" value="300">
                                                            <label for="interior">Interior</label>
                                                        </div>
                                                        <div>
                                                            <input type="checkbox" name="animaition" id="animation" value="1000">
                                                            <label for="animation">Animation</label>                                                        
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
                                                <button><img src="img/icons/peso-icon.svg" alt=""><span>BUY NOW</span></button>
                                                <button><img src="img/icons/cart-icon.svg" alt=""><span>ADD TO CART</span></button>
                                            </div> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card" style="width: 18rem;">
                        <img src="img/2086922454.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card" style="width: 18rem;">
                        <img src="img/2086922454.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card" style="width: 18rem;">
                        <img src="img/2086922454.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row d-flex justify-content-center mb-3">
                <div class="col-lg-3">
                    <div class="card" style="width: 18rem;">
                        <img src="img/2086922454.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card" style="width: 18rem;">
                        <img src="img/2086922454.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card" style="width: 18rem;">
                        <img src="img/2086922454.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card" style="width: 18rem;">
                        <img src="img/2086922454.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row d-flex justify-content-center mb-3">
                <div class="col-lg-3">
                    <div class="card" style="width: 18rem;">
                        <img src="img/2086922454.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card" style="width: 18rem;">
                        <img src="img/2086922454.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card" style="width: 18rem;">
                        <img src="img/2086922454.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card" style="width: 18rem;">
                        <img src="img/2086922454.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row d-flex justify-content-center mb-3">
                <div class="col-lg-3">
                    <div class="card" style="width: 18rem;">
                        <img src="img/2086922454.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card" style="width: 18rem;">
                        <img src="img/2086922454.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card" style="width: 18rem;">
                        <img src="img/2086922454.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card" style="width: 18rem;">
                        <img src="img/2086922454.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</body>
</html>