<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class University extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function ppmbs() {
        return $this->hasMany(Ppmb::class);
    }

    public function jalurs() {
        return $this->hasMany(Jalur::class);
    }

    public function links() {
        return $this->belongsTo(Link::class, 'link_id');
    }
}
