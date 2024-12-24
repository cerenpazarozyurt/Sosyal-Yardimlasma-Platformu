<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KanBagisi\KanBagisiController;
use App\Http\Controllers\Login\LoginController;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\AcilDestek\AcilDestekController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Contact\ContactController;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Auth;
use App\Models\AcilDestek;

Route::get('/', function () {
    return view('welcome');
})->name("welcome");

Route::get('/register', function(){
    return view('register');
})->name('register');


Route::get('/login', function(){
    return view('login');
});

Route::get('/hakkimizda', function(){
    return view('hakkimizda');
});

Route::get('/kanbagisi', function(){
    return view('kanbagisi');
});

Route::get('/afetdestegi', function(){
    $destekler = AcilDestek::all();
    return view('afetdestegi', compact('destekler'));
});

Route::get('/gonullucalisma', function(){
    return view('gonullucalisma');
});

Route::get('/blog', function(){
    return view('blog');
});

Route::get('/acilkan', function(){
    return view('acilkanihtiyaci');
});

Route::get('/destekiste', function(){

    return view('destekiste');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


require __DIR__.'/auth.php';

Route::get('panel/user-list', [UserController::class, 'index']) ->name('panel.user.index');
Route::get('panel/user/edit/{id}', [UserController::class, 'edit']) ->name('panel.user.edit');
Route::post('panel/user/update/{id}', [UserController::class, 'isimMailGuncelle']) ->name('panel.user.update');
Route::post('panel/user/password/{id}', [UserController::class, 'passwordChange']) ->name('panel.user.password');
Route::get('panel/user/delete/{id}', [UserController::class, 'delete']) ->name('panel.user.delete');

Route::get('login', [LoginController::class, 'login'])->name('login');
// Route::post('login', [LoginController::class, 'login'])->name('login');
Route::get('register', [LoginController::class, 'registerPage'])->name('register');
Route::post('register', [LoginController::class, 'register'])->name('register.store');
Route::get('logout', [LoginController::class, 'logout'])->name('logout');

Route::post('/destekiste', [AcilDestekController::class, 'store'])->name('acildestek.store');

Route::post('/acilkan', [KanBagisiController::class, 'store'])->name('kanbagisi.store');
Route::get('/kanbagisi', [KanBagisiController::class, 'index']);
Route::post('/remove-marker', [KanBagisiController::class, 'removeMarker'])->name('removeMarker');

Route::post('/contact-us', [ContactController::class, 'store'])->name('contact.store');