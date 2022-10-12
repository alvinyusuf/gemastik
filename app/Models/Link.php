<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Link extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function university() {
        return $this->belongsTo(University::class);
    }

    public function jalur() {
        return $this->belongsTo(Jalur::class);
    }
}
