<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anggota extends Model
{
    use HasFactory;

    protected $table='anggota';
    protected $fillable = ['nim', 'nama_anggota', 'program_studi','tanggal_lahir','angkatan', 'jenis_kelamin', 'agama', 'foto', 'user_id'];
    protected $dates = ['tanggal_lahir'];


    public function user (){
        return $this->belongsTo(User::class);
    }
}
