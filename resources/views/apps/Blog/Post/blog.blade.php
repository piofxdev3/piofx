<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Title -->
  <title>Blog Journal | Front - Responsive Website Template</title>

  <!-- Required Meta Tags Always Come First -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Favicon -->
  <link rel="shortcut icon" href="../../favicon.ico">

  <!-- Font -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600&display=swap" rel="stylesheet">

  <!-- CSS Implementing Plugins -->
  <link rel="stylesheet" href="../../assets/vendor/font-awesome/css/all.min.css">
  <link rel="stylesheet" href="../../assets/vendor/hs-mega-menu/dist/hs-mega-menu.min.css">
  <link rel="stylesheet" href="../../assets/vendor/slick-carousel/slick/slick.css">

  <!-- CSS Front Template -->
  <link rel="stylesheet" href="../../assets/css/theme.css">
  <!-----style sheet ------->
  <link rel="stylesheet" href="../../assets/css/style.css">
</head>

<body>
  <!-- ========== HEADER ========== -->
  <header id="header" class="header nav-shadow bg-light position-fixed">

    <div id="logoAndNav" class="container">
      <!-- Nav -->
      <nav class="js-mega-menu navbar navbar-expand-lg d-flex justify-content-between">
        <!-- Logo -->
        <a href="/" aria-label="Front">
          <img src="../../assets/svg/logos/piofx.png" width="100" alt="Logo">
        </a>
        <!-- End Logo -->

        <div>
          <a class="signup_btn ml-3 d-lg-none" href="#">Begin</a>

          <!-- Responsive Toggle Button -->
          <button type="button" class="navbar-toggler btn btn-icon btn-ghost-dark" aria-label="Toggle navigation"
            aria-expanded="false" aria-controls="navBar" data-toggle="collapse" data-target="#navBar">
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
              <a href="./index.html" class="nav-link font-weight-bold">Home</a>
            </li>

            <!-- About -->
            <li class="navbar-nav-item mr-4 font-weight-bold">
              <a class="nav-link" href="#">About</a>
            </li>
            <!-- End About -->

            <!-- Contact -->
            <li class="navbar-nav-item font-weight-bold">
              <a href="#" class="nav-link">Blog</a>
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
    <div class="position-relative">
      <!-- Main Slider -->
      <div id="heroSlider" class="js-slick-carousel slick" data-hs-slick-carousel-options='{
           "vertical": true,
           "verticalSwiping": true,
           "infinite": true,
           "autoplay": true,
           "autoplaySpeed": 10000,
           "dots": true,
           "dotsClass": "slick-pagination slick-pagination-white slick-pagination-vertical d-lg-none position-absolute bottom-0 right-0 mb-3 mr-3",
           "asNavFor": "#heroSliderNav",
           "responsive": [
             {
               "breakpoint": 576,
               "settings": {
                 "vertical": false,
                 "verticalSwiping": false
               }
             }
           ]
         }'>

        <div class="js-slide d-flex gradient-x-overlay-sm-navy bg-img-hero min-h-620rem"
          style="background-image: url(../../assets/img/1920x1080/img3.jpg);">
          <!-- News Block -->
          <div class="container d-flex align-items-center min-h-620rem">
            <div class="w-lg-40 mr-5">
              <!-- Author -->
              <div class="media align-items-center mb-3" data-hs-slick-carousel-animation="fadeInUp">
                <div class="avatar avatar-sm avatar-circle mr-3">
                  <img class="avatar-img" src="../../assets/img/100x100/img10.jpg" alt="Image Description">
                </div>
                <div class="media-body">
                  <a class="text-white" href="single-article.html">Christina Kray</a>
                </div>
              </div>
              <!-- End Author -->

              <div class="mb-5">
                <h3 class="h1 font-weight-bold text-white" data-hs-slick-carousel-animation="fadeInUp"
                  data-hs-slick-carousel-animation-delay="150">Front Interview with a Lead Designer of the Hubble</h3>
              </div>
              <a class="btn btn-primary btn-wide transition-3d-hover" href="single-article.html"
                data-hs-slick-carousel-animation="fadeInUp" data-hs-slick-carousel-animation-delay="300">Read Article <i
                  class="fas fa-angle-right fa-sm ml-1"></i></a>
            </div>
          </div>
          <!-- End News Block -->
        </div>

        <div class="js-slide d-flex gradient-x-overlay-sm-navy bg-img-hero min-h-620rem"
          style="background-image: url(../../assets/img/1920x1080/img5.jpg);">
          <!-- News Block -->
          <div class="container d-flex align-items-center min-h-620rem">
            <div class="w-lg-40 mr-5">
              <!-- Author -->
              <div class="media align-items-center mb-3" data-hs-slick-carousel-animation="fadeInUp">
                <div class="avatar avatar-sm avatar-circle mr-3">
                  <img class="avatar-img" src="../../assets/img/100x100/img10.jpg" alt="Image Description">
                </div>
                <div class="media-body">
                  <a class="text-white" href="single-article.html">Christina Kray</a>
                </div>
              </div>
              <!-- End Author -->

              <div class="mb-5">
                <h2 class="h1 font-weight-bold text-white" data-hs-slick-carousel-animation="fadeInUp"
                  data-hs-slick-carousel-animation-delay="150">Front Corporate - let's work together</h2>
              </div>
              <a class="btn btn-primary btn-wide transition-3d-hover" href="single-article.html"
                data-hs-slick-carousel-animation="fadeInUp" data-hs-slick-carousel-animation-delay="300">Read Article <i
                  class="fas fa-angle-right fa-sm ml-1"></i></a>
            </div>
          </div>
          <!-- End News Block -->
        </div>

        <div class="js-slide d-flex gradient-x-overlay-sm-navy bg-img-hero min-h-620rem"
          style="background-image: url(../../assets/img/1920x1080/img4.jpg);">
          <!-- News Block -->
          <div class="container d-flex align-items-center min-h-620rem">
            <div class="w-lg-40 mr-5">
              <div class="mb-7">
                <!-- Author -->
                <div class="media align-items-center mb-3" data-hs-slick-carousel-animation="fadeInUp">
                  <div class="avatar avatar-sm avatar-circle mr-3">
                    <img class="avatar-img" src="../../assets/img/100x100/img4.jpg" alt="Image Description">
                  </div>
                  <div class="media-body">
                    <a class="text-white" href="single-article.html">Jeff Fisher</a>
                  </div>
                </div>
                <!-- End Author -->

                <h1 class="font-weight-bold text-white" data-hs-slick-carousel-animation="fadeInUp"
                  data-hs-slick-carousel-animation-delay="150">How Google Assistant now helps you record stories</h1>
              </div>
              <a class="btn btn-primary btn-wide transition-3d-hover" href="single-article.html"
                data-hs-slick-carousel-animation="fadeInUp" data-hs-slick-carousel-animation-delay="300">Read Article <i
                  class="fas fa-angle-right fa-sm ml-1"></i></a>
            </div>
          </div>
          <!-- End News Block -->
        </div>
      </div>
      <!-- End Main Slider -->

      <!-- Slider Nav -->
      <div class="container slick-pagination-line-wrapper content-centered-y right-0 left-0">
        <div class="content-centered-y right-0 mr-3">
          <div id="heroSliderNav" class="js-slick-carousel slick slick-pagination-line max-w-27rem ml-auto"
            data-hs-slick-carousel-options='{
               "vertical": true,
               "verticalSwiping": true,
               "infinite": true,
               "autoplay": true,
               "autoplaySpeed": 10000,
               "slidesToShow": 3,
               "isThumbs": true,
               "asNavFor": "#heroSlider"
             }'>
            <div class="js-slide my-3">
              <span class="text-white">Front Interview with a Lead Designer of the Hubble</span>

              <span class="slick-pagination-line-progress">
                <span class="slick-pagination-line-progress-helper"></span>
              </span>
            </div>
            <div class="js-slide my-3">
              <span class="text-white">Front Corporate - let's work together</span>

              <span class="slick-pagination-line-progress">
                <span class="slick-pagination-line-progress-helper"></span>
              </span>
            </div>
            <div class="js-slide my-3">
              <span class="text-white">How Google Assistant now helps you record stories</span>

              <span class="slick-pagination-line-progress">
                <span class="slick-pagination-line-progress-helper"></span>
              </span>
            </div>
          </div>
        </div>
      </div>
      <!-- End Slider Nav -->
    </div>
    <!-- End Hero Section -->

    <!-- Blogs Section -->
    <div class="container space-2 space-lg-3">
      <div class="row justify-content-lg-between">
        <div class="col-lg-8">
          <!-- Blog -->
          <article class="row mb-7">
            <div class="col-md-5">
              <img class="card-img" src="../../assets/img/400x500/img7.jpg" alt="Image Description">
            </div>
            <div class="col-md-7">
              <div class="card-body d-flex flex-column h-100 px-0">
                <span class="d-block mb-2">
                  <a class="font-weight-bold" href="#">Business</a>
                </span>
                <h3><a class="text-inherit" href="single-article.html">Front becomes an official Instagram Marketing
                    Partner</a></h3>
                <p>Great news we're eager to share.</p>
                <div class="media align-items-center mt-auto">
                  <a class="avatar avatar-sm avatar-circle mr-3" href="blog-profile.html">
                    <img class="avatar-img" src="../../assets/img/100x100/img3.jpg" alt="Image Description">
                  </a>
                  <div class="media-body">
                    <span class="text-dark">
                      <a class="d-inline-block text-inherit font-weight-bold" href="blog-profile.html">Aaron Larsson</a>
                    </span>
                    <small class="d-block">Feb 15, 2020</small>
                  </div>
                </div>
              </div>
            </div>
          </article>
          <!-- End Blog -->

          <!-- Blog -->
          <article class="row mb-7">
            <div class="col-md-5">
              <img class="card-img" src="../../assets/img/400x500/img5.jpg" alt="Image Description">
            </div>
            <div class="col-md-7">
              <div class="card-body d-flex flex-column h-100 px-0">
                <span class="d-block mb-2">
                  <a class="font-weight-bold" href="#">Announcements</a>
                </span>
                <h3><a class="text-inherit" href="single-article.html">Announcing a free plan for small teams</a></h3>
                <p>At Wake, our mission has always been focused on bringing openness.</p>
                <div class="media align-items-center mt-auto">
                  <a class="avatar avatar-sm avatar-circle mr-3" href="blog-profile.html">
                    <img class="avatar-img" src="../../assets/img/100x100/img11.jpg" alt="Image Description">
                  </a>
                  <div class="media-body">
                    <span class="text-dark">
                      <a class="d-inline-block text-inherit font-weight-bold" href="blog-profile.html">Hanna Wolfe</a>
                    </span>
                    <small class="d-block">Feb 4, 2020</small>
                  </div>
                </div>
              </div>
            </div>
          </article>
          <!-- End Blog -->

          <!-- Blog -->
          <article class="row mb-7">
            <div class="col-md-5">
              <img class="card-img" src="../../assets/img/400x500/img4.jpg" alt="Image Description">
            </div>
            <div class="col-md-7">
              <div class="card-body d-flex flex-column h-100 px-0">
                <span class="d-block mb-2">
                  <a class="font-weight-bold" href="#">Business</a>
                </span>
                <h3><a class="text-inherit" href="single-article.html">Enjoy $1,000 worth of perks with Front for
                    Business</a></h3>
                <p>There are many reasons people choose to join Front for Business.</p>
                <div class="media align-items-center mt-auto">
                  <a class="avatar avatar-sm avatar-circle mr-3" href="blog-profile.html">
                    <img class="avatar-img" src="../../assets/img/100x100/img1.jpg" alt="Image Description">
                  </a>
                  <div class="media-body">
                    <span class="text-dark">
                      <a class="d-inline-block text-inherit font-weight-bold" href="blog-profile.html">Andrea Gard</a>
                    </span>
                    <small class="d-block">Jan 27, 2020</small>
                  </div>
                </div>
              </div>
            </div>
          </article>
          <!-- End Blog -->

          <!-- Blog -->
          <article class="row mb-7">
            <div class="col-md-5">
              <img class="card-img" src="../../assets/img/400x500/img8.jpg" alt="Image Description">
            </div>
            <div class="col-md-7">
              <div class="card-body d-flex flex-column h-100 px-0">
                <span class="d-block mb-2">
                  <a class="font-weight-bold" href="#">Business</a>
                </span>
                <h3><a class="text-inherit" href="single-article.html">What CFR (Conversations, Feedback, Recognition)
                    really is about</a></h3>
                <p>For a lot of people these days, Measure What Matters.</p>
                <div class="media align-items-center mt-auto">
                  <a class="avatar avatar-sm avatar-circle mr-3" href="blog-profile.html">
                    <img class="avatar-img" src="../../assets/img/100x100/img3.jpg" alt="Image Description">
                  </a>
                  <div class="media-body">
                    <span class="text-dark">
                      <a class="d-inline-block text-inherit font-weight-bold" href="blog-profile.html">Aaron Larsson</a>
                    </span>
                    <small class="d-block">Jan 21, 2020</small>
                  </div>
                </div>
              </div>
            </div>
          </article>
          <!-- End Blog -->

          <!-- Blog -->
          <article class="row mb-7">
            <div class="col-md-5">
              <img class="card-img" src="../../assets/img/400x500/img6.jpg" alt="Image Description">
            </div>
            <div class="col-md-7">
              <div class="card-body d-flex flex-column h-100 px-0">
                <span class="d-block mb-2">
                  <a class="font-weight-bold" href="#">Community</a>
                </span>
                <h3><a class="text-inherit" href="single-article.html">Do millennials care about saving?</a></h3>
                <p>Over the last few years, numerous studies have appeared to confirm a troubling pattern – millennials
                  don't save, they don't care about their financial futures.</p>
                <div class="media align-items-center mt-auto">
                  <a class="avatar avatar-sm avatar-circle mr-3" href="blog-profile.html">
                    <img class="avatar-img" src="../../assets/img/100x100/img11.jpg" alt="Image Description">
                  </a>
                  <div class="media-body">
                    <span class="text-dark">
                      <a class="d-inline-block text-inherit font-weight-bold" href="blog-profile.html">Hanna Wolfe</a>
                    </span>
                    <small class="d-block">Jan 15, 2020</small>
                  </div>
                </div>
              </div>
            </div>
          </article>
          <!-- End Blog -->

          <!-- Blog -->
          <article>
            <a class="card align-items-start flex-wrap flex-row h-380rem gradient-x-overlay-sm-navy bg-img-hero rounded-pseudo transition-3d-hover mb-7"
              href="blog-profile.html" style="background-image: url(../../assets/img/900x450/img1.jpg);">
              <div class="card-header border-0 bg-transparent w-100">
                <div class="media align-items-center">
                  <span class="avatar avatar-sm avatar-circle mr-3">
                    <img class="avatar-img" src="../../assets/img/100x100/img3.jpg" alt="Image Description">
                  </span>
                  <div class="media-body">
                    <span class="d-inline-block text-white font-weight-bold">Aaron Larsson</span>
                    <small class="d-block text-white-70">Jan 09, 2020</small>
                  </div>
                </div>
              </div>

              <div class="card-footer border-0 bg-transparent mt-auto">
                <h3 class="h2 text-white">Facebook is creating a news section in Watch to feature breaking news</h3>
                <p class="text-white-70 mb-0">Facebook launched the Watch platform in August</p>
              </div>
            </a>
          </article>
          <!-- End Blog -->

          <!-- Blog -->
          <article class="row mb-7">
            <div class="col-md-5">
              <img class="card-img" src="../../assets/img/400x500/img21.jpg" alt="Image Description">
            </div>
            <div class="col-md-7">
              <div class="card-body d-flex flex-column h-100 px-0">
                <span class="d-block mb-2">
                  <a class="font-weight-bold" href="#">Business</a>
                </span>
                <h3><a class="text-inherit" href="single-article.html">Front accounts - let's work together</a></h3>
                <p>Are you an accountant? Are you a company formation advisor? Would you like to partner with one of the
                  world's most popular and fastest-growing Fintech startups?</p>
                <div class="media align-items-center mt-auto">
                  <a class="avatar avatar-sm avatar-circle mr-3" href="blog-profile.html">
                    <img class="avatar-img" src="../../assets/img/100x100/img11.jpg" alt="Image Description">
                  </a>
                  <div class="media-body">
                    <span class="text-dark">
                      <a class="d-inline-block text-inherit font-weight-bold" href="blog-profile.html">Hanna Wolfe</a>
                    </span>
                    <small class="d-block">Jan 06, 2020</small>
                  </div>
                </div>
              </div>
            </div>
          </article>
          <!-- End Blog -->

          <!-- Blog -->
          <article class="row mb-7">
            <div class="col-md-5">
              <img class="card-img" src="../../assets/img/400x500/img3.jpg" alt="Image Description">
            </div>
            <div class="col-md-7">
              <div class="card-body d-flex flex-column h-100 px-0">
                <span class="d-block mb-2">
                  <a class="font-weight-bold" href="#">Community</a>
                </span>
                <h3><a class="text-inherit" href="single-article.html">Let's revolutionise global payments. Together</a>
                </h3>
                <p>Front is changing the way money moves around the world.</p>
                <div class="media align-items-center mt-auto">
                  <a class="avatar avatar-sm avatar-circle mr-3" href="blog-profile.html">
                    <img class="avatar-img" src="../../assets/img/100x100/img1.jpg" alt="Image Description">
                  </a>
                  <div class="media-body">
                    <span class="text-dark">
                      <a class="d-inline-block text-inherit font-weight-bold" href="blog-profile.html">Andrea Gard</a>
                    </span>
                    <small class="d-block">Jan 06, 2020</small>
                  </div>
                </div>
              </div>
            </div>
          </article>
          <!-- End Blog -->

          <!-- Sticky Block End Point -->
          <div id="stickyBlockEndPoint"></div>
        </div>

        <div class="col-lg-3">
          <div class="mb-7">
            <!-- Form -->
            <div class="container justify-content-center">
              <div class="row">
                <div class="input-group mb-3"> <input type="text" class="form-control input-text"
                    placeholder="Search products...." aria-label="Recipient's username" aria-describedby="basic-addon2">
                  <div class="input-group-append"> <button class="btn btn-outline-primary btn-md" type="button"><i
                        class="fa fa-search"></i></button> </div>
                </div>
              </div>
            </div>
            <!-- End Form -->
          </div>
          <!---------popular section----->
          <div class="list-group mb-7">
            <a class="list-group-item list-group-item-action active" href="#"><i
                class="fas fa-home list-group-icon"></i> Popular</a>
            <a class="list-group-item list-group-item-action" href="#"><i
                class="fas fa-user-circle list-group-icon"></i> Profile</a>
            <a class="list-group-item list-group-item-action" href="#"><i class="fas fa-tasks list-group-icon"></i>
              Tasks</a>
            <a class="list-group-item list-group-item-action" href="#"><i
                class="fas fa-layer-group list-group-icon"></i> Projects</a>
            <a class="list-group-item list-group-item-action" href="#"><i class="fas fa-users list-group-icon"></i>
              Members</a>
          </div>
          <!--------- End popular section----->

          <!-- Sticky Block Start Point -->
          <div id="stickyBlockStartPoint"></div>

          <div class="js-sticky-block" data-hs-sticky-block-options='{
                 "parentSelector": "#stickyBlockStartPoint",
                 "breakpoint": "lg",
                 "startPoint": "#stickyBlockStartPoint",
                 "endPoint": "#stickyBlockEndPoint",
                 "stickyOffsetTop": 40,
                 "stickyOffsetBottom": 20
               }'>
            <!-----tages section------>
            <div class="mb-7">
              <div class="mb-3">
                <h3>Tags</h3>
              </div>

              <a class="btn btn-xs btn-soft-secondary mb-1" href="#">Business</a>
              <a class="btn btn-xs btn-soft-secondary mb-1" href="#">Adventure</a>
              <a class="btn btn-xs btn-soft-secondary mb-1" href="#">Community</a>
              <a class="btn btn-xs btn-soft-secondary mb-1" href="#">Announcements</a>
              <a class="btn btn-xs btn-soft-secondary mb-1" href="#">Tutorials</a>
              <a class="btn btn-xs btn-soft-secondary mb-1" href="#">Resources</a>
              <a class="btn btn-xs btn-soft-secondary mb-1" href="#">Classic</a>
              <a class="btn btn-xs btn-soft-secondary mb-1" href="#">Photography</a>
              <a class="btn btn-xs btn-soft-secondary mb-1" href="#">Interview</a>
            </div>
            <!----- ENd tages section------>

            <div class="mb-7">
              <div class="mb-3">
                <h3>Popular</h3>
              </div>

              <!-- Blog -->
              <article class="mb-5">
                <div class="media align-items-center text-inherit">
                  <div class="avatar avatar-lg mr-3">
                    <img class="avatar-img" src="../../assets/img/320x320/img1.jpg" alt="Image Description">
                  </div>
                  <div class="media-body">
                    <h4 class="h6 mb-0"><a class="text-inherit" href="#">Announcing a free plan for small teams</a></h4>
                  </div>
                </div>
              </article>
              <!-- End Blog -->

              <!-- Blog -->
              <article class="mb-5">
                <div class="media align-items-center text-inherit">
                  <div class="avatar avatar-lg mr-3">
                    <img class="avatar-img" src="../../assets/img/320x320/img10.jpg" alt="Image Description">
                  </div>
                  <div class="media-body">
                    <h4 class="h6 mb-0"><a class="text-inherit" href="#">Mapping the first family tree for Front
                        office</a></h4>
                  </div>
                </div>
              </article>
              <!-- End Blog -->

              <!-- Blog -->
              <article class="mb-5">
                <div class="media align-items-center text-inherit">
                  <div class="avatar avatar-lg mr-3">
                    <img class="avatar-img" src="../../assets/img/320x320/img9.jpg" alt="Image Description">
                  </div>
                  <div class="media-body">
                    <h4 class="h6 mb-0"><a class="text-inherit" href="#">Felline eyeing first major Classic win in
                        2018</a></h4>
                  </div>
                </div>
              </article>
              <!-- End Blog -->
            </div>

          </div>
        </div>
      </div>

      <!-- Pagination -->
      <nav aria-label="Page navigation">
        <ul class="pagination mb-0">
          <li class="page-item active"><a class="page-link" href="#">1</a></li>
          <li class="page-item"><a class="page-link" href="#">2</a></li>
          <li class="page-item disabled"><a class="page-link" href="#">...</a></li>
          <li class="page-item"><a class="page-link" href="#">5</a></li>
          <li class="page-item">
            <a class="page-link" href="#" aria-label="Next">
              <span class="d-none d-sm-inline-block mr-1">Next</span>
              <span aria-hidden="true">&raquo;</span>
            </a>
          </li>
        </ul>
      </nav>
      <!-- End Pagination -->
    </div>
    <!-- End Blogs Section -->
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
                <img class="brand" src="../../assets/img/piofx-white.png" alt="Logo">
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
          <p class="text-white opacity-sm small">When you visit or interact with our sites, services or tools, we or our
            authorised service providers may use cookies for storing information to help provide you with a better,
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
  <script src="../../assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src="../../assets/vendor/jquery-migrate/dist/jquery-migrate.min.js"></script>
  <script src="../../assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

  <!-- JS Implementing Plugins -->
  <script src="../../assets/vendor/hs-header/dist/hs-header.min.js"></script>
  <script src="../../assets/vendor/hs-go-to/dist/hs-go-to.min.js"></script>
  <script src="../../assets/vendor/hs-unfold/dist/hs-unfold.min.js"></script>
  <script src="../../assets/vendor/hs-mega-menu/dist/hs-mega-menu.min.js"></script>
  <script src="../../assets/vendor/hs-sticky-block/dist/hs-sticky-block.min.js"></script>
  <script src="../../assets/vendor/slick-carousel/slick/slick.js"></script>
  <script src="../../assets/vendor/jquery-validation/dist/jquery.validate.min.js"></script>

  <!-- JS Front -->
  <script src="../../assets/js/hs.core.js"></script>
  <script src="../../assets/js/hs.slick-carousel.js"></script>
  <script src="../../assets/js/hs.validation.js"></script>

  <!-- JS Plugins Init. -->
  <script>
    $(document).on('ready', function () {
      // initialization of header
      var header = new HSHeader($('#header')).init();

      // initialization of mega menu
      var megaMenu = new HSMegaMenu($('.js-mega-menu'), {
        desktop: {
          position: 'left'
        }
      }).init();

      // initialization of unfold
      var unfold = new HSUnfold('.js-hs-unfold-invoker').init();

      // initialization of form validation
      $('.js-validate').each(function () {
        var validation = $.HSCore.components.HSValidation.init($(this));
      });

      // initialization of slick carousel
      $('#heroSliderNav').on('init', function (event, slick) {
        $(slick.$slider).find('.slick-pagination-line-progress .slick-pagination-line-progress-helper').each(function () {
          $(this).css({
            transitionDuration: (slick.options.autoplaySpeed - slick.options.speed) + 'ms'
          });
        });

        setTimeout(function () {
          $(slick.$slider).addClass('slick-dots-ready');
        });
      });

      $('#heroSliderNav').one('beforeChange', function (event, slick) {
        $(slick.$slider).find('.slick-pagination-line-progress .slick-pagination-line-progress-helper').each(function () {
          $(this).css({
            transitionDuration: (slick.options.autoplaySpeed + slick.options.speed) + 'ms'
          });
        });
      });

      // initialization of slick carousel
      $('.js-slick-carousel').each(function () {
        var slickCarousel = $.HSCore.components.HSSlickCarousel.init($(this));
      });

      $(window).on('resize', function () {
        $('#heroSliderNav').slick('setPosition');
      });

      // initialization of sticky blocks
      $('.js-sticky-block').each(function () {
        var stickyBlock = new HSStickyBlock($(this)).init();
      });

      // initialization of go to
      $('.js-go-to').each(function () {
        var goTo = new HSGoTo($(this)).init();
      });
    });
  </script>

  <!-- IE Support -->
  <script>
    if (/MSIE \d|Trident.*rv:/.test(navigator.userAgent)) document.write('<script src="../../assets/vendor/polifills.js"><\/script>');
  </script>
</body>

</html>