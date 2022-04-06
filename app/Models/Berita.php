<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;


class Berita extends Model
{
    use HasFactory;

    protected $table='berita';

    protected $fillable = ['judul_berita', 'headline', 'isi_berita', 'foto_berita', 'tanggal_post', 'kategori_id'];

    public function kategori() {
        return $this->belongsTo(Kategori::class);
    }

    public function berita(){
        return url("/berita/detail/{$this->id}-" . Str::slug($this->judul_berita));
    }

    public function getCreatedAttribute(){
        return Carbon::parse($this->attribute['tanggal_post'])->diffForHumans();
    }

    public function kategoriBerita() {
        return url("/berita/kategori/{$this->id}-" . Str::slug($this->kategori->nama_kategori));
    }
}
