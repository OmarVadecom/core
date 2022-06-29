<?php

namespace App\Http\Controllers\Admin;

use App\Models\Team;
use App\Models\Language;
use App\Models\Sectiontitle;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;


class TeamController extends Controller
{

    public $lang;
    public function __construct()
    {
        $this->lang = Language::where('is_default',1)->first();
    }

    public function team(Request $request){
        $lang = Language::where('code', $request->language)->first()->id;

        $teams = Team::where('language_id', $lang)
                ->when($request['title'], function ($q) use ($request) {
                    return $q->where('title', 'LIKE', '%' . $request['title'] . '%');
                })->when($request['dagenation'], function ($q) use ($request) {
                    return $q->where('dagenation', 'LIKE', '%' . $request['dagenation'] . '%');
                })->when(($request['status'] == '0' || $request['status'] == '1'), function ($q) use ($request) {
                    return $q->where('status', $request['status']);
                })->orderBy('id', 'DESC')->get();

                $english_static = Sectiontitle::where('language_id', 1)->orderBy('id', 'DESC')->first();
                $arabic_static = Sectiontitle::where('language_id', 2)->orderBy('id', 'DESC')->first();

        return view('admin.home.team.index', compact('teams','english_static','arabic_static'));
    }

    //Add team
    public function add(){
        return view('admin.home.team.add');
    }

    // Store team
    public function store(Request $request){


        $request->validate([
            'image' => 'required|mimes:jpeg,jpg,png',
            'name' => 'required|max:100',
            'dagenation' => 'required|max:100',
            'description' => 'required',
            'serial_number' => 'required|numeric',
            'status' => 'required',
            'ar_name' => 'required|max:100',
            'ar_dagenation' => 'required|max:100',
            'ar_description' => 'required',
        ]);
        $team = Team::where('language_id', 1)->first();
        $team_ar = Team::where('language_id', 2)->first();
        $str= Str::random(4);

        $team = new Team();

        if($request->hasFile('image')){

            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $image = time().rand().'.'.$extension;
            $file->move('assets/front/img/team/', $image);

            $team->image = $image;
        }

        $team->language_id = 1;
        $team->name = $request->name;
        $team->team_id = $str;
        $team->status = $request->status;
        $team->dagenation = $request->dagenation;
        $team->serial_number = $request->serial_number;
        $team->description = $request->description;

        if($request->icon1 && $request->url1){
            $team->icon1 = $request->icon1;
            $team->url1 = $request->url1;
        }else{
            $team->icon1 = null;
            $team->url1 = null;
        }
        if($request->icon2 && $request->url2){
            $team->icon2 = $request->icon2;
            $team->url2 = $request->url2;
        }else{
            $team->icon2 = null;
            $team->url2 = null;
        }

        if($request->icon3 && $request->url3){
            $team->icon3 = $request->icon3;
            $team->url3 = $request->url3;
        }else{
            $team->icon3 = null;
            $team->url3 = null;
        }

        if($request->icon4 && $request->url4){
            $team->icon4 = $request->icon4;
            $team->url4 = $request->url4;
        }else{
            $team->icon4 = null;
            $team->url4 = null;
        }

        if($request->icon5 && $request->url5){
            $team->icon5 = $request->icon5;
            $team->url5 = $request->url5;
        }else{
            $team->icon5 = null;
            $team->url5 = null;
        }


        $team->save();

        $team_ar = new Team();
        $team_ar->language_id = 2;
        $team_ar->name = $request->ar_name;
        $team_ar->team_id = $str;
        $team_ar->dagenation = $request->ar_dagenation;
        $team_ar->description = $request->ar_description;
        $team_ar->save();


        $notification = array(
            'messege' => 'Team Added successfully!',
            'alert' => 'success'
        );
        return redirect()->back()->with('notification', $notification);
    }

    //team Delete
    public function delete($id){

        $team = Team::find($id);
        @unlink('assets/front/img/team/'. $team->image);
        $team->delete();

        $notification = array(
            'messege' => 'Team Deleted successfully!',
            'alert' => 'success'
        );
        return redirect()->back()->with('notification', $notification);
    }

    //team Edit
    public function edit($id){

        $team = Team::find($id);
        $team_en = Team::where('team_id',$team->team_id)->where('language_id', 1)->first();
        $team_ar = Team::where('team_id',$team->team_id)->where('language_id', 2)->first();
        return view('admin.home.team.edit', compact('team','team_en','team_ar'));
    }

    // team Update
    public function update(Request $request, $id){

        $team = Team::find($id);
        $team_en = Team::where('team_id',$team->team_id)->where('language_id', 1)->first();
        $team_ar = Team::where('team_id',$team->team_id)->where('language_id', 2)->first();

        $request->validate([
            'image' => 'mimes:jpeg,jpg,png',
            'name' => 'required|max:100',
            'dagenation' => 'required|max:100',
            'description' => 'required',
            'ar_name' => 'required|max:100',
            'ar_dagenation' => 'required|max:100',
            'ar_description' => 'required',
            'serial_number' => 'required|numeric',
            'status' => 'required',
        ]);

        

        if($request->hasFile('image')){
            @unlink('assets/front/img/team/'. $team_en->image);
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $image = time().rand().'.'.$extension;
            $file->move('assets/front/img/team/', $image);
            $team_en->image = $image;
        }
        $team_en->name = $request->name;
        $team_en->status = $request->status;
        $team_en->dagenation = $request->dagenation;
        $team_en->serial_number = $request->serial_number;
        $team_en->description = $request->description;

        if($request->icon1 && $request->url1){
            $team->icon1 = $request->icon1;
            $team->url1 = $request->url1;
        }else{
            $team->icon1 = null;
            $team->url1 = null;
        }
        if($request->icon2 && $request->url2){
            $team->icon2 = $request->icon2;
            $team->url2 = $request->url2;
        }else{
            $team->icon2 = null;
            $team->url2 = null;
        }

        if($request->icon3 && $request->url3){
            $team->icon3 = $request->icon3;
            $team->url3 = $request->url3;
        }else{
            $team->icon3 = null;
            $team->url3 = null;
        }

        if($request->icon4 && $request->url4){
            $team->icon4 = $request->icon4;
            $team->url4 = $request->url4;
        }else{
            $team->icon4 = null;
            $team->url4 = null;
        }

        if($request->icon5 && $request->url5){
            $team->icon5 = $request->icon5;
            $team->url5 = $request->url5;
        }else{
            $team->icon5 = null;
            $team->url5 = null;
        }

        $team_en->update();

        $team_ar->name = $request->ar_name;
        $team_ar->dagenation = $request->ar_dagenation;
        $team_ar->description = $request->ar_description;
        $team_ar->update();

        $notification = array(
            'messege' => 'Team Updated successfully!',
            'alert' => 'success'
        );
        return redirect(route('admin.team').'?language='.$this->lang->code)->with('notification', $notification);;

    }
}