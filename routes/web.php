<?php

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
Route::get('/upload',function ()
{
	return view('upload.create');
});	
// use Carbon\Carbon;
Route::post('/upload',function ()
{
	// dd(request()->file('image'));
	// $time=Carbon::now();
	$time="2017-09-09 10:12:21";
	$file = request()->file('image');
	$ext = $file->guessClientExtension();
	// $ext = $file->extension();
	$path = "hola".'/'."mundo";
	$imageName = str_random(10).".".$ext;
	// $file->storeAs($path,$imageName ,'public');
	// $file->storeAs('images/','image.'.$ext);
	// request()->file('image')->store('images');
	 request()->file('image')->move(public_path('images'), $imageName);
	return back();
});