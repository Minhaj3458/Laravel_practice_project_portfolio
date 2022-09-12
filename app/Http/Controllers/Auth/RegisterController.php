<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Toastr;
use Image;
use Illuminate\Support\Facades\Storage;

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
    // protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
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
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }

    public function index(){
      $user = User::latest()->get();
      return view('auth.auth_management.manage_auth',compact('user'));
    }

    public function edit($id){
        $user = User::find($id);
        return view('auth.auth_management.edit_auth',compact('user'));
    }


    public function update(Request $request, $id)
    {
      $user = User::find($id);
      $user->name = $request->name;
      $user->email = $request->email;
      $user->number = $request->number;
      $user->address = $request->address;
      if($request->hasfile('image'))
        {
        $file = $request->file('image');
        $extention = $file->getClientOriginalExtension();
        $image_name = time().'.'.$extention;
       
        $destinationPath = public_path('/assets/backend/dist/img/profile/');
        $Image_resize = Image::make($file)->resize(100,100)->save($destinationPath.$image_name);
        }
      else{
        $image_name = $user->image;
      }
      $user->image = $image_name;
      $save = $user->save();
      if($save){
            Toastr::success('Information update successfully', 'ID'.'  '. $user->id, ["positionClass" => "toast-top-center"]);
        }
      else{
            Toastr::warning('Something is wrong', '', ["positionClass" => "toast-top-center"]);
        }
      return redirect()->route('manage_auth');
    }

    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        if($user){
            Toastr::success('information dalete successfully', 'ID'.'  '.$user->id, ["positionClass" => "toast-top-center"]);
        }
        else{
            Toastr::warning('Something is wrong', '', ["positionClass" => "toast-top-center"]);
        }
        return redirect()->back();
    }
}
