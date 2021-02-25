<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriBerita extends Model
{
    
        protected $table='kategori_berita';
        protected $fillable=[
            'nama','users_id'
        ];
    
        public function beritas(){
            return $this->hasMany(\App\Models\Berita::class, 'kategori_berita_id','id');
        }
        public function user(){
            return $this->belongsTo(\App\Models\User::class, 'users_id','id' );
        }
    use HasFactory;
}
