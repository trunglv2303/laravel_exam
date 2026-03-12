<?php

namespace App\Handlers;

use App\Repositories\UserRepository;
use Illuminate\Cache\Repository;

class SelecteHandle
{
    private UserRepository $userRepository;

    public function __construct(UserRepository $userRepository){
        $this->userRepository=$userRepository;
    }
    public function getUserById(int $id ){
        return $this->userRepository->getById($id);
    }
    public function getAllUser(){
        return $this->userRepository->getalluser();
    }
}
