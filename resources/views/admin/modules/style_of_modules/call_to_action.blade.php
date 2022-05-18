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
        @if(\Illuminate\Support\Str::contains(\Illuminate\Support\Facades\Route::getCurrentRoute()->getActionName(), 'edit'))
            <div class="form-group row">
                <label class="col-sm-2 control-label">{{ __('Heading') }}<span class="text-danger">*</span></label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="mod[{{ $randomKey }}][call_to_action][heading]" placeholder="{{ __('Heading') }}" value="{{  $moduleAttributes['heading'] }}" >
                    @if ($errors->has('heading'))
                        <p class="text-danger"> {{ $errors->first('heading') }} </p>
                    @endif
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 control-label">{{ __('Button Content') }}<span class="text-danger">*</span></label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="mod[{{ $randomKey }}][call_to_action][button_content]" placeholder="{{ __('Button Content') }}" value="{{ $moduleAttributes['button_content'] }}" >
                    @if ($errors->has('button_content'))
                        <p class="text-danger"> {{ $errors->first('button_content') }} </p>
                    @endif
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 control-label">{{ __('Button Url') }}<span class="text-danger">*</span></label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="mod[{{ $randomKey }}][call_to_action][button_url]" placeholder="{{ __('Button Url') }}" value="{{  $moduleAttributes['button_url'] }}" >
                    @if ($errors->has('button_url'))
                        <p class="text-danger"> {{ $errors->first('button_url') }} </p>
                    @endif
                </div>
            </div>
        @else
            <div class="form-group row">
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
                <div class="col-sm-10">
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
        @endif
    </div>
</div>
<div class="clearfix"></div>