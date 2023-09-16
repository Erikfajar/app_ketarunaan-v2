<?php

namespace App\Models;

use Carbon\Carbon;
use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Tingkat_dua extends Model
{
    use HasFactory, Searchable;
    public $table = "tingkat_dua";
    protected $fillable = [
        'nit','nama','jurusan','tipe','pasal_id','prestasi','tgl','poto'
    ];

    public function pasal()
    {
        return $this->belongsTo(pasal::class);
    }

    protected $appends = ['tgl_indo'];
    public function getTglIndoAttribute()
    {
        return Carbon::parse($this->attributes['tgl'])->translatedFormat('d F Y');
    }

    public function toSearchableArray()
    {
        return [
            'nit' => $this->nit,
            'nama' => $this->nama,
            'jurusan' => $this->jurusan,
            'prestasi' => $this->prestasi,
            'tgl' => $this->tgl,
          
        ];
    }
}
