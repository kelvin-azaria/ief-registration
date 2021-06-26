<?php

use App\Http\Controllers\ContestantController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::resource('contestant', ContestantController::class)->only(['create', 'store']);
Route::get('/contestant', [ContestantController::class, 'show'])->name('contestant.success');

Route::resource('dashboard', DashboardController::class)->only(['show']);

Auth::routes();

Route::get('download/{filename}', function($filename)
{
    // Check if file exists in app/storage/file folder
    $file_path = 'storage/file/'. $filename;
    if (file_exists($file_path)){
        // Send Download
        return Response::download($file_path, $filename, [
            'Content-Length: '. filesize($file_path)
        ]);
    }
    else{
        return redirect()->route('home')->with('alert', 'Mohon maaf file tidak tersedia. Silahkan hubungi pihak panitia');
    }
})
->where('filename', '[A-Za-z0-9\-\_\.]+')->name('download.booklet');