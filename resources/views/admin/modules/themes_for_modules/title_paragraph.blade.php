<div class="col-lg-12">
    <div class="section-title text-center pb-50 pt-50">
        @if (app()->getLocale() == 'ar')
        <h2 class="title-tag">{{ $module['ar_title'] }}</h2>
        @else
        <h2 class="title-tag">{{ $module['title'] }}</h2>
        @endif
       
    </div>
</div>