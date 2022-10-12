<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jalur extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function ppmb () {
        return $this->belongsTo(Ppmb::class);
    }

    public function links() {
        return $this->hasMany(Jalur::class);
    }

    public function university() {
        return $this->belongsTo(University::class);
    }
}
