<?php

namespace App\Http\Controllers\Admin;

use App\Funfact;
use App\Models\Counter;
use App\Models\Language;
use App\Models\Sectiontitle;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;


class FunfactController extends Controller
{
    public $lang;
    public function __construct()
    {
        $this->lang = Language::where('is_default',1)->first();
    }

    public function index(Request $request){
        $lang = Language::where('code', $request->language)->first()->id;
        // $counter = Counter::where('language_id', 1)->first();
        // $counter_ar = Counter::where('language_id', 2)->first();
        $counters = Counter::where('language_id', $lang)
                    ->when($request['name'], function ($q) use ($request) {
                        return $q->where('title', 'LIKE', '%' . $request['name'] . '%');
                    })->when($request['value'], function ($q) use ($request) {
                        return $q->where('value', 'LIKE', '%' . $request['value'] . '%');
                    })->when(($request['status'] === '0' || $request['status'] === '1'), function ($q) use ($request) {
                        return $q->where('status', $request['status']);
                    })->orderBy('id', 'DESC')->get();

        return view('admin.home.counter.index', compact('counters'));
    }

    public function add(){
        return view('admin.home.counter.add');
    }

    public function store(Request $request){
        // dd($request->all());
        // $c = Counter::all();

//        if($c->count() >= 4){
//            $notification = array(
//                'messege' => 'You Can\'t Add More Than Four',
//                'alert' => 'warning'
//            );
//            return redirect()->back()->with('notification', $notification);
//        }
      
        $counter = Counter::where('language_id', 1)->first();
        $counter_ar = Counter::where('language_id', 2)->first();
        $str= Str::random(4);

        $request->validate([
            'title' => 'required|max:250',
            'ar_title' => 'required|max:250',
            'number' => 'required|numeric',
            'icon' => 'required|max:250',
            'text' => 'required|max:250',
            'ar_text' => 'required|max:250',
            'status' => 'required',
            'serial_number' => 'required|numeric',
        ]);

        $counter = new Counter();
        $counter->language_id = 1;
        $counter->serial_number = $request->serial_number;
        $counter->counter_id = $str;
        $counter->title = $request->title;
        $counter->number = $request->number;
        $counter->icon = $request->icon;
        $counter->text = $request->text;
        $counter->status = $request->status;
        $counter->save();

        $counter_ar = new Counter();
        $counter_ar->language_id = 2;
        $counter_ar->counter_id = $str;
        $counter_ar->title = $request->ar_title;
        $counter_ar->text = $request->ar_text;
        $counter_ar->save();

        $notification = array(
            'messege' => 'Counter Added successfully!',
            'alert' => 'success'
        );
        return redirect()->back()->with('notification', $notification);
    }

    public function edit($id){

        $counter = Counter::find($id);
        $counter_en = Counter::where('counter_id',$counter->counter_id)->where('language_id', 1)->first();
        $counter_ar = Counter::where('counter_id',$counter->counter_id)->where('language_id', 2)->first();
        return view('admin.home.counter.edit', compact('counter','counter_en','counter_ar'));

    }

    public function update(Request $request, $id){


        $counter = Counter::findOrFail($id);
        $counter_en = Counter::where('counter_id',$counter->counter_id)->where('language_id', 1)->first();
        $counter_ar = Counter::where('counter_id',$counter->counter_id)->where('language_id', 2)->first();

         $request->validate([
            'title' => 'required|max:250',
            'ar_title' => 'required|max:250',
            'number' => 'required|numeric',
            'icon' => 'required|max:250',
            'text' => 'required|max:250',
            'ar_text' => 'required|max:250',
            'status' => 'required',
            'serial_number' => 'required|numeric',
        ]);

        $counter_en->serial_number = $request->serial_number;
        $counter_en->title = $request->title;
        $counter_en->number = $request->number;
        $counter_en->icon = $request->icon;
        $counter_en->text = $request->text;
        $counter_en->status = $request->status;
        $counter_en->save();

        $counter_ar->title = $request->ar_title;
        $counter_ar->text = $request->ar_text;
        $counter->save();

        $notification = array(
            'messege' => 'Counter Updated successfully!',
            'alert' => 'success'
        );
        return redirect(route('admin.counter.index').'?language='.$this->lang->code)->with('notification', $notification);
    }

    public function delete($id){

        $counter = Counter::find($id);
        $counter->delete();

        
        $notification = array(
            'messege' => 'Counter Deleted successfully!',
            'alert' => 'success'
        );
        return redirect()->back()->with('notification', $notification);
    }

    public function funfactcontent(Request $request, $id){
        
        $request->validate([
            'funfact_bg' => 'mimes:jpeg,jpg,png',
        ]);

        $funfact_title = Sectiontitle::where('language_id', $id)->first();

        if($request->hasFile('offer_image')){
            @unlink('assets/front/img/'. $funfact_title->funfact_bg);
            $file = $request->file('offer_image');
            $extension = $file->getClientOriginalExtension();
            $funfact_bg = time().rand().'.'.$extension;
            $file->move('assets/front/img/', $funfact_bg);

            $funfact_title->funfact_bg = $funfact_bg;
        }

        $funfact_title->save();

        $notification = array(
            'messege' => 'Funfact Content Updated successfully!',
            'alert' => 'success'
        );
        return redirect(route('admin.funfact').'?language='.$this->lang->code)->with('notification', $notification);
    }

}
