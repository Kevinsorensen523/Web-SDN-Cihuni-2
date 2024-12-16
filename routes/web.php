<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\KegiatanController;
use App\Http\Controllers\EkskulController;
use App\Http\Controllers\StaffController;
use App\Models\Kegiatan;
use App\Models\Ekskul;
use App\Models\Staff;
use App\Models\Foto;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $kegiatan = Kegiatan::all();
    $ekskul = Ekskul::all();
    $staff = Staff::all();
    return view('index', ["kegiatan" => $kegiatan, "ekskul" => $ekskul, "staff" => $staff]);
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/admin', function () {
    if (Auth::check()) {
        // The user is logged in...
        $kegiatan = Kegiatan::all();
        $ekskul = Ekskul::all();
        $staff = Staff::all();
        return view('admin', ["kegiatan" => $kegiatan, "ekskul" => $ekskul, "staff" => $staff]);
    }
    else {
        return redirect('/login');
    }
});

Route::get('/addPhoto/{tipe}/{id}', function ($tipe, $id) {
    return view('addPhoto', ["tipe" => $tipe, "id" => $id]);
});
Route::post('/addPhoto', function (Request $request) {
    foreach ($request->file("foto") as $foto) {
        $path = $foto->storePublicly('photos', "public");
        $fotoModel = new Foto();
        $fotoModel->path = $path;
        $fotoModel->tipe = $request->tipe;
        $fotoModel->belongsTo = $request->id;
        $fotoModel->save();
    }
    return redirect("/");
});

Route::get('/kegiatan/deletePhoto/{id}', [KegiatanController::class, 'deletePhoto']);
Route::post('/kegiatan/deletePhoto/', [KegiatanController::class, 'deletePhotoPost']);
Route::resource('kegiatan', KegiatanController::class);

Route::get('/ekskul/deletePhoto/{id}', [EkskulController::class, 'deletePhoto']);
Route::post('/ekskul/deletePhoto/', [EkskulController::class, 'deletePhotoPost']);
Route::resource('ekskul', EkskulController::class);

Route::resource('staff', StaffController::class);
require __DIR__.'/auth.php';