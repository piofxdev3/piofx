@extends("apps.Blog.Post.layouts.app")

@section("content")
<!-- ========== MAIN ========== -->
<main id="content" role="main">
<!-- Article Description Section -->
<div class="container space-top-3 space-bottom-2">
    <div class="w-lg-60 mx-lg-auto">
    <div class="mb-4 d-flex justify-content-between">
        <h1 class="h2">{{$data->title}}</h1>
        <div>
            <a href="/blog/edit/{{$data->id}}" class="btn-sm btn-primary">Edit</a>
            <a href="/blog/delete/{{$data->id}}" class="btn-sm btn-danger">Delete</a>
        </div>
    </div>
    <p>
    @foreach($data->tags as $tag)
            <a href="/tagposts/{{ $tag->id }}">{{ $tag->name }}</a>
			@endforeach
    </p>

    <!-- Author -->
    <div class="border-top border-bottom py-4 mb-5">
        <div class="row align-items-md-center">
        <div class="col-md-7 mb-5 mb-md-0">
            <div class="media align-items-center">
            <div class="avatar avatar-circle">
                <img class="avatar-img" src="../../assets/img/100x100/img11.jpg" alt="Image Description">
            </div>
            <div class="media-body font-size-1 ml-3">
                <span class="h6"><a href="blog-profile.html">Hanna Wolfe</a> <button type="button" class="btn btn-xs btn-soft-primary font-weight-bold transition-3d-hover py-1 px-2 ml-1">Follow</button></span>
                <span class="d-block text-muted">July 15, 2018</span>
            </div>
            </div>
        </div>
        <div class="col-md-5">
            <div class="d-flex justify-content-md-end align-items-center">
            <span class="d-block small font-weight-bold text-cap mr-2">Share:</span>

            <a class="btn btn-xs btn-icon btn-soft-secondary rounded-circle ml-2" href="#">
                <i class="fab fa-facebook-f"></i>
            </a>
            <a class="btn btn-xs btn-icon btn-soft-secondary rounded-circle ml-2" href="#">
                <i class="fab fa-twitter"></i>
            </a>
            <a class="btn btn-xs btn-icon btn-soft-secondary rounded-circle ml-2" href="#">
                <i class="fab fa-instagram"></i>
            </a>
            <a class="btn btn-xs btn-icon btn-soft-secondary rounded-circle ml-2" href="#">
                <i class="fab fa-telegram"></i>
            </a>
            </div>
        </div>
        </div>
    </div>
    <!-- End Author -->

    {!! $data->content !!}

    <div class="card bg-img-hero bg-navy text-white text-center p-4 my-4" style="background-image: url(../../assets/svg/components/abstract-shapes-1.svg);">
        <h4 class="text-white mb-3">Like what you're reading? Subscribe to our top stories.</h4>

        <!-- Form -->
        <form class="js-validate w-md-75 mx-md-auto">
        <div class="js-form-message">
            <div class="d-flex align-items-center">
            <label class="sr-only" for="subscribeSrArticle">Subscribe</label>
            <div class="input-group">
                <input type="email" class="form-control" id="subscribeSrArticle" placeholder="Your email" aria-label="Your email">
            </div>
            <button type="submit" class="btn btn-light ml-3">Submit</button>
            </div>
        </div>
        </form>
        <!-- End Form -->
    </div>

    <p>We will continue to update <a href="#">Front</a>; if you have any questions or suggestions, please contact us!</p>

    <p>Follow us on <a href="#">Medium</a>, <a href="#">Twitter</a>, <a href="#">Facebook</a>, <a href="#">YouTube</a>, and <a href="#">Dribbble</a>.</p>

    <!-- Badges -->
    <div class="mt-5">
        <a class="btn btn-xs btn-soft-secondary mb-1" href="#">Ecommerce</a>
        <a class="btn btn-xs btn-soft-secondary mb-1" href="#">Website</a>
        <a class="btn btn-xs btn-soft-secondary mb-1" href="#">Bootstrap</a>
        <a class="btn btn-xs btn-soft-secondary mb-1" href="#">Startup</a>
        <a class="btn btn-xs btn-soft-secondary mb-1" href="#">Free</a>
    </div>
    <!-- End Badges -->

    <!-- Share -->
    <div class="row justify-content-sm-between align-items-sm-center mt-5">
        <div class="col-sm-6 mb-2 mb-sm-0">
        <div class="d-flex align-items-center">
            <span class="d-block small font-weight-bold text-cap mr-2">Share:</span>

            <a class="btn btn-xs btn-icon btn-ghost-secondary rounded-circle mr-2" href="#">
            <i class="fab fa-facebook-f"></i>
            </a>
            <a class="btn btn-xs btn-icon btn-ghost-secondary rounded-circle mr-2" href="#">
            <i class="fab fa-twitter"></i>
            </a>
            <a class="btn btn-xs btn-icon btn-ghost-secondary rounded-circle mr-2" href="#">
            <i class="fab fa-instagram"></i>
            </a>
            <a class="btn btn-xs btn-icon btn-ghost-secondary rounded-circle mr-2" href="#">
            <i class="fab fa-telegram"></i>
            </a>
        </div>
        </div>

        <div class="col-sm-6 text-sm-right">
        <a class="btn btn-xs btn-icon btn-soft-secondary rounded-circle mr-2" href="#" data-toggle="tooltip" data-placement="top" title="Bookmark story">
            <i class="far fa-bookmark"></i>
        </a>
        <a class="btn btn-xs btn-icon btn-soft-secondary rounded-circle" href="#" data-toggle="tooltip" data-placement="top" title="Report story">
            <i class="far fa-flag"></i>
        </a>
        </div>
    </div>
    <!-- End Share -->

    <!-- Author -->
    <div class="media align-items-center border-top border-bottom py-5 my-8">
        <div class="avatar avatar-circle avatar-xl">
        <img class="avatar-img" src="../../assets/img/100x100/img11.jpg" alt="Image Description">
        </div>
        <div class="media-body ml-3">
        <small class="d-block small font-weight-bold text-cap">Written by</small>
        <h3 class="mb-0"><a href="blog-profile.html">Hanna Wolfe</a> <button type="button" class="btn btn-xs btn-soft-primary font-weight-bold transition-3d-hover py-1 px-2 ml-1">Follow</button></h3>
        <p class="mb-0">I create advanced website builders made exclusively for web developers.</p>
        </div>
    </div>
    <!-- End Author -->

    <div class="pt-2 mb-11">
        <div class="mb-4">
        <h3>3 Comments</h3>
        </div>

        <ul class="list-unstyled">
        <!-- Comment -->
        <li class="mb-5">
            <div class="media align-items-center mb-2">
            <div class="avatar avatar-circle mr-3">
                <img class="avatar-img" src="../../assets/img/100x100/img3.jpg" alt="Image Description">
            </div>
            <div class="media-body">
                <div class="d-flex justify-content-between align-items-center">
                <span class="h5 mb-0">Dave Austin</span>
                <small class="text-muted">1 day ago</small>
                </div>
            </div>
            </div>

            <p>As a Special Education teacher this resonates so well with me. Fighting with gen ed teachers to flatten for the students with learning disabilities. It also confirms some things for me in my writing.</p>

            <a class="font-weight-bold" href="#">Reply</a>

            <ul class="list-unstyled mt-5">
            <!-- Comment -->
            <li class="mb-5">
                <div class="border-left border-3 pl-4">
                <div class="media align-items-center mb-2">
                    <div class="avatar avatar-circle mr-3">
                    <img class="avatar-img" src="../../assets/img/100x100/img11.jpg" alt="Image Description">
                    </div>
                    <div class="media-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <span class="h5 mb-0">Hanna Wolfe</span>
                        <small class="text-muted">1 day ago</small>
                    </div>
                    </div>
                </div>

                <p>Love it Dave! We're all about keeping it up.</p>

                <a class="font-weight-bold" href="#">Reply</a>
                </div>
            </li>
            <!-- End Comment -->
            </ul>
        </li>
        <!-- End Comment -->

        <!-- Comment -->
        <li class="mb-5">
            <div class="media align-items-center mb-2">
            <div class="avatar avatar-circle mr-3">
                <img class="avatar-img" src="../../assets/img/100x100/img1.jpg" alt="Image Description">
            </div>
            <div class="media-body">
                <div class="d-flex justify-content-between align-items-center">
                <span class="h5 mb-0">Christina Kray</span>
                <small class="text-muted">2 days ago</small>
                </div>
            </div>
            </div>

            <p>Since our attention spans seem to be shrinking by the day — keeping it simple is more important than ever.</p>

            <a class="font-weight-bold" href="#">Reply</a>
        </li>
        <!-- End Comment -->
        </ul>
    </div>

    <div class="mb-5">
        <h3>Post a comment</h3>
    </div>

    <!-- Form -->
    <form class="js-validate">
        <div class="form-row">
        <div class="col-sm-6 mb-sm-3">
            <div class="js-form-message form-group">
            <label class="input-label">Name</label>
            <input type="text" class="form-control" name="name" id="inputName" placeholder="Name" aria-label="Name" required
                    data-msg="Please enter your name.">
            </div>
        </div>

        <div class="col-sm-6 mb-sm-3">
            <div class="js-form-message form-group">
            <label class="input-label">Email</label>
            <input type="email" class="form-control" name="emailAddress" id="emailAddress" placeholder="Email address" aria-label="Email address" required
                    data-msg="Please enter a valid email address.">
            </div>
        </div>

        <div class="col-12 mb-sm-3">
            <div class="js-form-message form-group">
            <label class="input-label">Comment</label>
            <textarea class="form-control" rows="7" id="descriptionTextarea" placeholder="Comment" required
                        data-msg="Please enter your message."></textarea>
            </div>
        </div>
        </div>

        <div class="d-flex justify-content-center">
        <button type="submit" class="btn btn-primary btn-wide transition-3d-hover">Submit</button>
        </div>
    </form>
    <!-- End Form -->
    </div>
