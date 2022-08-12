<?php

namespace SciTech\Admin\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Teacher extends Model implements HasMedia
{
    use SoftDeletes;
    use InteractsWithMedia;

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
