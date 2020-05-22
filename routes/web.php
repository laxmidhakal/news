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
    return view('frontend.main.app');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/search_data', 'FrontController@search')->name('search_data');
Route::get('/languagechooser', 'Frontend/FrontController@languagechooser')->name('languagechooser');
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

Route::get('/laws-regulation/asean-rules/human-rights', 'Frontend\DropdownController@humanRights')->name('human-rights');
Route::get('/laws-regulation/asean-rules/non-contractual-liability', 'Frontend\DropdownController@nonContractualLiability')->name('non-contractual-liability');
Route::get('/laws-regulation/asean-rules/international-humanitarian-law', 'Frontend\DropdownController@internationalHumanitarianLaw')->name('international-humanitarian-law');
Route::get('/laws-regulation/asean-rules/criminal-justice', 'Frontend\DropdownController@criminalJustice')->name('criminal-justice');
Route::get('/laws-regulation/asean-rules/marine-law', 'Frontend\DropdownController@marineLaw')->name('marine-law');
Route::get('/laws-regulation/asean-rules/international-private-law', 'Frontend\DropdownController@internationalPrivateLaw')->name('international-private-law');

Route::get('/verdict/asean', 'Frontend\DropdownController@asean')->name('asean');
Route::get('/verdict/cambodia', 'Frontend\DropdownController@cambodia')->name('cambodia');
Route::get('/verdict/international', 'Frontend\DropdownController@international')->name('international');
Route::get('/verdict/asean/brunei', 'Frontend\DropdownController@brunei')->name('brunei');
Route::get('/verdict/asean/malaysia', 'Frontend\DropdownController@malaysia')->name('malaysia');
Route::get('/verdict/asean/philippines', 'Frontend\DropdownController@philippines')->name('philippines');
Route::get('/verdict/asean/singapore', 'Frontend\DropdownController@singapore')->name('singapore');

Route::get('/verdict/international/international-court-of-justice', 'Frontend\DropdownController@internationalCourtofJustice')->name('international-court-of-justice');
Route::get('/verdict/international/sea-court', 'Frontend\DropdownController@seaCourt')->name('sea-court');
Route::get('/verdict/international/united-nations-human-rights-committee', 'Frontend\DropdownController@unitedNationsHumanRightsCommittee')->name('united-nations-human-rights-committee');
Route::get('/verdict/international/international-criminal-court', 'Frontend\DropdownController@internationalCriminalCourt')->name('international-criminal-court-of-justice');
Route::get('/verdict/international/canadian-human-rights-tribunal', 'Frontend\DropdownController@canadianHumanRightsTribunal')->name('canadian-human-rights-tribunal');
Route::get('/verdict/international/bosnia-herzegovina-human-rights-court', 'Frontend\DropdownController@bosniaHerzegovinaHumanRightsCourt')->name('bosnia-herzegovina-human-rights-court');

Route::get('/jobs/jobs-internships', 'Frontend\DropdownController@jobInternships')->name('job-internships');
Route::get('/jobs/jobs-internships/internship', 'Frontend\DropdownController@jobInternshipsIntern')->name('job-internships');
Route::get('/jobs/jobs-internships/job-announcement', 'Frontend\DropdownController@jobAnnouncement')->name('job-announcement');
Route::get('/jobs/jobs-internships/association-of-legal-professionals', 'Frontend\DropdownController@associationofLegalProfessionals')->name('association-of-legal-professionals');
Route::get('/jobs/jobs-internships/cambodia', 'Frontend\DropdownController@internshipCambodia')->name('cambodia');
Route::get('/jobs/jobs-internships/international', 'Frontend\DropdownController@internshipInternational')->name('international');

Route::get('/book/book-store/book-success', 'Frontend\DropdownController@bookSuccess')->name('book-success');
Route::get('/book/book-store/law-book', 'Frontend\DropdownController@lawBook')->name('law-book');
Route::get('/book/book-store/economy-and-management', 'Frontend\DropdownController@economyAndManagement')->name('economy-and-management');
Route::get('/book/book-store/history', 'Frontend\DropdownController@history')->name('history');
Route::get('/book/book-store/general-knowledge', 'Frontend\DropdownController@generalKnowledge')->name('general-knowledge');
Route::get('/book/book-store/high-school-book', 'Frontend\DropdownController@highSchoolBook')->name('high-school-book');

Route::get('/the-key-to-success/successfull-statements', 'Frontend\DropdownController@successfullStatements')->name('successfull-statements');
Route::get('/the-key-to-success/successfull-personal-interviews', 'Frontend\DropdownController@successfullPersonalInterviews')->name('successfull-personal-interviews');
Route::get('/the-key-to-success/personal-profile-success-in-the-legal-field', 'Frontend\DropdownController@personalProfileSuccessintheLegalField')->name('personal-profile-success-in-the-legal-field');
Route::get('/the-key-to-success/recreate-the-law', 'Frontend\DropdownController@recreateTheLaw')->name('recreate-the-law');


Route::get('/legal-training/voice-rules', 'Frontend\DropdownController@voiceRules')->name('voice-rules');









