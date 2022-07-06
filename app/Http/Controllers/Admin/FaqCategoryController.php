<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\FaqCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class FaqCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $faqcategories = FaqCategory::get();
        return view('admin.faq.category_view' ,compact('faqcategories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.faq.category_add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name_en' => 'required' ,
            'name_ar' => 'required'
        ]);

        $faq = new FaqCategory();
        $faq->name_en = $request->name_en;
        $faq->name_ar = $request->name_ar;

        $faq->save();

        $notification = array(
            'messege' => 'Faq Category Added successfully!',
            'alert' => 'success'
        );
        return redirect(route('faq-category.index'))->with('notification', $notification);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $faq_category = FaqCategory::find($id);
        return view('admin.faq.category_edit' , compact('faq_category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name_en' => 'required',
            'name_ar' => 'required',

        ]);

        $faq = FaqCategory::find($id);
        $faq->update([
            'name_en' => $request->name_en ,
            'name_ar' => $request->name_ar ,
        ]);


        $notification = array(
            'messege' => 'Faq Category Updated successfully!',
            'alert' => 'success'
        );
        return redirect(route('faq-category.index'))->with('notification', $notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $feq_category = FaqCategory::find($id);
        $feq_category->delete();


        $notification = array(
            'messege' => 'Faq Category Deleted successfully!',
            'alert' => 'success'
        );
        return redirect(route('faq-category.index'))->with('notification', $notification);
    }

    public function search()
    {

    }
}
