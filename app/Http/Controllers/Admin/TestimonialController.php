<?php

namespace App\Http\Controllers\Admin;

use Session;
use App\Models\Language;
use App\Models\Testimonial;
use App\Models\Sectiontitle;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;

class TestimonialController extends Controller
{
    public $lang;
    public function __construct()
    {
        $this->lang = Language::where('is_default',1)->first();
    }

    public function testimonial(Request $request)
    {
        $lang = Language::where('code', $request->language)->first()->id;
        $testimonials = Testimonial::where('language_id', $lang)
                        ->when($request['name'], function ($q) use ($request) {
                            return $q->where('name', 'LIKE', '%' . $request['name'] . '%');
                        })->when($request['position'], function ($q) use ($request) {
                            return $q->where('position', 'LIKE', '%' . $request['position'] . '%');
                        })->orderBy('id', 'DESC')->get();

        $english_saectiontitle = Sectiontitle::where('language_id', 1)->first();
        $arabic_saectiontitle = Sectiontitle::where('language_id', 2)->first();

        return view('admin.home.testimonial.index', compact('testimonials', 'english_saectiontitle','arabic_saectiontitle'));
    }

    //Add Testimonial
    public function add(){
        return view('admin.home.testimonial.add');
    }

    // Store Testimonial
    public function store(Request $request){
        // dd($request->all());
        $request->validate([
            'image' => 'required|mimes:jpeg,jpg,png',
            'name' => 'required|max:100',
            'position' => 'required|max:100',
            'rating' => 'required',
            'serial_number' => 'required',
            'message' => 'required|max:300',
            'ar_name' => 'required|max:100',
            'ar_position' => 'required|max:100',
            'ar_rating' => 'required',
            'ar_serial_number' => 'required',
            'ar_message' => 'required|max:300',
        ]);

        $testimonial = Testimonial::where($request->language_id)->first();
        $testimonial_ar = Testimonial::where($request->language_id)->first();
        $str= Str::random(4);
        $testimonial = new Testimonial();

        if($request->hasFile('image')){

            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $image = time().rand().'.'.$extension;
            $file->move('assets/front/img/', $image);

            $testimonial->image = $image;
        }

        $testimonial->language_id = 1;
        $testimonial->name = $request->name;
        $testimonial->testimonial_id = $str;
        $testimonial->position = $request->position;
        $testimonial->rating = $request->rating;
        $testimonial->message = $request->message;
        $testimonial->serial_number = $request->serial_number;
        $testimonial->save();

        $testimonial_ar = new Testimonial();
        $testimonial_ar->language_id = 2;
        $testimonial_ar->name = $request->ar_name;
        $testimonial_ar->testimonial_id = $str;
        $testimonial_ar->position = $request->ar_position;
        $testimonial_ar->rating = $request->ar_rating;
        $testimonial_ar->message = $request->ar_message;
        $testimonial_ar->serial_number = $request->ar_serial_number;
        $testimonial_ar->save();


        $notification = array(
            'messege' => 'Testimonial Added successfully!',
            'alert' => 'success'
        );
        return redirect()->back()->with('notification', $notification);

    }

    //Testimonial Delete
    public function delete($id){
       
        $testimonial = Testimonial::find($id);
        @unlink('assets/front/img/'. $testimonial->featured_image);
        $testimonial->delete();

        return back();
    }

    //Service Delete
    public function edit($id){
       
        $testimonial = Testimonial::find($id);
        $testimonial_en = Testimonial::where('testimonial_id' , $testimonial->testimonial_id )->where('language_id' , 1)->first();
        $testimonial_ar = Testimonial::where('testimonial_id' , $testimonial->testimonial_id )->where('language_id' , 2)->first();
        return view('admin.home.testimonial.edit', compact('testimonial','testimonial_en','testimonial_ar'));
    
    }

    // Testimonial Update
    public function update(Request $request, $id){
        // dd($request->all());
        $testimonial = Testimonial::find($id);
        $testimonial_en = Testimonial::where('testimonial_id' , $testimonial->testimonial_id )->where('language_id' , 1)->first();
        $testimonial_ar = Testimonial::where('testimonial_id' , $testimonial->testimonial_id )->where('language_id' , 2)->first();

        $request->validate([
            'image' => 'mimes:jpeg,jpg,png',
            'name' => 'required|max:100',
            'position' => 'required|max:100',
            'rating' => 'required',
            'serial_number' => 'required',
            'message' => 'required|max:300',
            'ar_name' => 'required|max:100',
            'ar_position' => 'required|max:100',
            'ar_rating' => 'required',
            'ar_serial_number' => 'required',
            'ar_message' => 'required|max:300',
        ]);

        // $testimonial = Testimonial::find($id);
        if($request->hasFile('image')){
            @unlink('assets/front/img/'. $testimonial_en->image);
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $image = time().rand().'.'.$extension;
            $file->move('assets/front/img/', $image);
            $testimonial_en->image = $image;
        }

        $testimonial_en->name          = $request->name;
        $testimonial_en->position      = $request->position;
        $testimonial_en->rating        = $request->rating;
        $testimonial_en->message       = $request->message;
        $testimonial_en->serial_number = $request->serial_number;
        $testimonial_en->save();

        $testimonial_ar->name           = $request->ar_name;
        $testimonial_ar->position       = $request->ar_position;
        $testimonial_ar->rating         = $request->ar_rating;
        $testimonial_ar->message        = $request->ar_message;
        $testimonial_ar->serial_number  = $request->ar_serial_number;
        $testimonial_ar->save();

        $notification = array(
            'messege' => 'Testimonial Updated successfully!',
            'alert' => 'success'
        );
        return redirect(route('admin.testimonial').'?language='.$this->lang->code)->with('notification', $notification);
    }

    public function testimonialcontent(Request $request, $id){
        
        $request->validate([
            'testimonial_title' => 'required',
            'testimonial_subtitle' => 'required',
            'ar_testimonial_title' => 'required',
            'ar_testimonial_subtitle' => 'required'
        ]);

        $testimonial_title = Sectiontitle::where('language_id', 1)->first();
        $ar_testimonial_title = Sectiontitle::where('language_id',2)->first();

        $testimonial_title->testimonial_title = $request->testimonial_title;
        $testimonial_title->testimonial_subtitle = $request->testimonial_subtitle;
        $testimonial_title->save();

        $ar_testimonial_title->testimonial_title = $request->ar_testimonial_title;
        $ar_testimonial_title->testimonial_subtitle = $request->ar_testimonial_subtitle;
        $ar_testimonial_title->save();

        $notification = array(
            'messege' => 'Testimonial Content Updated successfully!',
            'alert' => 'success'
        );
        return redirect(route('admin.testimonial').'?language='.$this->lang->code)->with('notification', $notification);
    }
}
