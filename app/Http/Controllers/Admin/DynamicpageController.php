<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\Helper;
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

        return view('admin.modules.style_of_modules.' . $request['module'], compact('package_categories'));
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
            'title' => [
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
            'language_id' => 'required',
        ]);

        $dynamicpage = new Daynamicpage();
        $dynamicpage->language_id = $request->language_id;
        $dynamicpage->category_id = $request->category_id;
        $dynamicpage->title = $request->title;
        $dynamicpage->slug = $slug;
        $dynamicpage->status = $request->status;
        $dynamicpage->serial_number = $request->serial_number;
        $dynamicpage->meta_keywords = $request->meta_keywords;
        $dynamicpage->meta_description = $request->meta_description;
        $dynamicpage->footer = $request->footer;

        $dynamicpage->modules = $request->mod;

        $dynamicpage->save();

        if($request['save_continue'] === 'save_continue') {
            $notification = array(
                'messege' => 'Daynamic Page added successfully!',
                'alert' => 'success'
            );
            return redirect()->route('admin.dynamic_page.edit', $dynamicpage['id'])->with('notification', $notification);
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
        $package_categories = PackageCategory::where('status', 1)->get();
        $category = dynamicPageCategories::where('id', $dynamicpage->category_id)->firstOrFail();
     
        return view('admin.dynamicpage.edit', compact('dynamicpage', 'dynamicPageCategories', 'package_categories','category'));
    }

    public function copy($id)
    {
        $dynamicPageCategories = dynamicPageCategories::where('status', 1)->get();
        $dynamicpage = Daynamicpage::find($id);
        $package_categories = PackageCategory::where('status', 1)->get();

        return view('admin.dynamicpage.copy', compact('dynamicpage', 'dynamicPageCategories', 'package_categories'));
    }

    public function update(Request $request, $id)
    {

        $dynamicpage = Daynamicpage::findOrFail($id);

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
        $dynamicpages = Daynamicpage::select('slug')->where('language_id', $request->language_id)->get();
        $dynamicpage->modules = $request->mod;

        $request->validate([
            'title' => [
                'required',
                'max:255',
                function ($attribute, $value, $fail) use ($slug, $dynamicpages, $dynamicpage) {
                    foreach ($dynamicpages as $blg) {
                        if ($dynamicpage->slug != $slug) {
                            if ($blg->slug == $slug) {
                                return $fail('title already taken!');
                            }
                        }
                    }
                },
                'unique:daynamicpages,title,' . $id
            ],
            'slug' => 'required',
            'serial_number' => 'required',
            'status' => 'required',
            'language_id' => 'required',
        ]);

        $dynamicpage->language_id = $request->language_id;
        $dynamicpage->category_id = $request->category_id ?? null;
        $dynamicpage->title = $request->title;
        $dynamicpage->slug = $slug;
        $dynamicpage->slug_with_category = $request->slug_with_category;
        $dynamicpage->status = $request->status;
        $dynamicpage->serial_number = $request->serial_number;
        $dynamicpage->meta_keywords = $request->meta_keywords;
        $dynamicpage->meta_description = $request->meta_description;
        $dynamicpage->footer = $request->footer;
        $dynamicpage->save();

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
