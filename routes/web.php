<?php

// use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController; //作成したUsersControllerを使えるように
use App\Http\Controllers\ReportsController; //作成したReportsControllerを使えるように

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
Route::get('/', [ReportsController::class, 'index']);
// Route::get('/', function(){
//     return view('dashboard');
// });

Route::get('/dashboard', [ReportsController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::resource('users', UsersController::class, ['only' => ['index', 'show','edit']]);
    // Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    // Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    // Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::resource('reports', ReportsController::class, ['only' => ['store','edit','create','update', 'destroy']]);
    
     Route::prefix('users/{id}')->group(function () {
        Route::post('update', [UsersController::class, 'update'])->name('user.update');
    });
});

require __DIR__.'/auth.php';
