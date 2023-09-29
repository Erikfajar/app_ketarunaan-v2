<?php

namespace App\Models;

use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Taruna extends Model
{
    use HasFactory, Searchable;
    protected $table = "taruna";
    protected $fillable = [
        'nit','nama','jurusan','tingkat'
    ];

    public function toSearchableArray()
    {
        return [
            'nit' => $this->nit,
            'nama' => $this->nama,
            'jurusan' => $this->jurusan,
         
          
        ];
    }
}
