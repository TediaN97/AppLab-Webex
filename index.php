<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AppLab</title>
    <link rel="stylesheet" href="css/main.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body class="text-primary">
    <header class="container mt-5">
        <nav class="navbar navbar-expand-lg ">
            <a class="navbar-brand fs-1" href="#intro">
                <span class="fw-bold text-secondary">App</span><span class="fw-bold text-primary">Lab</span>
            </a>
            <button class="navbar-toggler border-primary" type="button" data-bs-toggle="collapse" data-bs-target="#main-nav" aria-controls="main-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-md-end" id="main-nav">
                <ul class="navbar-nav justify-content-evenly w-75">
                    <li class="nav-item">
                        <a class="nav-link mt-3 fs-6" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mt-3 fs-6" href="#">Key Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mt-3 fs-6" href="#">Pricing</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mt-3 fs-6" href="#">Testiminial</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mt-3 fs-6" href="#">FAQ</a>
                    </li>
                    <button type="button" class="btn btn-tertiary btn-lg rounded-pill px-5 py-3">
                        <span class="fw-bolder fs-6">Try for free</span></a>
                    </button>
                </ul>
            </div>
        </nav>
        <div class="opacity-25 z-n1 position-absolute mt-5 start-0 ms-5">
            <img src="./public/vectors.webp" alt="vectors" />
        </div>
        <div class="d-flex flex-column justify-content-evenly align-items-center flex-xl-row">
            <div>
                <h5 class="w-75 rounded-pill bg-gray"><img class="bg-orange rounded-pill p-2" src="./public/correct.webp" alt="correct" /> #1 Editiors Choice App of 2020</h6>
                <h1 class="fw-bold display-3">Best app for your <br/> modern lifestyle</h1>
                <h5 class="opacity-75 mt-3">Increase productivity with a simple to-do app. App for <br/> managing your personal budgets.</h5>
                <div class="mt-4">
                    <button type="button" class="btn btn-tertiary btn-lg rounded-pill px-5 py-3">
                        <span class="fw-bolder fs-6">Try for free</span></a>
                    </button>
                    <button type="button" class="btn btn-lg text-tertiary rounded-pill">
                        <span class="fs-6">Watch demo video</span>
                    </button>
                </div>
            </div>
            <img class="display-2" src="./public/smartphone.webp" alt="smartphone" />
        </div>
        <img class="position-absolute z-n1 w-100 fixed-bottom " src="./public/town.webp" alt="town" />
        <img class="position-absolute z-n1 fixed-bottom ms-5" src="./public/red_circles.webp" alt="red_circles" />
    </header>

    <div class="container d-flex flex-column justify-content-center align-items-center mt-26">
        <span class="text-primary fs-6">
            Trusted by companies like
        </span>
        <div class="d-flex flex-column flex-lg-row justify-content-evenly w-100 mt-4">
            <img src="./public/company1.webp" alt="company1" />
            <img src="./public/company2.webp" alt="company2" />
            <img src="./public/company3.webp" alt="company3" />
            <img src="./public/company4.webp" alt="company4" />
            <img src="./public/company5.webp" alt="company5" />
        </div>
    </div>
    <div class="mt-52 d-flex flex-column flex-md-row justify-content-center mr-60">
        <img class="display-2" src="./public/phoneSmartSearch.webp" alt="phoneSmartSearch" />
        <div class="mt-5">
            <h2 class="display-6 fw-bold">Awesome apps <br /> features</h2>
            <h5 class="opacity-75 mt-3 fs-6">Increase productivity with a simple to-do app. app for <br /> managing your personal budgets.</h5>
            <div class="d-flex flex-row justify-content-evenly align-items-center mt-26 mr-5">
                <i class="fas fa-gauge fs-1 background-Performance p-3 rounded-circle " style="color: #f54d5d"></i>
                <div>
                    <h3 class="text-red fs-5 fw-bold">Fast Performance</h3> 
                    <h5 class="opacity-75 mt-3 fs-6">Get Your blood tests delivered at <br/>home collect a sample from the <br /> news your blood tests.</h5>
                </div>
            </div>
            <div class="d-flex flex-row justify-content-evenly align-items-center mt-5 mr-5">
                <i class="fas fa-pen-ruler fs-1 background-Prototyping p-3 rounded-circle " style="color: #1556ff"></i>
                <div>
                    <h3 class="text-light-blue fs-5 fw-bold">Prototyping</h3> 
                    <h5 class="opacity-75 mt-3 fs-6">Get Your blood tests delivered at <br/>home collect a sample from the <br /> news your blood tests.</h5>
                </div>
            </div>
            <div class="d-flex flex-row justify-content-evenly align-items-center mt-5 mr-5">
                <i class="fas fa-bezier-curve fs-1 background-Vector p-3 rounded-circle " style="color: #349154"></i>
                <div>
                    <h3 class="text-green fs-5 fw-bold">Vector Editing</h3> 
                    <h5 class="opacity-75 mt-3 fs-6">Get Your blood tests delivered at <br/>home collect a sample from the <br /> news your blood tests.</h5>
                </div>
            </div>                 
        </div> 
    </div>


    <script src="node_modules/bootstrap/dist/js/bootstrap.js"></script>
</body>
</html>