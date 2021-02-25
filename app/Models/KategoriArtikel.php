<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriArtikel extends Model
{
    protected $table='kategori_artikel';
    protected $fillable=[
        'nama','users_id'
    ];

    public function artikels(){
        return $this->hasMany(\App\Models\Artikel::class, 'kategori_artikel_id','id');
    }
    public function user(){
        return $this->belongsTo(\App\Models\User::class, 'users_id','id' );
    }
    use HasFactory;
}
