@extends("apps.Blog.Post.layouts.app")

@section("content")
<!-- ========== MAIN ========== -->
  <main id="content" role="main">
    

    <!-- Blogs Section -->
    
    <div class="container space-2 space-lg-3">
      <div class="row justify-content-lg-between">
        <div class="col-lg-8">
          @foreach($data->posts as $post)
          <!-- Blog -->
          <article class="row mb-7">
            <div class="col-md-5">
              <img class="card-img" src="../../assets/img/400x500/img7.jpg" alt="Image Description">
            </div>
            <div class="col-md-7">
              <div class="card-body d-flex flex-column h-100 px-0">
                <span class="d-block mb-2">
                  <a class="font-weight-bold" href="#">Category</a>
                </span>
                <h3><a class="text-inherit" href="/blog/show/{{$post->id}}">{{$post->title}}</a></h3>
                
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
          @foreach($categories as $category)
          <div class="list-group mb-7">
            <a class="list-group-item list-group-item-action active" href="/categories/{{ $category->id }}"><i
                class="fas fa-home list-group-icon"></i> {{ $category->name }}</a>
          </div>
          @endforeach
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
              <div class="select is-multiple control">
              @foreach($tags as $tag)
              <a class="btn btn-xs btn-soft-secondary mb-1" href="/tagposts/{{ $tag->id }}">{{ $tag->name}}</a>
              @endforeach
              </div>
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