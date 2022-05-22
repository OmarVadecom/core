<div class="card">
    @php
        $randNumModule = \Illuminate\Support\Str::random(10);
    @endphp
    <div class="card-header toggle-open-close-module">
        <i class="fas fa-times icon-delete"></i>
        Call to Action
        <i class="minimize-module fas fa-chevron-down"></i>
    </div>
    <div class="card-body" style="display: none">
        <p>
            <a class="btn btn-primary" data-bs-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">عربي</a>
            <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#multiCollapseExample2" aria-expanded="false" aria-controls="multiCollapseExample2">English</button>
        </p>
        @if(\Illuminate\Support\Str::contains(\Illuminate\Support\Facades\Route::getCurrentRoute()->getActionName(), 'edit'))

            {{--English--}}
            <div class="form-group row collapse multi-collapse" id="multiCollapseExample2">
                <label class="col-sm-2 control-label">{{ __('Heading') }}<span class="text-danger">*</span></label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="mod[{{ $randomKey }}][call_to_action][heading]" placeholder="{{ __('Heading') }}" value="{{  $moduleAttributes['heading'] }}" >
                    @if ($errors->has('heading'))
                        <p class="text-danger"> {{ $errors->first('heading') }} </p>
                    @endif
                </div>
            </div>
            <div class="form-group row collapse multi-collapse" id="multiCollapseExample2">
                <label class="col-sm-2 control-label">{{ __('Button Content') }}<span class="text-danger">*</span></label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="mod[{{ $randomKey }}][call_to_action][button_content]" placeholder="{{ __('Button Content') }}" value="{{ $moduleAttributes['button_content'] }}" >
                    @if ($errors->has('button_content'))
                        <p class="text-danger"> {{ $errors->first('button_content') }} </p>
                    @endif
                </div>
            </div>
            <div class="form-group row collapse multi-collapse" id="multiCollapseExample2">
                <label class="col-sm-2 control-label">{{ __('Button Url') }}<span class="text-danger">*</span></label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="mod[{{ $randomKey }}][call_to_action][button_url]" placeholder="{{ __('Button Url') }}" value="{{  $moduleAttributes['button_url'] }}" >
                    @if ($errors->has('button_url'))
                        <p class="text-danger"> {{ $errors->first('button_url') }} </p>
                    @endif
                </div>
            </div>
       
            {{--Arabic--}}
       
            <div class="form-group row collapse multi-collapse" id="multiCollapseExample1">
                <label class="col-sm-2 control-label">{{ __('العنوان') }}<span class="text-danger">*</span></label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="mod[{{ $randomKey }}][call_to_action][ar_heading]" placeholder="{{ __('العنوان') }}" value="{{  $moduleAttributes['ar_heading'] }}" >
                    @if ($errors->has('ar_heading'))
                        <p class="text-danger"> {{ $errors->first('ar_heading') }} </p>
                    @endif
                </div>
            </div>
            <div class="form-group row collapse multi-collapse" id="multiCollapseExample1">
                <label class="col-sm-2 control-label">{{ __('Button Content') }}<span class="text-danger">*</span></label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="mod[{{ $randomKey }}][call_to_action][ar_button_content]" placeholder="{{ __('Button Content') }}" value="{{ $moduleAttributes['ar_button_content'] }}" >
                    @if ($errors->has('ar_button_content'))
                        <p class="text-danger"> {{ $errors->first('ar_button_content') }} </p>
                    @endif
                </div>
            </div>
            <div class="form-group row collapse multi-collapse" id="multiCollapseExample1">
                <label class="col-sm-2 control-label">{{ __('الرابط') }}<span class="text-danger">*</span></label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="mod[{{ $randomKey }}][call_to_action][ar_button_url]" placeholder="{{ __('الرابط') }}" value="{{  $moduleAttributes['ar_button_url'] }}" >
                    @if ($errors->has('ar_button_url'))
                        <p class="text-danger"> {{ $errors->first('ar_button_url') }} </p>
                    @endif
                </div>
            </div>
       
            @else

            {{--English--}}
            <div class="form-group row collapse multi-collapse" id="multiCollapseExample2">
                <label class="col-sm-2 control-label">{{ __('Heading') }}<span class="text-danger">*</span></label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="mod[{{ $randNumModule }}][call_to_action][heading]" placeholder="{{ __('Heading') }}" >
                    @if ($errors->has('heading'))
                        <p class="text-danger"> {{ $errors->first('heading') }} </p>
                    @endif
                </div>
            </div>
            <div class="form-group row collapse multi-collapse" id="multiCollapseExample2">
                <label class="col-sm-2 control-label">{{ __('Button Content') }}<span class="text-danger">*</span></label>
                <div class="col-sm-20">
                    <input type="text" class="form-control" name="mod[{{ $randNumModule }}][call_to_action][button_content]" placeholder="{{ __('Button Content') }}" >
                    @if ($errors->has('button_content'))
                        <p class="text-danger"> {{ $errors->first('button_content') }} </p>
                    @endif
                </div>
            </div>
            <div class="form-group row collapse multi-collapse" id="multiCollapseExample2">
                <label class="col-sm-2 control-label">{{ __('Button Url') }}<span class="text-danger">*</span></label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="mod[{{ $randNumModule }}][call_to_action][button_url]" placeholder="{{ __('Button Url') }}" >
                    @if ($errors->has('button_url'))
                        <p class="text-danger"> {{ $errors->first('button_url') }} </p>
                    @endif
                </div>
            </div>


             {{--Arabic--}}
             <div class="form-group row collapse multi-collapse" id="multiCollapseExample1">
                <label class="col-sm-2 control-label">{{ __('العنوان') }}<span class="text-danger">*</span></label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="mod[{{ $randNumModule }}][call_to_action][ar_heading]" placeholder="{{ __('العنوان') }}" >
                    @if ($errors->has('ar_heading'))
                        <p class="text-danger"> {{ $errors->first('ar_heading') }} </p>
                    @endif
                </div>
            </div>
            <div class="form-group row collapse multi-collapse" id="multiCollapseExample1">
                <label class="col-sm-2 control-label">{{ __('Button Content') }}<span class="text-danger">*</span></label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="mod[{{ $randNumModule }}][call_to_action][ar_button_content]" placeholder="{{ __('Button Content') }}" >
                    @if ($errors->has('ar_button_content'))
                        <p class="text-danger"> {{ $errors->first('ar_button_content') }} </p>
                    @endif
                </div>
            </div>
            <div class="form-group row collapse multi-collapse" id="multiCollapseExample1">
                <label class="col-sm-2 control-label">{{ __('الرابط') }}<span class="text-danger">*</span></label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="mod[{{ $randNumModule }}][call_to_action][ar_button_url]" placeholder="{{ __('الرابط') }}" >
                    @if ($errors->has('ar_button_url'))
                        <p class="text-danger"> {{ $errors->first('ar_button_url') }} </p>
                    @endif
                </div>
            </div>

        @endif
    </div>
</div>
<div class="clearfix"></div>