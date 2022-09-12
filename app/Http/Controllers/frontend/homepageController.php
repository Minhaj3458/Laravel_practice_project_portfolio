<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Auth\Slider;
use App\Models\Auth\About;
use App\Models\Auth\Skill;
use App\Models\Auth\Portfolio\Portfolio_experience1;
use App\Models\Auth\Portfolio\Portfolio_experience2;
use App\Models\Auth\Portfolio\Portfolio_experience3;
use App\Models\Auth\Work_experience;
use App\Models\Auth\Education;
use App\Models\Auth\Reference;
use App\Models\Auth\Social_media;
class homepageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $slider = Slider::latest()->take(1)->get();
      $about = About::latest()->take(1)->get();
      $skill = Skill::latest()->take(1)->get();
      $social_media = Social_media::latest()->take(1)->get();
      $portfolio_experience1 = Portfolio_experience1::latest()->take(4)->get();
      $portfolio_experience2 = Portfolio_experience2::latest()->take(4)->get();
      $portfolio_experience3 = Portfolio_experience3::latest()->take(4)->get();
      $work_experience = Work_experience::latest()->take(3)->get();
      $education = Education::latest()->take(3)->get();
      $reference = Reference::latest()->take(5)->get();
      return view('frontend_page.home',compact('slider','about','skill','portfolio_experience1','portfolio_experience2','portfolio_experience3','work_experience','education','reference','social_media')); 
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
