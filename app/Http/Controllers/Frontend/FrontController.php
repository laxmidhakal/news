<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FrontController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('frontend.main.slider');
    }

    public function archives()
    {
        return view('frontend.archives.archives');
    }

    public function services()
    {
        return view('frontend.services.services');
    }

    public function bookstore()
    {
        return view('frontend.bookstore.bookstore');
    }

    public function publication()
    {
        return view('frontend.publication.publication');
    }

    public function document()
    {
        return view('frontend.document.document');
    }

    public function search()
    {
        return view('frontend.search.search');
    }

    public function directory()
    {
        return view('frontend.directory.directory');
    }

    public function map()
    {
        return view('frontend.map.map');
    }

    public function contact()
    {
        return view('frontend.contact.contact');
    }

    public function lawsregulation()
    {
        return view('frontend.laws-regulation.laws-regulation');
    }

    public function cambodia()
    {
        return view('frontend.laws-regulation.cambodia');
    }

    public function aseanrules()
    {
        return view('frontend.laws-regulation.asean-rules');
    }

    public function international()
    {
        return view('frontend.laws-regulation.international');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
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
