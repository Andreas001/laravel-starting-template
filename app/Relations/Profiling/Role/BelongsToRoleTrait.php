<?php

declare(strict_types=1);

namespace App\Relations\Profiling\Role;

use App\Models\AbstractModel;
use App\Models\Profiling\Role;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @mixin AbstractModel
 * @property Role $role
 *
 * @author  Andreas Geraldo <andreageraldo0@gmail.com>
 */
trait BelongsToRoleTrait
{
    /**
     * @return BelongsTo
     */
    public function role(): BelongsTo
    {
        return $this->belongsTo(Role::class);
    }
}
