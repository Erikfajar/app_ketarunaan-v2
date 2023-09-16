<?php

namespace App\Models;

use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class pasal extends Model
{
    use HasFactory, Searchable;
    public $table = "pasal";
    protected $fillable = [
       'pasal'
    ];

    public function pasal()
    {
        return $this->hasMany(Tingkat_satu::class);
        return $this->hasMany(Tingkat_dua::class);
        return $this->hasMany(Tingkat_tiga::class);
    }

    public function toSearchableArray()
    {
        return [
            'pasal' => $this->pasal,
         
          
        ];
    }
}
