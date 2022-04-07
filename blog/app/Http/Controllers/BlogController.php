<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Blog;
use Illuminate\Http\Request;
use Auth;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $auth_user = Auth::user();
        if (!$auth_user)
            return json_encode('Authentication error');

        if ($auth_user->role_id != config('constants.roles.user')){ //admin || manager
            return Blog::all();
        }
        else{
            
            return $auth_user->blogs;
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            
        ]);
        
        return Blog::create(['user_id'=>Auth::id(),
                            'title'=>$request['title'],
                            'description'=>$request['description'],
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $auth_user = Auth::user();

        $blog = Blog::find($id);

        if (!$blog)
            return json_encode('This blog does not exist');

        $auth_user = Auth::user();
        if (!$auth_user)
            return json_encode('Authentication error');

        if ($auth_user->role_id == config('constants.roles.user')){
            
            if ($blog->user_id != $auth_user->id) //not owner
                return json_encode('This is not your blog');
        }
        return $blog;
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
       
        $blog = Blog::find($id);

        if (!$blog)
            return json_encode('This blog does not exist');

        $auth_user = Auth::user();
        if (!$auth_user)
            return json_encode('Authentication error');


        if ($auth_user->role_id == config('constants.roles.user')){
            
            if ($blog->user_id != $auth_user->id) //not owner
                return json_encode('This is not your blog');
        }

        $blog->update(
            ['title'=>$request['title'],
            'description'=>$request['description']
        ]);

        return $blog;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blog = Blog::find($id);

        if (!$blog)
            return json_encode('This blog does not exist');

        $auth_user = Auth::user();

        if ($auth_user->role_id == config('constants.roles.user')){
            
            if ($blog->user_id != $auth_user->id) //not owner
                return json_encode('This is not your blog');
        }

        return Blog::destroy($id);
    }

}
