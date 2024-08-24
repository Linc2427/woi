<?php

use Illuminate\Support\Facades\Route;
use App\Models\Perusahaan;
Route::get('/', function () {
    $list = Perusahaan::all();
    return view('home', ['user'=>'Miqdad', 'list'=>$list]);
});

Route::get('/job-detail/{id}', function ($id) {
    $detail = Perusahaan::find($id);
    return view('job-detail', ['detail'=>$detail]);
});
