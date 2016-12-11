<?php
namespace Scool\Inventory\Repositories;
use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use Scool\Inventory\Repositories\AttendanceRepository;
use Scool\Inventory\Models\Attendance;
use Scool\Inventory\Validators\AttendanceValidator;
/**
 * Class InventoryRepositoryEloquent
 * @package namespace App\Repositories;
 */
class InventoryRepositoryEloquent extends BaseRepository implements InventoryRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Inventory::class;
    }
    /**
     * Specify Validator class name
     *
     * @return mixed
     */
    public function validator()
    {
        return InventoryValidator::class;
    }
    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}