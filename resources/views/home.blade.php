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
    <div id="hero-container">
        <img class="hero-image" src="image1.jpg" alt="Image 1">
        <img class="hero-image" src="image2.jpg" alt="Image 2">
        <img class="hero-image" src="image3.jpg" alt="Image 3">
        <img class="hero-image" src="image4.jpg" alt="Image 4">
    </div>
    @include('layouts/footer')
</body>

</html>