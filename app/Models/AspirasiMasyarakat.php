<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AspirasiMasyarakat extends Model
{
    use HasFactory;

    protected $table='aspirasi_masyarakat';
    protected $fillable = ['nama' , 'nama_instansi', 'perihal', 'perihal', 'isi'];
}