</div>
<!-- End Article Description Section -->

<!-- Blog Card Section -->
<div class="container">
    <div class="w-lg-75 border-top space-2 mx-lg-auto">
    <div class="mb-3 mb-sm-5">
        <h3>Related stories</h3>
    </div>

    <div class="row">
        <div class="col-md-6">
        <!-- Blog Card -->
        <article class="border-bottom h-100 py-5">
            <div class="row justify-content-between">
            <div class="col-6">
                <a class="d-block small font-weight-bold text-cap mb-2" href="#">Product</a>
                <h4 class="mb-0"><a class="text-inherit" href="single-article.html">Better is when everything works together</a></h4>
            </div>

            <div class="col-5">
                <img class="img-fluid" src="../../assets/img/500x280/img1.jpg" alt="Image Description">
            </div>
            </div>
        </article>
        <!-- End Blog Card -->
        </div>

        <div class="col-md-6">
        <!-- Blog Card -->
        <article class="border-bottom h-100 py-5">
            <div class="row justify-content-between">
            <div class="col-6">
                <a class="d-block small font-weight-bold text-cap mb-2" href="#">Tech</a>
                <h4 class="mb-0"><a class="text-inherit" href="single-article.html">Should You Buy An Apple Pencil?</a></h4>
            </div>

            <div class="col-5">
                <img class="img-fluid" src="../../assets/img/500x280/img3.jpg" alt="Image Description">
            </div>
            </div>
        </article>
        <!-- End Blog Card -->
        </div>

        <div class="col-md-6">
        <!-- Blog Card -->
        <article class="border-bottom h-100 py-5">
            <div class="row justify-content-between">
            <div class="col-6">
                <a class="d-block small font-weight-bold text-cap mb-2" href="#">Product</a>
                <h4 class="mb-0"><a class="text-inherit" href="single-article.html">This Watch gym partnerships give you perks for working out</a></h4>
            </div>

            <div class="col-5">
                <img class="img-fluid" src="../../assets/img/500x280/img5.jpg" alt="Image Description">
            </div>
            </div>
        </article>
        <!-- End Blog Card -->
        </div>

        <div class="col-md-6">
        <!-- Blog Card -->
        <article class="border-bottom h-100 py-5">
            <div class="row justify-content-between">
            <div class="col-6">
                <a class="d-block small font-weight-bold text-cap mb-2" href="#">Tech</a>
                <h4 class="mb-0"><a class="text-inherit" href="single-article.html">Drone Company PrecisionHawk Names New CEO</a></h4>
            </div>

            <div class="col-5">
                <img class="img-fluid" src="../../assets/img/500x280/img7.jpg" alt="Image Description">
            </div>
            </div>
        </article>
        <!-- End Blog Card -->
        </div>
    </div>
    </div>
</div>
<!-- End Blog Card Section -->

<!-- Subscribe Section -->
<div class="container space-bottom-2 space-bottom-lg-3">
    <!-- Title -->
    <div class="w-md-60 text-center mx-auto mb-7">
    <h2>Stay in the know</h2>
    <p>Get special offers on the latest developments from Front.</p>
    </div>
    <!-- End Title -->

    <div class="w-lg-40 mx-lg-auto">
    <!-- Form -->
    <form class="js-validate">
        <div class="form-row">
        <div class="col-sm col-md-6 col-lg mb-2">
            <div class="js-form-message">
            <label class="sr-only" for="signupSrEmail">Your email</label>
            <div class="input-group">
                <input type="email" class="form-control" name="email" id="signupSrEmail" placeholder="Your email" aria-label="Your email" required
                        data-msg="Please enter a valid email address.">
            </div>
            </div>
        </div>

        <div class="col-sm-auto">
            <button type="submit" class="btn btn-primary btn-block">Get Started</button>
        </div>
        </div>
    </form>
    <!-- End Form -->
    </div>
</div>
<!-- End Subscribe Section -->
</main>
<!-- ========== END MAIN ========== -->
@endsection