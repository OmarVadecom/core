@php
    $links = json_decode($menus, true);
@endphp

<div class="site-nav-menu">
    <ul class="primary-menu">
        @php
            $product_category = App\Models\ProductCategory::where('language_id', $currentLang->id)->where('status',1)->get();
        @endphp
        @foreach ($links as $key => $link)
            @php
                $href = Helper::getHref($link);
            @endphp

            @if (strpos($link["type"], 'products-mega') !==  false)
                <li
                    data-name="{{ $product_category->count() >= 1 ? route('front.product.load', $product_category[0]->id) : '' }}"
                    class="megamenu-item dn-mobile @if($href == URL::current() ) current  @endif"
                    id="product_view"
                    data=""
                >
                    <a class="p-link" href="{{ route('front.products') }}">
                        {{ __('product') }}
                    </a>
                    <div class="megamenu">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row">
                                    @if ($product_category->count() >= 1)
                                        <div class="col-3">
                                            <div class="tabnav" role="tablist" aria-orientation="vertical">
                                                @foreach ($product_category as $pcategory)
                                                    <a
                                                        class="nav-link view_category_wise_product @if($loop->first) active @endif"
                                                        data-name="{{ route('front.product.load',$pcategory->id) }}"
                                                        aria-controls="v-pills-ptab{{ $pcategory->id }}"
                                                        id="v-pills-ptab{{ $pcategory->id }}-tab"
                                                        href="#v-pills-ptab{{ $pcategory->id }}"
                                                        data-target="{{ $pcategory->id }}"
                                                        aria-selected="true"
                                                        data-toggle="pill"
                                                        role="tab"
                                                    >{{ $pcategory->name }}</a>
                                                @endforeach
                                                <a href="{{ route('front.products') }}" class="nav-link">{{ __('All Categories') }}</a>
                                            </div>
                                        </div>
                                        <div class="col-9">
                                            <div class="tab-content" id="ajax_product_view">
                                                <img class="loader_ajax" src="{{ asset('assets/front/tenor.gif') }}" alt="" />
                                            </div>
                                        </div>
                                    @else
                                        <div class="col-lg-12 text-center bg-white">
                                            <span>{{ __('No Category & Product Found') }} </span>
                                        </div>
                                    @endif

                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="pore db-mobile @if(request()->path() == 'products') current  @endif">
                    <a class="" href="{{ route('front.products') }}">{{ __('Product') }}</a>
                </li>
            @else
                @if (!array_key_exists("children", $link))
                    {{-- <li class="pore  @if($href == URL::current() ) current  @endif"> --}}
                    <li class="pore  @if($key == 0) current  @endif">
                        <a
                            href="{{ $link["href"] == null ? $href : $link["href"] }}"
                            target="{{$link["target"]}}"
                            class=""
                        >{{$link["text"]}}</a>
                    </li>
                @else
                    <li class="submenu-wrapper pore @if($href == URL::current() ) current  @endif">
{{--                        <a class="sm-link p-link" href="{{$href}}" target="{{$link["target"]}}">{{$link["text"]}}</a>--}}
                        <a class="sm-link p-link" href="{{ $link["href"] }}" target="{{$link["target"]}}">{{$link["text"]}}</a>
                        <ul class="submenu">
                            @foreach($link["children"] as $level2)
                                @php
                                    $l2Href = Helper::getHref($level2);
                                @endphp
                                <li>
{{--                                    <a href="{{$l2Href}}" target="{{$level2["target"]}}">{{$level2["text"]}}</a>--}}
                                    <a href="{{ $level2["href"] }}" target="{{$level2["target"]}}">{{$level2["text"]}}</a>
                                    @php
                                        if (array_key_exists("children", $level2)) {
                                            Helper::createMenu($level2);
                                        }
                                    @endphp
                                </li>
                            @endforeach
                        </ul>
                    </li>
                @endif
            @endif
        @endforeach
        @if( $visibility->is_quote_page == 1)
            <li class="mobile-quote">
                <a href="{{ route('front.quot') }}">{{ __('Gate A Quote') }}</a>
            </li>
        @endif
    </ul>
    <a href="#" class="nav-close">
        <i class="fal fa-times"></i>
    </a>
</div>
<div class="header-extra d-flex align-items-center">
{{--    @if( $visibility->is_shop == 1)--}}
{{--        <div class="my-dropdown">--}}
{{--            <a href="{{ route('front.cart') }}" class="cart carticon">--}}
{{--                <div class="icon">--}}
{{--                    <i class="fal fa-shopping-cart" id="view_cart_ajax" data-target="{{ route('header.cart.load') }}"></i>--}}
{{--                    @php--}}
{{--                        $countitem = 0;--}}
{{--                        if(Session::has('cart')){--}}
{{--                            $cart = Session::get('cart');--}}
{{--                            $cartTotal = 0;--}}
{{--                            if($cart){--}}
{{--                                foreach($cart as $p){--}}
{{--                                    $cartTotal += (double)$p['price'] * (int)$p['qty'];--}}
{{--                                }--}}
{{--                            }--}}
{{--                        }else{--}}
{{--                            $cart = [];--}}
{{--                        }--}}
{{--                    @endphp--}}
{{--                    <span class="cart-quantity cart-count" data-target="{{ route('cart.qty.get') }}" id="cart-count">{{ count($cart) }}</span>--}}
{{--                </div>--}}
{{--            </a>--}}
{{--            <div class="my-dropdown-menu" id="cart-items">--}}
{{--                <div class="loader-center">--}}
{{--                    <img class="loader_ajax" src="{{ asset('assets/front/tenor.gif') }}" alt="">--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    @endif--}}
    <div class="nav-toggler">
        <span></span>
        <span></span>
        <span></span>
    </div>
{{--    @if( $visibility->is_quote_page == 1)--}}
{{--        <div class="navbar-btn">--}}
{{--            <a href="{{ route('front.quot') }}">{{ __('Gate A Quote') }}<i class="fal fa-long-arrow-right"></i></a>--}}
{{--        </div>--}}
{{--    @endif--}}
</div>