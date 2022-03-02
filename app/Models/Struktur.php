<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Struktur extends Model
{
    use HasFactory;

    protected $table='struktur';
    protected $fillable = ['nim', 'nama', 'jabatan', 'foto', 'user_id'];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
