<?php

namespace App\Http\Controllers\Admin;

use App\Models\PackageCategory;
use App\Models\Language;
use App\Models\Sectiontitle;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PackageCategoryController extends Controller
{
    const VIEW = 'admin.package_categories';
    private $routeName;

    public function __construct()
    {
        $this->lang = Language::where('is_default',1)->first();


    }

    /**
     * Display A Listing of The Resource.
     */
    public function index(Request $request)
    {
        $PackagesCategories = PackageCategory::when($request['name'], function ($q) use ($request) {
                                    return $q->where('name_en', 'LIKE', '%' . $request['name'] . '%');
                                })->when($request['slug'], function ($q) use ($request) {
                                    return $q->where('slug', 'LIKE', '%' . $request['slug'] . '%');
                                })->when(in_array($request['status'], ['0', '1']), function ($q) use ($request) {
                                    return $q->where('status', $request['status']);
                                })->orderBy('id', 'DESC')->get();

        return view(self::VIEW . '.index', compact('PackagesCategories'));
    }

    /**
     * Show The Form For Creating A New Resource.
     */
    public function create()
    {
        return view(self::VIEW . '.add');
    }


    public function store(Request $request)
    {
        $request->validate([
            'name_ar' => 'required|max:150',
            'name_en' => 'required',
            'slug'          => 'required | string | min:3 | max:255 | unique:packages_categories,slug',
            'status'        => 'required | in:0,1',
        ]);
        PackageCategory::create($request->all());
        $notification = array(
            'messege' => 'Package Category Added successfully!',
            'alert' => 'success'
        );
 
        return redirect()->back()->with('notification', $notification);
    }

 
    public function edit(int $id)
    {
        $PackageCategory = PackageCategory::find($id);
        if(!$PackageCategory) {
            $notification = array(
                'messege'   => 'This Package Category Not Found!',
                'alert'     => 'danger'
            );
            return redirect($this->routeName)->with('notification', $notification);
        }

        return view(self::VIEW . '.edit', compact('PackageCategory'));
    }



    public function update(Request $request, int $id)
    {
        $PackageCategory = PackageCategory::find($id);
        if(!$PackageCategory) {
            $notification = array(
                'messege'   => 'This Package Category Not Found!',
                'alert'     => 'danger'
            );
            return redirect($this->routeName)->with('notification', $notification);
        }

        $request->validate([
            'name_ar' => 'required|max:150',
            'name_en' => 'required',
            'slug'          => 'required | string | min:3 | max:255 | unique:packages_categories,slug,' . request('package_category_id'),
            'status'        => 'required | in:0,1',
        ]);
        
        $PackageCategory->update($request->all());
        $notification = array(
            'messege'   => 'Package Category Updated successfully!',
            'alert'     => 'success'
        );
        return redirect(route('package-category.index').'?language='.$this->lang->code)->with('notification', $notification);;
    }


    public function destroy(int $id)
    {
        $PackageCategory = PackageCategory::find($id);
        if(!$PackageCategory) {
            $notification = array(
                'messege'   => 'Package Category Not Found!',
                'alert'     => 'danger'
            );
            return redirect($this->routeName)->with('notification', $notification);
        }

        $PackageCategory->delete();
        $notification = array(
            'messege'   => 'Package Category Deleted successfully!',
            'alert'     => 'success'
        );
        return redirect()->back()->with('notification', $notification);
    }
}
