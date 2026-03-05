<?php

namespace App\Handlers;

use App\DTOs\CreateUserDTO;
use App\Repositories\UserRepository;

use App\Models\User;

class CreateHandle
{
    public function __construct(
        private UserRepository $userrepos


    )
    {
    }

    public function createUser(CreateUserDTO $dto): User
    {
        return $this->userrepos->create([
            'name' => $dto->name,
            'email' => $dto->email,
            'password' => $dto->password,
        ]);

    }


}
