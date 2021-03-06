<?php

use App\Contact;
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

// Route for contact
Route::get('/', function () {
    return view('welcome');
});

Route::get('/contacts', 'ContactController@index')->name('contacts.index');
Route::get('/contacts/create', 'ContactController@create')->name('contacts.create');
Route::post('/contacts', 'ContactController@store')->name('contacts.store');
Route::get('/contacts/{contact}', 'ContactController@show')->name('contacts.show');
Route::get('/contacts/{contact}/edit', 'ContactController@edit')->name('contacts.edit');
Route::put('/contacts/{contact}', 'ContactController@update')->name('contacts.update');
Route::delete('/contacts/{contact}', 'ContactController@destroy')->name('contacts.destroy');

