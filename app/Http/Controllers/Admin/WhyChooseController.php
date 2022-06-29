<?php

namespace App\Http\Controllers\Admin;

use App\Models\Language;
use App\Models\WhySelect;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;
class WhyChooseController extends Controller
{
    public $lang;
    public function __construct()
    {
        $this->lang = Language::where('is_default',1)->first();
    }


    // Add Why Choose
    public function add(){
        
        return view('admin.home.why-choose-us.add');
    }

    // Store Why Choose
    public function store(Request $request){
       
        // $lang = Language::where('code', $request->language)->first()->id;
        
        // $wcu = WhySelect::all();
       

        $request->validate([
            'title' => 'required|max:250',
            'text' => 'required|max:250',
            'icon' => 'required|max:250',
            'serial_number' => 'required|numeric',
            'status' => 'required',
            'ar_title' => 'required|max:250',
            'ar_text' => 'required|max:250',
            'ar_icon' => 'required|max:250',
            'ar_serial_number' => 'required|numeric',
            'ar_status' => 'required',
        ]);

        $ws_en = WhySelect::where($request->language_id)->first();
        $ws_ar = WhySelect::where($request->language_id)->first();
       
        $str= Str::random(4);
        // dd($str);
        // $ws = new WhySelect();
        $ws_en= new WhySelect();
        $ws_en->language_id = 1;
        $ws_en->why_select_id = $str;
        // $ws_en->language_id=$request->language_id;
        $ws_en->status = $request->status;
        $ws_en->title = $request->title;
        $ws_en->icon = $request->icon;
        $ws_en->text = $request->text;
        $ws_en->serial_number = $request->serial_number;
        $ws_en->save();

        // $ar_ws->language_id=$request->language_id;
        $ws_ar= new WhySelect();
        $ws_ar->language_id = 2;
        $ws_ar->why_select_id = $str;
        $ws_ar->status = $request->ar_status;
        $ws_ar->title = $request->ar_title;
        $ws_ar->icon = $request->ar_icon;
        $ws_ar->text = $request->ar_text;
        $ws_ar->serial_number = $request->ar_serial_number;
        $ws_ar->save();
        

        $notification = array(
            'messege' => 'Why Choose Added successfully!',
            'alert' => 'success'
        );
       
        return redirect()->back()->with('notification', $notification);
        // return redirect(route('admin.dynamic_page') . '?language=' . $language)->with('notification', $notification); 
       }
    
    // Why Choose Delete
    public function delete($id){

        $ws = WhySelect::find($id);
        $ws->delete();
        
        $notification = array(
            'messege' => 'Why Choose Deleted successfully!',
            'alert' => 'success'
        );
        return redirect()->back()->with('notification', $notification);
    }

    // Why Choose Edit
    public function edit($id){

        $ws = WhySelect::find($id);
        $en_ws = WhySelect::where('why_select_id',$ws->why_select_id)->where('language_id', 1)->first();
        $ar_ws = WhySelect::where('why_select_id',$ws->why_select_id)->where('language_id', 2)->first();
        return view('admin.home.why-choose-us.edit', compact('ws','en_ws','ar_ws'));

    }

    // Update Why Choose
    public function update(Request $request, $id){
        // dd($request->all());
        $ws = WhySelect::find($id);
        $en_ws = WhySelect::where('why_select_id',$ws->why_select_id)->where('language_id', 1)->first();
        $ar_ws = WhySelect::where('why_select_id',$ws->why_select_id)->where('language_id', 2)->first();

        $request->validate([
            'title' => 'required|max:250',
            'text' => 'required|max:250',
            'icon' => 'required|max:250',
            'serial_number' => 'required|numeric',
            'status' => 'required',
            'ar_title' => 'required|max:250',
            'ar_text' => 'required|max:250',
            'ar_icon' => 'required|max:250',
            'ar_serial_number' => 'required|numeric',
            'ar_status' => 'required',
        ]);

        //  $ws = WhySelect::find($id);
        //  $en_ws = WhySelect::where('language_id', 1)->first();
        //  $ar_ws = WhySelect::where('language_id', 2)->first();
        // $en_ws->update([
        //     // 'language_id' => 1,
        //     'text' =>$request->text ,
        //     'title' =>$request->title ,
        //     'icon' => $request->icon ,
        //     'status' => $request->status,
        //     'serial_number' => $request->serial_number,
        // ]);
        
        $en_ws->status          = $request->status;
        $en_ws->title           = $request->title;
        $en_ws->icon            = $request->icon;
        $en_ws->text            = $request->text;
        $en_ws->serial_number   = $request->serial_number;
        $en_ws->save();

        // $ar_ws->update([
        //     // 'language_id' => 2,
        //     'text' =>$request->ar_text ,
        //     'title' =>$request->ar_title ,
        //     'icon' => $request->ar_icon ,
        //     'status' => $request->ar_status,
        //     'serial_number' => $request->ar_serial_number,
        // ]);
        

         $ar_ws->status         = $request->ar_status;
         $ar_ws->title          = $request->ar_title;
         $ar_ws->icon           = $request->ar_icon;
         $ar_ws->text           = $request->ar_text;
         $ar_ws->serial_number  = $request->ar_serial_number;
         $ar_ws->save();
        

        $notification = array(
            'messege' => 'Why Choose Updated successfully!',
            'alert' => 'success'
        );
        return redirect(route('admin.why_chooseus').'?language='.$this->lang->code)->with('notification', $notification);
    }
}
