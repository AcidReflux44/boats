<?php

use App\Boat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input as input;
use App\User;
// use App\Http\Controllers;

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

// Route::get('/', function () {
    // return view('view1');
// });

// Route::get('/home', 'HomeController@index');
Route::auth();
Route::get('/', function () {
    return view('accueil');
});


Route::get('{n}', function ($n) {
    return "Je suis la page $n";
})->where('n', '[1-3]');


Route::get('article/{n}', 'ArticleController@show')->where('n', '[0-9]+');

Route::get('facture/{n}', function ($n) {
    return view('facture')->with('numero',$n);
})->where('n', '[0-9]+');

Route::get('accueil', function () {
    return view('accueil');
});

Route::get('contact', function () {
    return view('contact');
});

Route::get('lister', function () {
    return view('lister');
});

Route::get('plusInfo', function () {
    return view('plusInfo');
});

Route::resource('boats', 'BoatsController');

Route::resource('profil', 'ProfilController');

Route::get('profil', function() {
    return view('profil')
        ->with('boats', Auth::user()->boats);
});

Route::get('edit-profil', function() {
    return view('profil')
        ->with('boats', Auth::user()->boats)
        ->with('edit', 1);
});

Route::get('profil/edit', function() {
    return view('profil')
        ->with('boats', Auth::user()->boats)
        ->with('edit', 1);
});

Route::post('save-profil', function(Request $request) {

    Auth::user()->update($request->all());
    return redirect('profil');
});

Auth::routes();
Route::get('/logout', function(){
   Auth::logout();
   return Redirect::to('login');
});
/*pour le changement de mot de passe*/
Route::get('/changePassword', function(){
	return view('auth.changePassword');
});
Route::post('change/password', function(){
	$user=User::find(Auth::user()->id);
	if(Hash::check(Input::get('passwordold'), $user['password']) && Input::get('password')==Input::get('password-confirm')) {
		$user->password=bcrypt(Input::get('password'));
		$user->save();
		return back()->with('status', 'Password Changed');
	}else{
		return back()->with('status', 'Password NOT changed');
	}
});
/*fin changement mot de passe*/

Route::get('/home', 'HomeController@index')->name('home');

Route::view('reservation', 'reservation');
Route::resource('places', 'PlaceController');