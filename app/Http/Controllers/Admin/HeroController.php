<?php

namespace App\Http\Controllers\Admin;

use App\Models\Setting;
use App\Models\Language;
use App\Models\Visibility;
use App\Models\Sectiontitle;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HeroController extends Controller
{
    
    public $lang;
    public function __construct()
    {
        $this->lang = Language::where('is_default',1)->first();
    }
    public function index(Request $request){
        
        $lang = Language::where('code', $request->language)->first()->id;
     
        $english_static = Sectiontitle::where('language_id', 1)->orderBy('id', 'DESC')->first();
        $arabic_static = Sectiontitle::where('language_id', 2)->orderBy('id', 'DESC')->first();

        return view('admin.home.hero.static.index', compact('english_static','arabic_static'));
    }

    public function update(Request $request, $id){

     
        $request->validate([
            'hero_title'        => 'required|max:250',
            'hero_sub_title'    => 'required|max:250',
            'hero_text'         => 'required|max:250',
            'ar_hero_title'     => 'required|max:250',
            'ar_hero_sub_title' => 'required|max:250',
            'ar_hero_text'      => 'required|max:250',
            'hero_bg_image'     => 'mimes:jpeg,jpg,png',
            'hero_image'        => 'mimes:jpeg,jpg,png',
        ]);

      
        $en_st = Sectiontitle::where('language_id', 1)->first();
       
        $ar_st = Sectiontitle::where('language_id', 2)->first();
        $ar_st->hero_title = $request->ar_hero_title;
        $ar_st->hero_sub_title = $request->ar_hero_sub_title;
        $ar_st->hero_text = $request->ar_hero_text;
        $ar_st->save();
       
        if($request->hasFile('hero_bg_image')){
            @unlink('assets/front/img/'. $en_st->hero_bg_image);
            $file = $request->file('hero_bg_image');
            $extension = $file->getClientOriginalExtension();
            $hero_bg_image = time().rand().'.'.$extension;
            $file->move('assets/front/img/', $hero_bg_image);

            $en_st->hero_bg_image = $hero_bg_image;
        }

        if($request->hasFile('hero_image')){
            @unlink('assets/front/img/'. $en_st->hero_image);
            $file = $request->file('hero_image');
            $extension = $file->getClientOriginalExtension();
            $hero_image = time().rand().'.'.$extension;
            $file->move('assets/front/img/', $hero_image);

            $en_st->hero_image = $hero_image;
        }

        
        $en_st->hero_title      = $request->hero_title;
        $en_st->hero_sub_title  = $request->hero_sub_title;
        $en_st->hero_text       = $request->hero_text;
        $en_st->hero_f_icon1    = $request->hero_f_icon1;
        $en_st->hero_f_text1    = $request->hero_f_text1;
        $en_st->hero_f_icon2    = $request->hero_f_icon2;
        $en_st->hero_f_text2    = $request->hero_f_text2;
        $en_st->save();

        $notification = array(
            'messege' => 'Static Section Updated successfully!',
            'alert' => 'success'
        );
        return redirect(route('admin.hero.index').'?language='.$this->lang->code)->with('notification', $notification);

    }

    public function herovideo(){
        return view('admin.home.hero.video.index');
    }

    public function herovideo_update(Request $request){

        $setting = Setting::first();
        $visibility = Visibility::first();

        $request->validate([
            'hero_section_video_link' => 'required'
        ]);


        if($request->is_video_hero == 'on'){
            $visibility->is_video_hero = 1;
        }else{
            $visibility->is_video_hero = 0;
        }

        $setting->hero_section_video_link = $request->hero_section_video_link;

        $visibility->save();
        $setting->save();

        $notification = array(
            'messege' => 'Video Info Updated Successfully!',
            'alert' => 'success'
        );
        return redirect()->back()->with('notification', $notification);
       
    }
}
