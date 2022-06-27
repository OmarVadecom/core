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
        <nav>
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
              <a class="col-md-6 nav-item nav-link active" id="nav-en-main-title-tab" data-toggle="tab" href="#nav-en-main-title" role="tab" aria-controls="nav-en-main-title" aria-selected="true">English</a>
              <a class="col-md-6 nav-item nav-link" id="nav-ar-main-title-tab" data-toggle="tab" href="#nav-ar-main-title" role="tab" aria-controls="nav-ar-main-title" aria-selected="false">عربي</a>
            </div>
        </nav>
        @if(\Illuminate\Support\Str::contains(\Illuminate\Support\Facades\Route::getCurrentRoute()->getActionName(), 'edit'))

            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-en-main-title"  role="tabpanel" aria-labelledby="nav-en-main-title-tab">
                    {{--english--}}
                    <div class="form-group row my-3">
                        <label class="col-sm-2 control-label">{{ __('Title') }}</label>
                        <div class="col-sm-10">
                            <input
                                name="mod[{{ $randomKey }}][title_paragraph][title]"
                                value="{{  isset($moduleAttributes['title']) ? $moduleAttributes['title'] : '' }}"
                                placeholder="{{ __('Title') }}"
                                class="form-control"
                                type="text"
                            />
                            @if ($errors->has('title'))
                                <p class="text-danger"> {{ $errors->first('title') }} </p>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="nav-ar-main-title" role="tabpanel" aria-labelledby="nav-ar-main-title-tab">
                    {{--arabic--}}
                    <div class="form-group row my-3">
                        <label class="col-sm-2 control-label">{{ __('العنوان') }}</label>
                        <div class="col-sm-10">
                            <input
                                name="mod[{{ $randomKey }}][title_paragraph][ar_title]"
                                value="{{  isset($moduleAttributes['ar_title']) ? $moduleAttributes['ar_title'] : '' }}"
                                placeholder="{{ __('العنوان') }}"
                                class="form-control"
                                type="text"
                            />
                            @if ($errors->has('ar_title'))
                                <p class="text-danger"> {{ $errors->first('ar_title') }} </p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        @else

            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-en-main-title"  role="tabpanel" aria-labelledby="nav-en-main-title-tab">
                    {{--english--}}
                    <div class="form-group row my-3">
                        <label class="col-sm-2 control-label">{{ __('Title') }}</label>
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
                </div>
                <div class="tab-pane fade" id="nav-ar-main-title" role="tabpanel" aria-labelledby="nav-ar-main-title-tab">
                    {{--arabic--}}
                    <div class="form-group row my-3">
                        <label class="col-sm-2 control-label">{{ __('العنوان') }}</label>
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
                </div>
            </div>
        @endif
    </div>
</div>
<div class="clearfix"></div>