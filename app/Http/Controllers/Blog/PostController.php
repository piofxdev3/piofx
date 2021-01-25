<?php

namespace App\Http\Controllers\Blog;
use App\Models\Blog\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Blog\Tag;
use App\Models\Blog\Post;
use DB;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    public function index(){
        $posts = Post::all();
        $categories = Category::all();
        $tags = Tag::all();
        return view("apps.Blog.Post.index")->with("posts", $posts)
                                            ->with("categories",$categories)
                                            ->with("tags",$tags);
    }

    public function create(){
        $categories = DB::table("categories")->get();
        $tags = Tag::all();

        return view("apps.Blog.Post.createUpdate")->with("categories", $categories)
                                                    ->with("tags", $tags);
    }

    


    public function createupdate(Request $request){     
        if($request->has("create")){
            // echo $request;
            $data = new Post;
    
            $data->title= request('title');
            $data->slug = request('slug');
            $data->category_id = request('category_id');
            $data->image = request('file');
            $data->excerpt = request('excerpt');
            $data->content = request('content');
            $data->meta_title = request('meta_title');
            $data->meta_description = request('meta_description');
            $data->save();
            $data->tags()->attach(request('tags'));
           
            
      

          //  $title = $request->input("title");  
           // $content = $request->input("content");  
           // $excerpt = $request->input("excerpt");  
           // $meta_title = $request->input("meta_title");  
           // $meta_description = $request->input("meta_description"); 
           // $category_id = $request->input("category_id"); 
            // $tag = $request->input("tag"); 
            
            // $description = Str::of($content)->substr(0, 20);
            
           // DB::table("posts")->insert([
               // 'title' => "$title",
               // 'content' => "$content",
               // 'excerpt' => "$excerpt",
               // "meta_title" => "$meta_title",
               // "meta_description" => "$meta_description",
               // "category_id" => $category_id
               // ]);
                
               // $posts = DB::table("posts")->orderBy("id", "desc")->get();
                $categories = Category::all();
                $tags = Tag::all();
                return view("apps.Blog.Post.index")->with("info", "Post added Successfully")
                                    ->with("posts", $data)
                                    ->with("categories",$categories)
                                    ->with("tags",$tags);
        }
        else if($request->has("update")){
            $title = $request->input("title");  
            $content = $request->input("content");  
            $excerpt = $request->input("excerpt");  
            $meta_title = $request->input("meta_title");  
            $meta_description = $request->input("meta_description"); 
            $category_id = $request->input("category_id"); 

                        
            DB::table("posts")->where("id", $request->input("id"))->update([
                'title' => "$title",
                'content' => "$content",
                'excerpt' => "$excerpt",
                "meta_title" => "$meta_title",
                "meta_description" => "$meta_description",
                "category_id" => $category_id
                ]);

                $posts = DB::table("posts")->orderBy("id", "desc")->get();
                $categories = Category::all();
                $tags = Tag::all();
                return view("apps.Blog.Post.index")->with("info", "Post Updated Successfully")
                                                    ->with("posts", $posts)
                                                    ->with("categories",$categories)
                                                    ->with("tags",$tags);
        }
    }

    public function edit($id){
        $post = DB::table("posts")->find($id);
        $categories = DB::table("categories")->get();
        $tags = DB::table("tags")->get();

        return view("apps.Blog.Post.createUpdate")->with("post", $post)
                                                    ->with("categories", $categories)
                                                    ->with("tags", $tags);
    }

    public function show($id){
        $data = Post::find($id);
        
        return view("apps.Blog.Post.show")->with("data", $data);
                                        
    }

    public function delete($id){
        
        $data = Post::findorfail($id)->delete();
        
        $posts = DB::table("posts")->orderBy("id", "desc")->get();
        $categories = Category::all();
        $tags = Tag::all();
        
        return view("apps.Blog.Post.index")->with("posts", $posts)
                                            ->with("categories",$categories)
                                            ->with("tags",$tags);
    }

    public function search(Request $request){
        $search_query = $request->input("search_query");

        $posts = DB::table("posts")->where("title", "LIKE", "%".$search_query."%")->get();
        // echo $posts;
        return view("apps.Blog.Post.search")->with("posts", $posts);
    }

    //public function upload_image(){
        // echo $request;

        // /***************************************************
        //  * Only these origins are allowed to upload images *
        //  ***************************************************/
        // $accepted_origins = array("http://localhost", "http://192.168.1.1", "http://piofx.web");

        // /*********************************************
        //  * Change this line to set the upload folder *
        //  *********************************************/

        // if (isset($_SERVER['HTTP_ORIGIN'])) {
        //     // same-origin requests won't set an origin. If the origin is set, it must be valid.
        //     if (in_array($_SERVER['HTTP_ORIGIN'], $accepted_origins)) {
        //     header('Access-Control-Allow-Origin: ' . $_SERVER['HTTP_ORIGIN']);
        //     } else {
        //     header("HTTP/1.1 403 Origin Denied");
        //     return;
        //     }
        // }

        // // Don't attempt to process the upload on an OPTIONS request
        // if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {
        //     header("Access-Control-Allow-Methods: POST, OPTIONS");
        //     return;
        // }

        // reset ($_FILES);
        // $temp = current($_FILES);
        // if (is_uploaded_file($temp['tmp_name'])){
        //     /*
        //     If your script needs to receive cookies, set images_upload_credentials : true in
        //     the configuration and enable the following two headers.
        //     */
        //     // header('Access-Control-Allow-Credentials: true');
        //     // header('P3P: CP="There is no P3P policy."');

        //     // Sanitize input
        //     if (preg_match("/([^\w\s\d\-_~,;:\[\]\(\).])|([\.]{2,})/", $temp['name'])) {
        //         header("HTTP/1.1 400 Invalid file name.");
        //         return;
        //     }

        //     // Verify extension
        //     if (!in_array(strtolower(pathinfo($temp['name'], PATHINFO_EXTENSION)), array("gif", "jpg", "png"))) {
        //         header("HTTP/1.1 400 Invalid extension.");
        //         return;
        //     }

        //     // Accept upload if there was no origin, or if it is an accepted origin
        //     $filetowrite = $imageFolder . $temp['name'];
        //     move_uploaded_file($temp['tmp_name'], $filetowrite);

        //     // Determine the base URL
        //     $protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on' ? "https://" : "http://";
        //     $baseurl = $protocol . $_SERVER["HTTP_HOST"] . rtrim(dirname($_SERVER['REQUEST_URI']), "/") . "/";

        //     // Respond to the successful upload with JSON.
        //     // Use a location key to specify the path to the saved image resource.
        //     // { location : '/your/uploaded/image/file'}
        //     echo json_encode(array('location' => $baseurl . $filetowrite));
        // } else {
        //     // Notify editor that the upload failed
        //     header("HTTP/1.1 500 Server Error");
        // }

        //$imgpath = request()->file('file')->store('uploads', 'public'); 
        //return response()->json(['location' => "/storage/$imgpath"]);  
    //}
    public function tagposts($id){
        $data = Tag::find($id);
        $categories = Category::all();
        $tags = Tag::all();
        return view("apps.Blog.Post.tagposts")->with("data", $data)
                                            ->with("categories",$categories)
                                            ->with("tags",$tags);
                                        
    }
     



}
