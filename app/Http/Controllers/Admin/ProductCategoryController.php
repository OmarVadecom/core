<?php

namespace App\Http\Controllers\Admin;

use App\Models\Language;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\ProductCategory;
use App\Http\Controllers\Controller;
use App\Models\Product;

class ProductCategoryController extends Controller
{
    public $lang;
    public function __construct()
    {
        $this->lang = Language::where('is_default',1)->first();
    }

    public function productcategory(Request $request)
    {
        $lang = Language::where('code', $request->language)->first();

        $pcategory = ProductCategory::where('language_id', $lang->id)
                    ->when($request['name'], function ($q) use ($request) {
                        return $q->where('name', 'LIKE', '%' . $request['name'] . '%');
                    })->when(($request['status'] == '0' || $request['status'] == '1'), function ($q) use ($request) {
                        return $q->where('status', $request['status']);
                    })->orderBy('id', 'DESC')->get();

        return view('admin.product.product-category.index', compact('pcategory'));
    }


    public function add(){

        return view('admin.product.product-category.add');
    }


    public function store(Request $request){

        $request->validate([
            'name' => 'required|unique:product_categories,name|max:150',
            'language_id' => 'required',
            'image' => 'required|mimes:jpeg,jpg,png',
            'status' => 'required',
        ]);

        $category = new ProductCategory();

        if($request->hasFile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $image = 'portfolio_'.time().rand().'.'.$extension;
            $file->move('assets/front/img/', $image);
            $category->image = $image;
        }

        $category->language_id = $request->language_id;
        $category->name = $request->name;
        $category->slug = Str::slug($request->name, "-");
        $category->status = $request->status;
        $category->save();

        $notification = array(
            'messege' => 'Product Category Added successfully!',
            'alert' => 'success'
        );
        return redirect()->back()->with('notification', $notification);
    }

    public function delete($id){

        $category = ProductCategory::findOrFail($id);
        $products = Product::where('category_id', $id)->get();

        if($products->count() >= 1){
            $notification = array(
                'messege' => 'First Delete Products Under This Category !',
                'alert' => 'warning'
            );
            return redirect()->back()->with('notification', $notification);
        }

        $category->delete();

        $notification = array(
            'messege' => 'Product Category Deleted successfully!',
            'alert' => 'success'
        );
        return redirect()->back()->with('notification', $notification);
      
    }


    public function edit($id){

        $category = ProductCategory::find($id);
        return view('admin.product.product-category.edit', compact('category'));

    }

    public function update(Request $request, $id){

        $id = $request->id;
        $request->validate([
            'name' => 'required|unique:product_categories,name,'.$id,
            'image' => 'mimes:jpeg,jpg,png',
            'status' => 'required',
        ]);

        $category = ProductCategory::find($id);

        if($request->hasFile('image')){
            @unlink('assets/front/img/'. $category->image);
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $image = 'portfolio_'.time().rand().'.'.$extension;
            $file->move('assets/front/img/', $image);
            $category->image = $image;
        }


        $category->language_id = $request->language_id;
        $category->name = $request->name;
        $category->slug = Str::slug($request->name, "-");
        $category->status = $request->status;
        $category->save();


        $notification = array(
            'messege' => 'Product Category Updated successfully!',
            'alert' => 'success'
        );
        return redirect(route('admin.product.category').'?language='.$this->lang->code)->with('notification', $notification);
    }



    public function makePopular(Request $request){

        $category = ProductCategory::find($request->category_id);
        $category->is_popular = $request->is_popular;
        $category->save();

        $notification = array(
            'messege' => 'Data Updated successfully!',
            'alert' => 'success'
        );
        return redirect()->back()->with('notification', $notification);
    }

    public function makeFeatured(Request $request){

        $category = ProductCategory::find($request->category_id);
        $category->is_feature = $request->is_feature;
        $category->save();

        $notification = array(
            'messege' => 'Data Updated successfully!',
            'alert' => 'success'
        );
        return redirect()->back()->with('notification', $notification);
    }
}
