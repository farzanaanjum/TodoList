<?php

use Illuminate\Http\Request;
use App\ContactUs;
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

Route::get('/', function() {
	return view('index');
});

Route::get('/about', function() {
	return view('about');
});

Route::get('/contact', function() {
	return view('contact');
});


Route::post('/contact', function(Request $request) {

	$name = $request->get('name');
	$email = $request->get('email');
	$message = $request->get('message');

	$contact = new ContactUs;
	$contact->name = $name;
	$contact->email = $email;
	$contact->message = $message;
	$contact->save();

	return redirect('/contact')->with('message', 'Message sent successfully');


});












Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/home/delete/{id}', function($id) {
	

	$contact = Contact::find($id);
	$contact->delete();

	return redirect('/home')->with('status', 'deleted Successfully');
});








