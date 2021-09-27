<?php

declare(strict_types=1);

namespace App\Services\Profiling\User;

use App\Models\Profiling\User;

/**
 * @author  Andreas Geraldo <andreasgeraldo0@gmail.com>
 */
final class UserFactory
{
    /**
     * @param array $payload
     * @return User
     */
    public function create(array $payload): User
    {
        $user = new User();

        $user->username = $payload['username'];

        return $user;
    }
}
