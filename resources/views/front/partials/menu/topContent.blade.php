<div class="col-sm-auto col-12">
    <div class="top-left-content">
   

{{--        @if( $visibility->is_shop == 1)--}}
{{--        <div class="language-change curr-change">--}}
{{--            <p class="name--}}
{{--            @if(request()->path() == '/')--}}
{{--                @if($commonsetting->theme_version == 'theme1')--}}
{{--                    @if($commonsetting->is_video_hero == '1')--}}
{{--                        text-white--}}
{{--                    @endif--}}
{{--                @elseif($commonsetting->theme_version == 'theme3')--}}
{{--                    text-white--}}
{{--                @elseif($commonsetting->theme_version == 'theme4')--}}
{{--                    text-white --}}
{{--                @elseif($commonsetting->theme_version == 'theme5')--}}
{{--                    @if($commonsetting->is_video_hero == '1')--}}
{{--                        text-white--}}
{{--                    @endif--}}
{{--                @elseif($commonsetting->theme_version == 'theme6')--}}
{{--                    @if($commonsetting->is_video_hero == '1')--}}
{{--                        text-white--}}
{{--                    @endif--}}
{{--                @endif--}}
{{--            @else --}}
{{--                text-white--}}
{{--            @endif--}}
{{--            ">{{ $currentCurrency->sign }} {{ $currentCurrency->name }}</p>--}}
{{--            <div class="language-menu">--}}
{{--                @foreach ($currencies as $currency)--}}
{{--                <a href="{{ route('changeCurrency', $currency->id) }}" class="{{ $currency->id == $currentCurrency->code ? 'active' : '' }}">{{ $currency->name }}</a>--}}
{{--                @endforeach--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        @endif--}}
    </div>
</div>
<div class="col-sm-auto col-12">
    <div class="top-right-wrapper">
        <div class="social-icon text-center">
            <ul>
                @foreach ($socials as $item)
                <li><a href="{{ $item->url }}"><i class="{{ $item->icon }}"></i></a></li>
                @endforeach
                
            </ul>
        </div>
        <div class="language-change">
            @if($currentLang->code == "ar")
                <a class="name text-white" href="{{ Helper::changeSiteLocale('en') }}" >
                    <i class="fas fa-globe-americas"></i>
                    E
                </a>
                @else
            {{-- @elseif($currentLang->code == "ar") --}}
                <a class="name text-white" href="{{ Helper::changeSiteLocale('ar') }}" >
                    <i class="fas fa-globe-americas"></i>
                    ع
                </a>
            @endif
        </div>
    </div>
</div>