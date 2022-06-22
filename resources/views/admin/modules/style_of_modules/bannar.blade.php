
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
        <nav>
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
              <a class="col-md-6 nav-item nav-link active" id="nav-en-bannar-tab" data-toggle="tab" href="#nav-en-bannar" role="tab" aria-controls="nav-en-bannar" aria-selected="true">English</a>
              <a class="col-md-6 nav-item nav-link" id="nav-ar-bannar-tab" data-toggle="tab" href="#nav-ar-bannar" role="tab" aria-controls="nav-ar-bannar" aria-selected="false">عربي</a>
            </div>
        </nav>
        @if(\Illuminate\Support\Str::contains(\Illuminate\Support\Facades\Route::getCurrentRoute()->getActionName(), 'edit'))


        <div class="tab-content" id="nav-tabContent">
            <div class="form-group row my-3">        
                <label class="col-sm-2 control-label">{{ __('Image') }}</label>
                <div class="col-sm-10">
                        <input
                            name="mod[{{ $randomKey }}][bannar][image]"
                            class="form-control"
                            type="text"
                            id="image"
                            value="{{ isset($moduleAttributes['image']) ? $moduleAttributes['image'] : '' }}"
                        />
                    @if ($errors->has('image'))
                        <p class="text-danger"> {{ $errors->first('image') }} </p>
                    @endif
                </div>
            </div>
             <div class="tab-pane fade show active" id="nav-en-bannar"  role="tabpanel" aria-labelledby="nav-en-bannar-tab">
                {{-- English --}}
                <div class="form-group row my-3">   
                    <label class="col-sm-2 control-label">{{ __('Title') }}</label>
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
                <div class="form-group row">   
                    <label class="col-sm-2 control-label">{{ __('Title2') }}</label>
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
                <div class="form-group row">   
                    <label class="col-sm-2 control-label">
                        {{ __('Content') }}
                        
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
                <div class="form-group row">
                    <div class="col-md-8">
                        <label for="title">Choose Style</label>
                        <select name="mod[{{ $randomKey }}][bannar][bannar_type_en]" class="form-control">
                            <option value="">Choose Style</option>
                            <option value="b_1" {{($moduleAttributes['bannar_type_en'] == 'b_1') ? 'selected' : '' }} >Style 1 </option>
                            <option value="b_2" {{($moduleAttributes['bannar_type_en'] == 'b_2') ? 'selected' : '' }}>Style 2</option>
                            <option value="b_3" {{($moduleAttributes['bannar_type_en'] == 'b_3') ? 'selected' : '' }}>Style 3</option>
                            <option value="b_4" {{($moduleAttributes['bannar_type_en'] == 'b_4') ? 'selected' : '' }}>Style 4</option>
                        </select>
                    </div>
                </div>
             </div>
            <div class="tab-pane fade" id="nav-ar-bannar" role="tabpanel" aria-labelledby="nav-ar-bannar-tab">
                {{-- Arabic --}}
                
                <div class="form-group row my-3">
                    <label class="col-sm-2 control-label">{{ __('العنوان') }}</label>
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
                <div class="form-group row">
                    <label class="col-sm-2 control-label">{{ __('2العنوان') }}</label>
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
                <div class="form-group row">
                    <label class="col-sm-2 control-label">
                        {{ __('المحتوي') }}
                        
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
                <div class="form-group row">
                    <div class="col-md-8">
                        <label for="title">Choose Style</label>
                        <select name="mod[{{ $randomKey }}][bannar][bannar_type_ar]" class="form-control">
                            <option value="">Choose Style</option>
                            <option value="b_1" {{($moduleAttributes['bannar_type_ar'] == 'b_1') ? 'selected' : '' }} >Style 1 </option>
                            <option value="b_2" {{($moduleAttributes['bannar_type_ar'] == 'b_2') ? 'selected' : '' }}>Style 2</option>
                            <option value="b_3" {{($moduleAttributes['bannar_type_ar'] == 'b_3') ? 'selected' : '' }}>Style 3</option>
                            <option value="b_4" {{($moduleAttributes['bannar_type_ar'] == 'b_4') ? 'selected' : '' }}>Style 4</option>
                        </select>
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
                        
                            {{-- <label class="custom-file-label" for="image">{{ __('Choose Image') }}</label> --}}
                            <input type="text" class="form-control" name="mod[{{ $randNumModule }}][bannar][image]" id="image">
                            {{-- <input type="hidden" class="file-image-value" name="mod[{{ $randNumModule }}][bannar][image]" value=""> --}}
                      
                        @if ($errors->has('image'))
                            <p class="text-danger"> {{ $errors->first('image') }} </p>
                        @endif
                    </div>
                </div>
                <div class="tab-pane fade show active" id="nav-en-bannar"  role="tabpanel" aria-labelledby="nav-en-bannar-tab">
                    {{--English--}}
                   
                    <div class="form-group row my-3">
                        <label class="col-sm-2 control-label">{{ __('Title') }}</label>
                        
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="mod[{{ $randNumModule }}][bannar][title]" placeholder="{{ __('Title') }}" >
                            @if ($errors->has('title'))
                                <p class="text-danger"> {{ $errors->first('title') }} </p>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 control-label">{{ __('Title2') }}</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="mod[{{ $randNumModule }}][bannar][title]" placeholder="{{ __('Title2') }}" >
                            @if ($errors->has('title'))
                                <p class="text-danger"> {{ $errors->first('title') }} </p>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 control-label">{{ __('Content') }}</label>
                        <div class="col-sm-10">
                            <textarea name="mod[{{ $randNumModule }}][bannar][content]" class="form-control"  rows="3" placeholder="{{ __('Content') }}" ></textarea>
                            @if ($errors->has('content'))
                                <p class="text-danger"> {{ $errors->first('content') }} </p>
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
                    <div class="form-group row">
                        <div class="col-md-8">
                            <label for="title">Choose Style</label>
                            <select name="mod[{{ $randNumModule }}][bannar][bannar_type_en]" class="form-control">
                                <option value="" >Choose Style</option>
                                <option value="b_1" >Style 1 </option>
                                <option value="b_2" >Style 2</option>
                                <option value="b_3" >Style 3</option>
                                <option value="b_4">Style 4</option>
                            </select>
                        </div>
                    </div>
                </div>
                
                <div class="tab-pane fade" id="nav-ar-bannar" role="tabpanel" aria-labelledby="nav-ar-bannar-tab">
                    {{--arabic--}}
                   
                    <div class="form-group row my-3">
                        <label class="col-sm-2 control-label">{{ __('العنوان') }}</label>
                        
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="mod[{{ $randNumModule }}][bannar][ar_title]" placeholder="{{ __('العنوان') }}" >
                            @if ($errors->has('ar_title'))
                                <p class="text-danger"> {{ $errors->first('ar_title') }} </p>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 control-label">{{ __('العنوان2') }}</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="mod[{{ $randNumModule }}][bannar][ar_title_2]" placeholder="{{ __('العنوان2') }}" >
                            @if ($errors->has('ar_title_2'))
                                <p class="text-danger"> {{ $errors->first('ar_title_2') }} </p>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 control-label">{{ __('المحتوي') }}</label>
                        <div class="col-sm-10">
                            <textarea name="mod[{{ $randNumModule }}][bannar][ar_content]" class="form-control"  rows="3" placeholder="{{ __('المحتوي') }}" ></textarea>
                            @if ($errors->has('ar_content'))
                                <p class="text-danger"> {{ $errors->first('ar_content') }} </p>
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
                    <div class="form-group row">
                        <div class="col-md-8">
                            <label for="title">Choose Style</label>
                            <select name="mod[{{ $randNumModule }}][bannar][bannar_type_ar]" class="form-control">
                                <option value="" >Choose Style</option>
                                <option value="b_1" >Style 1 </option>
                                <option value="b_2" >Style 2</option>
                                <option value="b_3" >Style 3</option>
                                <option value="b_4">Style 4</option>
                            </select>
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