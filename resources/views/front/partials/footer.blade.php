<footer
    class="footer-area footer-area-two"
    style="background-image: url({{
                $setting->footer_bg_image ? asset('assets/front/img/' . $setting->footer_bg_image ) :
                                            asset('assets/front/img/footer_bg_image_default.jpg')
                                    }});
              "
>
    <div
        class="footer-overlay"
        @if(isset($front_daynamic_page) && $front_daynamic_page->footer == 'long_footer')
            style="padding-bottom: 50px"
        @endif
        @if(isset($front_daynamic_page) && $front_daynamic_page->footer == 'short_footer')
            style="padding-top: 20px"
        @endif
    >
    <div class="container position-relative">
        <div
            class="row footer-widgets"
            @if(isset($front_daynamic_page) && $front_daynamic_page->footer == 'short_footer')
                style="display: none"
            @endif
        >
            <div class="col-lg-2">
                <button class="btn btn-footer" id="web-design">
                    {{ __('web_deign') }}
                    <i class="fas fa-sort-down" aria-hidden="true"></i>
                </button>
                <ul class="list-unstyled web-design">
                    <li>
                        <a href="{{ $fLinks[0]['url'] ?? '#' }}">- {{ $fLinks[0]['name'] ?? 'Default Link' }}</a>
                    </li>
                    <li>
                        <a href="{{ $fLinks[1]['url'] ?? '#' }}">- {{ $fLinks[1]['name'] ?? 'Default Link' }}</a>
                    </li>
                    <li>
                        <a href="{{ $fLinks[2]['url'] ?? '#' }}">- {{ $fLinks[2]['name'] ?? 'Default Link' }}</a>
                    </li>
                    <li>
                        <a href="{{ $fLinks[3]['url'] ?? '#' }}">- {{ $fLinks[3]['name'] ?? 'Default Link' }}</a>
                    </li>
                </ul>
            </div>
            <div class="col-lg-2">
                <button class="btn btn-footer" id="graphic-design">
                    {{ __('graphic_design') }}
                    <i class="fas fa-sort-down" aria-hidden="true"></i>
                </button>
                <ul class="list-unstyled graphic-design">
                    <li>
                        <a href="{{ $fLinks[4]['url'] ?? '#' }}">- {{ $fLinks[4]['name'] ?? 'Default Link' }}</a>
                    </li>
                    <li>
                        <a href="{{ $fLinks[5]['url'] ?? '#' }}">- {{ $fLinks[5]['name'] ?? 'Default Link' }}</a>
                    </li>
                    <li>
                        <a href="{{ $fLinks[6]['url'] ?? '#' }}">- {{ $fLinks[6]['name'] ?? 'Default Link' }}</a>
                    </li>
                    <li>
                        <a href="{{ $fLinks[7]['url'] ?? '#' }}">- {{ $fLinks[7]['name'] ?? 'Default Link' }}</a>
                    </li>
                </ul>
            </div>
            <div class="col-lg-2">
                <button class="btn btn-footer" id="marketing">
                    {{ __('marketing') }}
                    <i class="fas fa-sort-down" aria-hidden="true"></i>
                </button>
                <ul class="list-unstyled marketing">
                    <li>
                        <a href="{{ $fLinks[8]['url'] ?? '#' }}">- {{ $fLinks[8]['name'] ?? 'Default Link' }}</a>
                    </li>
                    <li>
                        <a href="{{ $fLinks[9]['url'] ?? '#' }}">- {{ $fLinks[9]['name'] ?? 'Default Link' }}</a>
                    </li>
                    <li>
                        <a href="{{ $fLinks[10]['url'] ?? '#' }}">- {{ $fLinks[10]['name'] ?? 'Default Link' }}</a>
                    </li>
                    <li>
                        <a href="{{ $fLinks[11]['url'] ?? '#' }}">- {{ $fLinks[11]['name'] ?? 'Default Link' }}</a>
                    </li>
                </ul>
            </div>
            <div class="col-lg-2">
                <button class="btn btn-footer" id="services">
                    {{ __('services') }}
                    <i class="fas fa-sort-down" aria-hidden="true"></i>
                </button>
                <ul class="list-unstyled services">
                    <li>
                        <a href="{{ $fLinks[12]['url'] ?? '#' }}">- {{ $fLinks[12]['name'] ?? 'Default Link' }}</a>
                    </li>
                    <li>
                        <a href="{{ $fLinks[13]['url'] ?? '#' }}">- {{ $fLinks[13]['name'] ?? 'Default Link' }}</a>
                    </li>
                    <li>
                        <a href="{{ $fLinks[14]['url'] ?? '#' }}">- {{ $fLinks[14]['name'] ?? 'Default Link' }}</a>
                    </li>
                    <li>
                        <a href="{{ $fLinks[15]['url'] ?? '#' }}">- {{ $fLinks[15]['name'] ?? 'Default Link' }}</a>
                    </li>
                </ul>
            </div>
            <div class="col-lg-2">
                <button class="btn btn-footer" id="about">
                    {{ __('about_vadecom') }}
                    <i class="fas fa-sort-down" aria-hidden="true"></i>
                </button>
                <ul class="list-unstyled about">
                    <li>
                        <a href="{{ $fLinks[16]['url'] ?? '#' }}">- {{ $fLinks[16]['name'] ?? 'Default Link' }}</a>
                    </li>
                    <li>
                        <a href="{{ $fLinks[17]['url'] ?? '#' }}">- {{ $fLinks[17]['name'] ?? 'Default Link' }}</a>
                    </li>
                    <li>
                        <a href="{{ $fLinks[18]['url'] ?? '#' }}">- {{ $fLinks[18]['name'] ?? 'Default Link' }}</a>
                    </li>
                    <li>
                        <a href="{{ $fLinks[19]['url'] ?? '#' }}">- {{ $fLinks[19]['name'] ?? 'Default Link' }}</a>
                    </li>
                </ul>
            </div>
            <div class="col-lg-2">
                <button class="btn btn-footer" id="direction">
                    {{ __('direction') }}
                    <i class="fas fa-sort-down" aria-hidden="true"></i>
                </button>
                <ul class="list-unstyled direction">
                    <li>{{ __('harem_branch') }}</li>
                    <li>
                        <a href="{{ $fLinks[20]['url'] ?? '#' }}">- {{ $fLinks[20]['name'] ?? 'Default Link' }}</a>
                    </li>
                    <li>{{ __('faisal_branch') }}</li>
                    <li>
                        <a href="{{ $fLinks[21]['url'] ?? '#' }}">- {{ $fLinks[21]['name'] ?? 'Default Link' }}</a>
                    </li>
                </ul>
            </div>
        </div>
        <div
            class="row  end-footer p py-4 mt-4"
            @if(isset($front_daynamic_page) && $front_daynamic_page->footer == 'long_footer')
                style="display: none"
            @endif
            @if(isset($front_daynamic_page) && $front_daynamic_page->footer == 'short_footer')
                style="padding-top: 0 !important;margin-top: 0 !important;border-top: 0 !important"
            @endif
        >
            <div class="col-lg-5 justify-content-start">
                <p class="pr-1">{{ __('copyright') }} © {{ (new DateTime)->format("Y") }} {{ __('all_rights_reserved') }}</p>
                <a href="{{ $fLinks[22]['url'] ?? '#' }}"> {{ $fLinks[22]['name'] ?? 'Default Link' }}</a>
            </div>
            <div class="col-lg-4">
                <a href="{{ $fLinks[23]['url'] ?? '#' }}">{{ $fLinks[23]['name'] ?? 'Default Link' }}</a>
                <a href="{{ $fLinks[24]['url'] ?? '#' }}">{{ $fLinks[24]['name'] ?? 'Default Link' }}</a>
                <a href="{{ $fLinks[25]['url'] ?? '#' }}">{{ $fLinks[25]['name'] ?? 'Default Link' }}</a>
                <a href="{{ $fLinks[26]['url'] ?? '#' }}">{{ $fLinks[26]['name'] ?? 'Default Link' }}</a>
            </div>
            <div class="col-lg-3 d-flex justify-content-end">
                <a href="{{ $fLinks[27]['url'] ?? '#' }}">
                    <i class="fab fa-facebook-f" aria-hidden="true"></i>
                </a>
                <a href="{{ $fLinks[28]['url'] ?? '#' }}">
                    <i class="fab fa-twitter" aria-hidden="true"></i>
                </a>
                <a href="{{ $fLinks[29]['url'] ?? '#' }}">
                    <i class="fab fa-linkedin-in" aria-hidden="true"></i>
                </a>
                <a href="{{ $fLinks[30]['url'] ?? '#' }}">
                    <i class="fab fa-instagram" aria-hidden="true"></i>
                </a>
                <a href="{{ $fLinks[31]['url'] ?? '#' }}">
                    <i class="fab fa-youtube" aria-hidden="true"></i>
                </a>
            </div>
        </div>
    </div>
    </div>
</footer>