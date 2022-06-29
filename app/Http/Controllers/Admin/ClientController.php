<?php

namespace App\Http\Controllers\Admin;

use App\Models\Language;
use App\Models\Sectiontitle;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Client;
use Illuminate\Support\Str;

class ClientController extends Controller
{
    public $lang;
    public function __construct()
    {
        $this->lang = Language::where('is_default',1)->first();
    }

    public function index(Request $request)
    {
        $lang = Language::where('code', $request->language)->first()->id;
        $seactiontitle_en = Sectiontitle::where('language_id', 1)->first();
        $seactiontitle_ar = Sectiontitle::where('language_id', 2)->first();
        $clients = Client::where('language_id', $lang)
                    ->when($request['name'], function ($q) use ($request) {
                        return $q->where('name', 'LIKE', '%' . $request['name'] . '%');
                    })->when(($request['status'] === '0' || $request['status'] === '1'), function ($q) use ($request) {
                        return $q->where('status', $request['status']);
                    })->orderBy('id', 'DESC')->get();

        return view('admin.home.client.index', compact('clients', 'seactiontitle_en','seactiontitle_ar'));
    }

    public function clientContent(Request $request, $id)
    {
        $request->validate([
            'blog_sub_title'    => 'required',
            'blog_title'        => 'required',
            'ar_blog_sub_title'    => 'required',
            'ar_blog_title'        => 'required'
        ]);

        $client_title_en = Sectiontitle::where('language_id', 1)->first();
        $client_title_ar = Sectiontitle::where('language_id', 2)->first();

        $client_title_en->blog_sub_title   = $request['blog_sub_title'];
        $client_title_en->blog_title       = $request['blog_title'];
        $client_title_en->save();

        $client_title_ar->blog_sub_title   = $request['ar_blog_sub_title'];
        $client_title_ar->blog_title       = $request['ar_blog_title'];
        $client_title_ar->save();

        $notification = array(
            'messege'   => 'Client Content Updated successfully!',
            'alert'     => 'success'
        );

        return redirect(route('admin.client.index') . '?language=' . $this->lang->code)->with('notification', $notification);
    }

    public function add(){
        return view('admin.home.client.add');
    }

    public function store(Request $request){

        $client = Sectiontitle::where('language_id', 1)->first();
        $client_ar = Sectiontitle::where('language_id', 2)->first();
        $str= Str::random(4);

        $request->validate([
            'image' => 'required|mimes:jpeg,jpg,png',
            'name' => 'required|max:250',
            'link' => 'required|max:250',
            'ar_name' => 'required|max:250',
            'ar_link' => 'required|max:250',
            'status' => 'required',
            'serial_number' => 'required|numeric',
        ]);

        $client = new Client();

        if($request->hasFile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $image = time().rand().'.'.$extension;
            $file->move('assets/front/img/client/', $image);

            $client->image = $image;
        }

        $client->language_id = 1;
        $client->serial_number = $request->serial_number;
        $client->client_id = $str;
        $client->name = $request->name;
        $client->link = $request->link;
        $client->status = $request->status;
        $client->save();

        $client_ar = new Client();
        $client_ar->language_id = 2;
        $client_ar->client_id = $str;
        $client_ar->name = $request->ar_name;
        $client_ar->link = $request->ar_link;
        $client_ar->save();

        $notification = array(
            'messege' => 'Client Added successfully!',
            'alert' => 'success'
        );
        return redirect()->back()->with('notification', $notification);
    }

    public function edit($id){

        $client = Client::find($id);
        $client_en = Client::where('client_id',$client->client_id)->where('language_id', 1)->first();
        $client_ar = Client::where('client_id',$client->client_id)->where('language_id', 2)->first();
        return view('admin.home.client.edit', compact('client','client_en','client_ar'));

    }

    public function update(Request $request, $id){

        $client = Client::find($id);
        $client_en = Client::where('client_id',$client->client_id)->where('language_id', 1)->first();
        $client_ar = Client::where('client_id',$client->client_id)->where('language_id', 2)->first();

        

         $request->validate([
            'name' => 'required|max:250',
            'link' => 'required|max:250',
            'ar_name' => 'required|max:250',
            'ar_link' => 'required|max:250',
            'status' => 'required',
            'serial_number' => 'required|numeric',
            'image' => 'mimes:jpeg,jpg,png',
        ]);
    

        if($request->hasFile('image')){
            @unlink('assets/front/img/client/'. $client_en->image);
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $image = 'portfolio_'.time().rand().'.'.$extension;
            $file->move('assets/front/img/client/', $image);
            $client_en->image = $image;
        }

        
        $client_en->serial_number = $request->serial_number;
        $client_en->name = $request->name;
        $client_en->link = $request->link;
        $client_en->status = $request->status;
        $client_en->save();

        $client_ar->name = $request->ar_name;
        $client_ar->link = $request->ar_link;
        $client_ar->save();

        $notification = array(
            'messege' => 'Client Updated successfully!',
            'alert' => 'success'
        );
        return redirect(route('admin.client.index').'?language='.$this->lang->code)->with('notification', $notification);
    }

    public function delete($id){

        $client = Client::find($id);
        @unlink('assets/front/img/client/'. $client->image);
        $client->delete();

        
        $notification = array(
            'messege' => 'Client Deleted successfully!',
            'alert' => 'success'
        );
        return redirect()->back()->with('notification', $notification);
    }

 
}
