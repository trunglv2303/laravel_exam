<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Handlers\CreateHandle;
use App\Repositories\UserRepository;
use App\DTOs\CreateUserDTO;
use App\Models\User;
use Mockery;

class CreateUserHandlerTest extends TestCase
{
    public function test_create_user_success()
    {
        $repo = Mockery::mock(UserRepository::class);

        $handler = new CreateHandle($repo);

        $dto = new CreateUserDTO(
            name: "Trung",
            email: "trung@gmail.com",
            password: "123456"
        );

        $user = new User([
            'name' => 'Trung',
            'email' => 'trung@gmail.com',
            'password'=>"123456"
        ]);

        $repo->shouldReceive('create')
            ->once()
            ->andReturn($user);
        dump($repo);
        $result = $handler->createUser($dto);
        dump($result);
        $this->assertInstanceOf(User::class, $result);
        $this->assertEquals('Trung', $result->name);
    }
}
