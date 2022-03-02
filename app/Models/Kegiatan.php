<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kegiatan extends Model
{
    use HasFactory;

    protected $table='kegiatan';
    protected $fillable = ['keterangan', 'tempat', 'foto', 'event_id'];

    public function event() {
        return $this->BelongsTo(Agenda::class);
    }
}

