<div class="col-lg-12">
    @if (app()->getLocale() == 'ar')
        <div class="section-title text-center pb-50 pt-50">
            <h2>{{ $module['ar_title'] }}</h2>
            <p class="title">{!! $module['ar_text'] !!}</p>
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
        <div class="section-title text-center pb-50 pt-50">
            <h2>{{ $module['title'] }}</h2>
            <p class="title">{!! $module['text'] !!}</p>
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