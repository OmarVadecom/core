<div class="col-sm-12 m-0 p-0">
    <section class="about-section " >
        <div class="container-fluid">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-12 col-md-12 m-0 p-0">
                    <div class="about-thumb">
                    @if(isset($module['bannar_type_en']))
                        @if($module['bannar_type_en'] == 'b_1' )
                            <div class="page-title-area" style="background-image: url('{{$module['image'] ? asset('' . $module['image']) : asset('assets/front/images/ss.png') }}" alt="broken Image">
                            {{-- <img src="{{$module['image'] ? asset('' . $module['image']) : asset('assets/front/images/ss.png') }}" alt="broken Image"> --}}
                            @if (app()->getLocale() == 'ar')
                                <div class="col-lg-12 col-md-10">
                                    <div class="about-text-block pl-lg-5 mt-md-gap-60">
                                        <div class="section-title mb-40">
                                            <h2 class="title">{{  $module['ar_title'] }}</h2>
                                        </div>
                                        <p>{{  $module['ar_content'] }}</p>
                                    </div>
                                    @if(isset($module))
                                        @if(isset($module['red_button']) || isset($module['yellow_button']))
                                            <div class="buttons d-flex mt-4 justify-content-center">
                                                @if(isset($module['red_button']) && $module['red_button']['ar_url'] != null && $module['red_button']['ar_text'] != null)
                                                    <div class="red-button mr-2">
                                                        <a
                                                            href="{{ $module['red_button']['ar_url'] }}"
                                                            class="red-btn-module btn-module"
                                                        >{{ $module['red_button']['ar_text'] }}</a>
                                                    </div>
                                                @endif
                                                @if(isset($module['yellow_button']) && $module['yellow_button']['ar_url'] != null && $module['yellow_button']['ar_text'] != null)
                                                    <div class="yellow-button">
                                                        <a
                                                            href="{{ $module['yellow_button']['ar_url'] }}"
                                                            class="yellow-btn-module btn-module"
                                                        >{{ $module['yellow_button']['ar_text'] }}</a>
                                                    </div>
                                                @endif
                                            </div>
                                        @endif
                                    @endif
                                </div>
                            @else
                                <div class="col-lg-12 col-md-10">
                                    <div class="about-text-block pl-lg-5 mt-md-gap-60">
                                        <div class="section-title mb-40">
                                            <h2 class="title">{{  $module['title'] }}</h2>
                                        </div>
                                        <p>{{  $module['content'] }}</p>
                                    </div>
                                    @if(isset($module))
                                        @if(isset($module['red_button']) || isset($module['yellow_button']))
                                            <div class="buttons d-flex mt-4 justify-content-center">
                                                @if(isset($module['red_button']) && $module['red_button']['url'] != null && $module['red_button']['text'] != null)
                                                    <div class="red-button mr-2">
                                                        <a
                                                            href="{{ $module['red_button']['url'] }}"
                                                            class="red-btn-module btn-module"
                                                        >{{ $module['red_button']['text'] }}</a>
                                                    </div>
                                                @endif
                                                @if(isset($module['yellow_button']) && $module['yellow_button']['url'] != null && $module['yellow_button']['text'] != null)
                                                    <div class="yellow-button">
                                                        <a
                                                            href="{{ $module['yellow_button']['url'] }}"
                                                            class="yellow-btn-module btn-module"
                                                        >{{ $module['yellow_button']['text'] }}</a>
                                                    </div>
                                                @endif
                                            </div>
                                        @endif
                                    @endif
                                </div>
                            @endif
                            </div>
                        @elseif($module['bannar_type_en'] == 'b_2')
                            <div class="page-title-area " style="background-image: url('{{$module['image'] ? asset('' . $module['image']) : asset('assets/front/images/ss.png') }}" alt="broken Image">
                            {{-- <img src="{{$module['image'] ? asset('' . $module['image']) : asset('assets/front/images/ss.png') }}" alt="broken Image"> --}}
                            @if (app()->getLocale() == 'ar')
                                <div class="col-lg-12 col-md-10">
                                    <div class="about-text-block pl-lg-5 mt-md-gap-60">
                                        <div class="section-title mb-40">
                                            <h2 class="title">{{  $module['ar_title'] }}</h2>
                                        </div>
                                        <p>{{  $module['ar_content'] }}</p>
                                    </div>
                                    @if(isset($module))
                                        @if(isset($module['red_button']) || isset($module['yellow_button']))
                                            <div class="buttons d-flex mt-4 justify-content-center">
                                                @if(isset($module['red_button']) && $module['red_button']['ar_url'] != null && $module['red_button']['ar_text'] != null)
                                                    <div class="red-button mr-2">
                                                        <a
                                                            href="{{ $module['red_button']['ar_url'] }}"
                                                            class="red-btn-module btn-module"
                                                        >{{ $module['red_button']['ar_text'] }}</a>
                                                    </div>
                                                @endif
                                                @if(isset($module['yellow_button']) && $module['yellow_button']['ar_url'] != null && $module['yellow_button']['ar_text'] != null)
                                                    <div class="yellow-button">
                                                        <a
                                                            href="{{ $module['yellow_button']['ar_url'] }}"
                                                            class="yellow-btn-module btn-module"
                                                        >{{ $module['yellow_button']['ar_text'] }}</a>
                                                    </div>
                                                @endif
                                            </div>
                                        @endif
                                    @endif
                                </div>
                            @else
                                <div class="col-lg-12 col-md-10">
                                    <div class="about-text-block pl-lg-5 mt-md-gap-60">
                                        <div class="section-title mb-40">
                                            <h2 class="title">{{  $module['title'] }}</h2>
                                        </div>
                                        <p>{{  $module['content'] }}</p>
                                    </div>
                                    @if(isset($module))
                                        @if(isset($module['red_button']) || isset($module['yellow_button']))
                                            <div class="buttons d-flex mt-4 justify-content-center">
                                                @if(isset($module['red_button']) && $module['red_button']['url'] != null && $module['red_button']['text'] != null)
                                                    <div class="red-button mr-2">
                                                        <a
                                                            href="{{ $module['red_button']['url'] }}"
                                                            class="red-btn-module btn-module"
                                                        >{{ $module['red_button']['text'] }}</a>
                                                    </div>
                                                @endif
                                                @if(isset($module['yellow_button']) && $module['yellow_button']['url'] != null && $module['yellow_button']['text'] != null)
                                                    <div class="yellow-button">
                                                        <a
                                                            href="{{ $module['yellow_button']['url'] }}"
                                                            class="yellow-btn-module btn-module"
                                                        >{{ $module['yellow_button']['text'] }}</a>
                                                    </div>
                                                @endif
                                            </div>
                                        @endif
                                    @endif
                                </div>
                            @endif
                            </div>
                        @elseif($module['bannar_type_en'] == 'b_3')
                            <div class="page-title-area text-right" style="background-image: url('{{$module['image'] ? asset('' . $module['image']) : asset('assets/front/images/ss.png') }}" alt="broken Image">
                            {{-- <img src="{{$module['image'] ? asset('' . $module['image']) : asset('assets/front/images/ss.png') }}" alt="broken Image"> --}}
                            @if (app()->getLocale() == 'ar')
                                <div class="col-lg-12 col-md-10">
                                    <div class="about-text-block pl-lg-5 mt-md-gap-60">
                                        <div class="section-title mb-40">
                                            <h2 class="title">{{  $module['ar_title'] }}</h2>
                                        </div>
                                        <p>{{  $module['ar_content'] }}</p>
                                    </div>
                                    @if(isset($module))
                                        @if(isset($module['red_button']) || isset($module['yellow_button']))
                                            <div class="buttons d-flex mt-4 justify-content-center">
                                                @if(isset($module['red_button']) && $module['red_button']['ar_url'] != null && $module['red_button']['ar_text'] != null)
                                                    <div class="red-button mr-2">
                                                        <a
                                                            href="{{ $module['red_button']['ar_url'] }}"
                                                            class="red-btn-module btn-module"
                                                        >{{ $module['red_button']['ar_text'] }}</a>
                                                    </div>
                                                @endif
                                                @if(isset($module['yellow_button']) && $module['yellow_button']['ar_url'] != null && $module['yellow_button']['ar_text'] != null)
                                                    <div class="yellow-button">
                                                        <a
                                                            href="{{ $module['yellow_button']['ar_url'] }}"
                                                            class="yellow-btn-module btn-module"
                                                        >{{ $module['yellow_button']['ar_text'] }}</a>
                                                    </div>
                                                @endif
                                            </div>
                                        @endif
                                    @endif
                                </div>
                            @else
                                <div class="col-lg-12 col-md-10">
                                    <div class="about-text-block pl-lg-5 mt-md-gap-60">
                                        <div class="section-title mb-40">
                                            <h2 class="title">{{  $module['title'] }}</h2>
                                        </div>
                                        <p>{{  $module['content'] }}</p>
                                    </div>
                                    @if(isset($module))
                                        @if(isset($module['red_button']) || isset($module['yellow_button']))
                                            <div class="buttons d-flex mt-4 justify-content-center">
                                                @if(isset($module['red_button']) && $module['red_button']['url'] != null && $module['red_button']['text'] != null)
                                                    <div class="red-button mr-2">
                                                        <a
                                                            href="{{ $module['red_button']['url'] }}"
                                                            class="red-btn-module btn-module"
                                                        >{{ $module['red_button']['text'] }}</a>
                                                    </div>
                                                @endif
                                                @if(isset($module['yellow_button']) && $module['yellow_button']['url'] != null && $module['yellow_button']['text'] != null)
                                                    <div class="yellow-button">
                                                        <a
                                                            href="{{ $module['yellow_button']['url'] }}"
                                                            class="yellow-btn-module btn-module"
                                                        >{{ $module['yellow_button']['text'] }}</a>
                                                    </div>
                                                @endif
                                            </div>
                                        @endif
                                    @endif
                                </div>
                            @endif
                            </div>
                        @endif
                    @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>























