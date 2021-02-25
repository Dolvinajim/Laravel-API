<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriGaleri extends Model
{
    protected $table='kategori_galeri';
    protected $fillable=[
        'nama','users_id'
    ];

    public function galeris(){
        return $this->hasMany(\App\Models\Galeri::class, 'kategori_galeri_id','id');
    }
    public function user(){
        return $this->belongsTo(\App\Models\User::class, 'users_id','id' );
    }
    use HasFactory;
}
