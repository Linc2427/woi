<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Perusahaan extends Model
{
    protected $table = 'perusahaan';
    protected $fillable = ['nama_perusahaan','lokasi','posisi'];
    public static function find($id){
        $detail = self::where('id', $id)->first();
        return $detail;
    }
}
