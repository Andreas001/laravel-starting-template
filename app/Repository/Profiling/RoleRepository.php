<?php

declare(strict_types=1);

namespace App\Repository\Profiling;

use App\Models\Profiling\Role;
use App\Repository\Repository;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;

/**
 * @author  Andreas Geraldo <andreasgeraldo0@gmail.com>
 */
final class RoleRepository extends Repository {
    /**
     * @param string|null $keyword
     * @param int         $limit
     * @return LengthAwarePaginator
     */
    public function findByName(?string $keyword, int $limit)
    {
        $query = Role::query();

        if ($keyword) {
            $query->where('name', 'ilike', '%' . $keyword . '%');
        }

        return $query->paginate($limit);
    }
}
