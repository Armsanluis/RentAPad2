<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;
// use App\User;


class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return view('users.create');
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
                'name' => 'required',
                'email' => 'required',
                'password' => 'required',
                'first_name' => 'required',
                'last_name' => 'required',
                'mobile_number' => 'required',
                'image2' => 'image|nullable|max:1999'
                               
        ] );


        //Handle File Upload
        if($request->hasFile('image2')){
            //Get filename with the extension
            $filenameWithExt = $request->file('image2')->getClientOriginalName();
            //Get just filename
            $filename =pathinfo($filenameWithExt, PATHINFO_FILENAME);
            //Get Ext
            $extension = $request->file('image2')->getClientOriginalExtension();
            //Filename store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            //Upload Image
            $path = $request->file('image2')->storeAs('public/cover_images', $fileNameToStore);
        }

        //Create Post
        $user = new User;
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = Hash::make($request->input('password'));
        $user->first_name = $request->input('first_name');
        $user->last_name = $request->input('last_name');
        $user->mobile_number = $request->input('mobile_number');
        $user->image2 = $fileNameToStore;
        $user->role = $request->input('role');
        
        // $user->user_id = auth()->user()->id;
        $user->save();

        // dd($request->input('role'));

       // User::create([
       //      'name' => $request->input('name'),
       //      'email' => $request->input('email'),
       //      'password' => Hash::make($request->input('password')),
       //      'first_name' => $request->input('first_name'),
       //      'last_name' => $request->input('last_name'),
       //      'mobile_number' => $request->input('mobile_number'),
       //      'image2' => $fileNameToStore,
       //      'role' => $request->input('role'),
       //       ]);
        return redirect('/listofusers')->with('success', 'New User Account Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $user = User::find($id);
        return view('pages.userprofile')->with('user', $user);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        return view('users.edit')->with('user', $user);
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
                'name' => 'required',
                'email' => 'required',
                 'password' => 'required',
                'first_name' => 'required',
                'last_name' => 'required',
                'mobile_number' => 'required',
                'image2' => 'image|nullable|max:1999',
                 'role' => 'nullable'
                
                
        ] );

            if($request->hasFile('image2')){
            //Get filename with the extension
            $filenameWithExt = $request->file('image2')->getClientOriginalName();
            //Get just filename
            $filename =pathinfo($filenameWithExt, PATHINFO_FILENAME);
            //Get Ext
            $extension = $request->file('image2')->getClientOriginalExtension();
            //Filename store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            //Upload Image
            $path = $request->file('image2')->storeAs('public/cover_images', $fileNameToStore);
         }

         $user = User::find($id);
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = $request->input('password');
        $user->first_name = $request->input('first_name');
        $user->last_name = $request->input('last_name');
        $user->mobile_number = $request->input('mobile_number');
        $user->image2 = $fileNameToStore;
        $user->role = $request->input('role');

        
        // $user->user_id = auth()->user()->id;
        $user->save();

        // $post = Post::find($id);
        // $post->type = $request->input('type');
        // $post->title = $request->input('title');
        // $post->price = $request->input('price');
        // $post->location = $request->input('location');
        // $post->size = $request->input('size');
        // $post->rooms = $request->input('rooms');
        // $post->tnb = $request->input('tnb');
        // $post->amenities = $request->input('amenities');
        // $post->payment = $request->input('payment');
        // $post->body = $request->input('body');
        // if($request->hasFile('cover_image')){
        //     $post->cover_image = $fileNameToStore;
        // }

        // $post->image2 = $request->input('image2');
        // $post->image3 = $request->input('image3');
        // $post->image4 = $request->input('image4');
        
    //     $post->save();

        return redirect('userprofile')->with('success', 'Account Updated');
    // 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();

        return redirect('/home')->with('success', 'Account deleted');
    }
}
