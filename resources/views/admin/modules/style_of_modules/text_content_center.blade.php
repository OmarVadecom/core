<div class="card">
    @php
        $randNumModule = \Illuminate\Support\Str::random(10);
    @endphp
    <div class="card-header toggle-open-close-module">
        <i class="fas fa-times icon-delete"></i>
        Text Content Center
        <i class="minimize-module fas fa-chevron-down"></i>
    </div>
    <div class="card-body" style="display: none">
        <nav>
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
              <a class="col-md-6 nav-item nav-link active" id="nav-en-text-content-center-tab" data-toggle="tab" href="#nav-en-text-content-center" role="tab" aria-controls="nav-en-text-content-center" aria-selected="true">English</a>
              <a class="col-md-6 nav-item nav-link" id="nav-ar-text-content-center-tab" data-toggle="tab" href="#nav-ar-text-content-center" role="tab" aria-controls="nav-ar-text-content-center" aria-selected="false">عربي</a>
            </div>
        </nav>
        @if(\Illuminate\Support\Str::contains(\Illuminate\Support\Facades\Route::getCurrentRoute()->getActionName(), 'edit'))


            <div class="tab-content" id="nav-tabContent">
                <div class="form-group row my-3">
                    <label class="col-sm-2 control-label">{{ __('Image') }}</label>
                    <div class="col-sm-10">
                            <input
                                name="mod[{{ $randomKey }}][text_content_center][text_img]"
                                class="form-control"
                                type="text"
                                id="image"
                                value="{{ isset($moduleAttributes['text_img']) ? asset('assets/front/img/text_content_center/' . $moduleAttributes['text_img']) : asset('assets/admin/img/img-demo.jpg') }}"
                            />
                        @if ($errors->has('text_img'))
                            <p class="text-danger"> {{ $errors->first('text_img') }} </p>
                        @endif
                    </div>
                </div>
                <div class="tab-pane fade show active" id="nav-en-text-content-center"  role="tabpanel" aria-labelledby="nav-en-text-content-center-tab">
                    {{--english--}}
                    <div class="form-group row my-3">
                        <label class="col-sm-2 control-label">{{ __('Title') }}</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="mod[{{ $randomKey }}][text_content_center][title]"
                                placeholder="{{ __('Title') }}" value="{{  isset($moduleAttributes['title']) ? $moduleAttributes['title'] : '' }}">
                            @if ($errors->has('title'))
                                <p class="text-danger"> {{ $errors->first('title') }} </p>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 control-label">{{ __('Content') }}</label>
                        <div class="col-sm-10">
                            <textarea name="mod[{{ $randomKey }}][text_content_center][content]" class="form-control" rows="3"
                                    placeholder="{{ __('Content') }}">{{   isset($moduleAttributes['content']) ? $moduleAttributes['content'] : '' }}</textarea>
                            @if ($errors->has('content'))
                                <p class="text-danger"> {{ $errors->first('content') }} </p>
                            @endif
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="nav-ar-text-content-center" role="tabpanel" aria-labelledby="nav-ar-text-content-center-tab">
                    {{--arabic--}}
                    <div class="form-group row">
                        <label class="col-sm-2 control-label">{{ __('العنوان') }}</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="mod[{{ $randomKey }}][text_content_center][ar_title]"
                                placeholder="{{ __('العنوان') }}" value="{{  isset($moduleAttributes['ar_title']) ? $moduleAttributes['ar_title'] : '' }}">
                            @if ($errors->has('ar_title'))
                                <p class="text-danger"> {{ $errors->first('ar_title') }} </p>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 control-label">{{ __('المحتوي') }}</label>
                        <div class="col-sm-10">
                            <textarea name="mod[{{ $randomKey }}][text_content_center][ar_content]" class="form-control" rows="3"
                                    placeholder="{{ __('المحتوي') }}">{{   isset($moduleAttributes['ar_content']) ? $moduleAttributes['ar_content'] : '' }}</textarea>
                            @if ($errors->has('ar_content'))
                                <p class="text-danger"> {{ $errors->first('ar_content') }} </p>
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
                        {{-- <img class="mw-400 mb-3 show-img img-demo d-block" src="{{ asset('assets/admin/img/img-demo.jpg') }}" alt=""> --}}
                            <input type="text" class="form-control" name="mod[{{ $randNumModule }}][text_content_center][text_img]" id="image">
                        @if ($errors->has('image'))
                            <p class="text-danger"> {{ $errors->first('image') }} </p>
                        @endif
                    </div>
                </div>
                <div class="tab-pane fade show active" id="nav-en-text-content-center"  role="tabpanel" aria-labelledby="nav-en-text-content-center-tab">
                    {{--english--}}
                    <div class="form-group row my-3">
                        <label class="col-sm-2 control-label">{{ __('Title') }}</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="mod[{{ $randNumModule }}][text_content_center][title]"
                                placeholder="{{ __('Title') }}">
                            @if ($errors->has('title'))
                                <p class="text-danger"> {{ $errors->first('title') }} </p>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 control-label">{{ __('Content') }}</label>
                        <div class="col-sm-10">
                            <textarea name="mod[{{ $randNumModule }}][text_content_center][content]" class="form-control"
                                    rows="3" placeholder="{{ __('Content') }}"></textarea>
                            @if ($errors->has('content'))
                                <p class="text-danger"> {{ $errors->first('content') }} </p>
                            @endif
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="nav-ar-text-content-center" role="tabpanel" aria-labelledby="nav-ar-text-content-center-tab">
                    {{--arabic--}}
                    <div class="form-group row  my-3">
                        <label class="col-sm-2 control-label">{{ __('العنوان') }}</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="mod[{{ $randNumModule }}][text_content_center][ar_title]"
                                placeholder="{{ __('العنوان') }}">
                            @if ($errors->has('ar_title'))
                                <p class="text-danger"> {{ $errors->first('ar_title') }} </p>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 control-label">{{ __('المحتوي') }}</label>
                        <div class="col-sm-10">
                            <textarea name="mod[{{ $randNumModule }}][text_content_center][ar_content]" class="form-control"
                                    rows="3" placeholder="{{ __('المحتوي') }}"></textarea>
                            @if ($errors->has('ar_content'))
                                <p class="text-danger"> {{ $errors->first('ar_content') }} </p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        @endif
    </div>
</div>
<div class="clearfix"></div>