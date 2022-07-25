<?php

use App\Models\Document;
use App\Models\RegisterDoc;
use Illuminate\Support\Facades\Route;
use App\http\controllers\DocumentController;
use App\Http\Controllers\FileUploadController;

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
        'documents'=>RegisterDoc::all(),
    ]);
})->middleware(['auth'])->name('document');

Route::get('/documents/{documents}', function ($documents) {
    return view('document.show',[
        'document' => RegisterDoc::where('Doc_Name',$documents)->get()
    ]);
})->middleware(['auth'])->name('documentShow');


Route::get('/document1/create', function () {
    return view('document.create');
})->middleware(['auth'])->name('documentCreate');


Route::post('/document/create',  [DocumentController::class,'create'] )->name('AddDocument');

// TEST UPLOAD 
Route::get('file-upload', [FileUploadController::class, 'index']);
Route::post('store', [FileUploadController::class, 'store']);