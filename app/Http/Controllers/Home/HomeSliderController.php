<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\HomeSlide;
use Image;


class HomeSliderController extends Controller
{
    public function HomeSlider(){

        $homeslide = HomeSlide::latest()->get();
        return view('admin.home_slide.home_slide_all',compact('homeslide'));

     } // End Method 

     public function AddHomeSlide(){
        return view('admin.home_slide.home_slide_add');
    }// End Method

    public function StoreHomeSlide(Request $request){

       
        $slide_id = $request->id;

        if ($request->file('home_slide')) {
            $image = $request->file('home_slide');
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();  // 3434343443.jpg

            Image::make($image)->resize(636,852)->save('upload/home_slide/'.$name_gen);
            $save_url = 'upload/home_slide/'.$name_gen;

            HomeSlide::insert([
                'title' => $request->title,
                'short_title' => $request->short_title,
                'video_url' => $request->video_url,
                'home_slide' => $save_url,

            ]); 
                $notification = array(
                'message' => 'Home Slide add with Image Successfully', 
                'alert-type' => 'success'
            );

            return redirect()->back()->with($notification);

        } 

   }// End Method

   public function EditHomeSlide($id){

        $homeslide = HomeSlide::findOrFail($id);
        return view('admin.home_slide.home_slide_edit',compact('homeslide'));

    } // End Method

    public function UpdateSlider(Request $request){

        //dd($request);
        $slide_id = $request->id;

        if ($request->file('home_slide')) {
            $image = $request->file('home_slide');
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();  // 3434343443.jpg

            Image::make($image)->resize(636,852)->save('upload/home_slide/'.$name_gen);
            $save_url = 'upload/home_slide/'.$name_gen;

            HomeSlide::findOrFail($slide_id)->update([
                'title' => $request->title,
                'short_title' => $request->short_title,
                'video_url' => $request->video_url,
                'home_slide' => $save_url,

            ]); 
            $notification = array(
            'message' => 'Home Slide Updated with Image Successfully', 
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);

        } else{

            HomeSlide::findOrFail($slide_id)->update([
                'title' => $request->title,
                'short_title' => $request->short_title,
                'video_url' => $request->video_url,  

            ]); 
            $notification = array(
            'message' => 'Home Slide Updated without Image Successfully', 
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);

        } // end Else

    } // End Method 






}