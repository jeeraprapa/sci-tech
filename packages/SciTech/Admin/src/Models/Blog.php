<?php

namespace SciTech\Admin\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Blog extends Model implements HasMedia
{
    use HasFactory;
    use SoftDeletes;
    use InteractsWithMedia;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'blogs';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'id';

    protected $fillable = [
        'category_id',
        'name',
        'slug',
        'published_at',
        'status',
        'short_description',
        'description',
    ];

    protected $casts = [
        'status' => 'boolean',
    ];

    protected $dates = ['published_at'];

    public function getStatusLabelAttribute()
    {
        return $this->attributes['status'] ? 'เปิด' : 'ปิด';
    }

    public function category()
    {
        return $this->belongsTo(BlogCategory::class);
    }

    public function thumbnail ()
    {
        return $this->getMedia('images', function (Media $media) {
            return isset($media->custom_properties['thumbnail']);
        })->first();
    }
}
