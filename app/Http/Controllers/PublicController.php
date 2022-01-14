<?php

namespace App\Http\Controllers;

use App\Models\Like;
use App\Models\Profile;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function index(Request $request){
        
        $verified = false;
        $profile = '';
        $liked = [];
        $saved = [];
        
        if(auth()->user()){
            $liked = Like::where(['user_id'=>auth()->user()->id,'likeable_type'=>"App\Models\Post"])->pluck('likeable_id');
            // $saved = auth()->user()->saveds();
            // dd($liked);
            $saved = auth()->user()->saveds->pluck('id')->toArray();

            if(auth()->user()->is_verifid){
                $verified = true;
            }
            $profile = Profile::where('user_id',auth()->user()->id)->orderBy('id','desc')->first();
        }
        // dd(Profile);

        return view('public.index',compact('verified','profile','liked','saved'));

    }
}
