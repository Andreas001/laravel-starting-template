<?php

declare(strict_types=1);

namespace App\Services\Profiling\Role;

use App\Models\Profiling\Role;
use App\Repository\Profiling\RoleRepository;
use ReflectionException;

/**
 * @author  Andreas Geraldo <andreasgeraldo0@gmail.com>
 */
final class RoleCreator
{
    /**
     * @var RoleFactory
     */
    private $factory;

    /**
     * @var RoleRepository
     */
    private $repository;

    /**
     * RoleCreator constructor.
     * @param RoleFactory $factory
     * @param RoleRepository $repository
     */
    public function __construct(RoleFactory $factory, RoleRepository $repository)
    {
        $this->factory = $factory;
        $this->repository = $repository;
    }

    /**
     * @param array $payload
     * @return Role
     * @throws ReflectionException
     */
    public function create(array $payload): Role
    {
        $role = $this->factory->create($payload);

        $this->repository->save($role);

        return $role;
    }
}
