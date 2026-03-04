<?php

namespace App\Http\Controllers;
use App\Http\Requests\CreateUserRequest;
use App\Services\UserService;

use Illuminate\Http\Request;

class UserController extends Controller
{
    
    public function store(CreateUserRequest $request,UserService $userService){
        $userService->createUser($request->toDTO());
    }}
