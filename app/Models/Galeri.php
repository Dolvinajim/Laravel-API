<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Galeri extends Model
{
    protected $table='galeri';
    protected $fillable=[
        'nama','keterangan','path','users_id','kategori_galeri_id'

    ];

    public function kategoriGaleri(){
        return $this->belongsTo(\App\Models\KategoriGaleri::class, 'kategori_galeri_id','id');
    }
    public function user(){
        return $this->belongsTo(\App\Models\Users::class, 'users_id','id');
    }  


    use HasFactory;
}
