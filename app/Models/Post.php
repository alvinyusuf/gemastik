<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function admin() {
        return $this->belongsTo(Admin::class);
    }

    public function tags() {
        return $this->hasMany(Tag::class, 'tag_id');
    }

    public function comments() {
        return $this->hasMany(Comment::class, 'comment_id');
    }

}
