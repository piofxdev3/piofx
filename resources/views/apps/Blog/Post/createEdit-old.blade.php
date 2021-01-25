@extends("apps.Blog.Post.layouts.app")

@section("content")

    <div class="container space-top-3 pb-5">
        <form action="/blog/createupdate" method="POST" class="">
            @csrf
            <h2 class="text-center">Create a new Blog Post</h2>
            <h5 class="mt-5">Title</h5>
            <input type="text" class="form-control" name="title" value="@if(isset($post)){{$post->title ? $post->title : ''}}@endif">
            <h5 class="mt-3">Content</h5>
            <!-- TinyMCE -->
            <textarea type="text" class="editor" name="content">
                @if(isset($post)){{$post->content ? $post->content : ''}}@endif
            </textarea>
            <!-- End TinyMCE -->
            <div class="mt-5 p-3 bg-dark text-white rounded">
                <h5 class="text-white">Meta Title</h5>
                <input type="text" class="form-control" name="meta_title" value="@if(isset($post)){{$post->meta_title ? $post->meta_title : ''}}@endif">
                <h5 class="mt-3 text-white">Meta Description</h5>
                <textarea type="text" class="form-control" name="meta_description">@if(isset($post)){{$post->meta_description ? $post->meta_description : ''}}@endif</textarea>
            </div>
            @if(isset($post))
                <input type="text" hidden name="id" value="{{$post->id ? $post->id : ''}}">
                <button class="btn btn-dark mt-4" name="update">Edit</button>
            @else
                <button class="btn btn-dark mt-4" name="create">Create</button>
            @endif
        </form>
    </div>

@endsection