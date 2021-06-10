<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Controllers\request\loginRequest;
use App\Http\Controllers\request\RegisterRequest;
use Illuminate\Http\Request;

class Authcontroller extends Controller
{
    public function register(RegisterRequest $request)
    {
    $user = user::create([
        'name' => $request -> get('name'),
        'email' => $request -> get('email'),
        'password' => bcrypt($request -> get('name')),
        ]);
    return response(['user'=> $user ]);
    }

    public function login(loginRequest $request){
    if(!auth()->attempt($request->all())){
    return response(['message' => 'Invalid, Try again']);
    }
    $token = autho()->user()->createToken('Api Token')->accessToken;
    return response(['user' => auth()->user(), 'Token' => $token]);

    }





    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
