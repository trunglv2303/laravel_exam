<?php

namespace App\Services;
use App\Repositories\UserRepository;
use App\DTOs\CreateUserDTO;
use App\DTOs\UpdateUserDTO;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Exception;
class UserService{
    public function __construct(
        private UserRepository $users,
    ){}

    public function createUser(CreateUserDTO $dto) :User{
        if($this->users->existsByEmail($dto->email)){
            throw new \Exception('Email already exists');
        }
         return $this->users->create([
            'name' => $dto->name,
            'email' => $dto->email,
            'password' => $dto->password,
        ]);
    }
    public function updateUser(int $id, UpdateUserDTO $dto) :User{
        return $this->users->update($id, [
            'name' => $dto->name,
            'email' => $dto->email,
            'password' => $dto->password,
        ]);
    }
}