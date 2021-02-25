<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriPengumuman extends Model
{
    protected $table='kategori_pengumuman';
    protected $fillable=[
        'nama','users_id'
    ];

    public function pengumumans(){
        return $this->hasMany(\App\Models\Pengumuman::class, 'kategori_pengumuman_id','id');
    }
    public function user(){
        return $this->belongsTo(\App\Models\User::class, 'users_id','id' );
    }
    use HasFactory;
}
