<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Title -->
    <title>Blog Journal | Front - Responsive Website Template</title>

    <!-- Required Meta Tags Always Come First -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">

    <!-- Font -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600&display=swap" rel="stylesheet">

    <!-- CSS Implementing Plugins -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/font-awesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/hs-mega-menu/dist/hs-mega-menu.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/slick-carousel/slick/slick.css') }}">

    <!-- CSS Front Template -->
    <link rel="stylesheet" href="{{ asset('assets/css/theme.css') }}">
    <!-----style sheet ------->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>

<body>
    <!-- ========== HEADER ========== -->
    <header id="header" class="header nav-shadow bg-light position-fixed">
        <div id="logoAndNav" class="container">
            <!-- Nav -->
            <nav class="js-mega-menu navbar navbar-expand-lg d-flex justify-content-between">
                <!-- Logo -->
                <a href="/" aria-label="Front">
                    <img src="{{ asset('assets/svg/logos/piofx.png') }}" width="100" alt="Logo">
                </a>
                <!-- End Logo -->
                <div>
                    <a class="signup_btn ml-3 d-lg-none" href="#">Begin</a>
                    <!-- Responsive Toggle Button -->
                    <button type="button" class="navbar-toggler btn btn-icon btn-ghost-dark"
                        aria-label="Toggle navigation" aria-expanded="false" aria-controls="navBar"
                        data-toggle="collapse" data-target="#navBar">
                        <span class="navbar-toggler-default">
                            <svg width="14" height="14" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
                                <path fill="currentColor"
                                    d="M17.4,6.2H0.6C0.3,6.2,0,5.9,0,5.5V4.1c0-0.4,0.3-0.7,0.6-0.7h16.9c0.3,0,0.6,0.3,0.6,0.7v1.4C18,5.9,17.7,6.2,17.4,6.2z M17.4,14.1H0.6c-0.3,0-0.6-0.3-0.6-0.7V12c0-0.4,0.3-0.7,0.6-0.7h16.9c0.3,0,0.6,0.3,0.6,0.7v1.4C18,13.7,17.7,14.1,17.4,14.1z" />
                            </svg>
                        </span>
                        <span class="navbar-toggler-toggled">
                            <svg width="14" height="14" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
                                <path fill="currentColor"
                                    d="M11.5,9.5l5-5c0.2-0.2,0.2-0.6-0.1-0.9l-1-1c-0.3-0.3-0.7-0.3-0.9-0.1l-5,5l-5-5C4.3,2.3,3.9,2.4,3.6,2.6l-1,1 C2.4,3.9,2.3,4.3,2.5,4.5l5,5l-5,5c-0.2,0.2-0.2,0.6,0.1,0.9l1,1c0.3,0.3,0.7,0.3,0.9,0.1l5-5l5,5c0.2,0.2,0.6,0.2,0.9-0.1l1-1 c0.3-0.3,0.3-0.7,0.1-0.9L11.5,9.5z" />
                            </svg>
                        </span>
                    </button>
                    <!-- End Responsive Toggle Button -->
                </div>
                <!-- Navigation -->
                <div id="navBar" class="collapse navbar-collapse ">
                    <ul class="navbar-nav mx-auto">
                        <li class="navbar-nav-item mr-4">
                            <a href="/blog" class="nav-link font-weight-bold">Home</a>
                        </li>

                        <!-- About -->
                        <li class="navbar-nav-item mr-4 font-weight-bold">
                            <a class="nav-link" href="#">About</a>
                        </li>
                        <!-- End About -->

                        <!-- Contact -->
                        <li class="navbar-nav-item font-weight-bold">
                            <a href="/blog/create" class="nav-link">Create</a>
                        </li>
                        <!-- End Contact -->
                    </ul>
                    <!-- Begin button -->
                    <span class="navbar-nav-item ml-lg-3 mt-3 mt-lg-0 d-none d-lg-block">
                        <a class="signup_btn" href="#">Begin</a>
                    </span>
                    <!-- End Begin button -->
                </div>
                <!-- End Navigation -->
            </nav>
            <!-- End Nav -->
        </div>
        </div>
    </header>
    <!-- ========== END HEADER ========== -->

    <!-- ========== MAIN ========== -->
    <main id="content" role="main">

        <!-- Hero Section -->
        <div class="position-relative z-index-2">
            <!-- Content -->
            <div class="d-md-flex">
                <div class="container d-md-flex  mt-3 text-center space-top-2">
                    <div class="w-lg-85 mx-lg-auto">
                        <!-- Info -->
                        <div class="mt-5">
                            <h1 class="text-dark mb-3">Search the Category</h1>
                        </div>
                        <!-- End Info -->
                        <!-- Form -->
                        <form action="/blog/search" class="mx-lg-auto" method="POST">
                            @csrf
                            <div class="card p-3 border ">
                                <div class="form-row input-group-borderless">
                                    <div class="col-sm mb-2 mb-md-0">
                                        <input type="text" class="form-control shadow-none" name="search_query"
                                            placeholder="Search Something...">
                                    </div>
                                    <div class="col-sm d-sm-none">
                                        <hr class="my-0">
                                    </div>
                                    <div class="col-md-auto">
                                        <button type="submit" class="btn btn-block btn-outline-primary btn-wide" name="search">Search</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <!-- End Form -->
                    </div>
                </div>
            </div>
            <!-- End Content -->
        </div>

        <!-- End Hero Section -->
        <!-- Articles Section -->
        <div class="container space-1 text-center">
            <div class="row mx-n2 mx-lg-n3">

                @foreach($posts as $post)
                <div class="col-sm-6 col-lg-4 px-2 px-lg-3 py-5 rounded-lg">
                    <!-- Card -->
                    <div class="card flex-wrap flex-row  text-dark">
                        <div class="">
                            <figure class="max-w-37rem w-100 mx-auto mb-4">
                                <img class="img-fluid rounded" src="../assets/img/500x280/img1.jpg"
                                    alt="Image Description">
                            </figure>
                            <h3>{{$post->title}}</h3>
                            <p>{{$post->excerpt}}</p>
                            <hr class="mx-4">
                            <h5 class="text-left ml-3 my-4">User</h5>
                        </div>
                    </div>
                    <!-- End Card -->
                </div>
                @endforeach

            </div>
        </div>

        <!-- End Articles Section -->
    </main>
    <!-- ========== END MAIN ========== -->

    <!-- ========== FOOTER ========== -->
    <footer class="" style="background-color: #2f575d;">
        <div class="container">
            <div class="space-top-1 space-bottom-1 space-bottom-lg-1">
                <div class="row justify-content-lg-between">
                    <div class="col-lg-3 ml-lg-auto mb-2 mb-lg-0">
                        <!-- Logo -->
                        <div class="mb-4">
                            <a href="#" aria-label="Front">
                                <img class="brand" src="{{ asset('assets/img/piofx-white.png') }}" alt="Logo">
                            </a>
                        </div>
                        <!-- End Logo -->

                        <!-- Nav Link -->
                        <ul class="nav nav-sm nav-x-0 nav-white flex-column">

                            <li class="nav-item">
                                <a class="nav-link media" href="javascript:;">
                                    <span class="media">
                                        <span class="fas fa-location-arrow mt-1 mr-2"></span>
                                        <span class="media-body">
                                            Packet Prep,2nd floor First Academy, Madhapur
                                        </span>
                                    </span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link media" href="tel:+91-000-000-0000">
                                    <span class="media">
                                        <span class="fas fa-phone-alt mt-1 mr-2"></span>
                                        <span class="media-body">
                                            +1 (062) 109-9222
                                        </span>
                                    </span>
                                </a>
                            </li>
                        </ul>
                        <!-- End Nav Link -->
                    </div>

                    <div class="col-6 col-md-3 col-lg mb-5 mb-lg-0">
                        <h5 class="text-white">Services</h5>

                        <!-- Nav Link -->
                        <ul class="nav nav-sm nav-x-0 nav-white flex-column">
                            <li class="nav-item"><a class="nav-link" href="corporates.html">For Corporates</a></li>
                            <li class="nav-item"><a class="nav-link" href="schools.html">For Schools</a></li>
                            <li class="nav-item"><a class="nav-link" href="colleges.html">For Colleges</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">For Institutes</a></li>
                        </ul>
                        <!-- End Nav Link -->
                    </div>

                    <div class="col-6 col-md-3 col-lg mb-5 mb-lg-0">
                        <h5 class="text-white">Assessments</h5>

                        <!-- Nav Link -->
                        <ul class="nav nav-sm nav-x-0 nav-white flex-column">
                            <li class="nav-item"><a class="nav-link" href="oet.html">OET</a></li>
                            <li class="nav-item"><a class="nav-link" href="det.html">DET</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">English Assessment Test</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">EAMCET</a></li>
                        </ul>
                        <!-- End Nav Link -->
                    </div>

                    <div class="col-6 col-md-3 col-lg">
                        <h5 class="text-white">Company</h5>
                        <!-- Nav Link -->
                        <ul class="nav nav-sm nav-x-0 nav-white flex-column">
                            <li class="nav-item"><a class="nav-link" href="#">About Us</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">Our Partners</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">Student Reviews</a></li>
                        </ul>
                        <!-- End Nav Link -->
                    </div>
                </div>
            </div>
            <hr class="opacity-xs my-0">
            <div class="space-1">
                <div class="row align-items-md-center mb-5">
                    <div class="col-md-6 mb-4 mb-md-0">
                        <!-- Nav Link -->
                        <ul class="nav nav-sm nav-white nav-x-sm align-items-center">
                            <li class="nav-item">
                                <a class="nav-link" href="#">Privacy &amp; Policy</a>
                            </li>
                            <li class="nav-item opacity mx-3">&#47;</li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Terms & Services</a>
                            </li>
                        </ul>
                        <!-- End Nav Link -->
                    </div>

                    <div class="col-md-6 text-md-right">
                        <ul class="list-inline mb-0">
                            <!-- Social Networks -->
                            <li class="list-inline-item">
                                <a class="btn btn-xs btn-icon btn-soft-light" href="#">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a class="btn btn-xs btn-icon btn-soft-light" href="#">
                                    <i class="fab fa-google"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a class="btn btn-xs btn-icon btn-soft-light" href="#">
                                    <i class="fab fa-twitter"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a class="btn btn-xs btn-icon btn-soft-light" href="#">
                                    <i class="fab fa-github"></i>
                                </a>
                            </li>
                            <!-- End Social Networks -->
                        </ul>
                    </div>
                </div>

                <!-- Copyright -->
                <div class="w-md-75 text-lg-center mx-lg-auto">
                    <p class="text-white opacity-sm small">&copy; Piofx. 2020 First Academy. All rights reserved.</p>
                    <p class="text-white opacity-sm small">When you visit or interact with our sites, services or tools,
                        we or our
                        authorised service providers may use cookies for storing information to help provide you with a
                        better,
                        faster and safer experience and for marketing purposes.</p>
                </div>
                <!-- End Copyright -->
            </div>
        </div>
    </footer>
    <!-- ========== END FOOTER ========== -->

    <!-- Go to Top -->
    <a class="js-go-to go-to position-fixed" href="javascript:;" style="visibility: hidden;" data-hs-go-to-options='{
       "offsetTop": 700,
       "position": {
         "init": {
           "right": 15
         },
         "show": {
           "bottom": 15
         },
         "hide": {
           "bottom": -15
         }
       }
     }'>
        <i class="fas fa-angle-up"></i>
    </a>
    <!-- End Go to Top -->

    <!-- JS Global Compulsory -->
    <script src="{{ asset('assets/vendor/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/jquery-migrate/dist/jquery-migrate.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>

    <!-- JS Implementing Plugins -->
    <script src="{{ asset('assets/vendor/hs-header/dist/hs-header.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/hs-go-to/dist/hs-go-to.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/hs-unfold/dist/hs-unfold.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/hs-mega-menu/dist/hs-mega-menu.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/hs-sticky-block/dist/hs-sticky-block.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/slick-carousel/slick/slick.js') }}"></script>
    <script src="{{ asset('assets/vendor/jquery-validation/dist/jquery.validate.min.js') }}"></script>
</body>

</html>