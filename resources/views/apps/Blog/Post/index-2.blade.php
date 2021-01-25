@extends("apps.Blog.Post.layouts.app")


@section("content")

    @if($info ?? "")
        <div class="alert alert-success my-5" role="alert">
            {{$info}}
        </div>
    @endif

    <div class="row mt-5">
        @foreach($posts as $post)
        <div class="col-4 my-3">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">{{$post->title}}</h5>
                    <p class="card-text">{{$post->description}}</p>
                    <div class="d-flex justify-content-between">
                        <button class="btn btn-outline-dark">Read More</button>
                        <a href="/blog/edit/{{$post->id}}" class="btn btn-dark">Edit</a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>

@endsection