<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\SendEmailController;
use App\Http\Controllers\LocalizationController;

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
    return view('index');
});


Route::get('/services', function () {
    return view('services');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/about', function () {
    return view('about');
});


Route::get('/{lang?}', function ($lang="en") {
    App::setlocale($lang);
    return view('index');
});


Route::get('/services/{lang?}', function ($lang="en") {
    App::setlocale($lang);
    return view('services');
});

Route::get('/contact/{lang?}', function ($lang="en") {
    App::setlocale($lang);
    return view('contact');
});

Route::get('/about/{lang?}', function ($lang="en") {
    App::setlocale($lang);
    return view('about');
});

Route::get('/{lang?}', [ LocalizationController ::class, 'index']);


Route::view('upload', 'upload');

Route::post('upload',[UploadController::class, 'index']);

Route::get('/multiuploads', [UploadController::class, 'uploadForm']);

Route::post('/multiuploads', [UploadController::class, 'uploadSubmit']);

Route::get('/sendemail', [ SendEmailController ::class, 'index']);

Route::post('/sendemail/send', [SendEmailController::class, 'send']);
