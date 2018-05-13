<?php
use App\Events\OrderStatusUpdated;
use App\Events\TaskCreated;

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
	//OrderStatusUpdated::dispatch();
    return view('welcome');
});

Route::get('/update', function () {

	OrderStatusUpdated::dispatch();
    //return view('welcome');
});

Route::get('/tasks', function () {
	return \App\Tasks::latest()->pluck('body');
});

Route::post('/tasks', function () {
	$task = \App\Tasks::forceCreate(request(['body']));

	event(
		(new TaskCreated($task))->dontBroadcastToCurrentUser()
	);
});
