<?php

declare(strict_types=1);

namespace App\Relations\Profiling\UserRole;

use App\Models\AbstractModel;
use App\Models\Profiling\User;
use App\Models\Profiling\UserRole;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Collection;

/**
 * @mixin AbstractModel
 * @property Collection|UserRole[] $userRoles
 *
 * @author  Andreas Geraldo <andreasgeraldo0@gmail.com>
 */
trait HasManyUserRolesTrait
{
    /**
     * @return HasMany
     */
    public function userRoles(): HasMany
    {
        return $this->hasMany(UserRole::class);
    }
}
