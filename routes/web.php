<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Home;

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

Route::get('/', [Home::class, 'home'])->name('home-page');
Route::get('portfolio/', function() {
    return view('portfolio');
})->name('portfolio-page');
Route::get('about/{username}/{age}', function ($username, $age) {
    return view('about', ['un'=>$username, 'age'=>$age]);
});
Route::get('setting/', function() {
    return redirect('');
});