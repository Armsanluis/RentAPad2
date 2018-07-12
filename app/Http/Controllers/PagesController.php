<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\User;
use DB;

class PagesController extends Controller
{
    public function index(){
        return view('pages.index');
    }
    public function home(){
    	return view('pages.home');
    }
    public function rent(){
        $posts=Post::where('type', 'rent')->paginate(5);
    	return view('pages.rent')->with('posts', $posts);
    }
    public function buy(){
    	$posts=Post::where('type', 'sell')->paginate(5);
        return view('pages.buy')->with('posts', $posts);
    }
    
    public function all(){
        return view('pages.posts');
    }
    public function account(){
         $posts=Post::where('user_id', auth()->user()->id)->get();
        
        return view('pages.account')->with('posts', $posts);
        
    }

    public function myposts(){
         $posts=Post::where('user_id', auth()->user()->id)->paginate(5);
        
        return view('pages.myposts')->with('posts', $posts);
        
    }

    public function userprofile(){
         $posts=Post::where('user_id', auth()->user()->id)->get();
        
        return view('pages.userprofile');
        
    }

    public function edit(){
         $users=User::where('user_id', auth()->user()->id)->get();
        
        return view('users.edit');
        
    }

    public function editprofile(){
         $users=User::where('user_id', auth()->user()->id)->get();
        
        return view('users.edit');
        
    }

    public function listofusers(){
        $users=User::all();
         return view('pages.listofusers')->with('users', $users);
    }

    public function listofposts(){
        $posts=Post::all();
         return view('pages.listofposts')->with('posts', $posts);
    }
        
        
    public function dashboard(){
        return view('pages.dashboard');
    }

    public function addnews(){
        $data = array(
          'posts_count' =>count(Post::all()),
          'rent_count' => count(Post::where('type', 'rent')->get()),
          'sell_count' => count(Post::where('type', 'sell')->get()),
          'users_count' => count(User::all())
      );
        return view('pages.addnews')->with($data);
    }



    public function demo(){
        return view('pages.demo');
    }

    // public function editprofile(){
    //    $posts=Post::where('user_id', auth()->user()->id)->get();
        
    //     return view('pages.editprofile')->with('posts', $posts);
        
    // }

    // 


// functions for user on admin side
    public function destroy($id){
      
    
        $user = User::find($id);
        $user->delete();

        return redirect('listofusers')->with('success', 'Post deleted');
    }

    // public function createUser(){
    //     return view('pages.addnewuser');   
    // }

    public function addnewuser(){
         return view('pages.addnewuser');
     }

    // public function storeUser(){
    //     {
    //     $this->validate($request, [
    //             'name' => 'required',
    //             'email' => 'required',
    //             'password' => 'required',
    //             'first_name' => 'required',
    //             'last_name' => 'required',
    //             'mobile_number' => 'required',
    //             'image2' => 'image|nullable|max:1999'
                               
    //     ] );


    //     // Handle File Upload
    //     if($request->hasFile('image2')){
    //         //Get filename with the extension
    //         $filenameWithExt = $request->file('image2')->getClientOriginalName();
    //         //Get just filename
    //         $filename =pathinfo($filenameWithExt, PATHINFO_FILENAME);
    //         //Get Ext
    //         $extension = $request->file('image2')->getClientOriginalExtension();
    //         //Filename store
    //         $fileNameToStore = $filename.'_'.time().'.'.$extension;
    //         //Upload Image
    //         $path = $request->file('image2')->storeAs('public/cover_images', $fileNameToStore);
    //     }

    //     // Create Post
    //     $user = new User;
    //     $user->name = $request->input('name');
    //     $user->email = $request->input('email');
    //     $user->password = $request->input('password');
    //     $user->first_name = $request->input('first_name');
    //     $user->last_name = $request->input('last_name');
    //     $user->mobile_number = $request->input('mobile_number');
    //     $user->image2 = $fileNameToStore;
        
    //     $user->user_id = auth()->user()->id;
    //     $post->save();
    //     return redirect('/listofusers')->with('success', 'Post Created');
   // }
    // }

}

