<?php

namespace App\Models\Blog;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $table = 'posts';

    protected $fillable = ['title','slug','image','description','content','meta-title','meta-description','status','published_at'];

    public function tags()
    {
        return $this->belongsToMany(Tag::class)->withTimestamps();
    }

}
