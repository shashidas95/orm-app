<?php

namespace App\Models;

use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;



class Post extends Model
{
    use HasFactory, SoftDeletes;
    public  $timestamps = true;
    protected $dates = ['deleted_at'];
    public static function getSoftDeletedPosts()
    {
        return self::withTrashed()->get();
    }

    protected $fillable = [
        'user_id',
        'category_id',
        'title',
        'slug',
        'description',
        'excerpt',
        'is_published',
        'min_to_read',
    ];
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
