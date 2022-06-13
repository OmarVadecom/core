<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\DynamicPageCategoryRequest;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use App\Models\dynamicPageCategories;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Routing\Redirector;
use Illuminate\Http\Request;
use App\Models\Language;

class DynamicPageCategoryController extends Controller
{
    const VIEW = 'admin.dynamic_page_categories';
    private $routeName;

    public function __construct()
    {
        if(session()->has('lang')) {
            $currentLang = Language::where('code', session()->get('lang'))->first();
            $currentLangCode = $currentLang->code;
        } else {
            $currentLangCode = 'en';
        }

        $this->routeName = route('dynamic-page-categories.index') . '?language=' . $currentLangCode;
    }

    /**
     * Display A Listing of The Resource.
     * @param Request $request
     * @return Factory|View
     */
    public function index(Request $request)
    {
        $lang = Language::where('code', $request['language'])->first();

        $dynamicPageCategories = dynamicPageCategories::where('language_id', $lang->id)
                                ->when($request['title'], function ($q) use ($request) {
                                    return $q->where('title', 'LIKE', '%' . $request['title'] . '%');
                                })->when(($request['status'] === '0' || $request['status'] === '1'), function ($q) use ($request) {
                                    return $q->where('status', $request['status']);
                                })->orderBy('id', 'DESC')->get();

        return view(self::VIEW . '.index', compact('dynamicPageCategories'));
    }

    /**
     * Show The Form For Creating A New Resource.
     */
    public function create()
    {
        return view(self::VIEW . '.add');
    }

    /**
     * Store A Newly Created Resource In Storage.
     * @param DynamicPageCategoryRequest $request
     * @return Application|Redirector|RedirectResponse
     */
    public function store(DynamicPageCategoryRequest $request)
    {
        $data = $request->only(['title', 'slug', 'status', 'language_id']);
        dynamicPageCategories::create($data);
        $notification = array(
            'messege'   => 'Dynamic Page Category Created successfully!',
            'alert'     => 'success'
        );
        return redirect($this->routeName)->with('notification', $notification);
    }

    /**
     * Show The Form For Editing The Specified Resource.
     * @param int $id
     * @return Application|Factory|View|Redirector|RedirectResponse
     */
    public function edit(int $id)
    {
        $dynamicPageCategory = dynamicPageCategories::find($id);
        if(!$dynamicPageCategory) {
            $notification = array(
                'messege'   => 'This Dynamic Page Category Not Found!',
                'alert'     => 'danger'
            );
            return redirect($this->routeName)->with('notification', $notification);
        }

        return view(self::VIEW . '.edit', compact('dynamicPageCategory'));
    }

    /**
     * Update The Specified Resource In Storage.
     * @param DynamicPageCategoryRequest $request
     * @param int $id
     * @return Application|RedirectResponse|Redirector
     */
    public function update(DynamicPageCategoryRequest $request, int $id)
    {
        $dynamicPageCategory = dynamicPageCategories::find($id);
        if(!$dynamicPageCategory) {
            $notification = array(
                'messege'   => 'This Dynamic Page Category Not Found!',
                'alert'     => 'danger'
            );
            return redirect($this->routeName)->with('notification', $notification);
        }

        $data = $request->only(['title', 'slug', 'status', 'language_id']);
        $dynamicPageCategory->update($data);
        $notification = array(
            'messege'   => 'Dynamic Page Category Updated successfully!',
            'alert'     => 'success'
        );
        return redirect($this->routeName)->with('notification', $notification);
    }

    /**
     * Remove The Specified Resource From Storage.
     * @param int $id
     * @return Application|RedirectResponse|Redirector
     */
    public function destroy(int $id)
    {
        $dynamicPageCategory = dynamicPageCategories::find($id);
        if(!$dynamicPageCategory) {
            $notification = array(
                'messege'   => 'This Dynamic Page Category Not Found!',
                'alert'     => 'danger'
            );
            return redirect($this->routeName)->with('notification', $notification);
        }

        $dynamicPageCategory->delete();
        $notification = array(
            'messege'   => 'Dynamic Page Category Deleted successfully!',
            'alert'     => 'success'
        );
        return redirect($this->routeName)->with('notification', $notification);
    }
}
