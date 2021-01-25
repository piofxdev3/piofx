<?php

namespace App\Http\Controllers\Blog;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog\Category;
use App\Models\Blog\Post;
use App\Models\Blog\Tag;
use App\DB;

class CategoryController extends Controller
{
    
    public function index()
    {
        $data = Category::all();
        return view('apps.Blog.category.index',['categories'=>$data]);
    }

    public function show($id)
    {
       $category = Category::find($id);
      $data = Post::where('category_id',$id)->get();
      $categories = Category::all();
        $tags = Tag::all();
        
        
     // if (\Request::is('categories')) { 
      return view('apps.Blog.category.categories')->with("posts", $data)
                                                  ->with("categories",$categories)
                                                  ->with("tags",$tags);
           //}
      //else{
        //return view('apps.Blog.category.showparticular' ,['category' => $data]);
      //}
    }

    public function create()
    {
      return view('apps.Blog.category.create');
    }

    public function store(Request $request)
    {
      $data = new Category;
    
      $data->name= request('name');
      $data->slug = request('slug');
      $data->image = request('file');
      $data->description = request('description');
      $data->status = request('status');
      $data->save();
      return redirect('/categories');

      

     
    }

    public function edit($id)
    {
      $data = Category::findorfail($id); 
      return view('apps.Blog.category.edit',compact('data'));
    }

    public function update($id)
    {
      $data = Category::findorfail($id);
    
      $data->name= request('name');
      $data->slug = request('slug');
      $data->image = request('file');
      $data->description = request('description');
      $data->status = request('status');
      $data->save();
      return redirect('/categories/'.$data->id);
      
    }
    
     public function delete($id)
     {
       $data = Category::findorfail($id);
       $data->delete();
       return redirect('/categories');

     }
    
}


