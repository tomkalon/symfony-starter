<?php

namespace App\Core\Common\User\CommandBus;

use App\Core\Common\User\Dto\UserDto;
use App\Core\CQRS\CommandBus\CommandInterface;

class CreateUserCommand implements CommandInterface
{
    public function __construct(
        private readonly UserDto $dto
    )
    {
    }

    public function getDto(): UserDto
    {
        return $this->dto;
    }
}
