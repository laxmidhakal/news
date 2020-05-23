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

Route::get('/verdict/supreme-court', 'Frontend\DropdownController@supremeCourt')->name('supreme-court');
Route::get('/verdict/cambodia/supreme-court/criminal-law', 'Frontend\DropdownController@criminalLaw')->name('criminal-law');
Route::get('/verdict/cambodia/supreme-court/civil-parties', 'Frontend\DropdownController@civilParties')->name('civil-parties');
Route::get('/verdict/cambodia/the-court-of-appeals', 'Frontend\DropdownController@courtAppeals')->name('the-court-of-appeals');
Route::get('/verdict/cambodia/the-court-of-appeals/criminal-law', 'Frontend\DropdownController@appealscriminallaw')->name('the-court-of-appeals-criminal-law');
Route::get('/verdict/cambodia/the-court-of-appeals/civil-parties', 'Frontend\DropdownController@appealscivilParties')->name('the-court-of-appeals-civil-parties');
Route::get('/verdict/trial', 'Frontend\DropdownController@trial')->name('trial');
Route::get('/verdict/cambodia/trial/criminal-law', 'Frontend\DropdownController@trialcriminallaw')->name('trialcriminal-law');
Route::get('/verdict/cambodia/trial/civil-parties', 'Frontend\DropdownController@trialcivilparties')->name('trialcivil-parties');
Route::get('/verdict/cambodia/the-arbitration-council', 'Frontend\DropdownController@theArbitrationCouncil')->name('the-arbitration-council');
Route::get('/verdict/cambodia/the-khmer-rouge-tribunal', 'Frontend\DropdownController@theKhmerRougeTribunal')->name('the-khmer-rouge-tribunal');
Route::get('/verdict/cambodia/constitutional-council', 'Frontend\DropdownController@constitutionalCouncil')->name('constitutional-council');


Route::get('/verdict/international/international-court-of-justice', 'Frontend\DropdownController@internationalCourtofJustice')->name('international-court-of-justice');
Route::get('/verdict/international/sea-court', 'Frontend\DropdownController@seaCourt')->name('sea-court');
Route::get('/verdict/international/united-nations-human-rights-committee', 'Frontend\DropdownController@unitedNationsHumanRightsCommittee')->name('united-nations-human-rights-committee');
Route::get('/verdict/international/international-criminal-court', 'Frontend\DropdownController@internationalCriminalCourt')->name('international-criminal-court-of-justice');
Route::get('/verdict/international/canadian-human-rights-tribunal', 'Frontend\DropdownController@canadianHumanRightsTribunal')->name('canadian-human-rights-tribunal');
Route::get('/verdict/international/bosnia-herzegovina-human-rights-court', 'Frontend\DropdownController@bosniaHerzegovinaHumanRightsCourt')->name('bosnia-herzegovina-human-rights-court');

Route::get('/books-magazines/books/law', 'Frontend\DropdownController@booklaw')->name('booklaw');
Route::get('/books-magazines/books/human-rights', 'Frontend\DropdownController@bookhumanRights')->name('bookhuman-rights');
Route::get('/books-magazines/books/international-law', 'Frontend\DropdownController@bookinternationalLaw')->name('bookinternational-law');
Route::get('/books-magazines/books/non-contractual-liability', 'Frontend\DropdownController@booknonContractualLiability')->name('booknon-contractual-liability');
Route::get('/books-magazines/books/criminal-law', 'Frontend\DropdownController@bookcriminalLaw')->name('bookcriminal-law');
Route::get('/books-magazines/books/international-humanitarian-law', 'Frontend\DropdownController@bookinternationalHumanitarianLaw')->name('bookinternational-humanitarian-law');
Route::get('/books-magazines/books/marine-law', 'Frontend\DropdownController@bookmarineLaw')->name('bookmarine-law');
Route::get('/books-magazines/books/international-private-law', 'Frontend\DropdownController@bookinternationalPrivateLaw')->name('bookinternational-private-law');

Route::get('/books-magazines/document/human-rights', 'Frontend\DropdownController@documenthumanRights')->name('documenthuman-rights');
Route::get('/books-magazines/document/international-law', 'Frontend\DropdownController@documentinternationalLaw')->name('documentinternational-law');
Route::get('/books-magazines/document/international-humanitarian-law', 'Frontend\DropdownController@documentinternationalHumanitarianLaw')->name('documentinternational-humanitarian-law');
Route::get('/books-magazines/document/criminal-justice', 'Frontend\DropdownController@documentcriminalJustice')->name('documentcriminal-justice');
Route::get('/books-magazines/document/marine-law', 'Frontend\DropdownController@documentmarineLaw')->name('documentmarine-law');
Route::get('/books-magazines/document/international-private-law', 'Frontend\DropdownController@documentinternationalPrivateLaw')->name('documentinternational-private-law');


Route::get('/books-magazines/magazine', 'Frontend\DropdownController@magazines')->name('magazines');
Route::get('/books-magazines/list-of-research-files-relevant-to-cambodian-law', 'Frontend\DropdownController@listofResearchfilesRelevanttoCabodianlaw')->name('list-of-research-files-relevant-to-cambodian-law');
Route::get('/books-magazines/list-of-treaties-of-cambodia-as-a-party', 'Frontend\DropdownController@listofTreatiesofCambodiaasaparty')->name('list-of-treaties-of-cambodia-as-a-party');
Route::get('/books-magazines/law-dictionary', 'Frontend\DropdownController@lawDictionary')->name('law-dictionary');



Route::get('/legal-training/institutes-and-universities', 'Frontend\DropdownController@institutesAndUniversities')->name('institutes-and-universities');
Route::get('/legal-training/center', 'Frontend\DropdownController@center')->name('center');
Route::get('/legal-training/short-courses', 'Frontend\DropdownController@shortCourses')->name('short-courses');
Route::get('/legal-training/information-on-conferences', 'Frontend\DropdownController@informationConferences')->name('information-on-conferences');
Route::get('/legal-training/video-presentations', 'Frontend\DropdownController@videoPresentations')->name('video-presentations');


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

Route::get('/the-key-to-success/successful-statements', 'Frontend\DropdownController@successfullStatements')->name('successfull-statements');
Route::get('/the-key-to-success/successful-personal-interviews', 'Frontend\DropdownController@successfullPersonalInterviews')->name('successfull-personal-interviews');
Route::get('/the-key-to-success/personal-profile-success-in-the-legal-field', 'Frontend\DropdownController@personalProfileSuccessintheLegalField')->name('personal-profile-success-in-the-legal-field');
Route::get('/the-key-to-success/recreate-the-law', 'Frontend\DropdownController@recreateTheLaw')->name('recreate-the-law');


Route::get('/legal-training/voice-rules', 'Frontend\DropdownController@voiceRules')->name('voice-rules');









