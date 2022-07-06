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
        <nav>
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
              <a class="col-md-6 nav-item nav-link active" id="nav-en-small-icon-tab" data-toggle="tab" href="#nav-en-small-icon" role="tab" aria-controls="nav-en-small-icon" aria-selected="true">English</a>
              <a class="col-md-6 nav-item nav-link" id="nav-ar-small-icon-tab" data-toggle="tab" href="#nav-ar-small-icon" role="tab" aria-controls="nav-ar-small-icon" aria-selected="false">عربي</a>
            </div>
        </nav>
        @if(\Illuminate\Support\Str::contains(\Illuminate\Support\Facades\Route::getCurrentRoute()->getActionName(), 'edit'))

            <div class="tab-content" id="nav-tabContent">
                <div class="form-group row my-3">
                    <label class="col-sm-2 control-label">{{ __('Image') }}</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="mod[{{ $randomKey }}][section_with_icon][class_icon]"
                            placeholder="{{ __('Image') }}" value="{{  $moduleAttributes['class_icon'] }}"/>
                        @if ($errors->has('class_icon'))
                            <p class="text-danger"> {{ $errors->first('class_icon') }} </p>
                        @endif
                    </div>
                </div>
                <div class="tab-pane fade show active" id="nav-en-small-icon"  role="tabpanel" aria-labelledby="nav-en-small-icon-tab">
                    {{--english--}}
                    <div class="form-group row my-3">
                        <label class="col-sm-2 control-label">{{ __('Title') }}</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="mod[{{ $randomKey }}][section_with_icon][heading]"
                                placeholder="{{ __('Title') }}" value="{{  isset($moduleAttributes['heading']) ? $moduleAttributes['heading'] : '' }}">
                            @if ($errors->has('heading'))
                                <p class="text-danger"> {{ $errors->first('heading') }} </p>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 control-label">{{ __('Content') }}</label>
                        <div class="col-sm-10">
                            <textarea name="mod[{{ $randomKey }}][section_with_icon][paragraph]" class="form-control" rows="3"
                                    placeholder="{{ __('Content') }}">{{  isset($moduleAttributes['paragraph']) ? $moduleAttributes['paragraph'] : '' }}</textarea>
                            @if ($errors->has('paragraph'))
                                <p class="text-danger"> {{ $errors->first('paragraph') }} </p>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 control-label">{{ __('Link') }}</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="mod[{{ $randomKey }}][section_with_icon][button_url]"
                                placeholder="{{ __('Link') }}" value="{{  isset($moduleAttributes['button_url']) ? $moduleAttributes['button_url'] : '' }}">
                            @if ($errors->has('button_url'))
                                <p class="text-danger"> {{ $errors->first('button_url') }} </p>
                            @endif
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="nav-ar-small-icon" role="tabpanel" aria-labelledby="nav-ar-small-icon-tab">
                    {{--arabic--}}
                    <div class="form-group row my-3">
                        <label class="col-sm-2 control-label">{{ __('العنوان') }}</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="mod[{{ $randomKey }}][section_with_icon][ar_heading]"
                                placeholder="{{ __('العنوان') }}" value="{{  isset($moduleAttributes['ar_heading']) ? $moduleAttributes['ar_heading'] : ''}}">
                            @if ($errors->has('ar_heading'))
                                <p class="text-danger"> {{ $errors->first('ar_heading') }} </p>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 control-label">{{ __('المحتوي') }}</label>
                        <div class="col-sm-10">
                            <textarea name="mod[{{ $randomKey }}][section_with_icon][ar_paragraph]" class="form-control" rows="3"
                                    placeholder="{{ __('المحتوي') }}">{{ isset($moduleAttributes['ar_paragraph']) ? $moduleAttributes['ar_paragraph'] : '' }}</textarea>
                            @if ($errors->has('ar_paragraph'))
                                <p class="text-danger"> {{ $errors->first('ar_paragraph') }} </p>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 control-label">{{ __('الرابط') }}</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="mod[{{ $randomKey }}][section_with_icon][ar_button_url]"
                                placeholder="{{ __('الرابط') }}" value="{{  isset($moduleAttributes['ar_button_url']) ? $moduleAttributes['ar_button_url'] : '' }}">
                            @if ($errors->has('ar_button_url'))
                                <p class="text-danger"> {{ $errors->first('ar_button_url') }} </p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        @else

        <div class="tab-content" id="nav-tabContent">
            <div class="form-group row my-3">
                <label class="col-sm-2 control-label">{{ __('Image') }}</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control"
                        name="mod[{{ $randNumModule }}][section_with_icon][class_icon]"
                        placeholder="{{ __('Image') }}"/>
                    @if ($errors->has('class_icon'))
                        <p class="text-danger"> {{ $errors->first('class_icon') }} </p>
                    @endif
                </div>
            </div>
            <div class="tab-pane fade show active" id="nav-en-small-icon"  role="tabpanel" aria-labelledby="nav-en-small-icon-tab">
                {{--english--}}
                <div class="form-group row  my-3">
                    <label class="col-sm-2 control-label">{{ __('Title') }}</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="mod[{{ $randNumModule }}][section_with_icon][heading]"
                            placeholder="{{ __('Title') }}">
                        @if ($errors->has('heading'))
                            <p class="text-danger"> {{ $errors->first('heading') }} </p>
                        @endif
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 control-label">{{ __('Content') }}</label>
                    <div class="col-sm-10">
                        <textarea name="mod[{{ $randNumModule }}][section_with_icon][paragraph]" class="form-control"
                                rows="3" placeholder="{{ __('Content') }}"></textarea>
                        @if ($errors->has('paragraph'))
                            <p class="text-danger"> {{ $errors->first('paragraph') }} </p>
                        @endif
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 control-label">{{ __('Link') }}</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control"
                            name="mod[{{ $randNumModule }}][section_with_icon][button_url]"
                            placeholder="{{ __('Link') }}">
                        @if ($errors->has('button_url'))
                            <p class="text-danger"> {{ $errors->first('button_url') }} </p>
                        @endif
                    </div>
                </div>
            </div>

            <div class="tab-pane fade" id="nav-ar-small-icon" role="tabpanel" aria-labelledby="nav-ar-small-icon-tab">
                {{--arabic--}}
                <div class="form-group row  my-3">
                    <label class="col-sm-2 control-label">{{ __('العنوان') }}</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="mod[{{ $randNumModule }}][section_with_icon][ar_heading]"
                            placeholder="{{ __('العنوان') }}">
                        @if ($errors->has('ar_heading'))
                            <p class="text-danger"> {{ $errors->first('ar_heading') }} </p>
                        @endif
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 control-label">{{ __('المحتوي') }}</label>
                    <div class="col-sm-10">
                        <textarea name="mod[{{ $randNumModule }}][section_with_icon][ar_paragraph]" class="form-control"
                                rows="3" placeholder="{{ __('المحتوي') }}"></textarea>
                        @if ($errors->has('ar_paragraph'))
                            <p class="text-danger"> {{ $errors->first('ar_paragraph') }} </p>
                        @endif
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 control-label">{{ __('الرابط') }}</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control"
                            name="mod[{{ $randNumModule }}][section_with_icon][ar_button_url]"
                            placeholder="{{ __('الرابط') }}">
                        @if ($errors->has('ar_button_url'))
                            <p class="text-danger"> {{ $errors->first('ar_button_url') }} </p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        @endif
    </div>
</div>
<div class="clearfix"></div>