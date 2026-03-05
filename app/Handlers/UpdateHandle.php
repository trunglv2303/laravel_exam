<?php

namespace App\Handlers;

use App\Repositories\UserRepository;
use App\DTOs\UpdateUserDTO;
use Illuminate\Support\Facades\Hash;

class UpdateHandle
{
    public function __construct(
        protected UserRepository $userRepository
    )
    {
    }

    public function updateUser(int $id, UpdateUserDTO $dto)
    {
        return $this->userRepository->update($id, [
            'name' => $dto->name,
            'email' => $dto->email,
            'password' => Hash::make($dto->password),
        ]);
    }
}
