<?php

namespace App\Http\Controllers\Admin;

use App\Models\Language;
use App\Models\WhySelect;
use App\Models\Sectiontitle;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SectionController extends Controller
{   
    public $lang;
    public function __construct()
    {
        $this->lang = Language::where('is_default',1)->first();
    }

    // Who we are section
    public function w_w_a(Request $request){
        // $request->language = !isset($request->language)?'en':$request->language;
        $lang = Language::where('code', $request->language)->first()->id;
     
        $english_static = Sectiontitle::where('language_id', 1)->orderBy('id', 'DESC')->first();
        $arabic_static = Sectiontitle::where('language_id', 2)->orderBy('id', 'DESC')->first();

        return view('admin.home.who-we-are.index', compact('english_static','arabic_static'));
    }

    // Who we are section update
    public function w_w_a_update(Request $request, $id){

        $request->validate([
            'w_we_are_title' => 'required|max:250',
            'w_we_are_sub_title' => 'required|max:250',
            'w_we_are_text' => 'required',
            'ar_w_we_are_title' => 'required|max:250',
            'ar_w_we_are_sub_title' => 'required|max:250',
            'ar_w_we_are_text' => 'required',
        ]);
        $en_st = Sectiontitle::where('language_id', 1)->first();
        $ar_st = Sectiontitle::where('language_id', 2)->first();

        $en_st->w_we_are_title = $request->w_we_are_title;
        $en_st->w_we_are_sub_title = $request->w_we_are_sub_title;
        $en_st->w_we_are_text = $request->w_we_are_text;
        $en_st->save();
        
        $ar_st->w_we_are_title = $request->ar_w_we_are_title;
        $ar_st->w_we_are_sub_title = $request->ar_w_we_are_sub_title;
        $ar_st->w_we_are_text = $request->ar_w_we_are_text;
        $ar_st->save();

        $notification = array(
            'messege' => 'Who We Are Section Updated successfully!',
            'alert' => 'success'
        );
        return redirect(route('admin.w_w_a').'?language='.$this->lang->code)->with('notification', $notification);

    }

    // About Section
    public function about_section(Request $request){

        
        // $request->language = !isset($request->language)?'en':$request->language;
        $lang = Language::where('code', $request->language)->first()->id;
        
        
        $english_static = Sectiontitle::where('language_id', 1)->orderBy('id', 'DESC')->first();
        $arabic_static = Sectiontitle::where('language_id', 2)->orderBy('id', 'DESC')->first();
        
        return view('admin.home.about.index', compact('english_static','arabic_static'));
    }

    // About section update
    public function about_section_update(Request $request, $id){

        $request->validate([
            'about_title'               => 'required|max:250',
            'about_sub_title'           => 'required|max:250',
            'about_intro_video'         => 'required|max:250',
            'about_experince_yers'      => 'required|numeric',
            'about_text'                => 'required',
            'about_image'               => 'mimes:jpeg,jpg,png',
            'ar_about_title'            => 'required|max:250',
            'ar_about_sub_title'        => 'required|max:250',
            'ar_about_intro_video'      => 'required|max:250',
            'ar_about_experince_yers'   => 'required|numeric',
            'ar_about_text'             => 'required',
        ]);
        
        $en_st = Sectiontitle::where('language_id', 1)->first();
        
        $ar_st = Sectiontitle::where('language_id', 2)->first();
       

        if($request->hasFile('about_image')){
            @unlink('assets/front/img/'. $en_st->about_image);
            $file = $request->file('about_image');
            $extension = $file->getClientOriginalExtension();
            $about_image = time().rand().'.'.$extension;
            $file->move('assets/front/img/', $about_image);

            $en_st->about_image = $about_image;
        }


        $en_st->about_title          = $request->about_title;
        $en_st->about_sub_title      = $request->about_sub_title;
        $en_st->about_intro_video    = $request->about_intro_video;
        $en_st->about_experince_yers = $request->about_experince_yers;
        $en_st->about_text           = $request->about_text;
        $en_st->save();

        $ar_st->about_title = $request->ar_about_title;
        $ar_st->about_sub_title = $request->ar_about_sub_title;
        $ar_st->about_intro_video = $request->ar_about_intro_video;
        $ar_st->about_experince_yers = $request->ar_about_experince_yers;
        $ar_st->about_text = $request->ar_about_text;
        $ar_st->save();
        
        
        $notification = array(
            'messege' => 'About Section Updated successfully!',
            'alert' => 'success'
        );
         return redirect(route('admin.about_section').'?language='.$this->lang->code)->with('notification', $notification);

    }

    // Intro Video Section
    public function intro_video(Request $request){
        
        $lang = Language::where('code', $request->language)->first()->id;
     
        $english_static = Sectiontitle::where('language_id', 1)->orderBy('id', 'DESC')->first();
        $arabic_static = Sectiontitle::where('language_id', 2)->orderBy('id', 'DESC')->first();

        return view('admin.home.intro-video.index', compact('english_static','arabic_static'));
    }

    // Intro Video Section Update
    public function intro_video_update(Request $request, $id){

        $request->validate([
            'video_title'           => 'required|max:250',
            'video_sub_title'       => 'required|max:250',
            'video_text'            => 'required|max:250',
            'video_link'            => 'required',
            'video_content'         => 'required',
            'video_bg_image'        => 'mimes:jpeg,jpg,png',
            'video_image_left'      => 'mimes:jpeg,jpg,png',
            'video_image_right'     => 'mimes:jpeg,jpg,png',
            'video_image'           => 'mimes:jpeg,jpg,png',
            'ar_video_title'        => 'required|max:250',
            'ar_video_sub_title'    => 'required|max:250',
            'ar_video_text'         => 'required|max:250',
            'ar_video_link'         => 'required',
            'ar_video_content'      => 'required',
        ]);

        $st = Sectiontitle::where('language_id', 1)->first();
        
        $ar_st = Sectiontitle::where('language_id', 2)->first();
       

        if($request->hasFile('video_bg_image')){
            @unlink('assets/front/img/'. $st->video_bg_image);
            $file = $request->file('video_bg_image');
            $extension = $file->getClientOriginalExtension();
            $video_bg_image = time().rand().'.'.$extension;
            $file->move('assets/front/img/', $video_bg_image);

            $st->video_bg_image = $video_bg_image;
        }

        if($request->hasFile('video_image_left')){
            @unlink('assets/front/img/'. $st->video_image_left);
            $file = $request->file('video_image_left');
            $extension = $file->getClientOriginalExtension();
            $video_image_left = time().rand().'.'.$extension;
            $file->move('assets/front/img/', $video_image_left);

            $st->video_image_left = $video_image_left;
        }

        if($request->hasFile('video_image_right')){
            @unlink('assets/front/img/'. $st->video_image_right);
            $file = $request->file('video_image_right');
            $extension = $file->getClientOriginalExtension();
            $video_image_right = time().rand().'.'.$extension;
            $file->move('assets/front/img/', $video_image_right);

            $st->video_image_right = $video_image_right;
        }

        if($request->hasFile('video_image')){
            @unlink('assets/front/img/'. $st->video_image);
            $file = $request->file('video_image');
            $extension = $file->getClientOriginalExtension();
            $video_image = time().rand().'.'.$extension;
            $file->move('assets/front/img/', $video_image);

            $st->video_image = $video_image;
        }

        $st->video_title = $request->video_title;
        $st->video_sub_title = $request->video_sub_title;
        $st->video_text = $request->video_text;
        $st->video_link = $request->video_link;
        $st->video_content = $request->video_content;
        $st->save();

        $ar_st->video_title = $request->ar_video_title;
        $ar_st->video_sub_title = $request->ar_video_sub_title;
        $ar_st->video_text = $request->ar_video_text;
        $ar_st->video_link = $request->ar_video_link;
        $ar_st->video_content = $request->ar_video_content;
        $ar_st->save();

        $notification = array(
            'messege' => 'Intor Video Section Updated successfully!',
            'alert' => 'success'
        );
        return redirect(route('admin.intro_video').'?language='.$this->lang->code)->with('notification', $notification);
    }


    // Why Choose us Section
    public function why_chooseus(Request $request){

        // $request->language = !isset($request->language)?'en':$request->language;
    
        $lang = Language::where('code', $request->language)->first()->id;
     
        $english_static = Sectiontitle::where('language_id', 1)->orderBy('id', 'DESC')->first();
        $arabic_static = Sectiontitle::where('language_id', 2)->orderBy('id', 'DESC')->first();

        $why_selects = WhySelect::where('language_id', $lang)
                        ->when($request['title'], function ($q) use ($request) {
                            return $q->where('title', 'LIKE', '%' . $request['title'] . '%');
                        })->when(($request['status'] === '0' || $request['status'] === '1'), function ($q) use ($request) {
                            return $q->where('status', $request['status']);
                        })->orderBy('id', 'DESC')->get();

        return view('admin.home.why-choose-us.index', compact('english_static','arabic_static', 'why_selects'));
    }

    // Why Choose us Update
    public function why_chooseus_update(Request $request, $id){
        $request->validate([
            'w_c_us_title' => 'required|max:250',
            'w_c_us_sub_title' => 'required|max:250',
            'w_c_us_image1' => 'mimes:jpeg,jpg,png',
            'w_c_us_image2' => 'mimes:jpeg,jpg,png',
            'ar_w_c_us_title' => 'required|max:250',
            'ar_w_c_us_sub_title' => 'required|max:250',
        ]);

        $en_st = Sectiontitle::where('language_id', 1)->first();
        $ar_st = Sectiontitle::where('language_id', 2)->first();

        if($request->hasFile('w_c_us_image1')){
            @unlink('assets/front/img/'. $en_st->w_c_us_image1);
            $file = $request->file('w_c_us_image1');
            $extension = $file->getClientOriginalExtension();
            $w_c_us_image1 = time().rand().'.'.$extension;
            $file->move('assets/front/img/', $w_c_us_image1);

            $en_st->w_c_us_image1 = $w_c_us_image1;
        }

        if($request->hasFile('w_c_us_image2')){
            @unlink('assets/front/img/'. $en_st->w_c_us_image2);
            $file = $request->file('w_c_us_image2');
            $extension = $file->getClientOriginalExtension();
            $w_c_us_image2 = time().rand().'.'.$extension;
            $file->move('assets/front/img/', $w_c_us_image2);

            $en_st->w_c_us_image2 = $w_c_us_image2;
        }

        $en_st->w_c_us_title = $request->w_c_us_title;
        $en_st->w_c_us_sub_title = $request->w_c_us_sub_title;
        $en_st->save();

        $ar_st->w_c_us_title = $request->ar_w_c_us_title;
        $ar_st->w_c_us_sub_title = $request->ar_w_c_us_sub_title;
        $ar_st->save();

        $notification = array(
            'messege' => 'Why Choose Us Section Updated successfully!',
            'alert' => 'success'
        );
        return redirect(route('admin.why_chooseus').'?language='.$this->lang->code)->with('notification', $notification);
    }

    // Service Section
    public function service_section(Request $request){

        $lang = Language::where('code', $request->language)->first()->id;
     
        $english_static = Sectiontitle::where('language_id', 1)->orderBy('id', 'DESC')->first();
        $arabic_static = Sectiontitle::where('language_id', 2)->orderBy('id', 'DESC')->first();

        return view('admin.home.service.index', compact('english_static','arabic_static'));
    }

    // Service Update
    public function service_section_update(Request $request, $id){

        $request->validate([
            'service_title' => 'required|max:250',
            'service_sub_title' => 'required|max:250',
            'ar_service_title' => 'required|max:250',
            'ar_service_sub_title' => 'required|max:250',
        ]);

        $st = Sectiontitle::where('language_id', 1)->first();
        $ar_st = Sectiontitle::where('language_id', 2)->first();


        $st->service_title = $request->service_title;
        $st->service_sub_title = $request->service_sub_title;
        $st->save();

        $ar_st->service_title = $request->ar_service_title;
        $ar_st->service_sub_title = $request->ar_service_sub_title;
        $ar_st->save();

        $notification = array(
            'messege' => 'Service Section Updated successfully!',
            'alert' => 'success'
        );
        return redirect(route('admin.service_section').'?language='.$this->lang->code)->with('notification', $notification);
    }

    // Project Section
    public function project_section(Request $request){

        $lang = Language::where('code', $request->language)->first()->id;
     
        $english_static = Sectiontitle::where('language_id', 1)->orderBy('id', 'DESC')->first();
        $arabic_static = Sectiontitle::where('language_id', 2)->orderBy('id', 'DESC')->first();

        return view('admin.home.project.index', compact('english_static','arabic_static'));
    }

    // Project Update
    public function project_section_update(Request $request, $id){

        $request->validate([
            'portfolio_title' => 'required|max:250',
            'portfolio_sub_title' => 'required|max:250',
            'ar_portfolio_title' => 'required|max:250',
            'ar_portfolio_sub_title' => 'required|max:250',
        ]);

        $st = Sectiontitle::where('language_id', 1)->first();
        $ar_st = Sectiontitle::where('language_id', 2)->first();


        $st->portfolio_title = $request->portfolio_title;
        $st->portfolio_sub_title = $request->portfolio_sub_title;
        $st->save();

        $ar_st->portfolio_title = $request->ar_portfolio_title;
        $ar_st->portfolio_sub_title = $request->ar_portfolio_sub_title;
        $ar_st->save();

        $notification = array(
            'messege' => 'Project Section Updated successfully!',
            'alert' => 'success'
        );
        return redirect(route('admin.project_section').'?language='.$this->lang->code)->with('notification', $notification);
    }

    // Team Update
    public function team_section_update(Request $request, $id){

        $request->validate([
            'team_title' => 'required|max:250',
            'team_sub_title' => 'required|max:250',
            'ar_team_title' => 'required|max:250',
            'ar_team_sub_title' => 'required|max:250',
        ]);

        $st = Sectiontitle::where('language_id', 1)->first();
        $ar_st = Sectiontitle::where('language_id', 2)->first();


        $st->team_title = $request->team_title;
        $st->team_sub_title = $request->team_sub_title;
        $st->save();

        $ar_st->team_title = $request->ar_team_title;
        $ar_st->team_sub_title = $request->ar_team_sub_title;
        $ar_st->save();

        $notification = array(
            'messege' => 'Team Section Updated successfully!',
            'alert' => 'success'
        );
        return redirect(route('admin.team').'?language='.$this->lang->code)->with('notification', $notification);
    }


    // Contact Section
    public function contact_section(Request $request){

        $request->language = isset($request->language)?$request->language:'en';
        $lang = Language::where('code', $request->language)->first()->id;
     
        $english_static = Sectiontitle::where('language_id', 1)->orderBy('id', 'DESC')->first();
        $arabic_static = Sectiontitle::where('language_id', 2)->orderBy('id', 'DESC')->first();

        return view('admin.home.contact.index', compact('english_static','arabic_static'));
    }


    // Contact Section Update
    public function contact_section_update(Request $request, $id){

        $request->validate([
            'contact_title' => 'required|max:250',
            'contact_sub_title' => 'required|max:250',
            'contact_form_title' => 'required|max:250',
            'ar_contact_title' => 'required|max:250',
            'ar_contact_sub_title' => 'required|max:250',
            'ar_contact_form_title' => 'required|max:250',
            'contact_map' => 'required',
            'contact_form_image' => 'mimes:jpeg,jpg,png',
            'contact_section_bg_image' => 'mimes:jpeg,jpg,png',
        ]);

        $st = Sectiontitle::where('language_id', 1)->first();
        $ar_st = Sectiontitle::where('language_id', 2)->first();

        if($request->hasFile('contact_form_image')){
            @unlink('assets/front/img/'. $st->contact_form_image);
            $file = $request->file('contact_form_image');
            $extension = $file->getClientOriginalExtension();
            $contact_form_image = time().rand().'.'.$extension;
            $file->move('assets/front/img/', $contact_form_image);

            $st->contact_form_image = $contact_form_image;
        }

        if($request->hasFile('contact_section_bg_image')){
            @unlink('assets/front/img/'. $st->contact_section_bg_image);
            $file = $request->file('contact_section_bg_image');
            $extension = $file->getClientOriginalExtension();
            $contact_section_bg_image = time().rand().'.'.$extension;
            $file->move('assets/front/img/', $contact_section_bg_image);

            $st->contact_section_bg_image = $contact_section_bg_image;
        }

        $st->contact_map = $request->contact_map;
        $st->contact_title = $request->contact_title;
        $st->contact_sub_title = $request->contact_sub_title;
        $st->contact_form_title = $request->contact_form_title;
        $st->save();

        $ar_st->contact_title = $request->ar_contact_title;
        $ar_st->contact_sub_title = $request->ar_contact_sub_title;
        $ar_st->contact_form_title = $request->ar_contact_form_title;
        $ar_st->save();

        $notification = array(
            'messege' => 'Contact Section Updated successfully!',
            'alert' => 'success'
        );
        return redirect(route('admin.contact_section').'?language='.$this->lang->code)->with('notification', $notification);
    }


    // FAQ Section Update
    public function faq_section_update(Request $request, $id){

        $request->validate([
            'faq_title' => 'required|max:250',
            'faq_sub_title' => 'required|max:250',
            'ar_faq_title' => 'required|max:250',
            'ar_faq_sub_title' => 'required|max:250',
            'faq_bg_image' => 'mimes:jpeg,jpg,png',
            'faq_image1' => 'mimes:jpeg,jpg,png',
            'faq_image2' => 'mimes:jpeg,jpg,png',
        ]);

        $st = Sectiontitle::where('language_id',1)->first();
        $st_ar = Sectiontitle::where('language_id', 2)->first();

        if($request->hasFile('faq_bg_image')){
            @unlink('assets/front/img/'. $st->faq_bg_image);
            $file = $request->file('faq_bg_image');
            $extension = $file->getClientOriginalExtension();
            $faq_bg_image = time().rand().'.'.$extension;
            $file->move('assets/front/img/', $faq_bg_image);

            $st->faq_bg_image = $faq_bg_image;
        }

        if($request->hasFile('faq_image1')){
            @unlink('assets/front/img/'. $st->faq_image1);
            $file = $request->file('faq_image1');
            $extension = $file->getClientOriginalExtension();
            $faq_image1 = time().rand().'.'.$extension;
            $file->move('assets/front/img/', $faq_image1);

            $st->faq_image1 = $faq_image1;
        }

        if($request->hasFile('faq_image2')){
            @unlink('assets/front/img/'. $st->faq_image2);
            $file = $request->file('faq_image2');
            $extension = $file->getClientOriginalExtension();
            $faq_image2 = time().rand().'.'.$extension;
            $file->move('assets/front/img/', $faq_image2);

            $st->faq_image2 = $faq_image2;
        }

        $st->faq_title = $request->faq_title;
        $st->faq_sub_title = $request->faq_sub_title;
        $st->save();
        $st_ar->faq_title = $request->ar_faq_title;
        $st_ar->faq_sub_title = $request->ar_faq_sub_title;
        $st_ar->save();

        $notification = array(
            'messege' => 'FAQ Section Updated successfully!',
            'alert' => 'success'
        );
        return redirect(route('admin.faq').'?language='.$this->lang->code)->with('notification', $notification);
    }

    
    // Blog Section
    public function blog_section(Request $request){

        $lang = Language::where('code', $request->language)->first()->id;
        
        $english_static = Sectiontitle::where('language_id', 1)->orderBy('id', 'DESC')->first();
        $arabic_static = Sectiontitle::where('language_id', 2)->orderBy('id', 'DESC')->first();

        return view('admin.home.blog.index', compact('english_static','arabic_static'));
    }

    // Blog Section Update
    public function blog_section_update(Request $request, $id){

        $request->validate([
            'blog_title' => 'required|max:250',
            'blog_sub_title' => 'required|max:250',
            'ar_blog_title' => 'required|max:250',
            'ar_blog_sub_title' => 'required|max:250',
        ]);

        $st = Sectiontitle::where('language_id', 1)->first();
        $ar_st = Sectiontitle::where('language_id', 2)->first();


        $st->blog_title = $request->blog_title;
        $st->blog_sub_title = $request->blog_sub_title;
        $st->save();

        $ar_st->blog_title = $request->ar_blog_title;
        $ar_st->blog_sub_title = $request->ar_blog_sub_title;
        $ar_st->save();

        $notification = array(
            'messege' => 'Blog Section Updated successfully!',
            'alert' => 'success'
        );
        return redirect(route('admin.blog_section').'?language='.$this->lang->code)->with('notification', $notification);
    }


    // Meet us Section
    public function meet_section(Request $request){

        $lang = Language::where('code', $request->language)->first()->id;
        
        $english_static = Sectiontitle::where('language_id', 1)->orderBy('id', 'DESC')->first();
        $arabic_static = Sectiontitle::where('language_id', 2)->orderBy('id', 'DESC')->first();

        return view('admin.home.meet.index', compact('english_static','arabic_static'));
    }

    // Meet us section update
    public function meet_section_update(Request $request, $id){

        $request->validate([
            'meeet_us_text' => 'required|max:250',
            'meeet_us_button_text' => 'required|max:250',
            'meeet_us_button_link' => 'required|max:250',
            'ar_meeet_us_text' => 'required|max:250',
            'ar_meeet_us_button_text' => 'required|max:250',
            'ar_meeet_us_button_link' => 'required|max:250',
            'meeet_us_bg_image' => 'mimes:jpeg,jpg,png',
        ]);

        $st = Sectiontitle::where('language_id', 1)->first();
        $ar_st = Sectiontitle::where('language_id', 2)->first();

        if($request->hasFile('meeet_us_bg_image')){
            @unlink('assets/front/img/'. $st->meeet_us_bg_image);
            $file = $request->file('meeet_us_bg_image');
            $extension = $file->getClientOriginalExtension();
            $meeet_us_bg_image = time().rand().'.'.$extension;
            $file->move('assets/front/img/', $meeet_us_bg_image);

            $st->meeet_us_bg_image = $meeet_us_bg_image;
        }

        $st->meeet_us_text = $request->meeet_us_text;
        $st->meeet_us_button_text = $request->meeet_us_button_text;
        $st->meeet_us_button_link = $request->meeet_us_button_link;
        $st->save();

        $ar_st->meeet_us_text = $request->ar_meeet_us_text;
        $ar_st->meeet_us_button_text = $request->ar_meeet_us_button_text;
        $ar_st->meeet_us_button_link = $request->ar_meeet_us_button_link;
        $ar_st->save();

        $notification = array(
            'messege' => 'Meet With Us Section Updated successfully!',
            'alert' => 'success'
        );
        return redirect(route('admin.meet_section').'?language='.$this->lang->code)->with('notification', $notification);

    }
    

}
