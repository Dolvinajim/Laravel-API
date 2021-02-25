<?php

namespace App\Http\Controllers;
use App\Http\Controllers\BabSatuContorller;
use Illuminate\Database\Eloquent\Builder;
use App\Models\Pengumuman;
use Illuminate\Http\Request;

class BabDuaController extends Controller
{
    //soal5
    //Tampilkan pengumuan yang dibuat oleh user yang membuat galeri dengan nama ketegori galeri yang diawali dengan a
    public function a5(){
        $pengumumans=Pengumuman::whereHas('user', function (Builder $query){
        $query->whereHas('galeris', function (Builder $query){
        $query->whereHas('kategoriGaleri', function (Builder $query){
        $query->where('nama','like','a%');
                });
            });
        })->with('user.galeris.kategoriGaleri')->get();
        return $pengumumans;
    }

    //soal6
    //Tampilkan pengumuan yang dibuat oleh user yang membuat galeri dan juga membuat berita
    public function a6(){
        $pengumumans=Pengumuman::whereHas('user', function (Builder $query){
            $query->Has('galeris')->orHas('beritas');
        })->count();
        return $pengumumans;
    }
}
