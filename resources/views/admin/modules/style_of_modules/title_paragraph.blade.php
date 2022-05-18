<div class="card">
    @php
        $randNumModule = \Illuminate\Support\Str::random(10);
    @endphp
    <div class="card-header toggle-open-close-module">
        <i class="fas fa-times icon-delete"></i>
        Main Title
        <i class="minimize-module fas fa-chevron-down"></i>
    </div>
    <div class="card-body" style="display: none">
        <p>
            <a class="btn btn-primary" data-bs-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">عربي</a>
            <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#multiCollapseExample2" aria-expanded="false" aria-controls="multiCollapseExample2">English</button>
        </p>
        @if(\Illuminate\Support\Str::contains(\Illuminate\Support\Facades\Route::getCurrentRoute()->getActionName(), 'edit'))

            {{--english--}}
            <div class="form-group row collapse multi-collapse" id="multiCollapseExample2">
                <label class="col-sm-2 control-label">{{ __('Title') }}<span class="text-danger">*</span></label>
                <div class="col-sm-10">
                    <input
                        name="mod[{{ $randomKey }}][title_paragraph][title]"
                        value="{{  $moduleAttributes['title'] }}"
                        placeholder="{{ __('Title') }}"
                        class="form-control"
                        type="text"
                    />
                    @if ($errors->has('title'))
                        <p class="text-danger"> {{ $errors->first('title') }} </p>
                    @endif
                </div>
            </div>
            {{--arabic--}}
            <div class="form-group row collapse multi-collapse" id="multiCollapseExample1">
                <label class="col-sm-2 control-label">{{ __('العنوان') }}<span class="text-danger">*</span></label>
                <div class="col-sm-10">
                    <input
                        name="mod[{{ $randomKey }}][title_paragraph][ar_title]"
                        value="{{  $moduleAttributes['ar_title'] }}"
                        placeholder="{{ __('العنوان') }}"
                        class="form-control"
                        type="text"
                    />
                    @if ($errors->has('ar_title'))
                        <p class="text-danger"> {{ $errors->first('ar_title') }} </p>
                    @endif
                </div>
            </div>
        @else
            {{--english--}}
            <div class="form-group row collapse multi-collapse" id="multiCollapseExample2">
                <label class="col-sm-2 control-label">{{ __('Title') }}<span class="text-danger">*</span></label>
                <div class="col-sm-10">
                    <input
                        name="mod[{{ $randNumModule }}][title_paragraph][title]"
                        placeholder="{{ __('Title') }}"
                        class="form-control"
                        type="text"
                    />
                    @if ($errors->has('title'))
                        <p class="text-danger"> {{ $errors->first('title') }} </p>
                    @endif
                </div>
            </div>
            {{--arabic--}}
            <div class="form-group row collapse multi-collapse" id="multiCollapseExample1">
                <label class="col-sm-2 control-label">{{ __('العنوان') }}<span class="text-danger">*</span></label>
                <div class="col-sm-10">
                    <input
                        name="mod[{{ $randNumModule }}][title_paragraph][ar_title]"
                        placeholder="{{ __('العنوان') }}"
                        class="form-control"
                        type="text"
                    />
                    @if ($errors->has('ar_title'))
                        <p class="text-danger"> {{ $errors->first('ar_title') }} </p>
                    @endif
                </div>
            </div>
        @endif
    </div>
</div>
<div class="clearfix"></div>