<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Maid Agency System</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('assets/User/home_styles.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;800&display=swap" rel="stylesheet">

        
    </head>
    <body class="antialiased">
        <!-----------Style----------->
    <style>

        body {
            font-family: 'Open Sans', sans-serif; 
}
h1{
    position: absolute;
    font-size:60px;
    color:green;
    margin-top:250px;
    margin-left:500px;
}

.carousel-inner img {
    width: 100%;
    height: 600px;
    opacity: .2;
    position:relative;
}

a{
    text-decoration: none;
    font-weight: 400;
    font-size: 19px;
    color: black;
}
.log{
    margin-left:30px;
    color:white; 
}
.logo{
    height:50px;
    weight:50px;
}
.footer {
    position: absolute;
    bottom: 0;
    width: 100%;
    height: 60px;
    line-height: 60px;
    background-color: #f5f5f5;
}

#navbarNav{
    justify-content: space-between;
}
.navbar{
    height:80px;
    background:green;
}
.nav-link{
    color:white;
    font-size:18px;
}
.nav-link:hover{
    border-bottom:2px solid black;
}
    </style>
            
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand" href="#"><img class="logo" src="https://www.vhv.rs/dpng/d/493-4930751_maid-4-denver-maid-2-rise-cleaning-services.png" alt=""></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <div>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('service') }}">Search Services</a>
                        
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('maid') }}">Maid Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('tools') }}">Tools</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('payment') }}">Payment</a>
                    </li>
                </ul></div>
                <div>
                <div class="relative">
            @if (Route::has('login'))
                <div class="">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="f">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="log">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="log">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
</div></div>
            </div>
        </div>
    </nav>

    <!-- Slider -->
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <ol class="carousel-indicators">
            <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"></li>
            <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></li>
            <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <h1><b>Maid Agency System</b></h1>
            
            <div class="carousel-item active">
                <img src="https://www.mychores.in/Images/Housemaids.jpg" class="d-block w-100" alt="Slider 1">
            </div>
            <div class="carousel-item">
                <img src="https://bevootech.com/wp-content/uploads/2020/12/people-housework-housekeeping-concept-happy-woman-gloves-cleaning-window-with-rag-cleanser-spray-home-copy.jpg" class="d-block w-100" alt="Slider 2">
            </div>
            <div class="carousel-item">
                <img src="https://3.imimg.com/data3/JG/JH/MY-14800005/maid-service-500x500.jpeg" class="d-block w-100" alt="Slider 3">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </a>
    </div>

    <!-- Other Necessary Sections -->
    <section class="py-5">
        <div class="container">
            <h2>Welcome to the Maid Agency System</h2>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla sed interdum lectus. Integer dapibus
                mauris sit amet mauris laoreet, vitae venenatis ligula egestas. Aenean gravida elit nec mauris
                faucibus, a pellentesque erat sollicitudin.
            </p>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-dark text-white py-3">
        <div class="container text-center">
            <p>&copy; 2023 Maid Agency System. All rights reserved.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>



        </div>
    </body>
</html>
