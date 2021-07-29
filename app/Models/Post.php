<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // protected $fillable = ['title', 'excerpt', 'body'];
    protected $guarded = ['di']; // tidak boleh di isi secara manual

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    // user di aliaskan
    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
