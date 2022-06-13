<!--====== SERVICES PLANS PART START ======-->
@php
    $category=App\Models\PackageCategory::find($module['category_id']);
    $plans=$category->packages;
@endphp
{{-- <h2 class="text-center" style="padding-top:30px; ">{{$category->name}}</h2> --}}
<div class="pricing-section section-gap" style="padding-top: 30px;">
    <div class="container">
        <div class="row">
            @foreach($plans as $key => $plan)
                <div class="col-lg-4 col-md-6 col-sm-8 mt-30">
                    <div class="pricing-plan-item text-center">
                        <b class="plan-name">{{ $plan->title }}</b>
                        <h3 class="price"><span> {{Helper::showCurrencyPrice($plan->price)}}</span></h3>
                        @if($plan->old_price)
                            <del class="price" style="color: #81a3bb">
								{{Helper::showCurrencyPrice($plan->old_price)}}
							</del>
                        @else
                            <span class="bar"></span>
                        @endif
                        <ul class="list">
                            @php
                                $feature = explode( ',', $plan->feature );
                                for ($i=0; $i < count($feature); $i++) {
                                    echo '<li><p href="mailto:'.$feature[$i].'">'.$feature[$i].'</p></li>';
                                }
                            @endphp
                        </ul>

                        <a
							href="{{url('/')}}/request-package/{{$category->slug}}/{{$plan->slug}}"
							class="plans-btn"
						>{{ ($plan->button_text != "") ? $plan->button_text : __('Buy Now') }}</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
<!--====== SERVICES PLANS PART ENDS ======-->