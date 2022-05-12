<div class="card">
    @php
        $randNumModule = \Illuminate\Support\Str::random(10);
    @endphp
    <div class="card-header toggle-open-close-module">
        <i class="fas fa-times icon-delete"></i>
        Title
        <i class="minimize-module fas fa-chevron-down"></i>
    </div>
    <div class="card-body" style="display: none">
        @if(\Illuminate\Support\Str::contains(\Illuminate\Support\Facades\Route::getCurrentRoute()->getActionName(), 'edit'))
            <div class="form-group row">
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
            <div class="form-group row">
                <label class="col-sm-2 control-label">{{ __('Paragraph') }}<span class="text-danger">*</span></label>
                <div class="col-sm-10">
                    <textarea
                        name="mod[{{ $randomKey }}][title_paragraph][paragraph]"
                        placeholder="{{ __('paragraph') }}"
                        class="form-control"
                        rows="3"
                    >{{ $moduleAttributes['paragraph'] }}</textarea>
                    @if ($errors->has('paragraph'))
                        <p class="text-danger"> {{ $errors->first('paragraph') }} </p>
                    @endif
                </div>
            </div>
            <div class="form-group row">
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
                                        name="mod[{{ $randomKey }}][title_paragraph][red_button][text]"
                                        value="{{  isset($moduleAttributes['red_button']['name']) ? $moduleAttributes['red_button']['text'] : '' }}"
                                        placeholder="Red Button Text"
                                        class="form-control"
                                        type="text"
                                    />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="red-button-url">
                                    <input
                                        name="mod[{{ $randomKey }}][title_paragraph][red_button][url]"
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
                    <span class="text-danger">*</span>
                </label>
                <div class="col-sm-10">
                    <div class="yellow-button-text-url">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="yellow-button-text">
                                    <input
                                        name="mod[{{ $randomKey }}][title_paragraph][yellow_button][text]"
                                        value="{{  isset($moduleAttributes['yellow_button']['name']) ? $moduleAttributes['yellow_button']['text'] : '' }}"
                                        placeholder="Yellow Button Text"
                                        class="form-control"
                                        type="text"
                                    />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="yellow-button-url">
                                    <input
                                        name="mod[{{ $randomKey }}][title_paragraph][yellow_button][url]"
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
            <div class="form-group row">
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
            <div class="form-group row">
                <label class="col-sm-2 control-label">{{ __('Paragraph') }}<span class="text-danger">*</span></label>
                <div class="col-sm-10">
                    <textarea
                        name="mod[{{ $randNumModule }}][title_paragraph][paragraph]"
                        placeholder="{{ __('paragraph') }}"
                        class="form-control"
                        rows="3"
                    ></textarea>
                    @if ($errors->has('paragraph'))
                        <p class="text-danger"> {{ $errors->first('paragraph') }} </p>
                    @endif
                </div>
            </div>
            <div class="form-group row">
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
                                        name="mod[{{ $randNumModule }}][title_paragraph][red_button][text]"
                                        placeholder="Red Button Text"
                                        class="form-control"
                                        type="text"
                                    />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="red-button-url">
                                    <input
                                        name="mod[{{ $randNumModule }}][title_paragraph][red_button][url]"
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
                    <span class="text-danger">*</span>
                </label>
                <div class="col-sm-10">
                    <div class="yellow-button-text-url">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="yellow-button-text">
                                    <input
                                        name="mod[{{ $randNumModule }}][title_paragraph][yellow_button][text]"
                                        placeholder="Yellow Button Text"
                                        class="form-control"
                                        type="text"
                                    />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="yellow-button-url">
                                    <input
                                        name="mod[{{ $randNumModule }}][title_paragraph][yellow_button][url]"
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