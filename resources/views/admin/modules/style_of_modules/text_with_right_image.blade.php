<div class="card">
    @php
        $randNumModule = \Illuminate\Support\Str::random(10);
    @endphp
    <div class="card-header toggle-open-close-module">
        <i class="fas fa-times icon-delete"></i>
        Text with Image (Right)
        <i class="minimize-module fas fa-chevron-down"></i>
    </div>
    <div class="card-body" style="display: none">
        <nav>
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
              <a class="col-md-6 nav-item nav-link active" id="nav-en-text-right-img-tab" data-toggle="tab" href="#nav-en-text-right-img" role="tab" aria-controls="nav-en-text-right-img" aria-selected="true">English</a>
              <a class="col-md-6 nav-item nav-link" id="nav-ar-text-right-img-tab" data-toggle="tab" href="#nav-ar-text-right-img" role="tab" aria-controls="nav-ar-text-right-img" aria-selected="false">عربي</a>
            </div>
        </nav>
        @if(\Illuminate\Support\Str::contains(\Illuminate\Support\Facades\Route::getCurrentRoute()->getActionName(), 'edit'))
            
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-en-text-right-img"  role="tabpanel" aria-labelledby="nav-en-text-right-img-tab">
            {{--english--}}
                    <div class="form-group row">
                        <label class="col-sm-2 control-label">
                            {{ __('Image') }}
                            
                        </label>
                        <div class="col-sm-10">
                            <img class="mw-400 mb-3 show-img img-demo"
                                src="{{isset($moduleAttributes['image']) ? asset('assets/front/img/text_with_right_image/' . $moduleAttributes['image']) : asset('assets/admin/img/img-demo.jpg') }}"
                                alt="">
                            <div class="custom-file">
                                <label
                                    class="custom-file-label"
                                    for="image"
                                >{{ __('Choose Image') }}</label>
                                <input
                                    name="images[{{ $randomKey }}][text_with_right_image][imageFile]"
                                    class="custom-file-input up-img"
                                    type="file"
                                    id="image"
                                />
                                <input
                                    name="mod[{{ $randomKey }}][text_with_right_image][image]"
                                    value="{{ isset($moduleAttributes['image']) }}"
                                    class="file-image-value"
                                    type="hidden"
                                >
                            </div>
                            @if ($errors->has('image'))
                                <p class="text-danger"> {{ $errors->first('image') }} </p>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 control-label">{{ __('Heading') }}</label>
                        <div class="col-sm-10">
                            <input
                                name="mod[{{ $randomKey }}][text_with_right_image][heading]"
                                value="{{   isset($moduleAttributes['heading']) ? $moduleAttributes['heading'] : '' }}"
                                placeholder="{{ __('Heading') }}"
                                class="form-control"
                                type="text"
                            />
                            @if ($errors->has('heading'))
                                <p class="text-danger"> {{ $errors->first('heading') }} </p>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 control-label">{{ __('paragraph') }}</label>
                        <div class="col-sm-10">
                            <textarea
                                name="mod[{{ $randomKey }}][text_with_right_image][paragraph]"
                                placeholder="{{ __('paragraph') }}"
                                class="form-control"
                                rows="3"
                            >{{ isset($moduleAttributes['paragraph']) ? $moduleAttributes['paragraph'] : '' }}</textarea>
                            @if ($errors->has('paragraph'))
                                <p class="text-danger"> {{ $errors->first('paragraph') }} </p>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 control-label">
                            Red Button
                            
                        </label>
                        <div class="col-sm-10">
                            <div class="red-button-text-url">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="red-button-text">
                                            <input
                                                name="mod[{{ $randomKey }}][text_with_right_image][red_button][text]"
                                                value="{{  isset($moduleAttributes['red_button']['text']) ? $moduleAttributes['red_button']['text'] : '' }}"
                                                placeholder="Red Button Text"
                                                class="form-control"
                                                type="text"
                                            />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="red-button-url">
                                            <input
                                                name="mod[{{ $randomKey }}][text_with_right_image][red_button][url]"
                                                value="{{  isset($moduleAttributes['red_button']['url']) ? $moduleAttributes['red_button']['url'] : '' }}"
                                                placeholder="Red Button Url"
                                                class="form-control"
                                                type="text"
                                            />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 control-label">
                            Yellow Button
                            
                        </label>
                        <div class="col-sm-10">
                            <div class="yellow-button-text-url">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="yellow-button-text">
                                            <input
                                                name="mod[{{ $randomKey }}][text_with_right_image][yellow_button][text]"
                                                value="{{  isset($moduleAttributes['yellow_button']['text']) ? $moduleAttributes['yellow_button']['text'] : '' }}"
                                                placeholder="Yellow Button Text"
                                                class="form-control"
                                                type="text"
                                            />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="yellow-button-url">
                                            <input
                                                name="mod[{{ $randomKey }}][text_with_right_image][yellow_button][url]"
                                                value="{{  isset($moduleAttributes['yellow_button']['url']) ? $moduleAttributes['yellow_button']['url'] : '' }}"
                                                placeholder="Yellow Button Url"
                                                class="form-control"
                                                type="text"
                                            />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="nav-ar-text-right-img" role="tabpanel" aria-labelledby="nav-ar-text-right-img-tab">
                    {{--arabic--}}
                    <div class="form-group row">
                        <label class="col-sm-2 control-label">
                            {{ __('الصورة') }}
                        </label>
                        <div class="col-sm-10">
                            <img class="mw-400 mb-3 show-img img-demo"
                                src="{{isset($moduleAttributes['ar_image']) ? asset('assets/front/img/text_with_right_image/' . $moduleAttributes['ar_image']) : asset('assets/admin/img/img-demo.jpg') }}"
                                alt="">
                            <div class="custom-file">
                                <label
                                    class="custom-file-label"
                                    for="image"
                                >{{ __('Choose Image') }}</label>
                                <input
                                    name="images[{{ $randomKey }}][text_with_right_image][ar_imageFile]"
                                    class="custom-file-input up-img"
                                    type="file"
                                    id="image"
                                />
                                <input
                                    name="mod[{{ $randomKey }}][text_with_right_image][ar_image]"
                                    value="{{ isset($moduleAttributes['ar_image']) }}"
                                    class="file-image-value"
                                    type="hidden"
                                >
                            </div>
                            @if ($errors->has('ar_image'))
                                <p class="text-danger"> {{ $errors->first('ar_image') }} </p>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 control-label">{{ __('العنوان') }}</label>
                        <div class="col-sm-10">
                            <input
                                name="mod[{{ $randomKey }}][text_with_right_image][ar_heading]"
                                value="{{   isset($moduleAttributes['ar_heading']) ? $moduleAttributes['ar_heading'] : '' }}"
                                placeholder="{{ __('العنوان') }}"
                                class="form-control"
                                type="text"
                            />
                            @if ($errors->has('ar_heading'))
                                <p class="text-danger"> {{ $errors->first('ar_heading') }} </p>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 control-label">{{ __('المحتوي') }}</label>
                        <div class="col-sm-10">
                            <textarea
                                name="mod[{{ $randomKey }}][text_with_right_image][ar_paragraph]"
                                placeholder="{{ __('المحتوي') }}"
                                class="form-control"
                                rows="3"
                            >{{ isset($moduleAttributes['ar_paragraph']) ? $moduleAttributes['ar_paragraph'] : '' }}</textarea>
                            @if ($errors->has('ar_paragraph'))
                                <p class="text-danger"> {{ $errors->first('ar_paragraph') }} </p>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 control-label">
                            Red Button
                            
                        </label>
                        <div class="col-sm-10">
                            <div class="red-button-text-url">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="red-button-text">
                                            <input
                                                name="mod[{{ $randomKey }}][text_with_right_image][red_button][ar_text]"
                                                value="{{  isset($moduleAttributes['red_button']['ar_text']) ? $moduleAttributes['red_button']['ar_text'] : '' }}"
                                                placeholder="Red Button Text"
                                                class="form-control"
                                                type="text"
                                            />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="red-button-url">
                                            <input
                                                name="mod[{{ $randomKey }}][text_with_right_image][red_button][ar_url]"
                                                value="{{  isset($moduleAttributes['red_button']['ar_url']) ? $moduleAttributes['red_button']['ar_url'] : '' }}"
                                                placeholder="Red Button Url"
                                                class="form-control"
                                                type="text"
                                            />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 control-label">
                            Yellow Button
                            
                        </label>
                        <div class="col-sm-10">
                            <div class="yellow-button-text-url">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="yellow-button-text">
                                            <input
                                                name="mod[{{ $randomKey }}][text_with_right_image][yellow_button][ar_text]"
                                                value="{{  isset($moduleAttributes['yellow_button']['ar_text']) ? $moduleAttributes['yellow_button']['ar_text'] : '' }}"
                                                placeholder="Yellow Button Text"
                                                class="form-control"
                                                type="text"
                                            />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="yellow-button-url">
                                            <input
                                                name="mod[{{ $randomKey }}][text_with_right_image][yellow_button][ar_url]"
                                                value="{{  isset($moduleAttributes['yellow_button']['ar_url']) ? $moduleAttributes['yellow_button']['ar_url'] : '' }}"
                                                placeholder="Yellow Button Url"
                                                class="form-control"
                                                type="text"
                                            />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @else
           
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-en-text-right-img"  role="tabpanel" aria-labelledby="nav-en-text-right-img-tab">
                    {{--english--}}
                    <div class="form-group row my-3">
                        <label class="col-sm-2 control-label">{{ __('Image') }}</label>
                        <div class="col-sm-10">
                            <img class="mw-400 mb-3 show-img img-demo d-block"
                                src="{{ asset('assets/admin/img/img-demo.jpg') }}" alt="">
                            <div class="custom-file">
                                <label class="custom-file-label" for="image">{{ __('Choose Image') }}</label>
                                <input type="file" class="custom-file-input up-img"
                                    name="images[{{ $randNumModule }}][text_with_right_image][imageFile]" id="image">
                                <input type="hidden" class="file-image-value"
                                    name="mod[{{ $randNumModule }}][text_with_right_image][image]" value="">
                            </div>
                            @if ($errors->has('image'))
                                <p class="text-danger"> {{ $errors->first('image') }} </p>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 control-label">{{ __('Heading') }}</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control"
                                name="mod[{{ $randNumModule }}][text_with_right_image][heading]"
                                placeholder="{{ __('Heading') }}">
                            @if ($errors->has('heading'))
                                <p class="text-danger"> {{ $errors->first('heading') }} </p>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 control-label">{{ __('paragraph') }}</label>
                        <div class="col-sm-10">
                            <textarea name="mod[{{ $randNumModule }}][text_with_right_image][paragraph]" class="form-control"
                                    rows="3" placeholder="{{ __('paragraph') }}"></textarea>
                            @if ($errors->has('paragraph'))
                                <p class="text-danger"> {{ $errors->first('paragraph') }} </p>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 control-label">
                            Red Button
                            
                        </label>
                        <div class="col-sm-10">
                            <div class="red-button-text-url">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="red-button-text">
                                            <input
                                                name="mod[{{ $randNumModule }}][text_with_right_image][red_button][text]"
                                                placeholder="Red Button Text"
                                                class="form-control"
                                                type="text"
                                            />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="red-button-url">
                                            <input
                                                name="mod[{{ $randNumModule }}][text_with_right_image][red_button][url]"
                                                placeholder="Red Button Url"
                                                class="form-control"
                                                type="text"
                                            />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 control-label">
                            Yellow Button
                            
                        </label>
                        <div class="col-sm-10">
                            <div class="yellow-button-text-url">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="yellow-button-text">
                                            <input
                                                name="mod[{{ $randNumModule }}][text_with_right_image][yellow_button][text]"
                                                placeholder="Yellow Button Text"
                                                class="form-control"
                                                type="text"
                                            />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="yellow-button-url">
                                            <input
                                                name="mod[{{ $randNumModule }}][text_with_right_image][yellow_button][url]"
                                                placeholder="Yellow Button Url"
                                                class="form-control"
                                                type="text"
                                            />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="nav-ar-text-right-img" role="tabpanel" aria-labelledby="nav-ar-text-right-img-tab">
                    {{--arabic--}}
                    <div class="form-group row my-3">
                        <label class="col-sm-2 control-label">{{ __('الصورة') }}</label>
                        <div class="col-sm-10">
                            <img class="mw-400 mb-3 show-img img-demo d-block"
                                src="{{ asset('assets/admin/img/img-demo.jpg') }}" alt="">
                            <div class="custom-file">
                                <label class="custom-file-label" for="image">{{ __('Choose Image') }}</label>
                                <input type="file" class="custom-file-input up-img"
                                    name="images[{{ $randNumModule }}][text_with_right_image][ar_imageFile]" id="image">
                                <input type="hidden" class="file-image-value"
                                    name="mod[{{ $randNumModule }}][text_with_right_image][ar_image]" value="">
                            </div>
                            @if ($errors->has('ar_image'))
                                <p class="text-danger"> {{ $errors->first('ar_image') }} </p>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 control-label">{{ __('العنوان') }}</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control"
                                name="mod[{{ $randNumModule }}][text_with_right_image][ar_heading]"
                                placeholder="{{ __('العنوان') }}">
                            @if ($errors->has('ar_heading'))
                                <p class="text-danger"> {{ $errors->first('ar_heading') }} </p>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 control-label">{{ __('المحتوي') }}</label>
                        <div class="col-sm-10">
                            <textarea name="mod[{{ $randNumModule }}][text_with_right_image][ar_paragraph]" class="form-control"
                                    rows="3" placeholder="{{ __('المحتوي') }}"></textarea>
                            @if ($errors->has('ar_paragraph'))
                                <p class="text-danger"> {{ $errors->first('ar_paragraph') }} </p>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 control-label">
                            Red Button
                            
                        </label>
                        <div class="col-sm-10">
                            <div class="red-button-text-url">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="red-button-text">
                                            <input
                                                name="mod[{{ $randNumModule }}][text_with_right_image][red_button][ar_text]"
                                                placeholder="Red Button Text"
                                                class="form-control"
                                                type="text"
                                            />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="red-button-url">
                                            <input
                                                name="mod[{{ $randNumModule }}][text_with_right_image][red_button][ar_url]"
                                                placeholder="Red Button Url"
                                                class="form-control"
                                                type="text"
                                            />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 control-label">
                            Yellow Button
                            
                        </label>
                        <div class="col-sm-10">
                            <div class="yellow-button-text-url">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="yellow-button-text">
                                            <input
                                                name="mod[{{ $randNumModule }}][text_with_right_image][yellow_button][ar_text]"
                                                placeholder="Yellow Button Text"
                                                class="form-control"
                                                type="text"
                                            />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="yellow-button-url">
                                            <input
                                                name="mod[{{ $randNumModule }}][text_with_right_image][yellow_button][ar_url]"
                                                placeholder="Yellow Button Url"
                                                class="form-control"
                                                type="text"
                                            />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    </div>
</div>
<div class="clearfix"></div>

