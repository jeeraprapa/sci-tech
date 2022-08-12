<?php

namespace SciTech\Admin\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Major extends Model implements HasMedia
{
    use SoftDeletes;
    use InteractsWithMedia;

    protected $table = 'majors';

    protected $primaryKey = 'id';

    protected $fillable = [
        'department_id',
        'name',
        'youtube_url',
        'detail'
    ];

    public function department ()
    {
        return $this->belongsTo(Department::class,'department_id');
    }
}
