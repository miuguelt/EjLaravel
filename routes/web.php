<?php
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;


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
/*
Route::get('/', function () {
    return view('welcome');
});


Route::get('/miruta', function () {
    return 'Hello World';
});
Route::view('/blog', 'blog',['post' => $posts])->name('blog');
Route::get('/blog', function(){
    $posts =[
        ['title'=>'Primer post'],
        ['title'=>'2post'],
        ['title'=>'3post']
    ];
    return view('blog', ['post' => $posts]);
})->name('blog');
*/


Route::view('/', 'welcome')->name('home');
Route::view('/contact', 'contact')->name('contact');
Route::view('/about', 'about')->name('about');

Route::get('/blog', [PostController::class, 'index'])->name('posts.index');

Route::get('/blog/create',[PostController::class,'create'])->name('posts.create');

Route::post('/blog', [PostController::class, 'store'])->name('posts.store');

Route::get('/blog/{post}',[PostController::class,'show'])->name('posts.show');

Route::get('/blog/{post}/edit',[PostController::class,'edit'])->name('posts.edit');

Route::patch('/blog/{post}',[PostController::class,'update'])->name('posts.update');

Route::delete('/blog/{post}',[PostController::class,'destroy'])->name('posts.destroy');






