<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;
use App\Models\Post;
use App\Models\Category;



class PostController extends Controller
{
    
    public function index()
    {
        $posts = Post::orderBy('id', 'DESC')->paginate(15);
        return view('admin.posts.index', compact('posts'));
    }

    public function create()
{
    // dd($request->all());
    $categories = Category::all();
    return view('admin.posts.create', compact('categories'));
}


    /**
     * Store a newly created resource in storage.
     */
    public function store(PostRequest $request)
{
    $validatedData = $request->validated();

    $validatedData['user_id'] = auth()->id();

    // Set category_id to null if not present
    if (!$request->has('category_id')) {
        $validatedData['category_id'] = null;
    }

    $posts = Post::create($request->all());
    $posts->save();


    return redirect()->route('backend.posts.index');
}




    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
       
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ItemUpdateRequest $request, string $id)
   {

   }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
      
    }
}
