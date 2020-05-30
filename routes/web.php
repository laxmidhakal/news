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

Route::get('/app', function () {
    return view('frontend.main.app');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'Frontend\FrontController@index')->name('mainhome');
Route::get('/archives', 'Frontend\FrontController@publication')->name('archives');
Route::get('/services', 'Frontend\FrontController@document')->name('services');
Route::get('/bookstore', 'Frontend\FrontController@search')->name('bookstore');
Route::get('/search_data', 'Frontend\FrontController@search')->name('search_data');
Route::get('/languagechooser', 'Frontend\FrontController@languagechooser')->name('languagechooser');
Route::get('/publication', 'Frontend\FrontController@publication')->name('publication');
Route::get('/documents', 'Frontend\FrontController@document')->name('document');
Route::get('/search', 'Frontend\FrontController@search')->name('search');
Route::get('/directory', 'Frontend\FrontController@directory')->name('directory');
Route::get('/map', 'Frontend\FrontController@map')->name('map');
Route::get('/contact', 'Frontend\FrontController@contact')->name('contact');
Route::get('/laws-regulation', 'Frontend\FrontController@lawsregulation')->name('laws-regulation');
Route::get('/laws-regulation/cambodia', 'Frontend\FrontController@cambodia')->name('cambodia');
Route::get('/laws-regulation/asean-rules', 'Frontend\FrontController@aseanrules')->name('asean-rules');
Route::get('/laws-regulation/international', 'Frontend\FrontController@international')->name('international');

Route::get('/book/book-store/book-success', 'Frontend\DropdownController@bookSuccess')->name('book-success');
Route::get('/book/book-store/law-book', 'Frontend\DropdownController@lawBook')->name('law-book');
Route::get('/book/book-store/economy-and-management', 'Frontend\DropdownController@economyAndManagement')->name('economy-and-management');
Route::get('/book/book-store/history', 'Frontend\DropdownController@history')->name('history');
Route::get('/book/book-store/general-knowledge', 'Frontend\DropdownController@generalKnowledge')->name('general-knowledge');
Route::get('/book/book-store/high-school-book', 'Frontend\DropdownController@highSchoolBook')->name('high-school-book');

Route::get('/legal-training/voice-rules', 'Frontend\DropdownController@voiceRules')->name('voice-rules');









