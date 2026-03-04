<?php

namespace App\Http\Controllers;
use App\Http\Requests\CreateUserRequest;
use App\Services\UserService;
use App\Http\Requests\UpdateUserRequest;
use Illuminate\Http\Request;

class UserController extends Controller
{
    
    public function store(CreateUserRequest $request,UserService $userService){
        $userService->createUser($request->toDTO());
    }
    public function update(int $id, UpdateUserRequest $request,UserService $userService){
        $userService->updateUser($id, $request->toDTO());
    }
}
    
 