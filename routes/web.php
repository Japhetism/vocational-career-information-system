<?php
use App\Personality;
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
    $personalities = Personality::get();
    if(Auth::guest()){
        return view('generalPages.welcome');
    }else{
        return view('specificPages.home', compact('personalities'));
    }
    
});

Route::get('/admin', 'AdminController@index');

Route::get('/about', 'GeneralPagesController@getAbout')->name('about');

Route::get('/contact', 'GeneralPagesController@getContact')->name('contact');

Route::get('/testInfo', 'GeneralPagesController@getTestInfo')->name('testInfo');

Route::get('/request', 'CareerRequestController@index');

Route::post('/request', 'CareerRequestController@create')->name('requestSubmission');

Route::get('/suggestion', 'SpecificPagesController@getSuggestion')->name('suggestion');

Route::get('/feedback', 'SpecificPagesController@getFeedback');

Route::post('/uploadPersonality', 'PersonalityController@create');

Route::get('/personality/{id}', 'SpecificPagesController@getPersonality')->name('personality');

Route::get('/profile/edit', 'ProfileController@editProfile')->name('editProfile');

Route::post('/profile/edit', 'ProfileController@editProfile')->name('editProfile');

Route::post('/profile/update', 'ProfileController@updateProfile')->name('updateProfile');

Route::get('/profile', 'ProfileController@getProfile')->name('profile');

Route::get('/vocation', 'SpecificPagesController@getVocation');

Route::get('/test', 'SpecificPagesController@getTest');

Route::get('/result', 'SpecificPagesController@getResult');

Route::get('/search', 'SpecificPagesController@getSearch');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
