<?php

namespace App\Handlers;

use App\DTOs\CreateUserDTO;
use App\Repositories\UserRepository;

use App\Models\User;

class CreateHandle
{
//    public function __construct(
//        private UserRepository $userrepos
//    )
//    {
//    }
    private $userRepository;

    public function __construct(
        UserRepository $userRepository
    )
    {
        $this->userRepository = $userRepository;

    }

    public function createUser(CreateUserDTO $dto): User
    {
        return $this->userRepository->create([
            'name' => $dto->name,
            'email' => $dto->email,
            'password' => $dto->password,
        ]);

    }


}
