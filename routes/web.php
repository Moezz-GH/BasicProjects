<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\frontend\AboutController;
use App\Http\Controllers\frontend\ContactController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\IndexController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [UserController::class, 'Index'])->name('index');

Route::get('/about', [AboutController::class, 'index'])->name('frontend.about');

Route::get('/contact_us', [ContactController::class, 'index'])->name('frontend.contact');


Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'AdminDashboard'])->name('admin.dashboard');
    Route::get('admin/logout',[AdminController::class,'AdminDestroy'])->name('admin.logout');
    Route::get('admin/profile',[AdminController::class,'Profile'])->name('admin.profile');
    Route::get('admin/edit/profile',[AdminController::class,'EditProfile'])->name('edit.profile');
    Route::post('admin/store/profile',[AdminController::class,'StoreProfile'])->name('store.profile');

});

Route::middleware(['auth', 'role:user'])->group(function () {
    Route::get('/dashboard', [UserController::class, 'Profile'])->name('dashboard');
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


