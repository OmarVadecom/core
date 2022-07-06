<?php

namespace App\Http\Controllers\Admin;

use App\Models\Feature;
use App\Models\Language;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;


class FeatureController extends Controller
{
    public $lang;
    public function __construct()
    {
        $this->lang = Language::where('is_default',1)->first();
    }
    public function index(Request $request){
        $lang = Language::where('code', $request->language)->first()->id;

        $features = Feature::where('language_id', $lang)
                    ->when($request['title'], function ($q) use ($request) {
                        return $q->where('title', 'LIKE', '%' . $request['title'] . '%');
                    })->when(($request['status'] === '0' || $request['status'] === '1'), function ($q) use ($request) {
                        return $q->where('status', $request['status']);
                    })->orderBy('id', 'DESC')->get();
     
        return view('admin.home.feature.index', compact('features'));
    }

    // Add Feature
    public function add(){
        return view('admin.home.feature.add');
    }

    // Store Feature
    public function store(Request $request){

      
        $request->validate([
            'title' => 'required|max:250',
            'ar_title' => 'required|max:250',
            'icon' => 'required|max:250',
            'text' => 'required|max:250',
            'ar_text' => 'required|max:250',
            'serial_number' => 'required|numeric',
            'status' => 'required',
        ]);

        $feature = Feature::where('language_id', 1)->first();
        $feature_ar = Feature::where('language_id', 2)->first();
        $str= Str::random(4);

        $feature = new Feature();
        $feature->language_id = 1;
        $feature->title = $request->title;
        $feature->icon = $request->icon;
        $feature->feature_id = $str;
        $feature->text = $request->text;
        $feature->serial_number = $request->serial_number;
        $feature->status = $request->status;
        $feature->save();

        $feature_ar = new Feature();
        $feature_ar->language_id = 2;
        $feature_ar->feature_id = $str;
        $feature_ar->title = $request->ar_title;
        $feature_ar->text = $request->ar_text;
        $feature_ar->save();

        $notification = array(
            'messege' => 'Feature Added successfully!',
            'alert' => 'success'
        );
        return redirect()->back()->with('notification', $notification);
    }

    // Feature Delete
    public function delete($id){

        $feature = Feature::find($id);
        $feature->delete();

        $notification = array(
            'messege' => 'Feature Deleted successfully!',
            'alert' => 'success'
        );
        return redirect()->back()->with('notification', $notification);
    }

    // Feature Edit
    public function edit($id){

        $feature = Feature::find($id);
        $feature_en = Feature::where('feature_id',$feature->feature_id)->where('language_id', 1)->first();
        $feature_ar = Feature::where('feature_id',$feature->feature_id)->where('language_id', 2)->first();
        return view('admin.home.feature.edit', compact('feature','feature_en','feature_ar'));

    }

    // Update Feature
    public function update(Request $request, $id){

        $request->validate([
            'title' => 'required|max:250',
            'ar_title' => 'required|max:250',
            'icon' => 'required|max:250',
            'text' => 'required|max:250',
            'ar_text' => 'required|max:250',
            'serial_number' => 'required|numeric',
            'status' => 'required',
        ]);


        $feature = Feature::find($id);
        $feature_en = Feature::where('feature_id',$feature->feature_id)->where('language_id', 1)->first();
        $feature_ar = Feature::where('feature_id',$feature->feature_id)->where('language_id', 2)->first();

       
        $feature_en->title = $request->title;
        $feature_en->icon = $request->icon;
        $feature_en->text = $request->text;
        $feature_en->serial_number = $request->serial_number;
        $feature_en->status = $request->status;
        $feature_en->save();

        $feature_ar->title = $request->ar_title;
        $feature_ar->text = $request->ar_text;
        $feature_ar->save();

        $notification = array(
            'messege' => 'Feature Updated successfully!',
            'alert' => 'success'
        );
        return redirect(route('admin.feature.index').'?language='.$this->lang->code)->with('notification', $notification);
    }
}
