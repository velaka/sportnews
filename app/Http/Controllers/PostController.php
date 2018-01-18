<?php

namespace App\Http\Controllers;

use App\PostTag;
use Illuminate\Http\Request;
use App\Post;
use App\Category;
use App\Tag;
use Session;
use Intervention\Image\Facades\Image as Image;

class PostController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth')->except(['index','show']);
	}

	public function index()
	{
	    //$post = Post::all();

	   // return view('posts.index')->withPosts($post);


		$search = \Request::get('search');
 
	    $posts = Post::where('title', 'like', '%' . $search . '%')
	        ->get();
	 
	    return view('posts.index', compact('posts'));
	}

	public function show($id)
	{
	    $post = Post::findOrFail($id);

    	return view('posts.show')->withPost($post);
	}

    public function create()
	{
		$categories = Category::all();
	    return view('posts.create')->withCategories($categories);
	}

	public function store(Request $request)
	{
		$this->validate($request, [
		        'title' => 'required',
		        'category_id' => 'required|integer',
		        'description' => 'required'
		    ]);

		$image = $request->file('image');
        $filename = time() . '.' . $image->getClientOriginalExtension();
		$location = public_path('images/' . $filename);
	    Image::make($image)->save($location);

	    $post = Post::create([
	    	'title' => request('title'),
	    	'category_id' => request('category_id'),
	    	'image' => $filename,
            'description' => request('description'),
	    ]);


        $tags = request('tags');
        $tags = explode(',', $tags);

        foreach ($tags as $tag){
            $tagName = trim($tag);
            $tag = Tag::where('name', $tagName)->first();

            if(!$tag)
            {
                $tag = new Tag();
                $tag->name = $tagName;
                $tag->save();
            }


            $post->tags()->attach($tag->id);
        }



	    Session::flash('flash_message', 'Post successfully added!');

	    return redirect()->back();
	}

	public function edit($id)
	{
	    $post = Post::findOrFail($id);
	    $categories = Category::all();

    	return view('posts.edit')->withPost($post)->withCategories($categories);;
	}

	public function update($id, Request $request)
	{
	    $post = Post::findOrFail($id);

	    $this->validate($request, [
	        'title' => 'required',
	        'category_id' => 'required|integer',
	        'description' => 'required'
	    ]);

	    $input = $request->all();

	    $post->fill($input)->save();

	    Session::flash('flash_message', 'Post successfully added!');

	    return redirect()->back();
	}

	public function destroy($id)
	{
	    $post = Post::findOrFail($id);

	    $post->delete();

	    Session::flash('flash_message', 'Post successfully deleted!');

	    return redirect()->route('posts.index');
	}
}
