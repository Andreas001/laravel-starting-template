<?php

declare(strict_types=1);

namespace App\Relations\Profiling\User;

use App\Models\AbstractModel;
use App\Models\Profiling\User;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @mixin AbstractModel
 * @property User $user
 *
 * @author  Andreas Geraldo <andreageraldo0@gmail.com>
 */
trait BelongsToUserTrait
{
    /**
     * @return BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
