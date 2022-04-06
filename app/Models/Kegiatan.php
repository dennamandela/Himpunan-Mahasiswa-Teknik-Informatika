<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Kegiatan extends Model
{
    use HasFactory;

    protected $table='kegiatan';
    protected $fillable = ['keterangan', 'tempat', 'foto', 'event_id'];

    public function event() {
        return $this->BelongsTo(Agenda::class);
    }

    public function highKegiatan() {
        return url("/kegiatan/detail-kegiatan/{$this->id}-" . Str::slug($this->event->title));
    }
}

