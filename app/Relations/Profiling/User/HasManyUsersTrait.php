<?php

declare(strict_types=1);

namespace App\Relations\Profiling\User;

use App\Models\AbstractModel;
use App\Models\Profiling\User;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Collection;

/**
 * @mixin AbstractModel
 * @property Collection|User[] $user
 *
 * @author  Andreas Geraldo <andreasgeraldo0@gmail.com>
 */
trait HasManyUsersTrait
{
    /**
     * @return HasMany
     */
    public function users(): HasMany
    {
        return $this->hasMany(User::class);
    }
}
