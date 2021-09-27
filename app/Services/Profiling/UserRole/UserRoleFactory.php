<?php

declare(strict_types=1);

namespace App\Services\Profiling\UserRole;

use App\Models\Profiling\UserRole;

/**
 * @author  Andreas Geraldo <andreasgeraldo0@gmail.com>
 */
final class UserRoleFactory
{
    /**
     * @param array $payload
     * @return UserRole
     */
    public function create(array $payload): UserRole
    {
        $userRole = new UserRole();

        $userRole->user_id = $payload['user'];
        $userRole->role_id = $payload['role'];

        return $userRole;
    }
}
