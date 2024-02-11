<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        table,
        th,
        td {
            border: 1px solid black;
            border-collapse: collapse;
            font-size: 80%;
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            @foreach($invoice as $item)
            <h1>{{ $item->order_title }}</h1>
            <p><b>LOT AREA: {{ $item->lot_area }}</b></p>
            <p><b>{{ $item->design }}</b></p>
            <p>{{ $item->description }}</p>
            @endforeach
        </div>
    </div>

</body>

</html>