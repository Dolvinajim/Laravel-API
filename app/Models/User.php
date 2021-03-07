<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Tymon\JWTAuth\Contracts\JWTSubject;


class User extends Authenticatable implements JWTSubject
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name','email','password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function artikels(){
        return $this->hasMany(\App\Models\Artikel::class,'users_id','id'); 
    }

    public function kategoriArtikels(){
        return $this->hasMany(\App\Models\KategoriArtikel::class, 'users_id','id'); 
    }
    public function beritas(){
        return $this->hasMany(\App\Models\Berita::class,'users_id','id'); 
    }

    public function kategoriBeritas(){
        return $this->hasMany(\App\Models\KategoriBerita::class, 'users_id','id'); 
    }
    public function galeris(){
        return $this->hasMany(\App\Models\Galeri::class,'users_id','id'); 
    }

    public function kategoriGaleri(){
        return $this->hasMany(\App\Models\KategoriGaleri::class, 'users_id','id'); 
    }
    public function pengumumans(){
        return $this->hasMany(\App\Models\Penggumuman::class,'users_id','id'); 
    }

    public function kategoriPengumuman(){
        return $this->hasMany(\App\Models\KategoriPengumuman::class, 'users_id','id'); 
    }
    /**
    * Get the identifier that will be stored in the subject claim of the JWT.
    *
    * @return mixed
    */
   public function getJWTIdentifier()
   {
       return $this->getKey();
   }

   /**
    * Return a key value array, containing any custom claims to be added to the JWT.
    *
    * @return array
    */
   public function getJWTCustomClaims()
   {
       return [];
   }

}
