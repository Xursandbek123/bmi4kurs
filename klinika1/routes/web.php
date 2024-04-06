<?php
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\PageController;







// Route::get('/', function () {
//     return view('index');

    
//     });

// Route::get('/', function () {
//     return view('index');

// });
// Route::get('/welcome', [PageController::class,'welcome']);
Route::get('/', [PageController::class,'index'])->name('index');
Route::get('/about', [PageController::class,'about'])->name('about');
Route::get('/service', [PageController::class,'service'])->name('service');
Route::get('/contact', [PageController::class,'contact'])->name('contact');
Route::get('/appointment', [PageController::class,'appointment'])->name('appointment');
Route::get('/features', [PageController::class,'features'])->name('features');
Route::get('/blog', [PageController::class,'blog'])->name('blog');
Route::get('/team', [PageController::class,'team'])->name('team');
Route::get('/testimonial', [PageController::class,'testimonial'])->name('testimonial');
Route::get('/error', [PageController::class,'error'])->name('error');





// Route::get('/service', function (){
//     return view('service');
// });
// Route::get('/home', function (){
//     return view('index');
// });
// Route::get('/about', function (){
//     return view('about');
// });
// Route::get('/contact', function (){
//     return view('contact');
// });
// Route::get('/appointment', function (){
//     return view('appointment');
// });
// Route::get('/feature', function (){
//     return view('feature');
// });
// Route::get('/blog', function (){
//     return view('blog');
// });
// Route::get('/team', function (){
//     return view('team');
// });
// Route::get('/testimonial', function (){
//     return view('testimonial');
// });
// Route::get('/404', function (){
//     return view('404');
// });
