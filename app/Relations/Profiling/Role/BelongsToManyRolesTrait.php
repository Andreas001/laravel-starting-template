<?php

declare(strict_types=1);

namespace App\Relations\Profiling\Role;

use App\Models\AbstractModel;
use App\Models\Profiling\Role;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Support\Collection;

/**
 * @mixin AbstractModel
 * @property Collection|Role[] $roles
 *
 * @author Andreas Geraldo <andreasgeraldo0@gmail.com>
 */
trait BelongsToManyRolesTrait
{
    /**
     * @return BelongsToMany
     */
    public function roles(): BelongsToMany
    {
        return $this->belongsToMany(Role::class, 'user_roles');
    }
}
