<nav class="navbar navbar-expand-lg">
    <div class="navbar-bg"></div>
    <div class="container-fluid">
        <a class="navbar-brand" href="#"><img src="img/logo.png" alt=""></a>
        <button class="navbar-tg d-block d-lg-none" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-label="Toggle navigation">
            <div class="top"></div>
            <div class="middle"></div>
            <div class="bottom"></div>
        </button>

        <ul class="notification">
            <li class="nav-item me-2"><a href="#" class="nav-link"><img src="img/icons/nav-bell-icon.svg" alt="bell icon"></a></li>
            <li class="nav-item ms-2"><a href="#" class="nav-link"><img src="img/icons/nav-cart-icon.svg" alt="cart icon"></a></li>
        </ul>
        <div class="collapse navbar-collapse justify-content-end me-3 text-center navbar-margin-top" id="navbarTogglerDemo03">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="/product">Products</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" tabindex="-1">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" tabindex="-1">FAQ</a>
                </li>
            </ul>

            <div class="right">

                <!-- Reserve for Login and Signup -->
                <!-- <ul class="right-links login-settings">
                    <li class="nav-item"><a href="#" class="nav-link">Login </a></li>
                    <li><div class="vertical-bar"></div></li>
                    <li class="nav-item"><a href="#" class="nav-link"> Signup</a></li>
                </ul> -->

                <ul class="right-links profile-settings">
                    <li class="nav-item"><a href="" class="nav-link">Profile </a></li>
                    <li>
                        <div class="vertical-bar"></div>
                    </li>

                    <li class="nav-item"><a href="{{route('logout')}}" class="nav-link"> Logout</a></li>
                </ul>
            </div>

            <div class="greet">
                <h5>Hello</h5>
                <ul class="notify">
                    <li class="nav-item me-2"><a href="#" class="nav-link"><img src="img/icons/nav-bell-icon.svg" alt="bell icon"></a></li>
                    <li class="nav-item ms-2"><a href="#" class="nav-link"><img src="img/icons/nav-cart-icon.svg" alt="cart icon"></a></li>
                </ul>
            </div>


            <div class="sdropdown profile-set">
                <button class="profile-pic" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="https://newprofilepic.photo-cdn.net//assets/images/article/profile.jpg?90af0c8" alt="Profile picture">
                </button>
                <ul class="dropdown-menu text-center">
                    <h6> <b>FIRST NAME</b></h6>

                    <li><a class="dropdown-item" href="/profile">Profile</a></li>
                    <li><a class="dropdown-item" href="/logout">Logout</a></li>
                </ul>
            </div>
        </div>
    </div>
</nav>