{{-- 
<div class="col-sm-12">
    <section class="about-section section-gap" style="padding-bottom: 185px">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-6 col-md-8">
                    <div class="about-thumb" style="width: 550px;height: 650px;text-align: center; line-height: 650px;">
                        <img src="{{$module['image'] ? asset('' . $module['image']) : asset('assets/front/images/ss.png') }}" alt="broken Image">
                    </div>
                </div>
                <div class="col-lg-6 col-md-10">
                    <div class="about-text-block pl-lg-5 mt-md-gap-60">
                        <div class="section-title mb-40">
                            <h2 class="title">{{  $module['title'] }}</h2>
                        </div>
                        <p>{{  $module['content'] }}</p>
                    </div>
                    @if(isset($module))
                        @if(isset($module['red_button']) || isset($module['yellow_button']))
                            <div class="buttons d-flex mt-4">
                                @if(isset($module['red_button']) && $module['red_button']['url'] != null && $module['red_button']['text'] != null)
                                    <div class="red-button mr-2">
                                        <a
                                            href="{{ $module['red_button']['url'] }}"
                                            class="red-btn-module btn-module"
                                        >{{ $module['red_button']['text'] }}</a>
                                    </div>
                                @endif
                                @if(isset($module['yellow_button']) && $module['yellow_button']['url'] != null && $module['yellow_button']['text'] != null)
                                    <div class="yellow-button">
                                        <a
                                            href="{{ $module['yellow_button']['url'] }}"
                                            class="yellow-btn-module btn-module"
                                        >{{ $module['yellow_button']['text'] }}</a>
                                    </div>
                                @endif
                            </div>
                        @endif
                    @endif
                </div>
            </div>
        </div>
    </section>
</div> --}}
