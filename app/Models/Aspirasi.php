<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aspirasi extends Model
{
    use HasFactory;

    protected $table='aspirasi';

    protected $fillable = ['tujuan_aspirasi', 'isi_aspirasi', 'user_id'];

    public function user() {
        return $this->belongsTo(User::class);
    }
}
