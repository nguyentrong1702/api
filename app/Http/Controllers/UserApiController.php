<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\User;
use App\Http\Resources\User\UserResource;

class UserApiController extends Controller
{

    // public function _construct() {
    //     $this->middleware('auth:api')->except('index','show');
    // }

    //
    public function index()
    {
        //
        return UserResource::collection(User::paginate(5));
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
