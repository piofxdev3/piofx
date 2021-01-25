<x-header>

</x-header>
<div class="container">
<div class="card" style="width: 18rem;">
<div class="col-md-10 mt-10">
<h4>
{{ $categories->name}}
{{ $categories->description}}
</h4>
</div>
      <div class="col-md-5">
              <img class="card-img" src="../../assets/img/400x500/img7.jpg" alt="Image Description">
              {{ $categories->image }}
      </div>
           
           <a href="/categories/{{ $categories->id }}/edit" class="btn btn-primary">EDIT</a>
           <a href="/categories/{{ $categories->id }}/delete" class="btn btn-primary">DELETE</a>
</div>    
@foreach($category as $post)
<div class="col-md-5 mt-10 card-deck">
		
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

<x-app>

</x-app>
<x-footer>

</x-footer>