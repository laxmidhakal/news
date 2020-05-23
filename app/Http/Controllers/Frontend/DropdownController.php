<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DropdownController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function humanRights()
    {
        return view('frontend.laws-regulation.asean-rules.human-rights');
    }

    public function nonContractualLiability()
    {
        return view('frontend.laws-regulation.asean-rules.non-contractual-liability');
    }


    public function internationalHumanitarianLaw()
    {
        return view('frontend.laws-regulation.asean-rules.international-humanitarian-law');
    }

    public function criminalJustice()
    {
        return view('frontend.laws-regulation.asean-rules.criminal-justice');
    }

    public function marineLaw()
    {
        return view('frontend.laws-regulation.asean-rules.marine-law');
    }

    public function internationalPrivateLaw()
    {
        return view('frontend.laws-regulation.asean-rules.international-private-law');
    }

    public function asean()
    {
        return view('frontend.verdict.asean');
    }

    public function cambodia()
    {
        return view('frontend.verdict.cambodia');
    }

    public function international()
    {
        return view('frontend.verdict.international');
    }

    public function brunei()
    {
        return view('frontend.verdict.asean.brunei');
    }

    public function malaysia()
    {
        return view('frontend.verdict.asean.malaysia');
    }

    public function philippines()
    {
        return view('frontend.verdict.asean.philippines');
    }

    public function singapore()
    {
        return view('frontend.verdict.asean.singapore');
    }

    public function theArbitrationCouncil()
    {
        return view('frontend.verdict.cambodia.the-arbitration-council');
    }

    public function theKhmerRougeTribunal()
    {
        return view('frontend.verdict.cambodia.the-khmer-rouge-tribunal');
    }

    public function constitutionalCouncil()
    {
        return view('frontend.verdict.cambodia.constitutional-council');
    }


    public function supremeCourt()
    {
        return view('frontend.verdict.cambodia.singapore');
    }

    public function criminalLaw()
    {
        return view('frontend.verdict.cambodia.supreme-court.criminal-law');
    }

    public function civilParties()
    {
        return view('frontend.verdict.cambodia.supreme-court.civil-parties');
    }

    public function courtAppeals()
    {
        return view('frontend.verdict.cambodia.singapore');
    }

    public function appealscriminallaw()
    {
        return view('frontend.verdict.asean.singapore');
    }

    public function appealscivilParties()
    {
        return view('frontend.verdict.asean.singapore');
    }


    public function internationalCourtofJustice()
    {
        return view('frontend.verdict.international.international-court-of-justice');
    }

    public function seaCourt()
    {
        return view('frontend.verdict.international.sea-court');
    }

    public function unitedNationsHumanRightsCommittee()
    {
        return view('frontend.verdict.international.united-nations-human-rights-committee');
    }

    public function internationalCriminalCourt()
    {
        return view('frontend.verdict.international.international-criminal-court');
    }

    public function canadianHumanRightsTribunal()
    {
        return view('frontend.verdict.international.canadian-human-rights-tribunal');
    }

    public function bosniaHerzegovinaHumanRightsCourt()
    {
        return view('frontend.verdict.international.bosnia-herzegovina-human-rights-court');
    }

    public function magazines()
    {
        return view('frontend.books-magazines.magazine');
    }

    public function listofResearchfilesRelevanttoCabodianlaw()
    {
        return view('frontend.books-magazines.list-of-research-files-relevant-to-cambodian-law');
    }

    public function listofTreatiesofCambodiaasaparty()
    {
        return view('frontend.books-magazines.list-of-treaties-of-cambodia-as-a-party');
    }

    public function lawDictionary()
    {
        return view('frontend.books-magazines.law-dictionary');
    }

    public function trialcriminallaw()
    {
        return view('frontend.verdict.cambodia.trial.criminal-law');
    }

    public function trialcivilparties()
    {
        return view('frontend.verdict.cambodia.trial.civil-parties');
    }

    public function booklaw()
    {
        return view('frontend.books-magazines.books.law');
    }

    public function bookhumanRights()
    {
        return view('frontend.books-magazines.books.human-rights');
    }

    public function bookinternationalLaw()
    {
        return view('frontend.books-magazines.books.international-law');
    }

    public function booknonContractualLiability()
    {
        return view('frontend.books-magazines.books.non-contractual-liability');
    }

    public function bookcriminalLaw()
    {
        return view('frontend.books-magazines.books.criminal-law');
    }

    public function bookinternationalHumanitarianLaw()
    {
        return view('frontend.books-magazines.books.international-humanitarian-law');
    }

    public function bookmarineLaw()
    {
        return view('frontend.books-magazines.books.marine-law');
    }

    public function bookinternationalPrivateLaw()
    {
        return view('frontend.books-magazines.books.international-private-law');
    }

    public function documenthumanRights()
    {
        return view('frontend.books-magazines.document.human-rights');
    }

    public function documentinternationalLaw()
    {
        return view('frontend.books-magazines.document.international-law');
    }

    public function documentinternationalHumanitarianLaw()
    {
        return view('frontend.books-magazines.document.international-humanitarian-law');
    }

    public function documentcriminalJustice()
    {
        return view('frontend.books-magazines.document.criminal-law');
    }

    public function documentmarineLaw()
    {
        return view('frontend.books-magazines.document.marine-law');
    }

    public function documentinternationalPrivateLaw()
    {
        return view('frontend.books-magazines.document.international-private-law');
    }

    public function jobInternships()
    {
        return view('frontend.internship');
    }

    public function jobInternshipsIntern()
    {
        return view('frontend.legal-training.voice-rules');
    }

    public function jobAnnouncement()
    {
        return view('frontend.jobs-internships.job-announcement');
    }

    public function associationofLegalProfessionals()
    {
        return view('frontend.jobs-internships.association-of-legal-professionals');
    }

    public function internshipCambodia()
    {
        return view('frontend.jobs-internships.cambodia');
    }

    public function internshipInternational()
    {
        return view('frontend.jobs-internships.international');
    }

    public function institutesAndUniversities()
    {
        return view('frontend.legal-training.institutes-and-universities');
    }

    public function center()
    {
        return view('frontend.legal-training.center');
    }

    public function shortCourses()
    {
        return view('frontend.legal-training.short-courses');
    }

    public function informationConferences()
    {
        return view('frontend.legal-training.information-on-conferences');
    }

    public function videoPresentations()
    {
        return view('frontend.legal-training.video-presentations');
    }

    public function bookSuccess()
    {
        return view('frontend.book-store.book-success');
    }

    public function lawBook()
    {
        return view('frontend.book-store.law-book');
    }

    public function economyAndManagement()
    {
        return view('frontend.book-store.economy-and-management');
    }

    public function history()
    {
        return view('frontend.book-store.history');
    }

    public function generalKnowledge()
    {
        return view('frontend.book-store.general-knowledge');
    }

    public function highSchoolBook()
    {
        return view('frontend.book-store.high-school-book');
    }

    public function successfullStatements()
    {
        return view('frontend.the-key-to-success.successful-statements');
    }

    public function successfullPersonalInterviews()
    {
        return view('frontend.the-key-to-success.successful-personal-interviews');
    }

    public function personalProfileSuccessintheLegalField()
    {
        return view('frontend.the-key-to-success.personal-profile-success-in-the-legal-field');
    }

    public function recreateTheLaw()
    {
        return view('frontend.the-key-to-success.recreate-the-law');
    }


    public function voiceRules()
    {
        return view('frontend.legal-training.voice-rules');
    }

    
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
