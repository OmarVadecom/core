<?php

namespace App\Http\Middleware;

use App\Models\Daynamicpage;
use App\Models\dynamicPageCategories;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class SlugWithCategory
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $front_daynamic_page = Daynamicpage::where('slug', $request->slug)->firstOrFail();
        if($front_daynamic_page->slug_with_category)
        {
            $category = dynamicPageCategories::where('id', $front_daynamic_page->category_id)->firstOrFail();
            return Redirect::route('front.front_cat_dynamic_page',['category'=>$category->slug,'slug'=>$request->slug]);//redirect('/'.$category->slug.'/'.$request->slug);
        }

        return $next($request);
    }
}
