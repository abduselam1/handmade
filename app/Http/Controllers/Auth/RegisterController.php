<?php

namespace App\Http\Controllers\Auth;

use App\Events\NewUserRegisterEvent;
use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use App\Models\Verification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function __construct() {
        $this->middleware('guest');
    }
    //

    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    public function register(RegisterRequest $request)
    {
        $name = explode(' ',$request['fullname']);
        $user =  User::create([
            'role_id' => 3,
            'first_name' => $name[0],
            'last_name' => $name[1] ?? '',
            // 'phone' => $data['phone'],
            'username' => $request['username'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
        ]);
        event(new NewUserRegisterEvent($user));
        return response($user,201);
        # code...
    }

    public function destroy(User $user)
    {
        return $user->delete();
    }

    public function verifyUser(Request $request)
    {
       
        $verification = Verification::where('user_id',$request->id)->orderBy('id','desc')->first();
        
        try {
             
            if($request->code == $verification->code){
                $user = User::find($verification->user_id);
                $user->update(['is_verifid'=>true]);
                $verification->delete();
                return true;
            }
            return response(false,400);
        } catch (\Throwable $th) {
           return response(false,400);
        }
    }
}
