
<div class="card">
    @php
        $randNumModule = \Illuminate\Support\Str::random(10);
    @endphp
    <div class="card-header toggle-open-close-module">
        <i class="fas fa-times icon-delete"></i>
        Bannar
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
                        src="{{isset($moduleAttributes['image']) ? asset('assets/front/img/bannar/' . $moduleAttributes['image']) : asset('assets/admin/img/img-demo.jpg') }}"
                        class="mw-400 mb-3 show-img img-demo"
                        alt=""
                    >
                    <div class="custom-file">
                        <label
                            class="custom-file-label"
                            for="image"
                        >{{ __('Choose Image') }}</label>
                        <input
                            name="images[{{ $randomKey }}][bannar][imageFile]"
                            class="custom-file-input up-img"
                            type="file"
                            id="image"
                        />
                        <input
                            name="mod[{{ $randomKey }}][bannar][image]"
                            value="{{ isset($moduleAttributes['image']) }}"
                            class="file-image-value"
                            type="hidden"
                        />
                    </div>
                    @if ($errors->has('image'))
                        <p class="text-danger"> {{ $errors->first('image') }} </p>
                    @endif
                </div>
            </div>
            {{-- English --}}
            <div class="form-group row collapse multi-collapse" id="multiCollapseExample2">
                <label class="col-sm-2 control-label">{{ __('Title') }}<span class="text-danger">*</span></label>
                <div class="col-sm-10">
                    <input
                        name="mod[{{ $randomKey }}][bannar][title]"
                        value="{{  isset($moduleAttributes['title']) ? $moduleAttributes['title'] : ''  }}"
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
                <label class="col-sm-2 control-label">{{ __('Title2') }}<span class="text-danger">*</span></label>
                <div class="col-sm-10">
                    <input
                        name="mod[{{ $randomKey }}][bannar][title_2]"
                        value="{{  isset($moduleAttributes['title_2']) ? $moduleAttributes['title_2'] : ''  }}"
                        placeholder="{{ __('Title2') }}"
                        class="form-control"
                        type="text"
                    />
                    @if ($errors->has('title_2'))
                        <p class="text-danger"> {{ $errors->first('title_2') }} </p>
                    @endif
                </div>
            </div>
            <div class="form-group row collapse multi-collapse" id="multiCollapseExample2">
                <label class="col-sm-2 control-label">
                    {{ __('Content') }}
                    <span class="text-danger">*</span>
                </label>
                <div class="col-sm-10">
                    <textarea
                        name="mod[{{ $randomKey }}][bannar][content]"
                        placeholder="{{ __('content') }}"
                        class="form-control"
                        rows="3"
                    >{{ isset($moduleAttributes['content']) ? $moduleAttributes['content'] : '' }}</textarea>
                    @if ($errors->has('content'))
                        <p class="text-danger"> {{ $errors->first('paragraph') }} </p>
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
                                        name="mod[{{ $randomKey }}][bannar][red_button][text]"
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
                                        name="mod[{{ $randomKey }}][bannar][red_button][url]"
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
                                        name="mod[{{ $randomKey }}][bannar][yellow_button][text]"
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
                                        name="mod[{{ $randomKey }}][bannar][yellow_button][url]"
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
       
       
            {{-- Arabic --}}
       
            <div class="form-group row collapse multi-collapse" id="multiCollapseExample1">
                <label class="col-sm-2 control-label">{{ __('العنوان') }}<span class="text-danger">*</span></label>
                <div class="col-sm-10">
                    <input
                        name="mod[{{ $randomKey }}][bannar][ar_title]"
                        value="{{  isset($moduleAttributes['ar_title']) ? $moduleAttributes['ar_title'] : ''  }}"
                        placeholder="{{ __('Title') }}"
                        class="form-control"
                        type="text"
                    />
                    @if ($errors->has('ar_title'))
                        <p class="text-danger"> {{ $errors->first('ar_title') }} </p>
                    @endif
                </div>
            </div>
            <div class="form-group row collapse multi-collapse" id="multiCollapseExample1">
                <label class="col-sm-2 control-label">{{ __('2العنوان') }}<span class="text-danger">*</span></label>
                <div class="col-sm-10">
                    <input
                        name="mod[{{ $randomKey }}][bannar][ar_title_2]"
                        value="{{  isset($moduleAttributes['ar_title_2']) ? $moduleAttributes['ar_title_2'] : ''  }}"
                        placeholder="{{ __('Title2') }}"
                        class="form-control"
                        type="text"
                    />
                    @if ($errors->has('ar_title_2'))
                        <p class="text-danger"> {{ $errors->first('ar_title_2') }} </p>
                    @endif
                </div>
            </div>
            <div class="form-group row collapse multi-collapse" id="multiCollapseExample1">
                <label class="col-sm-2 control-label">
                    {{ __('المحتوي') }}
                    <span class="text-danger">*</span>
                </label>
                <div class="col-sm-10">
                    <textarea
                        name="mod[{{ $randomKey }}][bannar][ar_content]"
                        placeholder="{{ __('ar_content') }}"
                        class="form-control"
                        rows="3"
                    >{{ isset($moduleAttributes['ar_content']) ? $moduleAttributes['ar_content'] : '' }}</textarea>
                    @if ($errors->has('ar_content'))
                        <p class="text-danger"> {{ $errors->first('ar_content') }} </p>
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
                                        name="mod[{{ $randomKey }}][bannar][red_button][ar_text]"
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
                                        name="mod[{{ $randomKey }}][bannar][red_button][ar_url]"
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
                                        name="mod[{{ $randomKey }}][bannar][yellow_button][ar_text]"
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
                                        name="mod[{{ $randomKey }}][bannar][yellow_button][ar_url]"
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
       
       
       
       
       
       
       
            @else
            <div class="form-group row">
                <label class="col-sm-2 control-label">{{ __('Image') }}<span class="text-danger">*</span></label>
                <div class="col-sm-10">
                    <img class="mw-400 mb-3 show-img img-demo d-block" src="{{ asset('assets/admin/img/img-demo.jpg') }}" alt="">
                    <div class="custom-file">
                        <label class="custom-file-label" for="image">{{ __('Choose Image') }}</label>
                        <input type="file" class="custom-file-input up-img" name="images[{{ $randNumModule }}][bannar][imageFile]" id="image">
                        <input type="hidden" class="file-image-value" name="mod[{{ $randNumModule }}][bannar][image]" value="">
                    </div>
                    @if ($errors->has('image'))
                        <p class="text-danger"> {{ $errors->first('image') }} </p>
                    @endif
                </div>
            </div>

            {{--English--}}
            <div class="form-group row collapse multi-collapse" id="multiCollapseExample2">
                <label class="col-sm-2 control-label">{{ __('Title') }}<span class="text-danger">*</span></label>
                
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="mod[{{ $randNumModule }}][bannar][title]" placeholder="{{ __('Title') }}" >
                    @if ($errors->has('title'))
                        <p class="text-danger"> {{ $errors->first('title') }} </p>
                    @endif
                </div>
            </div>
            <div class="form-group row collapse multi-collapse" id="multiCollapseExample2">
                <label class="col-sm-2 control-label">{{ __('Title2') }}<span class="text-danger">*</span></label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="mod[{{ $randNumModule }}][bannar][title]" placeholder="{{ __('Title2') }}" >
                    @if ($errors->has('title'))
                        <p class="text-danger"> {{ $errors->first('title') }} </p>
                    @endif
                </div>
            </div>
            <div class="form-group row collapse multi-collapse" id="multiCollapseExample2">
                <label class="col-sm-2 control-label">{{ __('Content') }}<span class="text-danger">*</span></label>
                <div class="col-sm-10">
                    <textarea name="mod[{{ $randNumModule }}][bannar][content]" class="form-control"  rows="3" placeholder="{{ __('Content') }}" ></textarea>
                    @if ($errors->has('content'))
                        <p class="text-danger"> {{ $errors->first('content') }} </p>
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
                                        name="mod[{{ $randNumModule }}][bannar][red_button][text]"
                                        placeholder="Red Button Text"
                                        class="form-control"
                                        type="text"
                                    />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="red-button-url">
                                    <input
                                        name="mod[{{ $randNumModule }}][bannar][red_button][url]"
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
                                        name="mod[{{ $randNumModule }}][bannar][yellow_button][text]"
                                        placeholder="Yellow Button Text"
                                        class="form-control"
                                        type="text"
                                    />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="yellow-button-url">
                                    <input
                                        name="mod[{{ $randNumModule }}][bannar][yellow_button][url]"
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
                    <input type="text" class="form-control" name="mod[{{ $randNumModule }}][bannar][ar_title]" placeholder="{{ __('العنوان') }}" >
                    @if ($errors->has('ar_title'))
                        <p class="text-danger"> {{ $errors->first('ar_title') }} </p>
                    @endif
                </div>
            </div>
            <div class="form-group row collapse multi-collapse" id="multiCollapseExample1">
                <label class="col-sm-2 control-label">{{ __('العنوان2') }}<span class="text-danger">*</span></label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="mod[{{ $randNumModule }}][bannar][ar_title_2]" placeholder="{{ __('العنوان2') }}" >
                    @if ($errors->has('ar_title_2'))
                        <p class="text-danger"> {{ $errors->first('ar_title_2') }} </p>
                    @endif
                </div>
            </div>
            <div class="form-group row collapse multi-collapse" id="multiCollapseExample1">
                <label class="col-sm-2 control-label">{{ __('المحتوي') }}<span class="text-danger">*</span></label>
                <div class="col-sm-10">
                    <textarea name="mod[{{ $randNumModule }}][bannar][ar_content]" class="form-control"  rows="3" placeholder="{{ __('المحتوي') }}" ></textarea>
                    @if ($errors->has('ar_content'))
                        <p class="text-danger"> {{ $errors->first('ar_content') }} </p>
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
                                        name="mod[{{ $randNumModule }}][bannar][red_button][ar_text]"
                                        placeholder="Red Button Text"
                                        class="form-control"
                                        type="text"
                                    />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="red-button-url">
                                    <input
                                        name="mod[{{ $randNumModule }}][bannar][red_button][ar_url]"
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
                                        name="mod[{{ $randNumModule }}][bannar][yellow_button][ar_text]"
                                        placeholder="Yellow Button Text"
                                        class="form-control"
                                        type="text"
                                    />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="yellow-button-url">
                                    <input
                                        name="mod[{{ $randNumModule }}][bannar][yellow_button][ar_url]"
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



{{-- 
  <div class="row">
    <div class="col">
      <div class="collapse multi-collapse" id="multiCollapseExample1">
        <div class="card card-body">
          Some placeholder content for the first collapse component of this multi-collapse example. This panel is hidden by default but revealed when the user activates the relevant trigger.
        </div>
      </div>
    </div>
    <div class="col">
      <div class="collapse multi-collapse" id="multiCollapseExample2">
        <div class="card card-body">
          Some placeholder content for the second collapse component of this multi-collapse example. This panel is hidden by default but revealed when the user activates the relevant trigger.
        </div>
      </div>
    </div>
  </div> --}}