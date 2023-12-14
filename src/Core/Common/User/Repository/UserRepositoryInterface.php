<?php

namespace App\Core\Common\User\Repository;

use App\Core\Repository\UserRepositoryInterface as BaseUserRepositoryInterface;

interface UserRepositoryInterface extends BaseUserRepositoryInterface
{
    public function getUsersByOptions(?string $email = null, ?string $username = null): array;

}
