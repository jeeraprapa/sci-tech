<?php

namespace SciTech\Admin\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Department extends Model
{
    use SoftDeletes;

    protected $table = 'departments';

    protected $primaryKey = 'id';

    protected $fillable = [
        'name','slug','type'
    ];

    public function teachers ()
    {
        return $this->hasMany(Teacher::class,'department_id');
    }

}
