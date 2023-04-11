<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\BookPropertyController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\BotManController;



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
Route::match(['get', 'post'], 'botman', [BotManController::class, 'handle']);

ROUTE::get('properti',function(){
return view('property_single');
});

ROUTE::get('office_spaces',function(){
    return view('office_spaces');
    });
Route::controller(LandingPageController::class)->group(function   (){
    Route::get('home','home');
    Route::get('about','about');
    Route::get('blog','blog');
    Route::get('dashboard','dashboard');
    Route::get('propert','property_single');
    
    });

Route::get('/', function () {
    return view('home');
})->name('home');

// Route::get('home', function () {
//     return view('home');
// })->name('index');

// Route::get('about', function () {
//     return view('about');
// })->name('about');

// Route::get('property_list', function () {
//     return view('property_single');
// })->name('property_list');

// Route::get('blog', function () {
//     return view('blog');
// })->name('blog');

// Route::get('demo', function () {
//     return view('auth/login');
// })->name('demo');

Route::get('/dashboard',[DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::post('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware('auth')->group(function () {
    Route::get('/property', [PropertyController::class, 'index'])->name('property.index');
    Route::post('/property', [PropertyController::class, 'store'])->name('property.store');
    Route::post('/bookproperty', [BookPropertyController::class, 'store'])->name('bookproperty.store');
    Route::patch('/property', [PropertyController::class, 'update'])->name('property.update');
    Route::delete('/property', [PropertyController::class, 'destroy'])->name('property.destroy');
});

require __DIR__.'/auth.php';