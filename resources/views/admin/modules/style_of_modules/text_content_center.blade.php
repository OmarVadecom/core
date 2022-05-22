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
        <p>
            <a class="btn btn-primary" data-bs-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">عربي</a>
            <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#multiCollapseExample2" aria-expanded="false" aria-controls="multiCollapseExample2">English</button>
        </p>
        @if(\Illuminate\Support\Str::contains(\Illuminate\Support\Facades\Route::getCurrentRoute()->getActionName(), 'edit'))


            <div class="form-group row">
                <label class="col-sm-2 control-label">{{ __('Image') }}<span class="text-danger">*</span></label>
                <div class="col-sm-10">
                    <img
                        src="{{isset($moduleAttributes['text_img']) ? asset('assets/front/img/text_content_center/' . $moduleAttributes['text_img']) : asset('assets/admin/img/img-demo.jpg') }}"
                        class="mw-400 mb-3 show-img img-demo"
                        alt=""
                    >
                    <div class="custom-file">
                        <label
                            class="custom-file-label"
                            for="image"
                        >{{ __('Choose Image') }}</label>
                        <input
                            name="images[{{ $randomKey }}][text_content_center][text_imageFile]"
                            class="custom-file-input up-img"
                            type="file"
                            id="image"
                        />
                        <input
                            name="mod[{{ $randomKey }}][text_content_center][text_img]"
                            value="{{ isset($moduleAttributes['text_img']) ? asset('assets/front/img/text_content_center/' . $moduleAttributes['text_img']) : asset('assets/admin/img/img-demo.jpg') }}"
                            class="file-image-value"
                            type="hidden"
                        />
                    </div>
                    @if ($errors->has('text_img'))
                        <p class="text-danger"> {{ $errors->first('text_img') }} </p>
                    @endif
                </div>
            </div>

            {{--english--}}
            <div class="form-group row collapse multi-collapse" id="multiCollapseExample2">
                <label class="col-sm-2 control-label">{{ __('Title') }}<span class="text-danger">*</span></label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="mod[{{ $randomKey }}][text_content_center][title]"
                           placeholder="{{ __('Title') }}" value="{{  $moduleAttributes['title'] }}">
                    @if ($errors->has('title'))
                        <p class="text-danger"> {{ $errors->first('title') }} </p>
                    @endif
                </div>
            </div>
            <div class="form-group row collapse multi-collapse" id="multiCollapseExample2">
                <label class="col-sm-2 control-label">{{ __('Content') }}<span class="text-danger">*</span></label>
                <div class="col-sm-10">
                    <textarea name="mod[{{ $randomKey }}][text_content_center][content]" class="form-control" rows="3"
                              placeholder="{{ __('Content') }}">{{  $moduleAttributes['content'] }}</textarea>
                    @if ($errors->has('content'))
                        <p class="text-danger"> {{ $errors->first('content') }} </p>
                    @endif
                </div>
            </div>
           {{--arabic--}}
            <div class="form-group row collapse multi-collapse" id="multiCollapseExample1">
                <label class="col-sm-2 control-label">{{ __('العنوان') }}<span class="text-danger">*</span></label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="mod[{{ $randomKey }}][text_content_center][ar_title]"
                        placeholder="{{ __('العنوان') }}" value="{{  $moduleAttributes['ar_title'] }}">
                    @if ($errors->has('ar_title'))
                        <p class="text-danger"> {{ $errors->first('ar_title') }} </p>
                    @endif
                </div>
            </div>
            <div class="form-group row collapse multi-collapse" id="multiCollapseExample1">
            <label class="col-sm-2 control-label">{{ __('المحتوي') }}<span class="text-danger">*</span></label>
            <div class="col-sm-10">
                <textarea name="mod[{{ $randomKey }}][text_content_center][ar_content]" class="form-control" rows="3"
                          placeholder="{{ __('المحتوي') }}">{{  $moduleAttributes['ar_content'] }}</textarea>
                @if ($errors->has('ar_content'))
                    <p class="text-danger"> {{ $errors->first('ar_content') }} </p>
                @endif
            </div>
        </div>
        @else
            <div class="form-group row">
                <label class="col-sm-2 control-label">{{ __('Image') }}<span class="text-danger">*</span></label>
                <div class="col-sm-10">
                    <img class="mw-400 mb-3 show-img img-demo d-block" src="{{ asset('assets/admin/img/img-demo.jpg') }}" alt="">
                    <div class="custom-file">
                        <label class="custom-file-label" for="image">{{ __('Choose Image') }}</label>
                        <input type="file" class="custom-file-input up-img" name="images[{{ $randNumModule }}][text_content_center][text_imageFile]" id="image">
                        <input type="hidden" class="file-image-value" name="mod[{{ $randNumModule }}][text_content_center][text_img]" value="">
                    </div>
                    @if ($errors->has('image'))
                        <p class="text-danger"> {{ $errors->first('image') }} </p>
                    @endif
                </div>
            </div>
             {{--english--}}
            <div class="form-group row collapse multi-collapse" id="multiCollapseExample2">
                <label class="col-sm-2 control-label">{{ __('Title') }}<span class="text-danger">*</span></label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="mod[{{ $randNumModule }}][text_content_center][title]"
                           placeholder="{{ __('Title') }}">
                    @if ($errors->has('title'))
                        <p class="text-danger"> {{ $errors->first('title') }} </p>
                    @endif
                </div>
            </div>
            <div class="form-group row collapse multi-collapse" id="multiCollapseExample2">
                <label class="col-sm-2 control-label">{{ __('Content') }}<span class="text-danger">*</span></label>
                <div class="col-sm-10">
                    <textarea name="mod[{{ $randNumModule }}][text_content_center][content]" class="form-control"
                              rows="3" placeholder="{{ __('Content') }}"></textarea>
                    @if ($errors->has('content'))
                        <p class="text-danger"> {{ $errors->first('content') }} </p>
                    @endif
                </div>
            </div>
               {{--arabic--}}
               <div class="form-group row collapse multi-collapse" id="multiCollapseExample1">
                <label class="col-sm-2 control-label">{{ __('العنوان') }}<span class="text-danger">*</span></label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="mod[{{ $randNumModule }}][text_content_center][ar_title]"
                           placeholder="{{ __('العنوان') }}">
                    @if ($errors->has('ar_title'))
                        <p class="text-danger"> {{ $errors->first('ar_title') }} </p>
                    @endif
                </div>
            </div>
            <div class="form-group row collapse multi-collapse" id="multiCollapseExample1">
                <label class="col-sm-2 control-label">{{ __('المحتوي') }}<span class="text-danger">*</span></label>
                <div class="col-sm-10">
                    <textarea name="mod[{{ $randNumModule }}][text_content_center][ar_content]" class="form-control"
                              rows="3" placeholder="{{ __('المحتوي') }}"></textarea>
                    @if ($errors->has('ar_content'))
                        <p class="text-danger"> {{ $errors->first('ar_content') }} </p>
                    @endif
                </div>
            </div>
        @endif
    </div>
</div>
<div class="clearfix"></div>