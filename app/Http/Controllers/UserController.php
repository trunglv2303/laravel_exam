<?php

namespace App\Http\Controllers;

use App\Handlers\DeleteHandle;
use App\Handlers\SelecteHandle;
use App\Handlers\UpdateHandle;
use App\Http\Requests\CreateUserRequest;

//use App\Services\UserService;
use App\Handlers\CreateHandle;
use App\Http\Requests\UpdateUserRequest;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function store(CreateUserRequest $request, CreateHandle $createUserHandler)
    {
        $user = $createUserHandler->createUser($request->toDTO());

        return response()->json($user);
    }

    public function update(int $id, UpdateUserRequest $request, UpdateHandle $updateUserHandler)
    {

        $user = $updateUserHandler->updateUser($id, $request->toDTO());
        return response()->json($user);
    }


    public function deleteuser(int $id, DeleteHandle $deleteUserHandler)
    {
        $delete = $deleteUserHandler->delete($id);

        return response()->json([
            'success' => $delete
        ]);
    }
    public function getuserbyid(int $id, SelecteHandle $selecteHandle)
    {
        $user = $selecteHandle->getUserById($id);
        return view('showuser', compact('user'));
    }
    public function getusereditbyid (int $id, SelecteHandle $selecteHandle)
    {
        $user = $selecteHandle->getUserById($id);
        return view('edituserbyid', compact('user'));
    }
    public function getalluser(SelecteHandle $selecteHandle){
        $users = $selecteHandle->getAllUser();
        return view('getallluser', compact('users'));

    }
//    public function update(int $id, UpdateUserRequest $request,UserService $userService){
//        $userService->updateUser($id, $request->toDTO());
//    }
}

