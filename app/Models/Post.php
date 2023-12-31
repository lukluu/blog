<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Post extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function scopeFilter($query, array $filters)
    {
        if (isset($filters['search']) ? $filters['search'] : false) {
            $query->where('judul', 'like', '%' . $filters['search'] . '%')->orWhere('body', 'like', '%' . $filters['search'] . '%');
        }
    }
}
