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
        <nav>
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
              <a class="col-md-6 nav-item nav-link active" id="nav-en-call-to-action-tab" data-toggle="tab" href="#nav-en-call-to-action" role="tab" aria-controls="nav-en-call-to-action" aria-selected="true">English</a>
              <a class="col-md-6 nav-item nav-link" id="nav-ar-call-to-action-tab" data-toggle="tab" href="#nav-ar-call-to-action" role="tab" aria-controls="nav-ar-call-to-action" aria-selected="false">عربي</a>
            </div>
        </nav>
        @if(\Illuminate\Support\Str::contains(\Illuminate\Support\Facades\Route::getCurrentRoute()->getActionName(), 'edit'))

            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-en-call-to-action"  role="tabpanel" aria-labelledby="nav-en-call-to-action-tab">
                {{--English--}}
                    <div class="form-group row my-3">
                        <label class="col-sm-2 control-label">{{ __('Heading') }}<span class="text-danger">*</span></label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="mod[{{ $randomKey }}][call_to_action][heading]" placeholder="{{ __('Heading') }}" value="{{ isset($moduleAttributes['heading']) ? $moduleAttributes['heading'] : '' }}" >
                            @if ($errors->has('heading'))
                                <p class="text-danger"> {{ $errors->first('heading') }} </p>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 control-label">{{ __('Button Content') }}<span class="text-danger">*</span></label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="mod[{{ $randomKey }}][call_to_action][button_content]" placeholder="{{ __('Button Content') }}" value="{{ isset($moduleAttributes['button_content']) ? $moduleAttributes['button_content'] : '' }}" >
                            @if ($errors->has('button_content'))
                                <p class="text-danger"> {{ $errors->first('button_content') }} </p>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 control-label">{{ __('Button Url') }}<span class="text-danger">*</span></label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="mod[{{ $randomKey }}][call_to_action][button_url]" placeholder="{{ __('Button Url') }}" value="{{isset($moduleAttributes['button_url']) ? $moduleAttributes['button_url'] : '' }}" >
                            @if ($errors->has('button_url'))
                                <p class="text-danger"> {{ $errors->first('button_url') }} </p>
                            @endif
                        </div>
                    </div>
                
                </div>

                <div class="tab-pane fade" id="nav-ar-call-to-action" role="tabpanel" aria-labelledby="nav-ar-call-to-action-tab">

                {{--Arabic--}}
                    <div class="form-group row my-3">
                        <label class="col-sm-2 control-label">{{ __('العنوان') }}<span class="text-danger">*</span></label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="mod[{{ $randomKey }}][call_to_action][ar_heading]" placeholder="{{ __('العنوان') }}" value="{{ isset($moduleAttributes['ar_heading']) ? $moduleAttributes['ar_heading'] : '' }}" >
                            @if ($errors->has('ar_heading'))
                                <p class="text-danger"> {{ $errors->first('ar_heading') }} </p>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 control-label">{{ __('Button Content') }}<span class="text-danger">*</span></label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="mod[{{ $randomKey }}][call_to_action][ar_button_content]" placeholder="{{ __('Button Content') }}" value="{{ isset($moduleAttributes['ar_button_content']) ? $moduleAttributes['ar_button_content'] : ''}}" >
                            @if ($errors->has('ar_button_content'))
                                <p class="text-danger"> {{ $errors->first('ar_button_content') }} </p>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 control-label">{{ __('الرابط') }}<span class="text-danger">*</span></label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="mod[{{ $randomKey }}][call_to_action][ar_button_url]" placeholder="{{ __('الرابط') }}" value="{{ isset($moduleAttributes['ar_button_url']) ? $moduleAttributes['ar_button_url'] : '' }}" >
                            @if ($errors->has('ar_button_url'))
                                <p class="text-danger"> {{ $errors->first('ar_button_url') }} </p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            @else

            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-en-call-to-action"  role="tabpanel" aria-labelledby="nav-en-call-to-action-tab">
            {{--English--}}
                    <div class="form-group row my-3">
                        <label class="col-sm-2 control-label">{{ __('Heading') }}<span class="text-danger">*</span></label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="mod[{{ $randNumModule }}][call_to_action][heading]" placeholder="{{ __('Heading') }}" >
                            @if ($errors->has('heading'))
                                <p class="text-danger"> {{ $errors->first('heading') }} </p>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 control-label">{{ __('Button Content') }}<span class="text-danger">*</span></label>
                        <div class="col-sm-20">
                            <input type="text" class="form-control" name="mod[{{ $randNumModule }}][call_to_action][button_content]" placeholder="{{ __('Button Content') }}" >
                            @if ($errors->has('button_content'))
                                <p class="text-danger"> {{ $errors->first('button_content') }} </p>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 control-label">{{ __('Button Url') }}<span class="text-danger">*</span></label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="mod[{{ $randNumModule }}][call_to_action][button_url]" placeholder="{{ __('Button Url') }}" >
                            @if ($errors->has('button_url'))
                                <p class="text-danger"> {{ $errors->first('button_url') }} </p>
                            @endif
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="nav-ar-call-to-action" role="tabpanel" aria-labelledby="nav-ar-call-to-action-tab">
            {{--Arabic--}}
                    <div class="form-group row my-3">
                        <label class="col-sm-2 control-label">{{ __('العنوان') }}<span class="text-danger">*</span></label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="mod[{{ $randNumModule }}][call_to_action][ar_heading]" placeholder="{{ __('العنوان') }}" >
                            @if ($errors->has('ar_heading'))
                                <p class="text-danger"> {{ $errors->first('ar_heading') }} </p>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 control-label">{{ __('Button Content') }}<span class="text-danger">*</span></label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="mod[{{ $randNumModule }}][call_to_action][ar_button_content]" placeholder="{{ __('Button Content') }}" >
                            @if ($errors->has('ar_button_content'))
                                <p class="text-danger"> {{ $errors->first('ar_button_content') }} </p>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 control-label">{{ __('الرابط') }}<span class="text-danger">*</span></label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="mod[{{ $randNumModule }}][call_to_action][ar_button_url]" placeholder="{{ __('الرابط') }}" >
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