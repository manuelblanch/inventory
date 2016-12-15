<?php
namespace Scool\Inventory\Models;
use Acacha\Names\Traits\Nameable;
use Illuminate\Database\Eloquent\Model;
use Scool\Inventory\Traits\HasCourses;
use Scool\Inventory\Traits\HasDepartments;
use Scool\Inventory\Traits\HasLaw;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;
/**
 * Class Study.
 *
 * @package Scool\Inventory\Models
 */
class Study extends Model implements Transformable
{
    use HasLaw,HasDepartments,HasCourses,Nameable,TransformableTrait;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name'];
}