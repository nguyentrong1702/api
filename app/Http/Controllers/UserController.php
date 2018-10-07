<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\User;
use App\Http\Resources\User\UserResource;

class UserController extends Controller
{
    //
    public function index()
    {
        //
        return UserResource::collection(User::all());
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }

    public function show(User $user)
    {
        //
        // return $user;
        return new UserResource($user);
    }

    public function edit(User $user)
    {
        //
    }

    public function update(Request $request, User $user)
    {
        //
    }

    public function destroy(User $user)
    {
        //
    }

}
