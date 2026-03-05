<?php

namespace App\Handlers;

use App\Repositories\UserRepository;

class DeleteHandle
{
    private UserRepository $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function delete(int $id)
    {
        return $this->userRepository->delete($id);
    }
}

