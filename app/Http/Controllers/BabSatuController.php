<?php

namespace App\Http\Controllers;
use App\Http\Controllers\BabSatuContorller;
use Illuminate\Database\Eloquent\Builder;
use App\Models\Artikel;
use App\Models\Pengumuman;
use Illuminate\Http\Request;

class BabSatuController extends Controller
{
    //soal1
    //Tampilkan artikel dengan id=2 users_id=1
    public function a1(){
        $artikels=Artikel::where('id', 2)->where('users_id', 1)->get();
        return $artikels;
    }

    //soal2
    //Tampilkan artikel dengan id=2 atau id_32 dengan pengurutan berdasarkan user id descending
    public function a2(){
        $artikels=Artikel::where('id', 2)->orWhere('id', 32)->orderBy ('users_id','desc')->get();
        return $artikels;
    }

    //soal3
    //Tampilkan artikel dengan id=3 dan user dengan nama=dolvina
    public function a3(){
        $artikels=Artikel::where('id', 2)->whereHas('user', function (Builder $query){
            $query->where('name','dolvina');
        })->with('user')->get();
        return $artikels;
    }

    //soal4
    //Tampilkan pengumuan yang dibuat oleh user yang membuat galeri dengan galeri id=1
    public function a4(){
        $pengumumans=Pengumuman::whereHas('user', function (Builder $query){
            $query->whereHas('galeris', function (Builder $query){
                $query->where ('id', 1);
            });
        })->with('user.galeris')->get();
        return $pengumumans;
    }
    
}
