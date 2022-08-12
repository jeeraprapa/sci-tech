<?php

namespace SciTech\Admin\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Teacher extends Model
{
    use SoftDeletes;

    protected $table = 'teachers';

    protected $primaryKey = 'id';

    protected $fillable = [
        'department_id',
        'name',
        'email',
        'tel',
        'eduction',
        'youtube_url',
    ];

    public function department ()
    {
        return $this->belongsTo(Department::class,'department_id');
    }

}
