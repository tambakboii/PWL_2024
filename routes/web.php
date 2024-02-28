<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\WelcomeController;




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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/hello',function($name){
//     return 'nama saya '. $name;
// });

Route::get('/post/{post}/comments/{comment}', function($postId, $commentId){
    return 'post ke-'. $postId."komentar ke-:" . $commentId;
});

Route::get('/article/{id}', function($articleId){
    return "artikel halaman ke-". $articleId;
});

Route::get('/user/{name?}',function($name='john'){
    return 'nama saya '. $name;
});

Route::get('/user/profile', function(){
    //
})->name ('profile');

//mambuat controller
Route::get('/hello', [WelcomeController::class,'hello']);

Route::get('/', function () {
    return view('Selamat Datang');
});

Route::get('/hello', function () {
    return 'hello world';
});

Route::get('/world', function () {
    return 'world';
});

Route::get('/selamat', function () {
    return 'Selamat Datang';
});

//resource controller
Route::get('/about', function () {
    return 'NIM : 2241720190' . '<br>' . 'Nama : Athiyan Aqil Muhammad';
});
Route::resource('photos', PhotoController::class);

Route::resource('photos', PhotoController::class)->only([
    'index','show'
]);

Route::resource('photos', PhotoController::class)->except([
    'create','store','update','destroy'
]);

Route::get('/greeting', function(){
    return view('blog.hello',['name'=>'Athiyan']);
});

Route::get('/greeting',[welcomeController::class,
'greeting']);

Route::get('/',[pageController::class,'index']);

Route::get('/about',[pageController::class,'about']);

Route::get('/articles/{id}',[pageController::class,'articles']);