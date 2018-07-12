<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use DB;

class PostsController extends Controller
{
    public function index(){
        //$posts = Post::all();
        //$posts = Post::orderBy('title', 'desc')->get();
        //return Post::where('title', 'Post Two')->get();
        //$posts = DB::select('SELECT * FROM posts');
        //$posts = Post::orderBy('title', 'desc')->take(1)->get();

        $posts = Post::orderBy('created_at', 'desc')->paginate(5);
        return view('posts.index')->with('posts', $posts);
    }

    



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
                'type' => 'required',
                'title' => 'required',
                'price' => 'required',
                'location' => 'required',
                'size' => 'required',
                'rooms' => 'required',
                'tnb' => 'required',
                'amenities' => 'required',
                'payment' => 'required',
                'body' => 'required',
                'image1' => 'image|nullable|max:1999'
                // 'image2' => 'image|nullable|max:1999',
                // 'image3' => 'image|nullable|max:1999',
                // 'image4' => 'image|nullable|max:1999',
                // 'image5' => 'image|nullable|max:1999'
                
                
        ] );


        //Handle File Upload
        if($request->hasFile('image1')){
            //Get filename with the extension
            $filenameWithExt = $request->file('image1')->getClientOriginalName();
            //Get just filename
            $filename =pathinfo($filenameWithExt, PATHINFO_FILENAME);
            //Get Ext
            $extension = $request->file('image1')->getClientOriginalExtension();
            //Filename store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            //Upload Image
            $path = $request->file('image1')->storeAs('public/cover_images', $fileNameToStore);
        }

        // //Handle File Upload
        // if($request->hasFile('image2')){
        //     //Get filename with the extension
        //     $filenameWithExt = $request->file('image2')->getClientOriginalName();
        //     //Get just filename
        //     $filename =pathinfo($filenameWithExt, PATHINFO_FILENAME);
        //     //Get Ext
        //     $extension = $request->file('image2')->getClientOriginalExtension();
        //     //Filename store
        //     $fileNameToStore = $filename.'_'.time().'.'.$extension;
        //     //Upload Image
        //     $path = $request->file('image2')->storeAs('public/cover_images', $fileNameToStore);
        // }

        // //Handle File Upload
        // if($request->hasFile('image3')){
        //     //Get filename with the extension
        //     $filenameWithExt = $request->file('image3')->getClientOriginalName();
        //     //Get just filename
        //     $filename =pathinfo($filenameWithExt, PATHINFO_FILENAME);
        //     //Get Ext
        //     $extension = $request->file('image3')->getClientOriginalExtension();
        //     //Filename store
        //     $fileNameToStore = $filename.'_'.time().'.'.$extension;
        //     //Upload Image
        //     $path = $request->file('image3')->storeAs('public/cover_images', $fileNameToStore);
        // }

        // //Handle File Upload
        // if($request->hasFile('image4')){
        //     //Get filename with the extension
        //     $filenameWithExt = $request->file('image4')->getClientOriginalName();
        //     //Get just filename
        //     $filename =pathinfo($filenameWithExt, PATHINFO_FILENAME);
        //     //Get Ext
        //     $extension = $request->file('image4')->getClientOriginalExtension();
        //     //Filename store
        //     $fileNameToStore = $filename.'_'.time().'.'.$extension;
        //     //Upload Image
        //     $path = $request->file('image4')->storeAs('public/cover_images', $fileNameToStore);
        // }

        // //Handle File Upload
        // if($request->hasFile('image5')){
        //     //Get filename with the extension
        //     $filenameWithExt = $request->file('image5')->getClientOriginalName();
        //     //Get just filename
        //     $filename =pathinfo($filenameWithExt, PATHINFO_FILENAME);
        //     //Get Ext
        //     $extension = $request->file('image5')->getClientOriginalExtension();
        //     //Filename store
        //     $fileNameToStore = $filename.'_'.time().'.'.$extension;
        //     //Upload Image
        //     $path = $request->file('image5')->storeAs('public/cover_images', $fileNameToStore);
        // }else{
        //     $fileNameToStore = 'noimage.jpg';
        // }

        

        //Create Post
        $post = new Post;
        $post->type = $request->input('type');
        $post->title = $request->input('title');
        $post->price = $request->input('price');
        $post->location = $request->input('location');
        $post->size = $request->input('size');
        $post->rooms = $request->input('rooms');
        $post->tnb = $request->input('tnb');
        $post->amenities = $request->input('amenities');
        $post->payment = $request->input('payment');
        $post->body = $request->input('body');
        $post->image1 = $fileNameToStore;
        // $post->image2 = $fileNameToStore;
        // $post->image3 = $fileNameToStore;
        // $post->image4 = $fileNameToStore;
        // $post->image5 = $fileNameToStore;
        $post->user_id = auth()->user()->id;
        $post->save();
        return redirect('/posts')->with('success', 'Post Created');
    }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);
        return view('posts.show')->with('post', $post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);
        return view('posts.edit')->with('post', $post);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        $this->validate($request, [
                'type' => 'required',
                'title' => 'required',
                'price' => 'required',
                'location' => 'required',
                'size' => 'required',
                'rooms' => 'required',
                'tnb' => 'required',
                'amenities' => 'required',
                'payment' => 'required',
                'body' => 'required',
                'image1' => 'image|nullable|max:1999'
                // 'image2' => 'image|nullable|max:1999',
                // 'image3' => 'image|nullable|max:1999',
                // 'image4' => 'image|nullable|max:1999',
                // 'image5' => 'image|nullable|max:1999'
                
        ] );

            //Handle File Upload
        if($request->hasFile('image1')){
            //Get filename with the extension
            $filenameWithExt = $request->file('image1')->getClientOriginalName();
            //Get just filename
            $filename =pathinfo($filenameWithExt, PATHINFO_FILENAME);
            //Get Ext
            $extension = $request->file('image1')->getClientOriginalExtension();
            //Filename store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            //Upload Image
            $path = $request->file('image1')->storeAs('public/cover_images', $fileNameToStore);
        }else{
            $fileNameToStore = 'noimage.jpg';
        }

        // //Handle File Upload
        // if($request->hasFile('image2')){
        //     //Get filename with the extension
        //     $filenameWithExt = $request->file('image2')->getClientOriginalName();
        //     //Get just filename
        //     $filename =pathinfo($filenameWithExt, PATHINFO_FILENAME);
        //     //Get Ext
        //     $extension = $request->file('image2')->getClientOriginalExtension();
        //     //Filename store
        //     $fileNameToStore = $filename.'_'.time().'.'.$extension;
        //     //Upload Image
        //     $path = $request->file('image2')->storeAs('public/cover_images', $fileNameToStore);
        // }

        // //Handle File Upload
        // if($request->hasFile('image3')){
        //     //Get filename with the extension
        //     $filenameWithExt = $request->file('image3')->getClientOriginalName();
        //     //Get just filename
        //     $filename =pathinfo($filenameWithExt, PATHINFO_FILENAME);
        //     //Get Ext
        //     $extension = $request->file('image3')->getClientOriginalExtension();
        //     //Filename store
        //     $fileNameToStore = $filename.'_'.time().'.'.$extension;
        //     //Upload Image
        //     $path = $request->file('image3')->storeAs('public/cover_images', $fileNameToStore);
        // }

        // //Handle File Upload
        // if($request->hasFile('image4')){
        //     //Get filename with the extension
        //     $filenameWithExt = $request->file('image4')->getClientOriginalName();
        //     //Get just filename
        //     $filename =pathinfo($filenameWithExt, PATHINFO_FILENAME);
        //     //Get Ext
        //     $extension = $request->file('image4')->getClientOriginalExtension();
        //     //Filename store
        //     $fileNameToStore = $filename.'_'.time().'.'.$extension;
        //     //Upload Image
        //     $path = $request->file('image4')->storeAs('public/cover_images', $fileNameToStore);
        // }

        // //Handle File Upload
        // if($request->hasFile('image5')){
        //     //Get filename with the extension
        //     $filenameWithExt = $request->file('image5')->getClientOriginalName();
        //     //Get just filename
        //     $filename =pathinfo($filenameWithExt, PATHINFO_FILENAME);
        //     //Get Ext
        //     $extension = $request->file('image5')->getClientOriginalExtension();
        //     //Filename store
        //     $fileNameToStore = $filename.'_'.time().'.'.$extension;
        //     //Upload Image
        //     $path = $request->file('image5')->storeAs('public/cover_images', $fileNameToStore);
        // }else{
        //     $fileNameToStore = 'noimage.jpg';
        // }

        

        $post = Post::find($id);
        $post->type = $request->input('type');
        $post->title = $request->input('title');
        $post->price = $request->input('price');
        $post->location = $request->input('location');
        $post->size = $request->input('size');
        $post->rooms = $request->input('rooms');
        $post->tnb = $request->input('tnb');
        $post->amenities = $request->input('amenities');
        $post->payment = $request->input('payment');
        $post->body = $request->input('body');
        if($request->hasFile('image1')){
            $post->image1 = $fileNameToStore;
        }

        // $post->image2 = $request->input('image2');
        // $post->image3 = $request->input('image3');
        // $post->image4 = $request->input('image4');
        
        $post->save();

        return redirect('/posts')->with('success', 'Post Updated');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);
        $post->delete();

        return redirect('/myposts')->with('success', 'Post deleted');
    }

    

    public function __construct()
    {
       $this->middleware('auth', ['except' => ['index', 'show']] );
     }

}
