@extends("apps.Blog.Post.layouts.app")

@section("content")
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
          @foreach($posts as $post)
          <!-- Blog -->
          <article class="row mb-7">
            <div class="col-md-5">
              <img class="card-img" src="../../assets/img/400x500/img7.jpg" alt="Image Description">
            </div>
            <div class="col-md-7">
              <div class="card-body d-flex flex-column h-100 px-0">
                <span class="d-block mb-2">
                  <a class="font-weight-bold" href="#"></a>
                </span>
                <h3><a class="text-inherit" href="/blog/show/{{ $post->id }}">{{$post->title}}</a></h3>
                <div>{!! $post->excerpt !!}</div>
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
          
          <!-- Sticky Block End Point -->
          <div id="stickyBlockEndPoint"></div>
          @endforeach
        </div>

        <div class="col-lg-3">
          <div class="mb-7">
            <!-- Search Form -->
            <div class="container justify-content-center">
              <div class="row">
                <form action="/blog/search" method="POST">
                  @csrf
                  <div class="input-group mb-3"> 
                    <input type="text" class="form-control input-text" placeholder="Search..." name="search_query">
                    <div class="input-group-append">
                      <button class="btn btn-outline-primary btn-md" type="submit" name="search">
                        <i class="fa fa-search"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
            <!-- End Search Form -->
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

</body>

</html>

@endsection
