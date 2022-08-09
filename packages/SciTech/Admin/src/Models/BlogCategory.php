<?php

namespace SciTech\Admin\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class BlogCategory extends Model
{
    use HasFactory;
    use SoftDeletes;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'blog_categories';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'id';

    protected $fillable = [
        'name',
        'slug',
        'status',
        'description',
    ];

    protected $casts = [
        'status' => 'boolean',
    ];

    public function getStatusLabelAttribute()
    {
        return $this->attributes['status'] ? 'เปิด' : 'ปิด';
    }

    public function blogs()
    {
        return $this->hasMany(Blog::class, 'category_id');
    }
}
