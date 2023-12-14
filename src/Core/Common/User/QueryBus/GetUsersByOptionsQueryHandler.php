<?php

namespace App\Core\Common\User\QueryBus;

use App\Core\CQRS\QueryBus\QueryHandlerInterface;
use App\Core\Common\User\Repository\UserRepositoryInterface;

class GetUsersByOptionsQueryHandler implements QueryHandlerInterface
{
    public function __construct(
        private readonly UserRepositoryInterface $userRepository,
    )
    {
    }

    public function __invoke(GetUsersByOptionsQuery $query): ?array
    {
        $dto = $query->getDto();
        return $this->userRepository->getUsersByOptions(
            $dto->getEmail(),
            $dto->getUsername()
        );
    }
}
