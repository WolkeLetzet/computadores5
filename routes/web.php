<?php
use App\Http\Controllers\ComputerController;
use App\Models\Computer;
use Illuminate\Support\Facades\Route;

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

Route::get('/',function(){
   return redirect('computers');
});

Route::resource('computers', 'App\Http\Controllers\ComputerController');

Route::get('computers/create', [ComputerController::class,'create'] )->name('computer-create');

