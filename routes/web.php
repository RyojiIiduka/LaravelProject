<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\LogMiddleware;

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

Route::get('sample', function () {
    return view('sample');
});

Route::get('hello', 'HelloController@view');
Route::get('hello/list', 'HelloController@list');

Route::get('book/list', 'BookController@list');

Route::get('view', 'ViewController@master');
Route::get('view/comp', 'ViewController@comp');
Route::get('view/comp2', 'ViewController@comp2');

Route::get('ctrl/plain', 'CtrlController@plain');
Route::get('ctrl/outJson', 'CtrlController@outJson');
Route::get('ctrl/outFile', 'CtrlController@outFile');
Route::get('ctrl/form', 'CtrlController@form');
Route::post('ctrl/result', 'CtrlController@result');
Route::get('ctrl/middle', 'CtrlController@middle')
    ->middleware(LogMiddleware:: class  );

Route::get('state/cookie', 'StateController@Cookie');

Route::get('record/find', 'RecordController@find');
Route::get('record/where', 'RecordController@where');