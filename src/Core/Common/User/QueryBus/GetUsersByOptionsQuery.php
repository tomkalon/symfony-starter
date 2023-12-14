<?php

namespace App\Core\Common\User\QueryBus;

use App\Core\Common\User\Dto\UserDto;
use App\Core\CQRS\QueryBus\QueryInterface;

class GetUsersByOptionsQuery implements QueryInterface
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
