<div class="card">
    @php
        $randNumModule = \Illuminate\Support\Str::random(10);
    @endphp
    <div class="card-header toggle-open-close-module">
        <i class="fas fa-times icon-delete"></i>
        Small Icon with Text
        <i class="minimize-module fas fa-chevron-down"></i>
    </div>
    <div class="card-body" style="display: none">
        <p>
            <a class="btn btn-primary" data-bs-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">عربي</a>
            <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#multiCollapseExample2" aria-expanded="false" aria-controls="multiCollapseExample2">English</button>
        </p>
        @if(\Illuminate\Support\Str::contains(\Illuminate\Support\Facades\Route::getCurrentRoute()->getActionName(), 'edit'))

            
            <div class="form-group row>
                <label class="col-sm-2 control-label">{{ __('Image') }}<span class="text-danger">*</span></label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="mod[{{ $randomKey }}][section_with_icon][class_icon]"
                           placeholder="{{ __('Image') }}" value="{{  $moduleAttributes['class_icon'] }}"/>
                    @if ($errors->has('class_icon'))
                        <p class="text-danger"> {{ $errors->first('class_icon') }} </p>
                    @endif
                </div>
            </div>
            {{--english--}}
            <div class="form-group row collapse multi-collapse" id="multiCollapseExample2">
                <label class="col-sm-2 control-label">{{ __('Title') }}<span class="text-danger">*</span></label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="mod[{{ $randomKey }}][section_with_icon][heading]"
                           placeholder="{{ __('Title') }}" value="{{  $moduleAttributes['heading'] }}">
                    @if ($errors->has('heading'))
                        <p class="text-danger"> {{ $errors->first('heading') }} </p>
                    @endif
                </div>
            </div>
            <div class="form-group row collapse multi-collapse" id="multiCollapseExample2">
                <label class="col-sm-2 control-label">{{ __('Content') }}<span class="text-danger">*</span></label>
                <div class="col-sm-10">
                    <textarea name="mod[{{ $randomKey }}][section_with_icon][paragraph]" class="form-control" rows="3"
                              placeholder="{{ __('Content') }}">{{  $moduleAttributes['paragraph'] }}</textarea>
                    @if ($errors->has('paragraph'))
                        <p class="text-danger"> {{ $errors->first('paragraph') }} </p>
                    @endif
                </div>
            </div>
           
            <div class="form-group row collapse multi-collapse" id="multiCollapseExample2">
                <label class="col-sm-2 control-label">{{ __('Link') }}<span class="text-danger">*</span></label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="mod[{{ $randomKey }}][section_with_icon][button_url]"
                           placeholder="{{ __('Link') }}" value="{{  $moduleAttributes['button_url'] }}">
                    @if ($errors->has('button_url'))
                        <p class="text-danger"> {{ $errors->first('button_url') }} </p>
                    @endif
                </div>
            </div>

             {{--arabic--}}
            <div class="form-group row collapse multi-collapse" id="multiCollapseExample1">
                <label class="col-sm-2 control-label">{{ __('العنوان') }}<span class="text-danger">*</span></label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="mod[{{ $randomKey }}][section_with_icon][ar_heading]"
                           placeholder="{{ __('العنوان') }}" value="{{  $moduleAttributes['ar_heading'] }}">
                    @if ($errors->has('ar_heading'))
                        <p class="text-danger"> {{ $errors->first('ar_heading') }} </p>
                    @endif
                </div>
            </div>
            <div class="form-group row collapse multi-collapse" id="multiCollapseExample1">
                <label class="col-sm-2 control-label">{{ __('المحتوي') }}<span class="text-danger">*</span></label>
                <div class="col-sm-10">
                    <textarea name="mod[{{ $randomKey }}][section_with_icon][ar_paragraph]" class="form-control" rows="3"
                              placeholder="{{ __('المحتوي') }}">{{  $moduleAttributes['ar_paragraph'] }}</textarea>
                    @if ($errors->has('ar_paragraph'))
                        <p class="text-danger"> {{ $errors->first('ar_paragraph') }} </p>
                    @endif
                </div>
            </div>
           
            <div class="form-group row collapse multi-collapse" id="multiCollapseExample1">
                <label class="col-sm-2 control-label">{{ __('الرابط') }}<span class="text-danger">*</span></label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="mod[{{ $randomKey }}][section_with_icon][ar_button_url]"
                           placeholder="{{ __('الرابط') }}" value="{{  $moduleAttributes['ar_button_url'] }}">
                    @if ($errors->has('ar_button_url'))
                        <p class="text-danger"> {{ $errors->first('ar_button_url') }} </p>
                    @endif
                </div>
            </div>






        @else

        
            <div class="form-group row">
                <label class="col-sm-2 control-label">{{ __('Image') }}<span class="text-danger">*</span></label>
                <div class="col-sm-10">
                    <input type="text" class="form-control"
                           name="mod[{{ $randNumModule }}][section_with_icon][class_icon]"
                           placeholder="{{ __('Image') }}"/>
                    @if ($errors->has('class_icon'))
                        <p class="text-danger"> {{ $errors->first('class_icon') }} </p>
                    @endif
                </div>
            </div>
            {{--english--}}
            <div class="form-group row collapse multi-collapse" id="multiCollapseExample2">
                <label class="col-sm-2 control-label">{{ __('Title') }}<span class="text-danger">*</span></label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="mod[{{ $randNumModule }}][section_with_icon][heading]"
                           placeholder="{{ __('Title') }}">
                    @if ($errors->has('heading'))
                        <p class="text-danger"> {{ $errors->first('heading') }} </p>
                    @endif
                </div>
            </div>
            <div class="form-group row collapse multi-collapse" id="multiCollapseExample2">
                <label class="col-sm-2 control-label">{{ __('Content') }}<span class="text-danger">*</span></label>
                <div class="col-sm-10">
                    <textarea name="mod[{{ $randNumModule }}][section_with_icon][paragraph]" class="form-control"
                              rows="3" placeholder="{{ __('Content') }}"></textarea>
                    @if ($errors->has('paragraph'))
                        <p class="text-danger"> {{ $errors->first('paragraph') }} </p>
                    @endif
                </div>
            </div>
            
            <div class="form-group row collapse multi-collapse" id="multiCollapseExample2">
                <label class="col-sm-2 control-label">{{ __('Link') }}<span class="text-danger">*</span></label>
                <div class="col-sm-10">
                    <input type="text" class="form-control"
                           name="mod[{{ $randNumModule }}][section_with_icon][button_url]"
                           placeholder="{{ __('Link') }}">
                    @if ($errors->has('button_url'))
                        <p class="text-danger"> {{ $errors->first('button_url') }} </p>
                    @endif
                </div>
            </div>

              {{--arabic--}}

              <div class="form-group row collapse multi-collapse" id="multiCollapseExample1">
                <label class="col-sm-2 control-label">{{ __('العنوان') }}<span class="text-danger">*</span></label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="mod[{{ $randNumModule }}][section_with_icon][ar_heading]"
                           placeholder="{{ __('العنوان') }}">
                    @if ($errors->has('ar_heading'))
                        <p class="text-danger"> {{ $errors->first('ar_heading') }} </p>
                    @endif
                </div>
            </div>
            <div class="form-group row collapse multi-collapse" id="multiCollapseExample1">
                <label class="col-sm-2 control-label">{{ __('المحتوي') }}<span class="text-danger">*</span></label>
                <div class="col-sm-10">
                    <textarea name="mod[{{ $randNumModule }}][section_with_icon][ar_paragraph]" class="form-control"
                              rows="3" placeholder="{{ __('المحتوي') }}"></textarea>
                    @if ($errors->has('ar_paragraph'))
                        <p class="text-danger"> {{ $errors->first('ar_paragraph') }} </p>
                    @endif
                </div>
            </div>
            
            <div class="form-group row collapse multi-collapse" id="multiCollapseExample1">
                <label class="col-sm-2 control-label">{{ __('الرابط') }}<span class="text-danger">*</span></label>
                <div class="col-sm-10">
                    <input type="text" class="form-control"
                           name="mod[{{ $randNumModule }}][section_with_icon][ar_button_url]"
                           placeholder="{{ __('الرابط') }}">
                    @if ($errors->has('ar_button_url'))
                        <p class="text-danger"> {{ $errors->first('ar_button_url') }} </p>
                    @endif
                </div>
            </div>
        @endif
    </div>
</div>
<div class="clearfix"></div>