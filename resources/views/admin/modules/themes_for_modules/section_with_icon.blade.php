<div class="col-lg-4 col-md-6 col-sm-8">
    @if (app()->getLocale() == 'ar')
        <div class="section-content text-center mb-30">
            <div class="icon">
                <i class="{{ $module['ar_class_icon'] }}"></i>
            </div>
            <h4 class="title"><a href="{{ $module['ar_button_url'] }}" class="link">{{ $module['ar_heading'] }}</a></h4>
            <p class="module-text">{{  $module['ar_paragraph'] }}</p>
        </div>
    @else
        <div class="section-content text-center mb-30">
            <div class="icon">
                <i class="{{ $module['class_icon'] }}"></i>
            </div>
            <h4 class="title"><a href="{{ $module['button_url'] }}" class="link">{{ $module['heading'] }}</a></h4>
            <p class="module-text">{{  $module['paragraph'] }}</p>
        </div>
    @endif
</div>