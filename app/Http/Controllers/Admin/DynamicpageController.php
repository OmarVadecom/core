<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\Helper;
use App\Models\FaqCategory;
use App\Models\dynamicPageCategories;
use App\Models\Language;
use App\Models\Daynamicpage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\PackageCategory;
use Illuminate\Support\Facades\File;

class DynamicpageController extends Controller
{
    public $lang;
    public function __construct()
    {
        $this->lang = Language::where('is_default', 1)->first();
    }

    public function dynamic_page(Request $request)
    {
        if ($request->language != "") {
            app()->setLocale($request->language);
            \Session::put('locale', $request->language);
            \Session::put('lang', $request->language);
            \LaravelLocalization::setLocale($request->language);
        }

        $lang = Language::where('code', $request->language)->first()->id;
        $dynamicpages = Daynamicpage::where('language_id', $lang)
                        ->when($request['slug'], function ($q) use ($request) {
                            return $q->where('slug', 'LIKE', '%' . $request['slug'] . '%');
                        })->when($request['title'], function ($q) use ($request) {
                            return $q->where('title', 'LIKE', '%' . $request['title'] . '%');
                        })->when(($request['status'] === '0' || $request['status'] === '1'), function ($q) use ($request) {
                            return $q->where('status', $request['status']);
                        })->when($request['category_id'], function ($q) use ($request) {
                            return $q->where('category_id', $request['category_id']);
                        })->orderBy('id', 'DESC')->get();


        $dynamicPagesCategories = dynamicPageCategories::where('language_id', $lang)->orderBy('id', 'DESC')->get();

        return view('admin.dynamicpage.index', compact('dynamicpages', 'dynamicPagesCategories'));
    }

    public function add()
    {
        $dynamicPageCategories = dynamicPageCategories::where('status', 1)->get();
        return view('admin.dynamicpage.add', compact('dynamicPageCategories'));
    }

    public function getModule(Request $request)
    {
               $package_categories = PackageCategory::where('status', 1)->get();
        $faq_categories = FaqCategory::get();

        return view('admin.modules.style_of_modules.' . $request['module'], compact('package_categories','faq_categories'));
    }

      public function store(Request $request)
    {
        if ($request->has('mod')) {
            foreach ($request->mod as $randomKey => $modules) {
                foreach ($modules as $nameModule => $module) {
                    if (in_array($nameModule, Helper::modulesHasImage())) {
                        if ($request->hasFile('images.' . $randomKey . '.' . $nameModule . '.imageFile')) {
                            $file = $request->file('images')[$randomKey][$nameModule]['imageFile'];
                            $file->move('assets/front/img/' . $nameModule . '/', $request->mod[$randomKey][$nameModule]['image']);
                        }
                    }
                }
            }
        }

        // $slug = Helper::make_slug($request->title);
        $slug = $request->slug;
        $dynamicpages = Daynamicpage::select('slug')->where('language_id', $request->language_id)->get();

        $request->validate([
            'en_title' => [
                'required', 'unique:daynamicpages,title', 'max:255',
                function ($attribute, $value, $fail) use ($slug, $dynamicpages) {
                    foreach ($dynamicpages as $dynamicpage) {
                        if ($dynamicpage->slug == $slug) {
                            return $fail('title already taken!');
                        }
                    }
                }
            ],
            'ar_title' => [
                'required', 'unique:daynamicpages,title', 'max:255',
                function ($attribute, $value, $fail) use ($slug, $dynamicpages) {
                    foreach ($dynamicpages as $dynamicpage) {
                        if ($dynamicpage->slug == $slug) {
                            return $fail('title already taken!');
                        }
                    }
                }
            ],
            'slug' => 'required',
            'serial_number' => 'required',
            'status' => 'required',
        ]);

        $dynamicpage_en = new Daynamicpage();
        $dynamicpage_en->language_id = 1;
        $dynamicpage_en->category_id = $request->category_id;
        $dynamicpage_en->title = $request->en_title;
        $dynamicpage_en->slug = $slug;
        $dynamicpage_en->status = $request->status;
        $dynamicpage_en->serial_number = $request->serial_number;
        $dynamicpage_en->meta_keywords = $request->en_meta_keywords;
        $dynamicpage_en->meta_description = $request->en_meta_description;
        $dynamicpage_en->footer = $request->footer;

        $dynamicpage_en->modules = $request->mod;

        $dynamicpage_en->save();

        $dynamicpage_ar = new Daynamicpage();
        $dynamicpage_ar->language_id = 2;
        $dynamicpage_ar->category_id = $request->category_id;
        $dynamicpage_ar->title = $request->ar_title;
        $dynamicpage_ar->slug = $slug;
        $dynamicpage_ar->status = $request->status;
        $dynamicpage_ar->serial_number = $request->serial_number;
        $dynamicpage_ar->meta_keywords = $request->ar_meta_keywords;
        $dynamicpage_ar->meta_description = $request->ar_meta_description;
        $dynamicpage_ar->footer = $request->footer;

        $dynamicpage_ar->modules = $request->mod;

        $dynamicpage_ar->save();


        if($request['save_continue'] === 'save_continue') {
            $notification = array(
                'messege' => 'Daynamic Page added successfully!',
                'alert' => 'success'
            );
            return redirect()->route('admin.dynamic_page.edit', $dynamicpage_en['id'])->with('notification', $notification);
        }
        $notification = array(
            'messege' => 'Daynamic Page added successfully!',
            'alert' => 'success'
        );
        $language = ($request->language_id == "2") ? 'ar' : 'en';
        return redirect(route('admin.dynamic_page') . '?language=' . $language)->with('notification', $notification);
    }
     public function edit($id)
    {
        $dynamicPageCategories = dynamicPageCategories::where('status', 1)->get();
        $dynamicpage = Daynamicpage::find($id);
        $dynamicpage_en = Daynamicpage::where('slug' , $dynamicpage->slug )->where('language_id' , 1)->first();
        $dynamicpage_ar = Daynamicpage::where('slug' , $dynamicpage->slug )->where('language_id' , 2)->first();
        $package_categories = PackageCategory::where('status', 1)->get();

        return view('admin.dynamicpage.edit', compact('dynamicpage', 'dynamicPageCategories', 'package_categories','dynamicpage_en','dynamicpage_ar'));
    }

