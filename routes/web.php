<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Backend\ProfileController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Backend\Setup\StudentClassController;
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
    return view('auth.login');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.index');
    })->name('dashboard');
});

Route::get('/admin/logout', [AdminController::class, 'Logout'])->name('admin.logout');

Route::prefix('users')->group(function(){
    Route::get('/view', [UserController::class, 'UserView'])->name('user.view');
    Route::get('/add', [UserController::class, 'AddUser'])->name('user.add');
    Route::post('/store', [UserController::class, 'StoreUser'])->name('user.store');
    Route::get('/edit{id}', [UserController::class, 'EditUser'])->name('user.edit');
    Route::post('/update{id}', [UserController::class, 'UpdateUser'])->name('user.update');
    Route::get('/delete{id}', [UserController::class, 'DeleteUser'])->name('user.delete');
});

Route::prefix('profiles')->group(function(){
    Route::get('/view', [ProfileController::class, 'ProfileView'])->name('profile.view');
    Route::get('/edit', [ProfileController::class, 'ProfileEdit'])->name('profile.edit');
    Route::post('/store', [ProfileController::class, 'ProfileStore'])->name('profile.store');
    Route::get('/password/view', [ProfileController::class, 'PasswordView'])->name('password.view');
    Route::post('/password/update', [ProfileController::class, 'PasswordUpdate'])->name('password.update');
});

Route::prefix('setups')->group(function(){
    Route::get('/student/class/view', [StudentClassController::class, 'StudentView'])->name('student.class.view');
    Route::get('/student/class/add', [StudentClassController::class, 'StudentClassAdd'])->name('student.class.add');
    Route::get('/student/class/edit{id}', [StudentClassController::class, 'StudentClassEdit'])->name('student.class.edit');
    Route::get('/student/class/delete{id}', [StudentClassController::class, 'StudentClassDelete'])->name('student.class.delete');
    Route::post('/student/class/store', [StudentClassController::class, 'StudentClassStore'])->name('student.class.store');
    Route::post('/student/class/update{id}', [StudentClassController::class, 'StudentClassupdate'])->name('student.class.update');
});