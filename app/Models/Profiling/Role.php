<?php

declare(strict_types=1);

namespace App\Models\Profiling;
use App\Models\AbstractModel;

class Role extends AbstractModel {
    /**
     * @var bool
     */
    public $timestamps = false;

    /**
     * @var array
     */
    protected $fillable = [
        'name',
        'label',
    ];
}
