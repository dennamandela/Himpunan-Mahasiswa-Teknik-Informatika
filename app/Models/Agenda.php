<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agenda extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'start', 'end'];

    protected $table='event';

    public function kegiatan() {
        return $this->hasOne(Kegiatan::class, 'agenda_id');
    }
}
