<?php

declare(strict_types=1);

namespace App\Services\Profiling\Role;

use App\Models\Profiling\Role;

/**
 * @author  Andreas Geraldo <andreasgeraldo0@gmail.com>
 */
final class RoleFactory
{
    /**
     * @param array $payload
     * @return Role
     */
    public function create(array $payload): Role
    {
        $role = new Role();

        $role->name = $payload['name'];
        $role->label = $payload['label'];

        return $role;
    }
}
