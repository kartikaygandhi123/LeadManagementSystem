<?php

namespace App\Http\Controllers;

use App\Models\BrandProfile;
use Illuminate\Http\Request;

class BrandProfileController extends Controller
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
     * @param  \App\Models\BrandProfile  $brandProfile
     * @return \Illuminate\Http\Response
     */
    public function show(BrandProfile $brandProfile)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BrandProfile  $brandProfile
     * @return \Illuminate\Http\Response
     */
    public function edit(BrandProfile $brandProfile)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BrandProfile  $brandProfile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BrandProfile $brandProfile)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BrandProfile  $brandProfile
     * @return \Illuminate\Http\Response
     */
    public function destroy(BrandProfile $brandProfile)
    {
        //
    }


    function BrandShow()
    {
        $brand = BrandProfile::get();
        return view('site.brand profile.brandprofile', ['brand' => $brand]);
    }
}
