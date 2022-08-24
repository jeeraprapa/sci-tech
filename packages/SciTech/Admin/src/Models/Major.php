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
        'full_name',
        'youtube_url',
        'detail',
        'slug'
    ];

    public function department ()
    {
        return $this->belongsTo(Department::class,'department_id');
    }

    public function getYoutubeCoverUrlAttribute ()
    {
        if($this->youtube) {
            preg_match("/^(?:http(?:s)?:\/\/)?(?:www\.)?(?:m\.)?(?:youtu\.be\/|youtube\.com\/(?:(?:watch)?\?(?:.*&)?v(?:i)?=|(?:embed|v|vi|user|shorts)\/))([^\?&\"'>]+)/", $this->youtube, $matches);

            return $this->youtube_image($matches[1]);
        }
    }

    function youtube_image($id) {

        return "http://img.youtube.com/vi/$id/mqdefault.jpg";
    }
}
