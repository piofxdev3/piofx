<x-header>

</x-header>

<div class="container space-2 space-lg-3">
 <label class="font-size-h2 font-weight-bolder text-dark ml-1">
          All Categories
       </label>
      <div class="row justify-content-lg-between">
      
        <div class="col-lg-8">
        @foreach($categories as $category)
          <!-- Blog -->
          <article class="row mb-7">
            
            <div class="col-md-7">
              <div class="card-body d-flex flex-column h-100 px-0">
                <span class="d-block mb-2">
                  <a class="font-weight-bold" href="/categories/{{ $category->id }}">{{$category->name}}</a>
                </span>
               
                
                
              </div>
            </div>
          </article>
          <!-- End Blog -->
          
          <!-- Sticky Block End Point -->
          <div id="stickyBlockEndPoint"></div>
          @endforeach
        </div>


     
       </div>
       
       <a href="/categories/create" class="btn btn-primary">Add Category</a>
       
   
</div>
<x-app>

</x-app>
<x-footer>

</x-footer>

