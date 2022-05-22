<div class="card">
    @php
        $randNumModule = \Illuminate\Support\Str::random(10);
    @endphp
    <div class="card-header toggle-open-close-module">
        <i class="fas fa-times icon-delete"></i>
        Text Content
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
                        name="mod[{{ $randomKey }}][text_editor][title]"
                        value=" {{ isset($moduleAttributes['title']) ? $moduleAttributes['title'] : '' }}"
                        placeholder="{{ __('Title') }}"
                        class="form-control"
                        type="text"
                    />
                    @if ($errors->has('title'))
                        <p class="text-danger"> {{ $errors->first('title') }} </p>
                    @endif
                </div>
            </div>
            <div class="form-group row collapse multi-collapse" id="multiCollapseExample2">
                <label class="col-sm-2 control-label">{{ __('Text') }}<span class="text-danger">*</span></label>
                <div class="col-sm-10">
                    <textarea
                        name="mod[{{ $randomKey }}][text_editor][text]"
                        
                        class="form-control summernote"
                        placeholder="{{ __('Text') }}"
                        rows="3"
                    >{{ isset($moduleAttributes['text']) ? $moduleAttributes['text'] : '' }}</textarea>
                    @if ($errors->has('text'))
                        <p class="text-danger"> {{ $errors->first('text') }} </p>
                    @endif
                </div>
            </div>
            <div class="form-group row collapse multi-collapse" id="multiCollapseExample2">
                <label class="col-sm-2 control-label">
                    Red Button
                    <span class="text-danger">*</span>
                </label>
                <div class="col-sm-10">
                    <div class="red-button-text-url">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="red-button-text">
                                    <input
                                        name="mod[{{ $randomKey }}][text_editor][red_button][text]"
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
                                        name="mod[{{ $randomKey }}][text_editor][red_button][url]"
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
            <div class="form-group row collapse multi-collapse" id="multiCollapseExample2">
                <label class="col-sm-2 control-label">
                    Yellow Button
                    <span class="text-danger">*</span>
                </label>
                <div class="col-sm-10">
                    <div class="yellow-button-text-url">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="yellow-button-text">
                                    <input
                                        name="mod[{{ $randomKey }}][text_editor][yellow_button][text]"
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
                                        name="mod[{{ $randomKey }}][text_editor][yellow_button][url]"
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

             {{--arabic--}}

             <div class="form-group row collapse multi-collapse" id="multiCollapseExample1">
                <label class="col-sm-2 control-label">{{ __('العنوان') }}<span class="text-danger">*</span></label>
                <div class="col-sm-10">
                    <input
                        name="mod[{{ $randomKey }}][text_editor][ar_title]"
                        value=" {{ isset($moduleAttributes['ar_title']) ? $moduleAttributes['ar_title'] : '' }}"
                        placeholder="{{ __('العنوان') }}"
                        class="form-control"
                        type="text"
                    />
                    @if ($errors->has('ar_title'))
                        <p class="text-danger"> {{ $errors->first('ar_title') }} </p>
                    @endif
                </div>
            </div>
            <div class="form-group row collapse multi-collapse" id="multiCollapseExample1">
                <label class="col-sm-2 control-label">{{ __('النص') }}<span class="text-danger">*</span></label>
                <div class="col-sm-10">
                    <textarea
                        name="mod[{{ $randomKey }}][text_editor][ar_text]"
                        
                        class="form-control summernote"
                        placeholder="{{ __('النص') }}"
                        rows="3"
                    >{{ isset($moduleAttributes['ar_text']) ? $moduleAttributes['ar_text'] : '' }}</textarea>
                    @if ($errors->has('ar_text'))
                        <p class="text-danger"> {{ $errors->first('ar_text') }} </p>
                    @endif
                </div>
            </div>
            <div class="form-group row collapse multi-collapse" id="multiCollapseExample1">
                <label class="col-sm-2 control-label">
                    Red Button
                    <span class="text-danger">*</span>
                </label>
                <div class="col-sm-10">
                    <div class="red-button-text-url">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="red-button-text">
                                    <input
                                        name="mod[{{ $randomKey }}][text_editor][red_button][text]"
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
                                        name="mod[{{ $randomKey }}][text_editor][red_button][ar_url]"
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
            <div class="form-group row collapse multi-collapse" id="multiCollapseExample1">
                <label class="col-sm-2 control-label">
                    Yellow Button
                    <span class="text-danger">*</span>
                </label>
                <div class="col-sm-10">
                    <div class="yellow-button-text-url">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="yellow-button-text">
                                    <input
                                        name="mod[{{ $randomKey }}][text_editor][yellow_button][ar_text]"
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
                                        name="mod[{{ $randomKey }}][text_editor][yellow_button][url]"
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
        @else

            {{--english--}}
            <div class="form-group row collapse multi-collapse" id="multiCollapseExample2">
                <label class="col-sm-2 control-label">{{ __('Title') }}<span class="text-danger">*</span></label>
                <div class="col-sm-10">
                    <input
                        name="mod[{{ $randNumModule }}][text_editor][title]"
                        
                        placeholder="{{ __('Title') }}"
                        class="form-control"
                        type="text"
                    />
                    @if ($errors->has('title'))
                        <p class="text-danger"> {{ $errors->first('title') }} </p>
                    @endif
                </div>
            </div>
            <div class="form-group row collapse multi-collapse" id="multiCollapseExample2">
                <label class="col-sm-2 control-label">{{ __('Text') }}<span class="text-danger">*</span></label>
                <div class="col-sm-10">
                    <textarea
                        name="mod[{{ $randNumModule }}][text_editor][text]"
                        class="form-control summernote"
                        placeholder="{{ __('Text') }}"
                        rows="3"
                    ></textarea>
                    @if ($errors->has('text'))
                        <p class="text-danger"> {{ $errors->first('text') }} </p>
                    @endif
                </div>
            </div>
            <div class="form-group row collapse multi-collapse" id="multiCollapseExample2">
                <label class="col-sm-2 control-label">
                    Red Button
                    <span class="text-danger">*</span>
                </label>
                <div class="col-sm-10">
                    <div class="red-button-text-url">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="red-button-text">
                                    <input
                                        name="mod[{{ $randNumModule }}][text_editor][red_button][text]"
                                        placeholder="Red Button Text"
                                        class="form-control"
                                        type="text"
                                    />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="red-button-url">
                                    <input
                                        name="mod[{{ $randNumModule }}][text_editor][red_button][url]"
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
            <div class="form-group row collapse multi-collapse" id="multiCollapseExample2">
                <label class="col-sm-2 control-label">
                    Yellow Button
                    <span class="text-danger">*</span>
                </label>
                <div class="col-sm-10">
                    <div class="yellow-button-text-url">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="yellow-button-text">
                                    <input
                                        name="mod[{{ $randNumModule }}][text_editor][yellow_button][text]"
                                        placeholder="Yellow Button Text"
                                        class="form-control"
                                        type="text"
                                    />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="yellow-button-url">
                                    <input
                                        name="mod[{{ $randNumModule }}][text_editor][yellow_button][url]"
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

             {{--arabic--}}
             <div class="form-group row collapse multi-collapse" id="multiCollapseExample1">
                <label class="col-sm-2 control-label">{{ __('العنوان') }}<span class="text-danger">*</span></label>
                <div class="col-sm-10">
                    <input
                        name="mod[{{ $randNumModule }}][text_editor][ar_title]"
                        
                        placeholder="{{ __('العنوان') }}"
                        class="form-control"
                        type="text"
                    />
                    @if ($errors->has('ar_title'))
                        <p class="text-danger"> {{ $errors->first('ar_title') }} </p>
                    @endif
                </div>
            </div>
            <div class="form-group row collapse multi-collapse" id="multiCollapseExample1">
                <label class="col-sm-2 control-label">{{ __('النص') }}<span class="text-danger">*</span></label>
                <div class="col-sm-10">
                    <textarea
                        name="mod[{{ $randNumModule }}][text_editor][ar_text]"
                        class="form-control summernote"
                        placeholder="{{ __('النص') }}"
                        rows="3"
                    ></textarea>
                    @if ($errors->has('ar_text'))
                        <p class="text-danger"> {{ $errors->first('ar_text') }} </p>
                    @endif
                </div>
            </div>
            <div class="form-group row collapse multi-collapse" id="multiCollapseExample1">
                <label class="col-sm-2 control-label">
                    Red Button
                    <span class="text-danger">*</span>
                </label>
                <div class="col-sm-10">
                    <div class="red-button-text-url">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="red-button-text">
                                    <input
                                        name="mod[{{ $randNumModule }}][text_editor][red_button][ar_text]"
                                        placeholder="Red Button Text"
                                        class="form-control"
                                        type="text"
                                    />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="red-button-url">
                                    <input
                                        name="mod[{{ $randNumModule }}][text_editor][red_button][ar_url]"
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
            <div class="form-group row collapse multi-collapse" id="multiCollapseExample1">
                <label class="col-sm-2 control-label">
                    Yellow Button
                    <span class="text-danger">*</span>
                </label>
                <div class="col-sm-10">
                    <div class="yellow-button-text-url">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="yellow-button-text">
                                    <input
                                        name="mod[{{ $randNumModule }}][text_editor][yellow_button][ar_text]"
                                        placeholder="Yellow Button Text"
                                        class="form-control"
                                        type="text"
                                    />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="yellow-button-url">
                                    <input
                                        name="mod[{{ $randNumModule }}][text_editor][yellow_button][ar_url]"
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
        @endif
    </div>
</div>
<div class="clearfix"></div>