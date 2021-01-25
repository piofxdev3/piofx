<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- CSS Implementing Plugins -->
        <link rel="stylesheet" href="{{ asset('assets/vendor/font-awesome/css/all.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/vendor/hs-mega-menu/dist/hs-mega-menu.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/vendor/slick-carousel/slick/slick.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap/dist/css/bootstrap.min.css') }}">

        <!-- CSS Front Template -->
        <link rel="stylesheet" href="{{ asset('assets/css/theme.css') }}">

        <!-- TinyMCE -->
        <link rel="stylesheet" href="{{ asset('assets/vendor/tinymce/js/tinymce/tinymce.min.js') }}">

        <title>Piofx</title>
    </head>
    <body class="antialiased">

        @include("apps.Blog.Post.nav.header")

        @yield("content")

        @include("apps.Blog.Post.nav.footer")

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
        <script src="{{ asset('assets/vendor/font-awesome/js/all.js') }}"></script>

        <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>

        <!-- JS Front -->
        <script src="{{ asset('assets/js/hs.core.js') }}"></script>
        <script src="{{ asset('assets/js/hs.slick-carousel.js') }}"></script>
        <script src="{{ asset('assets/js/hs.validation.js') }}"></script>

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
            $(slick.$slider).find('.slick-pagination-line-progress .slick-pagination-line-progress-helper').each(function() {
                $(this).css({
                transitionDuration: (slick.options.autoplaySpeed - slick.options.speed) + 'ms'
                });
            });

            setTimeout(function() {
                $(slick.$slider).addClass('slick-dots-ready');
            });
            });

            $('#heroSliderNav').one('beforeChange', function (event, slick) {
            $(slick.$slider).find('.slick-pagination-line-progress .slick-pagination-line-progress-helper').each(function() {
                $(this).css({
                transitionDuration: (slick.options.autoplaySpeed + slick.options.speed) + 'ms'
                });
            });
            });

            // initialization of slick carousel
            $('.js-slick-carousel').each(function() {
            var slickCarousel = $.HSCore.components.HSSlickCarousel.init($(this));
            });

            $(window).on('resize', function() {
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

        // TinyMCE - WYSIWYG
        tinymce.init({
            selector: '.editor',
            min_height: 500,
            plugins: [
            'advlist autolink link image lists charmap print preview hr anchor pagebreak',
            'searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking',
            'table emoticons template paste help'
            ],
            toolbar: 'undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | ' +
            'bullist numlist outdent indent | link image | print preview media fullpage | ' +
            'forecolor backcolor emoticons | help',
            menu: {
            favs: {title: 'My Favorites', items: 'code visualaid | searchreplace | emoticons'}
            },
            menubar: 'favs file edit view insert format tools table help',
            content_css: 'css/content.css',
            statusbar: false,
        });
        </script>

    </body>
</html>