    public function copy($id)
    {
        $dynamicPageCategories = dynamicPageCategories::where('status', 1)->get();
        $dynamicpage = Daynamicpage::find($id);
        $dynamicpage_en = Daynamicpage::where('slug' , $dynamicpage->slug )->where('language_id' , 1)->first();
        $dynamicpage_ar = Daynamicpage::where('slug' , $dynamicpage->slug )->where('language_id' , 2)->first();
        $package_categories = PackageCategory::where('status', 1)->get();

        return view('admin.dynamicpage.copy', compact('dynamicpage', 'dynamicPageCategories', 'package_categories' ,'dynamicpage_en','dynamicpage_ar'));
    }

    public function update(Request $request, $id )
    {
        $dynamicpage = Daynamicpage::find($id);
        $dynamicpage_en = $dynamicpage->where('slug' , $dynamicpage->slug )->where('language_id' , 1)->first();
        $dynamicpage_ar = $dynamicpage->where('slug' , $dynamicpage->slug )->where('language_id' , 2)->first();

        $ids = [$dynamicpage_en->id , $dynamicpage_ar->id];





        if ($request->has('mod')) {
            foreach ($request->mod as $randomKey => $modules) {
                foreach ($modules as $nameModule => $module) {
                    if (in_array($nameModule, Helper::modulesHasImage())) {
                        if ($request->hasFile('images.' . $randomKey . '.' . $nameModule . '.imageFile')) {
                            if ($dynamicpage->modules != null && array_key_exists($randomKey, $dynamicpage->modules) && $dynamicpage->modules[$randomKey][$nameModule]['image'] != null)
                                File::delete('assets/front/img/' . $nameModule . '/' . $dynamicpage->modules[$randomKey][$nameModule]['image']);


                            $file = $request->file('images')[$randomKey][$nameModule]['imageFile'];
                            $file->move('assets/front/img/' . $nameModule . '/', $request->mod[$randomKey][$nameModule]['image']);
                        }
                    }
                }
            }
        }
        //dd($request->mod);
        // $slug = Helper::make_slug($request->title);
        $slug = $request->slug;
        $dynamicpage->modules = $request->mod;


        $request->validate([
            'en_title' => 'required',
            'ar_title' => 'required',
            'slug' => 'required',
            'serial_number' => 'required',
            'status' => 'required',
        ]);



        // Save english page edit
        $dynamicpage_en->update([
            'language_id' => 1,
            'category_id' =>$request->category_id ?? null,
            'title' =>$request->en_title ,
            'slug' => $slug ,
            'status' => $request->status,
            'serial_number' => $request->serial_number,
            'meta_keywords' => $request->en_meta_keywords,
            'meta_description' => $request->en_meta_description,
            'footer' => $request->footer,
               'modules' => $request->mod
        ]);



        // Save arabic page edit
        $dynamicpage_ar->update([
            'language_id' => 2,
            'category_id' =>$request->category_id ?? null,
            'title' =>$request->ar_title ,
            'slug' => $slug ,
            'status' => $request->status,
            'serial_number' => $request->serial_number,
            'meta_keywords' => $request->ar_meta_keywords,
            'meta_description' => $request->ar_meta_description,
            'footer' => $request->footer,
               'modules' => $request->mod
        ]);


        if($request['update_continue'] === 'update_continue') {
            $notification = array(
                'messege' => 'Daynamic Page updated successfully!',
                'alert' => 'success'
            );
            return redirect()->back()->with('notification', $notification);
        }

        $notification = array(
            'messege' => 'Daynamic Page updated successfully!',
            'alert' => 'success'
        );
        $language = ($request->language_id == "2") ? 'ar' : 'en';
        return redirect(route('admin.dynamic_page') . '?language=' . $language)->with('notification', $notification);
    }

    public function delete($id)
    {

        $dynamicpage = Daynamicpage::find($id);

        if ($dynamicpage->modules != null) {
            foreach ($dynamicpage->modules as $randomKey => $modules) {
                foreach ($modules as $nameModule => $module) {
                    if (in_array($nameModule, Helper::modulesHasImage())) {

                        if ($dynamicpage->modules[$randomKey][$nameModule]['image'] != null)
                            File::delete('assets/front/img/' . $nameModule . '/' . $dynamicpage->modules[$randomKey][$nameModule]['image']);
                    }
                }
            }
        }

        $dynamicpage->delete();

        return back();
    }
}
