<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ppmb extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function admin() {
        return $this->belongsTo(Admin::class);
    }

    public function university() {
        return $this->belongsTo(University::class);
    }

    public function jalur() {
        return $this->belongsTo(Jalur::class);
    }
}
//yg ditampilkan ke halaman ppmb adalah name dari tabel univ