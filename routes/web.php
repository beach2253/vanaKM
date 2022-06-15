<?php

use App\Models\Document;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    // ddd($User);
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/document', function () {
    return view('document.index',[
        'documents'=>Document::all(),
    ]);
})->middleware(['auth'])->name('document');

Route::get('/document/{documents}', function (Document $documents) {
    return view('document.show',[
        'document' => Document::find($documents['id'])
    ]);
})->middleware(['auth'])->name('documentShow');


Route::get('/create', function () {
    return view('document.create');
})->middleware(['auth'])->name('documentCreate');

