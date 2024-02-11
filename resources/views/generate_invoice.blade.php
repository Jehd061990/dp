<!DOCTYPE html>
<html lang="en">

<head>

</head>

<body>
    <div class="container-fluid">
        @foreach($invoice as $item)
        <div class="row">
            <h1>{{ $item->order_title }}</h1>
            <p><b>LOT AREA: {{ $item->lot_area }}</b></p>
            <p><b>{{ $item->design }}</b></p>
            <p>{{ $item->description }}</p>
        </div>

        <div class="row">
            <div class="col-lg-3">
                <img src="{{$item -> image_3d}}">
            </div>
            <div class="col-lg-3">
                <img src="{{$item -> floor_plan_image}}">
            </div>
            <div class="col-lg-3">
                <img src="{{$item -> interior_image}}">
            </div>
        </div>
        @endforeach
    </div>

</body>

</html>