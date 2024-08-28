<?php

use Illuminate\Support\Facades\Route;
use App\Models\Perusahaan;
use App\Http\Controllers\PerusahaanController;

Route::get('/', function () {
    $list = Perusahaan::all();
    return view('home', ['user' => 'Miqdad', 'list' => $list]);
})->name('home');

Route::get('/job-detail/{id}', function ($id) {
    $detail = Perusahaan::find($id);
    return view('job-detail', ['detail'=>$detail]);
});
// Controller u/ menambahkan pekerjaan yg diapply
Route::get('/perusahaan/create', [PerusahaanController::class, 'create'])->name('perusahaan.create');
Route::post('/perusahaan/store', [PerusahaanController::class, 'store'])->name('perusahaan.store');
Route::delete('/perusahaan/{id}', [PerusahaanController::class, 'destroy'])->name('perusahaan.destroy');
Route::get('/perusahaan/{id}/edit', [PerusahaanController::class, 'edit'])->name('perusahaan.edit');
Route::put('/perusahaan/{id}', [PerusahaanController::class, 'update'])->name('perusahaan.update');
