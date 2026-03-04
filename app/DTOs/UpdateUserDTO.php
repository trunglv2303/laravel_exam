<?php
namespace App\DTOs;
class UpdateUserDTO{
public function __construct(
    public string $name,
    public string $email,
    public string $password,
){
    }
    }