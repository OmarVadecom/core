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
        @if(\Illuminate\Support\Str::contains(\Illuminate\Support\Facades\Route::getCurrentRoute()->getActionName(), 'edit'))
            <div class="form-group row">
                <label class="col-sm-2 control-label">{{ __('Class Icon') }}<span class="text-danger">*</span></label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="mod[{{ $randomKey }}][section_with_icon][class_icon]"
                           placeholder="{{ __('Class Icon') }}" value="{{  $moduleAttributes['class_icon'] }}"/>
                    @if ($errors->has('class_icon'))
                        <p class="text-danger"> {{ $errors->first('class_icon') }} </p>
                    @endif
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 control-label">{{ __('Heading') }}<span class="text-danger">*</span></label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="mod[{{ $randomKey }}][section_with_icon][heading]"
                           placeholder="{{ __('Heading') }}" value="{{  $moduleAttributes['heading'] }}">
                    @if ($errors->has('heading'))
                        <p class="text-danger"> {{ $errors->first('heading') }} </p>
                    @endif
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 control-label">{{ __('paragraph') }}<span class="text-danger">*</span></label>
                <div class="col-sm-10">
                    <textarea name="mod[{{ $randomKey }}][section_with_icon][paragraph]" class="form-control" rows="3"
                              placeholder="{{ __('paragraph') }}">{{  $moduleAttributes['paragraph'] }}</textarea>
                    @if ($errors->has('paragraph'))
                        <p class="text-danger"> {{ $errors->first('paragraph') }} </p>
                    @endif
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 control-label">{{ __('Button Content') }}<span
                            class="text-danger">*</span></label>
                <div class="col-sm-10">
                    <input type="text" class="form-control"
                           name="mod[{{ $randomKey }}][section_with_icon][button_content]"
                           placeholder="{{ __('Button Content') }}" value="{{ $moduleAttributes['button_content'] }}">
                    @if ($errors->has('button_content'))
                        <p class="text-danger"> {{ $errors->first('button_content') }} </p>
                    @endif
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 control-label">{{ __('Button Url') }}<span class="text-danger">*</span></label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="mod[{{ $randomKey }}][section_with_icon][button_url]"
                           placeholder="{{ __('Button Url') }}" value="{{  $moduleAttributes['button_url'] }}">
                    @if ($errors->has('button_url'))
                        <p class="text-danger"> {{ $errors->first('button_url') }} </p>
                    @endif
                </div>
            </div>
        @else
            <div class="form-group row">
                <label class="col-sm-2 control-label">{{ __('Class Icon') }}<span class="text-danger">*</span></label>
                <div class="col-sm-10">
                    <input type="text" class="form-control"
                           name="mod[{{ $randNumModule }}][section_with_icon][class_icon]"
                           placeholder="{{ __('Class Icon') }}"/>
                    @if ($errors->has('class_icon'))
                        <p class="text-danger"> {{ $errors->first('class_icon') }} </p>
                    @endif
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 control-label">{{ __('Heading') }}<span class="text-danger">*</span></label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="mod[{{ $randNumModule }}][section_with_icon][heading]"
                           placeholder="{{ __('Heading') }}">
                    @if ($errors->has('heading'))
                        <p class="text-danger"> {{ $errors->first('heading') }} </p>
                    @endif
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 control-label">{{ __('paragraph') }}<span class="text-danger">*</span></label>
                <div class="col-sm-10">
                    <textarea name="mod[{{ $randNumModule }}][section_with_icon][paragraph]" class="form-control"
                              rows="3" placeholder="{{ __('paragraph') }}"></textarea>
                    @if ($errors->has('paragraph'))
                        <p class="text-danger"> {{ $errors->first('paragraph') }} </p>
                    @endif
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 control-label">{{ __('Button Content') }}<span
                            class="text-danger">*</span></label>
                <div class="col-sm-10">
                    <input type="text" class="form-control"
                           name="mod[{{ $randNumModule }}][section_with_icon][button_content]"
                           placeholder="{{ __('Button Content') }}">
                    @if ($errors->has('button_content'))
                        <p class="text-danger"> {{ $errors->first('button_content') }} </p>
                    @endif
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 control-label">{{ __('Button Url') }}<span class="text-danger">*</span></label>
                <div class="col-sm-10">
                    <input type="text" class="form-control"
                           name="mod[{{ $randNumModule }}][section_with_icon][button_url]"
                           placeholder="{{ __('Button Url') }}">
                    @if ($errors->has('button_url'))
                        <p class="text-danger"> {{ $errors->first('button_url') }} </p>
                    @endif
                </div>
            </div>
        @endif
    </div>
</div>
<div class="clearfix"></div>