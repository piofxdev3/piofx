@extends('apps.Blog.category.layout')
@section('content')
@foreach($category as $post)
      <div class="card" style="width: 18rem;">
		
        <div id="container">
          
			<div class="title">
				<h3 class="card-title">{{ $post->title }}</h3>
            </div>
           <div class="card-body">
             <div class="slug">
                {{  $post->slug  }}
             </div>
            
             <div class="card-img-top">
                {{  $post->image  }}
             </div>
             
           </div>
        </div>
       </div>
       @endforeach
        </div>
       </div>

@endsection