<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
        // $this->middleware('admin');
    }

    

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'mobile_number' => 'required|string|max:255',
            'image2' => 'image|nullable|max:1999',
            'role' => 'nullable|string|max:255',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'mobile_number' => $data['mobile_number'],
            'image2' => $data['image2'],
            'role' => "user",



        ]);
        if($data->hasFile('image2')){
            $data->file('image2')->save('public/cover_images');
            //Get filename with the extension
            $filenameWithExt = $data->file('image2')->getClientOriginalName();
            //Get just filename
            $filename =pathinfo($filenameWithExt, PATHINFO_FILENAME);
            //Get Ext
            $extension = $data->file('image2')->getClientOriginalExtension();
            //Filename store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            //Upload Image
            $path = $data->file('image2')->storeAs('public/cover_images', $fileNameToStore);
    }else {
        $fileNameToStore = 'noimage.jpg';
    }
}

// protected function addnewuser(array $data)
//     {
//         return User::create([
//             'name' => $data['name'],
//             'email' => $data['email'],
//             'password' => Hash::make($data['password']),
//             'first_name' => $data['first_name'],
//             'last_name' => $data['last_name'],
//             'mobile_number' => $data['mobile_number'],
//             'image2' => $data['image2'],
//             'role' => "",



//         ]);
//         if($data->hasFile('image2')){
//             $data->file('image2')->save('public/cover_images');
//             //Get filename with the extension
//             $filenameWithExt = $data->file('image2')->getClientOriginalName();
//             //Get just filename
//             $filename =pathinfo($filenameWithExt, PATHINFO_FILENAME);
//             //Get Ext
//             $extension = $data->file('image2')->getClientOriginalExtension();
//             //Filename store
//             $fileNameToStore = $filename.'_'.time().'.'.$extension;
//             //Upload Image
//             $path = $data->file('image2')->storeAs('public/cover_images', $fileNameToStore);
//     }else {
//         $fileNameToStore = 'noimage.jpg';
//     }
// }
}


