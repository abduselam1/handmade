<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Like;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return Post::withCount('comments as comment','likes as like')->with(['user'=>function($query){
            $query->with(['profiles'=>function($profile_query){
                $profile_query->orderBy('id','desc');
            }]);
        },'images'])->get();

    }

    public function show($id)
    {
        
        // $comments = Comment::with(['user'=>function($query){
        //     $query->with(['profiles'=>function($profile_query){
        //         $profile_query->orderBy('id','desc');
        //     }]);
        // }])->where('commentable_id',$id)->get();
        
        // $newdata = [];
        // $comments = $comments->toArray();
        // foreach($comments as $comment){
        //     $comment['user']['profiles'] = $comment['user']['profiles'][0];
        //     $newdata[] = $comment;
        //     // dd($comment->user->profiles[0]);
        // }
        // dd($newdata);
        // return $comments;

        $post = Post::withCount('comments as comment','likes as likes')->with(['user'=>function($query){
            $query->with(['profiles'=>function($profile_query){
                $profile_query->orderBy('id','desc');
            }]);
        },'comments'=>function($query){
            $query->withCount('likes as like')->with(['user'=>function($user_query){
                $user_query->with(['profiles'=>function($profile_query){
                    $profile_query->orderBy('id','desc');
                }]);
            }]);
        },'images'])->find($id);
        if($post){
            $post = $post->toArray();
            $returned_comment = [];
            $post['user']['profiles'] = $post['user']['profiles'][0];
            foreach($post['comments'] as $comment){
                $comment['user']['profiles'] = $comment['user']['profiles'][0];
                $returned_comment[] = $comment;
            }
            $post['comments'] = $returned_comment;
            return $post;
        }else{
            return response(false,200);
        }
    }

    public function liked(Post $id,Request $request)
    {
    
       try {
            $id->likes()->create([
                'user_id' => $request->user,
            ]);
            return true;
       } catch (\Throwable $th) {
           //throw $th;
           return $th;
       }

        
    }

    public function unlike(Post $id,Request $request)
    {
    
        try {
            $liked = $id->likes()->where('user_id',$request->user)->first();
            if($liked ==null){
                return response(false,400);
            }
            return $liked->delete();
            
       } catch (\Throwable $th) {
           //throw $th;
           return $th;
       }

        
    }

    public function save(Post $id, Request $request)
    {
        try {
            $liked = $id->users()->syncWithoutDetaching([$request->user]);
            return true;
        } catch (\Throwable $th) {
            return $th;
        }
    }

    public function unsave(Post $id,Request $request)
    {
        
        try {
            $save = $id->users()->detach($request->user);
            if($save ==null){
                return response(false,400);
            }
            return true;
            
       } catch (\Throwable $th) {
           //throw $th;
           return response(false,400);
       }

        
    }
}
