<div class="col-lg-4 col-md-6 col-sm-8">
    <div class="section-content text-center mb-30">
        <div class="icon">
            <i class="{{ $module['class_icon'] }}"></i>
        </div>
    @if (app()->getLocale() == 'ar')
            <h4 class="title"><a href="{{ $module['ar_button_url'] }}" class="link">{{ $module['ar_heading'] }}</a></h4>
            <p class="module-text">{{  $module['ar_paragraph'] }}</p>
    @else
            <h4 class="title"><a href="{{ $module['button_url'] }}" class="link">{{ $module['heading'] }}</a></h4>
            <p class="module-text">{{  $module['paragraph'] }}</p>
    @endif
    </div>
</div>