<?php

namespace App\Repositories;

use App\Models\User;

class UserRepository
{
    public function create(array $data)
    {
        return User::create($data);
    }

    public function existsByEmail(string $email): bool
    {
        return User::where('email', $email)->exists();
    }

    public function update(int $id, array $data): User
    {
        $user = User::findOrFail($id);
        $user->update($data);
        return $user;
    }
    public function delete(int $id){
        return User::destroy($id);
    }
    public function getById(int $id): User {
        return User::findOrFail($id);    }
    public function getalluser() {
        return User::all();
    }
}
