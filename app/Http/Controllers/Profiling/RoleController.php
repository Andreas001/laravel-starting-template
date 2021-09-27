<?php

declare(strict_types=1);

namespace App\Http\Controllers\Profiling;

use App\Http\Controllers\Controller;
use App\Models\Profiling\Role;
use App\Repository\Profiling\RoleRepository;
use App\Services\Profiling\Role\RoleCreator;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use ReflectionException;

/**
 * @author  Andreas Geraldo <andreasgeraldo0@gmail.com>
 */
class RoleController extends Controller
{
    /**
     * @var RoleCreator
     */
    private $creator;

    /**
     * @var RoleRepository
     */
    private $repository;

    /**
     * RoleController constructor.
     * @param RoleCreator    $creator
     * @param RoleRepository $repository
     */
    public function __construct(RoleCreator $creator, RoleRepository $repository)
    {
        $this->creator = $creator;
        $this->repository = $repository;
    }

    /**
     * @return LengthAwarePaginator
     */
    public function index()
    {
        $keyword = request()->query('keyword');
        $limit = (int) request()->query('limit', 15);

        return $this->repository->findByName($keyword, $limit);
    }

    /**
     * @return Role|JsonResponse
     * @throws ReflectionException
     */
    public function store()
    {
        $validator = Validator::make(request()->all(), [
            'name' => 'required|max:50',
            'label' => 'required|max:50',
        ]);

        if ($validator->fails()) {
            return response()->json(
                $validator->errors()->getMessages()
            );
        }

        return $this->creator->create(request()->all());
    }

    /**
     * @param Request $request
     * @return JsonResponse
     * @throws ReflectionException
     */
    public function update(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:50',
            'label' => 'required|max:50'
        ],
            [
                'name.required' => 'Name Required!',
                'label.required' => 'Label Required!',
            ]
        );

        if($validator->fails()) {
            return response()->json(
                $validator->errors()->getMessages()
            );
        }

        $role = Role::find($request->route('role'));

        if(empty ($role)){
            return response()->json([
                    'success' => false,
                    'message' => 'Record with ID not found!',
            ], 404);
        }

        $role->name = $request->input('name');
        $this->repository->save($role);

        return $role;
    }

    /**
     * @param $id
     * @return JsonResponse
     * @throws ReflectionException
     */
    public function destroy($id)
    {
        $role = Role::find($id);

        if(empty ($role)){
            return response()->json([
                'success' => false,
                'message' => 'Record with ID not found!',
            ], 404);
        }

        $this->repository->delete($role);

        return $role;
    }
}
