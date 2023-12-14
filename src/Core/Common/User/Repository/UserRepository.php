<?php

namespace App\Core\Common\User\Repository;

use App\Core\Repository\UserRepository as BaseUserRepository;
use App\Core\Common\User\Repository\UserRepositoryInterface as BaseUserRepositoryInterface;

class UserRepository extends BaseUserRepository implements BaseUserRepositoryInterface
{
    public function getUsersByOptions(?string $email = null, ?string $username = null): array
    {
        $qb = $this->createQueryBuilder('u');

        if ($email) {
            $qb->andWhere(
                $qb->expr()->eq(
                    'u.email',
                    ':email'
                )
            );
            $qb->setParameter('email', $email);
        }

        if ($username) {
            $qb->andWhere(
                $qb->expr()->eq(
                    'u.username',
                    ':username'
                )
            );
            $qb->setParameter('username', $username);
        }
        return $qb->getQuery()->getResult();
    }

}
