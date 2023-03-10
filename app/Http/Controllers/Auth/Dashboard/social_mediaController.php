<?php

namespace App\Http\Controllers\Auth\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Toastr;
use App\Models\Auth\Social_media;
class social_mediaController extends Controller
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
       return view('auth.page.social_media.create_socialMedia');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    { 
      $social_media = new Social_media;
      $social_media->facebook = $request->facebook;
      $social_media->twitter = $request->twitter;
      $social_media->google = $request->google;
      $social_media->intagram = $request->intagram;
      $save = $social_media->save();
      if($save){
      Toastr::success('Social Media create successfully', '', ["positionClass" => "toast-top-center"]);
      }
      else{
         Toastr::warning('Something is wrong', '', ["positionClass" => "toast-top-center"]);
      }
      
      return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {  
        $social_media = Social_media::latest()->get();
        return view('auth.page.social_media.manage_socialMedia',compact('social_media'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $social_media = Social_media::find($id);
      return view('auth.page.social_media.edit_socialMedia',compact('social_media'));
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
        $social_media = Social_media::find($id);
        $social_media->facebook = $request->facebook;
        $social_media->twitter = $request->twitter;
        $social_media->google = $request->google;
        $social_media->intagram = $request->intagram;
        $save = $social_media->save();
        if($save){
            Toastr::success('Social Media update successfully', 'ID'.'  '.$social_media->id, ["positionClass" => "toast-top-center"]);
        }
        else{
            Toastr::warning('Something is wrong', '', ["positionClass" => "toast-top-center"]);
        }
         return redirect()->route('show_socialMedia');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $social_media = Social_media::find($id);
        $social_media->delete();
        if($social_media){
            Toastr::success('Social Media delete successfully', 'ID'.'  '.$social_media->id, ["positionClass" => "toast-top-center"]);
        }
        else{
            Toastr::warning('Something is wrong', '', ["positionClass" => "toast-top-center"]);
        }
         return redirect()->route('show_socialMedia');
    }
}
