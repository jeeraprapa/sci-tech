<?php

namespace SciTech\Admin\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Blog extends Model
{
    use HasFactory;
    use SoftDeletes;

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

    public function getStatusLabelAttribute()
    {
        return $this->attributes['status'] ? 'เปิด' : 'ปิด';
    }
}
