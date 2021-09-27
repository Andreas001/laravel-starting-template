<?php

declare(strict_types=1);

namespace App\Services\Profiling\UserRole;

use App\Models\Profiling\UserRole;
use App\Repository\Profiling\UserRoleRepository;
use ReflectionException;

/**
 * @author  Andreas Geraldo <andreasgeraldo0@gmail.com>
 */
final class UserRoleCreator
{
    /**
     * @var UserRoleFactory
     */
    private $factory;

    /**
     * @var UserRoleRepository
     */
    private $repository;

    /**
     * UserRoleCreator constructor.
     * @param UserRoleFactory $factory
     * @param UserRoleRepository $repository
     */
    public function __construct(UserRoleFactory $factory, UserRoleRepository $repository)
    {
        $this->factory = $factory;
        $this->repository = $repository;
    }

    /**
     * @param array $payload
     * @return UserRole
     * @throws ReflectionException
     */
    public function create(array $payload): UserRole
    {
        $userRole = $this->factory->create($payload);

        $this->repository->save($userRole);

        return $userRole;
    }
}
