<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\FaqCategory;
use App\Models\FaqSection;
use Illuminate\Http\Request;

class FaqSectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $faqs = FaqSection::get();
        return view('admin.faq.index', compact('faqs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $faqs_categoris = FaqCategory::get();
        return  view('admin.faq.faq_add' ,compact('faqs_categoris'));
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
            'question_en' => 'required' ,
            'question_ar' => 'required',
            'answer_en' => 'required',
            'answer_ar' => 'required',
            'category_id' => 'required'
        ]);

        $faq = new FaqSection();
        $faq->question_en = $request->question_en;
        $faq->question_ar = $request->question_ar;
        $faq->answer_en = $request->answer_en;
        $faq->answer_ar = $request->answer_ar;
        $faq->category_id = $request->category_id;

        $faq->save();

        $notification = array(
            'messege' => 'Faq Added successfully!',
            'alert' => 'success'
        );
        return redirect(route('faq.index'))->with('notification', $notification);
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
        $faq = FaqSection::find($id);
        $faqs_categoris = FaqCategory::get();

        return view('admin.faq.faq_edit' , compact('faq','faqs_categoris'));
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
            'question_en' => 'required' ,
            'question_ar' => 'required',
            'answer_en' => 'required',
            'answer_ar' => 'required',
            'category_id' => 'required'
        ]);

        $faq = FaqSection::find($id);
        $faq->update([
            'question_en' => $request->question_en ,
            'question_ar' => $request->question_ar ,
             'answer_en' => $request->answer_en,
             'answer_ar' => $request->answer_ar,
             'category_id' => $request->category_id,
        ]);

        $notification = array(
            'messege' => 'Faq Updated successfully!',
            'alert' => 'success'
        );
        return redirect(route('faq.index'))->with('notification', $notification);
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
