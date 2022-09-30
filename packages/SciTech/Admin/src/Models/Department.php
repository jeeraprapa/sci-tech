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
        'name',
        'title',
        'sub_title',
        'slug',
        'type',
        'primary_color',
        'secondary_color'
    ];

    public function teachers ()
    {
        return $this->hasMany(Teacher::class,'department_id')->heavier();
    }

    public function majors ()
    {
        return $this->hasMany(Major::class,'department_id');
    }

}
