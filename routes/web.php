<?php

use Illuminate\Support\Facades\Route;
use App\Models\Perusahaan;
Route::get('/', function () {
    $list = Perusahaan::all();
    return view('home', ['user'=>'Miqdad', 'list'=>$list]);
});
