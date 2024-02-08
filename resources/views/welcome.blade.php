<div class="col-6 d-grid justify-content-center gap-3">
    <div class="d-flex flex-column">
        <!-- Checkboxes for different options -->
        <div>
            <label for="product_{{$p->product_id}}">3D Perspective (PHP {{$p->perspective_3d_price}})</label>
        </div>
        <div>
            <label for="floorplan_{{$p->product_id}}">Floor Plans (PHP {{$p->floor_plan_price}})</label>
        </div>
        <div>
            <label for="interior_{{$p->product_id}}">Interior (PHP {{$p->interior_price}})</label>
        </div>
        <div>
            <label for="full_set_{{$p->product_id}}">Full Set of Plans (PHP {{$p->full_set_price}})</label>
        </div>
        <div class="mt-2 total-price">
            <h6>Total Price:
                <!-- Calculate and display total price -->
                <span id="total_price_{{$p->product_id}}">{{($p -> perspective_3d_price) + ($p-> floor_plan_price) + ($p -> interior_price) + ($p -> full_set_price)}}</span>
            </h6>
        </div>
    </div>
</div>

<div class="modal-footer">
    <div>
        <h5>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum, aut?</h5>
    </div>
    <div class="container d-flex justify-content-around">
        <button class="d-flex justify-content-between">
            <span class="image"><img src="img/icons/peso-icon.svg" alt=""></span>
            <span class="span-text">BUY NOW</span>
        </button>
        <form action="{{ route('add_to_cart', ['product_id' => $p->product_id]) }}" method="POST">
            @csrf
            <!-- Pass the total price to the server-side script -->
            <input type="text" name="total_price" value="{{($p -> perspective_3d_price) + ($p-> floor_plan_price) + ($p -> interior_price) + ($p -> full_set_price)}}" hidden>
            <button type="submit" class="btn btn-success">Add to Cart</button>
        </form>
    </div>
</div>