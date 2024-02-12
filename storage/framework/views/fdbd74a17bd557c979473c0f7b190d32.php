<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" type="image/png" href="<?php echo e(asset('img/products.png')); ?>">
    <?php echo $__env->make('layouts/header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <script src="/js/products.js"></script>
    <title>Products</title>
</head>




<body>
    <?php echo $__env->make('layouts/navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- <div id="product-page">
        <div class="search-bg container-fluid"> -->
            <!-- <div class="form-floating">
                <input type="password" name="pw" class="form-control" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Password</label>
            </div> -->
            <input type="text" placeholder="Search" class="form-control" id="search_bar">
            <!-- <div class="container searching">
                <div class="row pt-5 pb-3">
                    <div class="col-sm-5 col-12 text-center">
                        <div class="d-flex justify-content-between">
                            
                        </div>
                    </div>
                </div>
            </div> -->
        <!-- </div>
    </div> -->

    <div class="productsView container mt-5 d-grid justify-content-start" id="products_container">
        
            <div class="row mb-5 mt-5 product" id="productsView">
                <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-lg-3 col-md-4 col-6 mb-4">
                    <div class="card" style="width: 100%;" id="card_design">
                        <img src="img/products/<?php echo e($p -> image_3d); ?>" class="card-img-top" alt="...">

                        <div class="card-body">

                            <h5 class="card-title"><?php echo e($p->storey_id); ?> <?php echo e($p->title); ?><br /><?php echo e($p->lot_area); ?></h5>

                            <!-- Button trigger modal -->
                            <div class="text-center">
                                <button type="button" class="view-card-btn" data-bs-toggle="modal" data-bs-target="#exampleModal<?php echo e($p->product_id); ?>">
                                    View
                                </button>
                            </div>

                            
                            

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal<?php echo e($p->product_id); ?>" tabindex="-1" aria-labelledby="exampleModalLabel<?php echo e($p->product_id); ?>" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="d-flex justify-content-between">
                                            <a href="#" class="ms-3 save"><img src="img/icons/save-icon.svg" alt=""></a>
                                            <button type="button" class="btn-close mt-3 me-3" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-6 house-pic d-grid justify-content-center gap-3">
                                                    <img src="img/products/<?php echo e($p -> image_3d); ?>" class="card-img-top" alt="...">
                                                    <img src="img/products/<?php echo e($p->floor_plan_image); ?>" class="card-img-top preview-image" alt="...">

                                                    <img src="img/products/<?php echo e($p -> interior_image); ?>" class="card-img-top" alt="...">
                                                </div>
                                                <div class="col-6 d-grid justify-content-center gap-3">
                                                    <div class="d-flex flex-column" id="list_with_price">
                                                        <!-- Checkboxes for different options -->
                                                        <div id="list_with_price_padding">
                                                            <!-- <input type="checkbox" class="checkbox" data-price="<?php echo e($p->perspective_3d_price); ?>" id="product_<?php echo e($p->product_id); ?>" value="<?php echo e($p->product_id); ?>"> -->

                                                            <label for="product_<?php echo e($p->product_id); ?>">3D Perspective (PHP <?php echo e($p->perspective_3d_price); ?>)</label>
                                                        </div>
                                                        <div id="list_with_price_padding">
                                                            <!-- <input type="checkbox" class="checkbox" data-price="<?php echo e($p->floor_plan_price); ?>" id="floorplan_<?php echo e($p->product_id); ?>" value="<?php echo e($p->product_id); ?>"> -->

                                                            <label for="floorplan_<?php echo e($p->product_id); ?>">Floor Plans (PHP <?php echo e($p->floor_plan_price); ?>)</label>
                                                        </div>
                                                        <div id="list_with_price_padding">
                                                            <!-- <input type="checkbox" class="checkbox" data-price="<?php echo e($p->interior_price); ?>" id="interior_<?php echo e($p->product_id); ?>" value="<?php echo e($p->product_id); ?>"> -->

                                                            <label for="interior_<?php echo e($p->product_id); ?>">Interior (PHP <?php echo e($p->interior_price); ?>)</label>
                                                        </div>
                                                        <div id="list_with_price_padding">

                                                            <label for="full_set_<?php echo e($p->product_id); ?>">Full Set of Plans (PHP <?php echo e($p->full_set_price); ?>)</label>
                                                        </div>
                                                        <div class="mt-2 total-price" id="list_with_price_padding">
                                                            <h6> <strong>Total Price:
                                                                    <!-- Calculate and display total price -->
                                                                    <span id="total_price_<?php echo e($p->product_id); ?>"><?php echo e(($p -> perspective_3d_price) + ($p-> floor_plan_price) + ($p -> interior_price) + ($p -> full_set_price)); ?></span>
                                                                </strong></h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <div>
                                                <h6><?php echo e($p->description); ?></h6>
                                            </div>
                                            <div class="container d-flex justify-content-around">
                                                <!-- <form action="/checkout" method="POST">
                                                    <?php echo csrf_field(); ?>
                                                    <button type="submit" class="btn btn-success">Buy Now</button>
                                                </form> -->
                                                <!-- <button class="d-flex justify-content-between">
                                                    <span class="image"><img src="img/icons/peso-icon.svg" alt=""></span>
                                                    <span class="span-text">BUY NOW</span>
                                                </button> -->
                                                <form action="<?php echo e(route('add_to_cart', ['product_id' => $p->product_id])); ?>" method="POST">
                                                    <?php echo csrf_field(); ?>
                                                    <input type="text" name="total_price" value="<?php echo e(($p -> perspective_3d_price) + ($p-> floor_plan_price) + ($p -> interior_price) + ($p -> full_set_price)); ?>" hidden>
                                                    
                                                    <button type="submit" class="btn btn-success">Add to Cart</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>

            <div class="row mb-5 mt-5 product" id="searchProductsView">
                
            </div>
            <?php echo e($products -> links('pagination::bootstrap-5')); ?>

        
        
    </div>
    

    </div>



    <?php echo $__env->make('layouts/footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>

<script>
    $(document).ready(function(){
        $('#search_bar').keyup(function(){
            const searchId = $(this).val()

            if(searchId == ""){
                $('#productsView').show()
            }else{
                $('#productsView').hide()
            }
            

            $.ajax({
                url: '/products/search/' + searchId,
                type: 'GET',
                dataType: 'json',
                success: function(data){
                    $('.row#searchProductsView').empty()

                    for(let i = 0; i < data.length; i++){
                        // ${(data[i].perspective_3d_price) + (data[i].floor_plan_price) + (data[i].interior_price) + (data[i].full_set_price)}

                        let perspective3dPrice = Number(data[i].perspective_3d_price)
                        let florPlanPrice = Number(data[i].floor_plan_price)
                        let interiorPrice = Number(data[i].interior_price)
                        let fullSetPrice = Number(data[i].full_set_price)

                        let totalPrice = perspective3dPrice + florPlanPrice + interiorPrice + fullSetPrice

                        const rowData = `
                            <div class="col-lg-3 col-md-4 col-6 mb-4">
                                <div class="card" style="width: 100%;" id="card_design">
                                    <img src="img/products/${data[i].image_3d}" class="card-img-top" alt="house picture">

                                    <div class="card-body">

                                        <h5 class="card-title">${data[i].storey_id} ${data[i].title}<br />${data[i].lot_area}</h5>

                                        <!-- Button trigger modal -->
                                        <div class="text-center">
                                            <button type="button" class="view-card-btn" data-bs-toggle="modal" data-bs-target="#exampleModal${data[i].product_id}">
                                                View
                                            </button>
                                        </div>
                                        

                                        <!-- Modal -->
                                        <div class="modal fade" id="exampleModal${data[i].product_id}" tabindex="-1" aria-labelledby="exampleModalLabel${data[i].product_id}" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="d-flex justify-content-between">
                                                        <a href="#" class="ms-3 save"><img src="img/icons/save-icon.svg" alt=""></a>
                                                        <button type="button" class="btn-close mt-3 me-3" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="row">
                                                            <div class="col-6 house-pic d-grid justify-content-center gap-3">
                                                                <img src="img/products/${data[i].image_3d}" class="card-img-top" alt="...">
                                                                <img src="img/products/${data[i].floor_plan_image}" class="card-img-top preview-image" alt="...">

                                                                <img src="img/products/${data[i].interior_image}" class="card-img-top" alt="...">
                                                            </div>
                                                            <div class="col-6 d-grid justify-content-center gap-3">
                                                                <div class="d-flex flex-column" id="list_with_price">
                                                                    <!-- Checkboxes for different options -->
                                                                    <div id="list_with_price_padding">

                                                                        <label for="product_${data[i].product_id}">3D Perspective (PHP ${data[i].perspective_3d_price})</label>
                                                                    </div>
                                                                    <div id="list_with_price_padding">

                                                                        <label for="floorplan_${data[i].product_id}">Floor Plans (PHP ${data[i].floor_plan_price})</label>
                                                                    </div>
                                                                    <div id="list_with_price_padding">

                                                                        <label for="interior_${data[i].product_id}">Interior (PHP ${data[i].interior_price})</label>
                                                                    </div>
                                                                    <div id="list_with_price_padding">

                                                                        <label for="full_set_${data[i].product_id}">Full Set of Plans (PHP ${data[i].full_set_price})</label>
                                                                    </div>
                                                                    <div class="mt-2 total-price" id="list_with_price_padding">
                                                                        <h6> <strong>Total Price:
                                                                                <span id="total_price_${data[i].product_id}">${totalPrice}</span>
                                                                            </strong></h6>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <div>
                                                            <h6>${data[i].description}</h6>
                                                        </div>
                                                        <div class="container d-flex justify-content-around">
                                                            <!-- <form action="/checkout" method="POST">
                                                                <?php echo csrf_field(); ?>
                                                                <button type="submit" class="btn btn-success">Buy Now</button>
                                                            </form> -->
                                                            <!-- <button class="d-flex justify-content-between">
                                                                <span class="image"><img src="img/icons/peso-icon.svg" alt=""></span>
                                                                <span class="span-text">BUY NOW</span>
                                                            </button> -->
                                                            <form action="<?php echo e(route('add_to_cart', ['product_id' => $p->product_id])); ?>" method="POST">
                                                                <?php echo csrf_field(); ?>
                                                                <input type="text" name="total_price" value="${totalPrice}" hidden>
                                                                
                                                                <button type="submit" class="btn btn-success">Add to Cart</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                
                        `

                        $('#searchProductsView').append(rowData)
                    }
                    
                },
                error: function(error){
                    console.log(error)
                }
            })
        })
    })
</script>

</html><?php /**PATH C:\Users\User\Desktop\bootcamp\capstone\dp\resources\views/product.blade.php ENDPATH**/ ?>