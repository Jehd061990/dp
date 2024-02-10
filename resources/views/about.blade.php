<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" type="image/png" href="{{ asset('img/profile.png') }}">
    @include('layouts/header')
    <script src="/js/products.js"></script>
    <title>About us</title>
</head>




<body class="about_body">
    @include('layouts/navbar')
    <header class="header_about">
        <h1>Architectural Designs</h1>
        <nav class="nav_about">
            <ul class="ul_about">
                <li class="li_about"><a href="/portfolio" class="a_about">Projects</a></li>
                <li class="li_about"><a href="#contact" class="a_about">Contact Us</a></li>
            </ul>
        </nav>
    </header>
    
    <section id="projects">
        <h2>Featured Projects</h2>
        <div class="project">
            <img src="project1.jpg" alt="Project 1">
            <h3>Project One</h3>
            <p>Description of Project One...</p>
        </div>
        <div class="project">
            <img src="project2.jpg" alt="Project 2">
            <h3>Project Two</h3>
            <p>Description of Project Two...</p>
        </div>
    </section>
   
    @include('layouts/footer')
</body>
</html>