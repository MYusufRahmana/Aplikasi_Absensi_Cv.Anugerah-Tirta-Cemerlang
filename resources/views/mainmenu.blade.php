<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-secondary pt-2 d-flex flex-column mb-3 fs-5">
        <div class="container-fluid text-white">
            <img src="{{asset('image/tsacLogo.png')}}" width="80px"  alt="" >
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active text-white" aria-current="page" href="#">Tirta Anugerah Cemerlang</a>
                    </li>
                </ul>
            </div>
            <div class="collapse navbar-collapse ms-auto flex flex-end border border-primary" id="navbarSupportedContent">
                <ul class="navbar-nav  mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a href="" class="nav-link text-white ">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Media Sosial
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item text-black" href="#">Instagram</a></li>
                            <li><a class="dropdown-item text-black" href="#">Facebook</a></li>
                            <li><a class="dropdown-item text-black" href="#">Tiktok</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-person-circle"></i>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item text-black" href="#">Login</a></li>
                            <li><a class="dropdown-item text-black" href="#">Sign Up</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
