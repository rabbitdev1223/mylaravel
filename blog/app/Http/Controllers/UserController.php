<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Blog;
use Illuminate\Http\Request;
use Auth;

class UserController extends Controller
{

    public function __construct()
    {
      
    }
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

        if ($auth_user->role_id == config('constants.roles.admin')){ //admin
            return User::all();
        }
        else{
            
            return json_encode('You have no permission');
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
            'name' => 'required|string',
            'email' => 'required|string|unique:users,email',

        ]);
        
        $auth_user = Auth::user();
        if (!$auth_user)
            return json_encode('Authentication error');

        if ($auth_user->role_id != config('constants.roles.admin')){ //not admin
            
            return json_encode('You have no permission');
        }
        return User::create([
                            'name'=>$request['name'],
                            'email'=>$request['email'],
                            'role_id'=>$request->input('role_id',3),
                            'password'=>bcrypt('11111111'),
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

        $user = User::find($id);

        if (!$user)
            return json_encode('This user does not exist');

        $auth_user = Auth::user();
        if (!$auth_user)
            return json_encode('Authentication error');

        if ($auth_user->role_id == config('constants.roles.admin')){//if role is admin 
            return $user;    
        }
        return json_encode('You have no permission');
        
        
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
       
        $user = User::find($id);

        if (!$user)
            return json_encode('This user does not exist');

        $auth_user = Auth::user();
        if (!$auth_user)
            return json_encode('Authentication error');


        if ($auth_user->role_id != config('constants.roles.admin')){
            
            
            return json_encode('You have no permission');
        }

        if ($request['name']){
            $user->name = $request['name'];
            
        }
        if ($request['password']){
            $user->password = bcrypt($request['password']);
            
        }
        if ($request['role_id']){
            $user->role_id = $request['role_id'];
        }
        $user->save();
        
        return $user;
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

        if (!$user)
            return json_encode('This user does not exist');

        $auth_user = Auth::user();

        if ($auth_user->role_id != config('constants.roles.admin')){
            
            return json_encode('You have no permission');
        }
        $user->blogs()->delete();
        return User::destroy($id);
    }

}
