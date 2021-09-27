<?php

declare(strict_types=1);

namespace App\Models\Profiling;

use App\Models\AbstractModel;

class UserRole extends AbstractModel {
    /**
     * @var string
     */
    protected $keyType = 'string';

    /**
     * @var array
     */
    protected $fillable = [
        'user_id',
        'role_id',
    ];
}