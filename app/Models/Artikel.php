<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    protected $table='artikel';
    protected $fillable=[
        'judul','isi','users_id','kategori_artikel_id'

    ];

    public function kategoriArtikel(){
        return $this->belongsTo(\App\Models\KategoriArtikel::class, 'kategori_artikel_id','id');
    }
    public function user(){
        return $this->belongsTo(\App\Models\User::class, 'users_id','id');
    }  

    use HasFactory;
}
