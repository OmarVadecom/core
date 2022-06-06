<?php

namespace App\Http\Controllers\Admin;

use App\Models\Faq;
use App\Models\Language;
use App\Models\Sectiontitle;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;

class FaqController extends Controller
{
    public $lang;
    public function __construct()
    {
        $this->lang = Language::where('is_default',1)->first();
    }

    public function faq(Request $request){
        $lang = Language::where('code', $request->language)->first()->id;

        $faqs = Faq::where('language_id', $lang)
                    ->when($request['title'], function ($q) use ($request) {
                        return $q->where('title', 'LIKE', '%' . $request['title'] . '%');
                    })->when(($request['status'] == '0' || $request['status'] == '1'), function ($q) use ($request) {
                        return $q->where('status', $request['status']);
                    })->orderBy('id', 'DESC')->get();
        
        $static = Sectiontitle::where('language_id', 1)->orderBy('id', 'DESC')->first();
        $static_ar = Sectiontitle::where('language_id', 2)->orderBy('id', 'DESC')->first();
        
        return view('admin.home.faq.index', compact('faqs', 'static','static_ar'));
    }

    // Add Faq
    public function add(){
        return view('admin.home.faq.add');
    }

    // Store Faq
    public function store(Request $request){

        $request->validate([
            'title' => 'required|max:150',
            'ar_title' => 'required|max:150',
            'content' => 'required',
            'ar_content' => 'required',
            'serial_number' => 'required|numeric',
            'status' => 'required',
        ]);

        $faq = Faq::where('language_id', 1)->first();
        $faq_ar = Faq::where('language_id', 2)->first();
        $str= Str::random(4);


        $faq = new Faq();
        $faq->language_id = 1;
        $faq->status = $request->status;
        $faq->title = $request->title;
        $faq->faq_id = $str;
        $faq->serial_number = $request->serial_number;
        $faq->content = $request->content;
        $faq->save();

        $faq_ar = new Faq();
        $faq_ar->language_id = 2;
        $faq_ar->faq_id = $str;
        $faq_ar->title = $request->ar_title;
        $faq_ar->content = $request->ar_content;
        $faq_ar->save();

        $notification = array(
            'messege' => 'Faq Added successfully!',
            'alert' => 'success'
        );
        return redirect()->back()->with('notification', $notification);
    }

    // Faq Delete
    public function delete($id){

        $faq = Faq::find($id);
        $faq->delete();

        $notification = array(
            'messege' => 'FAQ Deleted successfully!',
            'alert' => 'success'
        );
        return redirect()->back()->with('notification', $notification);
    }

    // Faq Edit
    public function edit($id){

        $faq = Faq::find($id);
        $faq_en = Faq::where('faq_id',$faq->faq_id)->where('language_id', 1)->first();
        $faq_ar = Faq::where('faq_id',$faq->faq_id)->where('language_id', 2)->first();
        return view('admin.home.faq.edit', compact('faq','faq_ar','faq_en'));

    }

    // Update Faq
    public function update(Request $request, $id){

        $faq = Faq::find($id);
        $faq_en = Faq::where('faq_id',$faq->faq_id)->where('language_id', 1)->first();
        $faq_ar = Faq::where('faq_id',$faq->faq_id)->where('language_id', 2)->first();

        // $id = $request->id;
         $request->validate([
            'title' => 'required|max:150',
            'content' => 'required',
            'ar_title' => 'required|max:150',
            'ar_content' => 'required',
            'serial_number' => 'required|numeric',
            'status' => 'required',
        ]);

        // $faq = Faq::find($id);

        $faq_en->status = $request->status;
        $faq_en->title = $request->title;
        $faq_en->serial_number = $request->serial_number;
        $faq_en->content = $request->content;
        $faq_en->save();

        $faq_ar->title = $request->ar_title;
        $faq_ar->content = $request->ar_content;
        $faq_ar->save();

        $notification = array(
            'messege' => 'Faq Updated successfully!',
            'alert' => 'success'
        );
        return redirect(route('admin.faq').'?language='.$this->lang->code)->with('notification', $notification);
    }



}